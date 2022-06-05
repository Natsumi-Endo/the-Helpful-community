<?php
require "database.php";

class Counseling extends Database {

    public function getAllCounselingSchedule() {
        $sql = "SELECT `counseling_schedule` .`id`, `reserved_date`, `counseling_date`, `username` FROM `counseling_schedule` LEFT OUTER JOIN `accounts` ON `counseling_schedule`.`account_id` = `accounts`.`id`;";

        if($result = $this->conn->query($sql)){
            return $result;
        } else {
            die("Error retrieving all counseling_schedule: " . $this->connconn->error);
        }
    }
}



?>