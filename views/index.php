
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

    <title>Helpful Community</title>
</head>
<body>
<?php
    include "index-menu.php";
?>
       <div class="title-wrapper">
                <h2 class="title mx-auto">
                    <span>Please join us <br>if you feel lonely.</span>             
                </h2>
                <a href="../views/register.php" class="btn btn-start btn-lg btnd text-white">Get started</a>   
                
            </div>
        
        <div class="signup-modal-wrapper">
        <div class="modal">
        <div id="signup-form">
            <h2>Sign up with email</h2>
            <form action="#">
            <input class="form-control" type="text" placeholder="Email">
            <input class="form-control" type="password" placeholder="Password">
            <div id="submit-btn">Sign up</div>
            </form>
        </div>
    </div>
    </div>
    
    <!--modal-->
    <!-- <div class="login-modal-wrapper login-modal" id="login-modal">
    
    <div class="modal">
      <div id="login-form">
        <h2>Log in with email</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="Email">
          <input class="form-control" type="password" placeholder="password">
          <div id="submit-btn">Log in</div>
        </form>
      </div>
    </div>
    
  </div> -->

    </div>
    
<?php
    include "../views/footer.php";
?>

    
<script src="../assets/styles/script.js"></script>  
</body>
</html>