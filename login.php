<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/styles.css" rel="stylesheet">
    <title>Login</title>
</head>
    
<body>
    <form action="Database/loginDB.php" method="POST">
        <div class="bg-image"></div>
        <?php include 'Template/header.php'; ?>
        
        <div class="container login-container d-flex flex-column text-light justify-content-center align-items-start p-5 my-5 mx-auto border" style="max-width: 600px;">
            <!-- Name -->
            <h1>Login:</h1>
            <div class="mb-3 mt-3 w-100">
                <label class="form-label">Name:</label>
                <input class="form-control" placeholder="Input Name" type="text" id="username" name="username">
            </div>

            <!-- Password -->
            <div class="mb-3 w-100">
                <label class="form-label">Password:</label>
                <input class="form-control" placeholder="Password" type="password" id="password" name="password">
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between w-100">
                <input class="btn btn-primary" type="submit" value="Submit">
                <input class="btn btn-danger" type="reset" value="Reset">
            </div>

            <!-- Message for registration -->
            <div class="mt-3">
                <p class="text-light">Not yet registered? <a href="signup.php" class="text-primary">Sign up now!</a></p>
            </div>
            <?php
            // Check if the user is logged in as admin
            if (!isset($_SESSION['admin'])) {
                echo "You're already logged in!";
            }
            ?>
        </div>
    </form>
</body>


</html>