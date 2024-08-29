<?php
class GPADetail {
    private $conn;
    private $table_name = "gpa_details";

    public $id_gpa_detail;
    public $id_gpa;
    public $semester;
    public $semester_gpa;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new GPA detail
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET id_gpa_detail=:id_gpa_detail, id_gpa=:id_gpa, semester=:semester, semester_gpa=:semester_gpa";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_gpa_detail", $this->id_gpa_detail);
        $stmt->bindParam(":id_gpa", $this->id_gpa);
        $stmt->bindParam(":semester", $this->semester);
        $stmt->bindParam(":semester_gpa", $this->semester_gpa);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Retrieve all GPA details
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Update an existing GPA detail
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET semester_gpa=:semester_gpa WHERE id_gpa_detail=:id_gpa_detail";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":semester_gpa", $this->semester_gpa);
        $stmt->bindParam(":id_gpa_detail", $this->id_gpa_detail);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Delete a GPA detail
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_gpa_detail = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_gpa_detail);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
