<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery</title>
    <style>
        .card-img-top {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="bg-image"></div>
    <?php include 'Template/header.php'; ?>
    <section>
        <div class="container my-5">
            <h2 class="text-center text-light mb-4">Gallery of Cool Images</h2>
            
            <?php 
            include 'Database/connection.php';

            $query = "SELECT id, name, image_path FROM gallery";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="row">';
                while ($row = mysqli_fetch_assoc($result)) {
                    // Set a default image if image_path is null
                    $imagePath = $row['image_path'] ?? 'assets/default.jpg';

                    echo '<div class="col-md-6 mb-4">';
                    echo '    <div class="card h-100">';
                    echo '        <img src="' . htmlspecialchars($imagePath) . '" class="card-img-top" alt="' . htmlspecialchars($row['name']) . '">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo '<p class="text-center text-light">No blog posts found.</p>';
            }
            ?>
        </div>
    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>