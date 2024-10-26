<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <title>About</title>
    <style>
        .mycontainer {
            background-color: rgba(0, 0, 0, 0.90);
            box-shadow: 0px 0px 4px rgba(255, 255, 255, 0.7);
        }
    </style>
</head>

<body>
    <div class="bg-image"></div>
    <?php include 'Template/header.php'; ?>
    <div class="mycontainer container text-light my-4 py-4 px-4">
        <h1><u>About:</u></h1>

        <?php 
        include 'Database/connection.php';

        // Query to select the content from the content table
        $query = "SELECT content FROM about";  // Adjust the table name if necessary
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            // Fetch the content
            $row = mysqli_fetch_assoc($result);
            echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';
        } else {
            echo '<p>No content available.</p>';
        }
        ?>
    </div>

    <?php include 'Template/footer.php'; ?>
</body>

</html>
