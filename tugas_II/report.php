<?php
class Report {
    private $conn;
    private $table_name = "reports";

    public $id_report;
    public $id_warnings;
    public $id_gpas;
    public $id_guidance;
    public $id_achievements;
    public $id_student_withdrawals;
    public $id_tuition_arrears;
    public $report_date;
    public $status;
    public $has_acc_academic_advisor;
    public $has_acc_head_of_program;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new report
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET id_report=:id_report, id_warnings=:id_warnings, id_gpas=:id_gpas, id_guidance=:id_guidance, id_achievements=:id_achievements, id_student_withdrawals=:id_student_withdrawals, id_tuition_arrears=:id_tuition_arrears, report_date=:report_date, status=:status, has_acc_academic_advisor=:has_acc_academic_advisor, has_acc_head_of_program=:has_acc_head_of_program";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_report", $this->id_report);
        $stmt->bindParam(":id_warnings", $this->id_warnings);
        $stmt->bindParam(":id_gpas", $this->id_gpas);
        $stmt->bindParam(":id_guidance", $this->id_guidance);
        $stmt->bindParam(":id_achievements", $this->id_achievements);
        $stmt->bindParam(":id_student_withdrawals", $this->id_student_withdrawals);
        $stmt->bindParam(":id_tuition_arrears", $this->id_tuition_arrears);
        $stmt->bindParam(":report_date", $this->report_date);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":has_acc_academic_advisor", $this->has_acc_academic_advisor);
        $stmt->bindParam(":has_acc_head_of_program", $this->has_acc_head_of_program);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Retrieve all reports
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Update an existing report
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET status=:status, has_acc_academic_advisor=:has_acc_academic_advisor, has_acc_head_of_program=:has_acc_head_of_program WHERE id_report=:id_report";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":has_acc_academic_advisor", $this->has_acc_academic_advisor);
        $stmt->bindParam(":has_acc_head_of_program", $this->has_acc_head_of_program);
        $stmt->bindParam(":id_report", $this->id_report);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Delete a report
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_report = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_report);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
