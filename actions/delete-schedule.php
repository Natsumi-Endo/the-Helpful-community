<?php
include "../classes/counseling-schedule.php";

    $id = $_GET['id']; 

    $counseling = new Counseling();
    $counseling->deleteSchedule($id);
?>