<?php
require "database.php";

class Counseling extends Database {

    public function getAllCounselingSchedule() {
        $sql = "SELECT `counseling_schedule` .`id`, `reserved_date`, `counseling_date`, `username` ,`counseling_time_from`, `counseling_time_to` FROM `counseling_schedule` LEFT OUTER JOIN `accounts` ON `counseling_schedule`.`account_id` = `accounts`.`id`;";

        if($result = $this->conn->query($sql)){
            return $result;
        } else {
            die("Error retrieving all counseling_schedule: " . $this->connconn->error);
        }
    }

    public function addCounselingSchedule($counseling_date, $place, $counseling_time_from, $counseling_time_to, $account_id) {
        $sql = "INSERT INTO `counseling_schedule`(`reserved_date`, `counseling_date`, `account_id`, `theme`, `others`, `place`, `counseling_time_from`, `counseling_time_to`) VALUES (SYSDATE(),'$counseling_date',$account_id,null,null,'$place','$counseling_time_from','$counseling_time_to')";

        if ($this->conn->query($sql)) {
            header ("location: ../views/counseling-schedule.php");
            exit;
        } else {
            die("Error adding new counseling schedule: " . $this->conn->error);
        }


    }

    public function getCounselingScheduleById($id) {
        $sql = "SELECT `id`, `reserved_date`, `counseling_date`, `account_id`, `theme`, `others`, `place`, `counseling_time_from`, `counseling_time_to` FROM `counseling_schedule` WHERE id = $id";

        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1) {
                header("location: ../views/edit-schedule.php");
                exit;
            } else {
                echo "<p class='text-danger'>Counseling Schedule not found.</p>"; 
            }
        } else {
            die("Error with the query: " . $this->conn->error);
        }
    }

    public function deleteSchedule($id) {

        $sql = "DELETE FROM counseling_schedule WHERE id= $id";
        if($this->conn->query($sql)) {
            header("location: ../views/counseling-schedule.php");
            exit;
        } else {
            die ("Error delete the counseling-schedule: ". $conn->error);
        }
    }
    
}



?>