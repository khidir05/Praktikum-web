<?php
class GPA {
    private $conn;
    private $table_name = "gpas";

    public $id_gpa;
    public $id_student;
    public $cumulative_gpa;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new GPA record
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET id_gpa=:id_gpa, id_student=:id_student, cumulative_gpa=:cumulative_gpa";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_gpa", $this->id_gpa);
        $stmt->bindParam(":id_student", $this->id_student);
        $stmt->bindParam(":cumulative_gpa", $this->cumulative_gpa);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Retrieve all GPA records
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    // Update an existing GPA record
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET cumulative_gpa=:cumulative_gpa WHERE id_gpa=:id_gpa";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":cumulative_gpa", $this->cumulative_gpa);
        $stmt->bindParam(":id_gpa", $this->id_gpa);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Delete a GPA record
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_gpa = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_gpa);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}