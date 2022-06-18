<?php
    session_start();
    include "../classes/user.php";
 
?>
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

    <title>Add Schedule</title>
</head>
<body>
<?php
    include "../views/admin-menu.php";
?>
    <div class="container">
    <div class="card-header  w-50 mx-auto">
            <h2 class="card-title h4 mb-0">Add New Counseling Schedule</h2>

    </div>
        <div class="card-body w-50 mx-auto">
            <form action="../actions/add-schedule.php" method="post">
                <label for="counseling_date" class="form-label small">Counseling date</label>
                <input type="date" name="counseling_date" id="counseling_date" class="form-control mb-2" required autofocus>

                <label for="place" class="form-label small">Place</label>
                <input type="text" name="place" id="place" class="form-control mb-2">
            

                <label for="time" class="form-label small">Start time ~</label>
                <label for="time" class="form-label small">End time</label>
                <div class="input-group mb-2">
                    
                    <input type="time" name="counseling_time_from" id="counseling_time_from" class="form-control" required autofocus>
                    <input type="time" name="counseling_time_to" id="counseling_time_to" class="form-control" required autofocus>
                </div>

                <label for="account_id" class="form-label small">User</label>
                <select name="account_id" id="account_id" class="form-select mb-5">
                    <option value="" hidden>Select user</option>
                    <?php
                        $user = new User();
                        $result = $user->getAllAccountId();
                        while($users_row = $result-> fetch_assoc()) {
                           
                            echo "<option value='".$users_row['id']. "'>".$users_row['id']."</option>";
                        
                        }
                    ?>
                </select>


                <a href="../views/counseling-schedule.php" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary px-5" name="btn_add">Add</button>

            </form>
        </div>
    </div>
    
<?php
    include "../views/footer.php";
?>

    
<script src="../assets/styles/script.js"></script>  
</body>
</html>