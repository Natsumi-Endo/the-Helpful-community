
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <title>Admin Menu</title>
</head>
<body>
<nav class="navbar navbar-expand-lg index-nave bg-primary mb-1">
    <div class="container-fluid">
        <a href="../views/counseling-schedule.php" class="navbar-brand">
                    <img src="..\assets\images\logo.jpg" alt="logo" class="header-logo">
                    </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-icon">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-icon">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../views/tweets.php" class="nav-link active text-white">Tweets</a>
                </li>

                <li class="nav-item">
                    <a href="../views/posts.php" class="nav-link text-white">Posts</a>
                </li>
                <li class="nav-item">
                    <a href="../views/couseling-schedule.php" class="nav-link text-white">counseling</a>
                </li>
                <li class="nav-item">
                    <a href="../views/users.php" class="nav-link text-white">users</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a href="../views/mypage.php" class="nav-link text-white" id="login-show">My Page</a>
                </li>

                <li class="nav-item bg-primary">
                    <a href="../actions/logout.php" class="nav-link text-white signup-show">Log out</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
 
<script src="../assets/styles/script.js"></script>  
</body>
</html>