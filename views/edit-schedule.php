<?php

    session_start();
    include "../classes/edit-schedule.php";
    
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

    <title>Edit Schedule</title>
</head>
<body>
<?php
    include "../views/admin-menu.php";

    $id = $_GET['id']; 
    $counseling = new Counseling;

                    $scheduleList = $counseling->getCounselingScheduleById($id);
?>
    <div class="container">
    <div class="card-header bg-success text-white">
            <h2 class="card-title h4 mb-0">Edit Counseling Schedule</h2>

        </div>
        <div class="card-body">
            <form action="../actions/add-schedule.php" method="post">
                <label for="counseling_date" class="form-label small">Counseling date</label>
                <input type="date" name="counseling_date" id="counseling_date" class="form-control mb-2" required autofocus>

                <label for="place" class="form-label small">place</label>
                <input type="text" name="place" id="place" class="form-control mb-2">
            
                <label for="time" class="form-label small">time</label>
                <div class="input-group mb-2">
                    
                    <input type="time" name="counseling_time_from" id="counseling_time_from" class="form-control" required autofocus>
                    <input type="time" name="counseling_time_to" id="counseling_time_to" class="form-control" required autofocus>
                </div>

                <label for="reserved_date" class="form-label small">Reserved date</label>
                <input type="date" name="reserved_date" id="reserved_date" class="form-control mb-2" required autofocus>

                <label for="account_id" class="form-label small">Account id</label>
                <input type="text" name="account_id" id="account_id" class="form-control mb-2" required autofocus>

                <label for="theme" class="form-label small">Theme</label>
                <select name="theme" id="theme" class="form-select mb-5" required>
                <option value="" hidden>Select Section</option>
            
                <label for="others" class="form-label small">Others</label>
                <textarea name="others" id="others" cols="30" rows="10" class="form-control mb-2" required></textarea>


                <a href="../views/counseling-schedule.php" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-success px-5" name="btn_save">Save</button>

            </form>
        </div>
    </div>
    
<?php
    include "../views/footer.php";
?>

    
<script src="../assets/styles/script.js"></script>  
</body>
</html>