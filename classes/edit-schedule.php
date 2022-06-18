<?php
require "database.php";

class EditCounseling extends Database {


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

    public function getAllAccountId() {
        $sql = "SELECT id FROM accounts";

        if($result = $this->conn->query($sql)){
            return $result;
        } else {
            die("Error retrieving all users: " . $this->connconn->error);
        }
    

    }
    
}



?>