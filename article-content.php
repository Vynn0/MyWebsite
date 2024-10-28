<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/styles.css" rel="stylesheet">
    <title>View Project</title>
    <style>
        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .cardcontainer {
            background-color: rgba(0, 0, 0, 0.85);
            box-shadow: 0px 0px 4px rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <?php
    include 'Database/connection.php';

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    $query = "SELECT title, content, image_path FROM article WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("Content not found.");
    }
    ?>

    <div class="bg-image"></div>
    <?php include 'Template/projectheader.php'; ?>
    <div class="cardcontainer container my-5">
        <h1 class="text-center text-light my-4 pt-4"><?php echo htmlspecialchars($row['title']); ?></h1>
        <?php if (!empty($row['image_path'])): ?>
            <div class="image-container" style="text-align: center; margin-bottom: 20px;">
                <img src="<?php echo htmlspecialchars($row['image_path']); ?>" class="img-fluid" style="max-width: 80%; height: 500px; display: inline-block;" alt="<?php echo htmlspecialchars($row['title']); ?>">
            </div>
        <?php endif; ?>
        <div class="text-light py-4"><?php echo nl2br(htmlspecialchars($row['content'])); ?></div>
    </div>
</body>
</html>