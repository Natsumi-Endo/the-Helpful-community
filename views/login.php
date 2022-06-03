<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
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
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                        <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">
                        <button type="submit" class="btn btn-primary w-100">LOG IN</button>
                    </form>
                    <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
                </div>
            </div>
        </div>
    </div>
<?php
    include "../views/footer.php";
?>
</body>
</html>