<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body> 
    <div class="bg-image"></div>
    <?php include 'Template/header.php'; ?>
    <section>
        <div class="container my-5">
            <h2 class="text-center mb-5 text-light">My Projects</h2>
            <?php 
            include 'Database/connection.php';

            $query = "SELECT id, title, summary, image_path FROM article";
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="d-flex justify-content-center align-items-center mb-5">';
                    echo '    <div class="card" style="width: 18rem;">';
                    echo '        <img class="card-img-top" src="' . htmlspecialchars($row['image_path']) . '" alt="Card image cap">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                    echo '            <p class="card-text">' . htmlspecialchars($row['summary']) . '</p>';
                    echo '            <a href="article-content.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="text-center text-light">No projects found.</p>';
            }
            mysqli_free_result($result);
            mysqli_close($connection);
            ?>
    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>