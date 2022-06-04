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
    <div style="height:70vh">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <div class="card-header bg-transparent border-0">
                    <h1 class="text-center text-primary">REGISTER</h1>
                </div>
                <div class="card-body">
                <form action="../actions/register.php" method="post">
                    <div class="row">
                        <div class="col-6">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="50" required autofocus>

                        </div>
                    

                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control mb-2" required>

                        </div>
                        <div class="col">
                        <label for="tel" class="form-label">Tel</label>
                        <input type="tel" name="tel" id="tel" class="form-control mb-2" required>
                        </div>
                    </div>
    
                    <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-2" minlength="5" required>               
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm-password" class="form-control mb-5" minlength="5" required>
                    
                        <button type="submit" class="btn btn-primary w-50 mx-auto" >REGISTER</button>
                        <p class="text-center mt-3 small">Registered already? <a href="../views/login.php">Log in.</a></p>
                    </form>
                </div>
            </div>
            <?php
                include "../views/footer.php";
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>