<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="CSS/styles.css" rel="stylesheet"> -->
    <title>Dashboard</title>
    <style>
        /* Custom styles for blog images */
        .card-img-top {
            width: 100%;          /* Make the image fill the card's width */
            height: 500px;       /* Set a fixed height for the image */
            object-fit: cover;    /* Maintain aspect ratio and cover the area */
        }
    </style>
</head>

<body>
    <div class="bg-image"></div>
    <?php include 'Template/header.php'; ?>
    <section>
        <div class="container my-5">
            <h2 class="text-center text-light mb-4">My Blog</h2>
            
            <?php 
            include 'Database/connection.php';

            $query = "SELECT id, title, summary, image_path FROM blog";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="row">';
                while ($row = mysqli_fetch_assoc($result)) {
                    // Set a default image if image_path is null
                    $imagePath = $row['image_path'] ?? 'assets/default.jpg';

                    echo '<div class="col-md-6 mb-4">';
                    echo '    <div class="card h-100">';
                    echo '        <img src="' . htmlspecialchars($imagePath) . '" class="card-img-top" alt="' . htmlspecialchars($row['title']) . '">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '            <p class="card-text">' . htmlspecialchars($row['summary']) . '</p>';
                    echo '            <a href="blog-content.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>';
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
