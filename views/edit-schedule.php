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
    var_dump($_GET['id']);
    $id = $_GET['id']; 
    $counseling = new EditCounseling;

    $scheduleList = $counseling->getCounselingScheduleById($id);
    $counselingInfo = $counseling->fetch_assoc();
    var_dump($counselingInfo); 
?>
    <div class="container">
    <div class="card-header bg-success text-white">
            <h2 class="card-title h4 mb-0">Edit Counseling Schedule</h2>

        </div>
        <div class="card-body">
            <form action="../actions/edit-schedule.php" method="post">
                <input type="hidden" name="id" value="<?= $counselingInfo['id'] ?>">

                <label for="counseling_date" class="form-label small">Counseling date</label>
                <input type="date" name="counseling_date" id="counseling_date" class="form-control mb-2" value="<?= $counselingInfo['counseling_date'] ?>" required autofocus>

                <label for="place" class="form-label small">Place</label>
                <input type="text" name="place" id="place" class="form-control mb-2" value="<?= $counselingInfo['place'] ?>">
            
                <label for="time" class="form-label small">time</label>
                <div class="input-group mb-2">
                    
                    <input type="time" name="counseling_time_from" id="counseling_time_from" class="form-control" value="<?= $counselingInfo['counseling_time_from'] ?>" required autofocus>
                    <input type="time" name="counseling_time_to" id="counseling_time_to" class="form-control" value="<?= $counselingInfo['counseling_time_to'] ?>" required autofocus>
                </div>

                <label for="reserved_date" class="form-label small">Reserved date</label>
                <input type="date" name="reserved_date" id="reserved_date" class="form-control mb-2" value="<?= $counselingInfo['reserved_date'] ?>" required autofocus>

                <label for="account_id" class="form-label small">Account id</label>
                <select name="account_id" id="account_id" class="form-select mb-5">
                    <option value="" hidden>Select user</option>
                    <?php

                        $result = $counseling->getAllAccountId();
                        while($users_row = $result-> fetch_assoc()) {
                           
                            if ($users_row['id'] == $counselingInfo['account_id']) {
                                echo "<option value='".$users_row['id']. "' selected>".$users_row['id']."</option>";
                            } else {
                                echo "<option value='".$users_row['id']. "'>".$users_row['id']."</option>";
                            }
                        
                        }
                    ?>
                </select>

                <label for="theme" class="form-label small">Theme</label>
                <select name="account_id" id="account_id" class="form-select mb-5">
                    <option value="" hidden>Select Theme</option>
                    <option value="1"
                    <?php
                        if ($counselingInfo['theme'] == '1') {
                            echo 'selected';
                        }
                    ?>
                    >Career</option>
                    <option value="2"
                    <?php
                        if ($counselingInfo['theme'] == '2') {
                            echo 'selected';
                        }
                    ?>
                    >Health</option>
                    <option value="3"
                    <?php
                        if ($counselingInfo['theme'] == '3') {
                            echo 'selected';
                        }
                    ?>
                    >Others</option>
                    
                </select>

                <textarea name="others" id="others" cols="30" rows="10" class="form-control mb-2"><?= $counselingInfo['others'] ?></textarea>

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