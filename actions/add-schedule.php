<?php
include "../classes/counseling-schedule.php";

$counseling_date = $_POST['counseling_date'];
$place = $_POST['place'];
$counseling_time_from = $_POST['counseling_time_from'];
$counseling_time_to = $_POST['counseling_time_to'];

$counseling = new Counseling();
$counseling->addCounselingSchedule($counseling_date, $place, $counseling_time_from, $counseling_time_to);
?>