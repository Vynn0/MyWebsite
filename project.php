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
            <h2 class="text-center mb-5 text-light">My Projects</h2>

            <!-- First Card - Boostrap 5 -->
            <div class="d-flex justify-content-center align-items-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="Assets/Mittlemazigste.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fantasy Map Project</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            <!-- Second Card - Boostrap 5 -->
            <div class="d-flex justify-content-center align-items-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="Assets/Mittlemazigste-Culture.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fantasy Map Project - Subcultures</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php include 'Template/footer.php'; ?>
</body>

</html>