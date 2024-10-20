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

        <!-- Text vynn0.dev & subtitle -->
        <div class="myheader container d-flex flex-column justify-content-center align-items-center p-5 my-5 mx-auto"
            style="min-height: 50vh;">
            <h1>vynn0.dev</h1>
            <p>Welcome to my page.</p>
        </div>

<!-- Second container -->
    <div class="contents container-fluid text-white d-flex flex-column shadow-transition">
        <h1 class="text-center my-5 text-light">Where do you want to go?</h1>
        <div class="row justify-content-center mb-5">
            
            <!-- First Card -->
            <div class="col-md-4 d-flex justify-content-center mb-2">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="card-body text-decoration-none">
                        <h5 class="card-title">Projects</h5>
                        <p class="card-text">Want a quick preview over my projects? Click me!</p>
                    </a>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-md-4 d-flex justify-content-center mb-2">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="card-body text-decoration-none">
                        <h5 class="card-title">Blog</h5>
                        <p class="card-text">Want to see my blog? Click me instead!</p>
                    </a>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-md-4 d-flex justify-content-center mb-2">
                <div class="card" style="width: 18rem;">
                    <a href="#" class="card-body text-decoration-none">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Hm, something more serious? Click here instead so I could contact you</p>
                    </a>
                </div>
            </div>

        </div>
    </div>

    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>