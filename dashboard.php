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
    <?php 
        include 'Template/header.php'; 
        include 'Database/connection.php'; // Include your connection file

        // Fetch title from the database
        $title = "Default Title"; // Default title if the database fetch fails
        $query = "SELECT title FROM dashboard LIMIT 1";
        $result = mysqli_query($connection, $query);
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $title = $row['title'];
        }
    ?>
    <section>

        <!-- First Container - Text vynn0.dev & subtitle -->
        <div class="myheader container d-flex flex-column justify-content-center align-items-center p-5 my-5 mx-auto"
            style="min-height: 50vh;">
            <h1 class="no-select"><?php echo htmlspecialchars($title); ?></h1>
            <p class="no-select">Welcome to my page.</p>
        </div>

    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>
