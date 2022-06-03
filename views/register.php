<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>Register</title>
</head>

<body>
<nav class="navbar navbar-expand-lg index-nave">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">
                    <i class="fa-solid fa-hands-holding-heart"></i>Helpful Community
                    </a>
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-icon">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-icon">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Pricing</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-2">
                                <a href="../views/login.php" class="nav-link login" id="login-show">Log in</a>
                            </li>

                            <li class="nav-item bg-primary">
                                <a href="../views/register.php" class="nav-link text-white">Sign up</a>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center text-primary">REGISTER</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="50" required autofocus>
                        
                        <label for="email" class="form-label">Email</label>
                        <label for="tel" class="form-label">Tel</label>
                        <input type="tel" name="tel" id="tel" class="form-control mb-2" required>
                        
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-2" minlength="100" required>

                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm-password" class="form-control mb-5" minlength="100" required>

                        <button type="submit" class="btn btn-primary w-100">REGISTER</button>
                        <p class="text-center mt-3 small">Registered already? <a href="../views/login.php">Log in.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include "../views/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>