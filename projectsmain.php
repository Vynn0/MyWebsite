<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body> 
    <div class="bg-image"></div>
    <?php include 'Template/header.php'; ?>
    <section>
        <div class="container my-5">
            <h2 class="text-center mb-4 text-light">My Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-12 mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="assets/project1.jpg" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <h5 class="card-title">Project Title 1</h5>
                                <p class="card-text">Brief description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="d-flex align-items-center">
                                    <!-- Star Rating -->
                                    <div class="rating">
                                        <span class="star" data-value="1">&#9733;</span>
                                        <span class="star" data-value="2">&#9733;</span>
                                        <span class="star" data-value="3">&#9733;</span>
                                        <span class="star" data-value="4">&#9733;</span>
                                        <span class="star" data-value="5">&#9733;</span>
                                    </div>
                                    <span class="ml-2" id="ratingValue1">0</span> <!-- Display selected rating -->
                                </div>
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
                                <div class="d-flex align-items-center">
                                    <!-- Star Rating -->
                                    <div class="rating">
                                        <span class="star" data-value="1">&#9733;</span>
                                        <span class="star" data-value="2">&#9733;</span>
                                        <span class="star" data-value="3">&#9733;</span>
                                        <span class="star" data-value="4">&#9733;</span>
                                        <span class="star" data-value="5">&#9733;</span>
                                    </div>
                                    <span class="ml-2" id="ratingValue1">0</span> <!-- Display selected rating -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>