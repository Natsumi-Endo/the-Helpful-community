<?php

    session_start();
    include "../classes/counseling-schedule.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fontawsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/styles/style.css">
    <title>counseling-schedule</title>
</head>
<body>
<?php
    include "../views/admin-menu.php";
?>
<div class="container">
    <div class="row text-center my-3">
        <div class="col">
            <a href="../views/add-schedule.php" class="btn bg-primary text-white mx-auto px-5 pe-5"><i class="fas fa-plus-circle"></i>
            Add Schedule</a>
        </div>
        <div class="col">
            <a href="../views/add-post.php" class="btn bg-primary text-white mx-auto px-5 pe-5"><i class="fa-solid fa-folder-plus"></i>
            Add Post</a>
        </div>
        <div class="col">
            <a href="../views/add-tweet.php" class="btn bg-primary text-white mx-auto px-5 pe-5"><i class="fa-solid fa-folder-plus"></i>
            Add Tweet</a>
        </div>
        
    </div>
    <!--Table-->
    <h2>ALL SCHEDULE</h2>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th class="text-uppercase">Counseling date</th>
                        
                        <th class="text-uppercase">counseling time from</th>
                        <th class="text-uppercase">counseling time to</th>
                        <th class="text-uppercase">Reserved date</th>
                        <th class="text-uppercase">User</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $counseling = new Counseling;

                    $scheduleList = $counseling->getAllCounselingSchedule();

            if ($scheduleList && $scheduleList-> num_rows>0) {
                
               while ($row = $scheduleList->fetch_assoc()) { 
            ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["counseling_date"] ?></td>
                        <td><?= $row["counseling_time_from"] ?></td>
                        <td><?= $row["counseling_time_to"] ?></td>
                        <td class="fw-bold"><?= $row["reserved_date"] ?></td>
                        
                        <td><?= $row["username"] ?></td>
                        <td>
                            <a href="../views/edit-schedule.php?id=<?=$row["id"]?>" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="../actions/delete-schedule.php?id=<?=$row["id"]?>" onclick="return confirm('Are you sure you wanto to delete?');" class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                        </a>

                        </td>
                    </tr>
                    <?php
                    }

                 } else {
                     ?>
                     <tr>No schedule</tr>
                    <?php
                 }
                 
                ?>
                </tbody>
            </table>
        </div>
    </div>


    
</div>
<?php
    include "../views/footer.php";
?>
    <!--Don't forget  if you use toggle button-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>