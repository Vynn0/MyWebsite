<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <?php include 'Template/header.php'; ?>
    <section>
        <div class="container my-5">
            <h2 class="text-center mb-4">My Blog</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-12 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="assets/project1.jpg" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <h5 class="card-title">How does the mind works?</h5>
                                <p class="card-text">Brief description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Project 2 -->
                <div class="col-12 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="assets/project1.jpg" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <h5 class="card-title">Project Title 1</h5>
                                <p class="card-text">Brief description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>