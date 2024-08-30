<?php
/*Create a database class that aims to create a basic view according to instructions number 1, 2, and 3
"1. Create an OOP-based View, by retrieving data from the MySQL database
2. Use the _construct as a link to the database
3. Apply encapsulation according to the logic of the case study"
*/
class database {
 //Set initial attributes to store values ​​from the database
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "siwali_jkb";
    var $koneksi = "";
 //create a contract to enter values ​​from the database and complete task no.2 to make a __concrete
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }
    //shown the data from database following task no.1 by taking data using SELECT or memilih ---paraam-- FROM --dari--, or memilih data apa yang diambil dari tabel...
    function tampil_data_reports() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM reports");
        while($row = mysqli_fetch_array($data)) { // As long as $row still has value, it will be changed according to another method 
            $row['has_acc_academic_advisor'] = $this->getAccStatus($row['has_acc_academic_advisor']); // $this->getAccStatus = Take a value from functiongetAccStatus below and the value will put on parameters name ($row['has_acc_academic_advisor'])
            $row['has_acc_head_of_program'] = $this->getAccStatus($row['has_acc_head_of_program']);
            $hasil[] = $row; // put $row value into array
        }
        return $hasil;
    }
 //create a method to change a value of $row has_acc_ ... by implement encapsulation, task number 3
    function getAccStatus($status) {
        return $status == 1 ? "Sudah" : "Belum";
    }
    //shown the data from database following task no.1 by taking data using SELECT or memilih ---paraam-- FROM --dari--, or memilih data apa yang diambil dari tabel...

    function tampil_data_gpa_details(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM gpa_details");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    //shown the data from database following task no.1 by taking data using SELECT or memilih ---paraam-- FROM --dari--, or memilih data apa yang diambil dari tabel...

    function tampil_data_gpas(){
        $data = mysqli_query($this->koneksi,"SELECT * FROM gpas");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}
/*
class CombinedDatabase is task no.4
from this class we will take data from all of table
this class is derived getAccStatus from database
*/
class CombinedDatabase extends database {

    // Method for combbine all of data
    function tampil_data_combined() {
        // The $query wiil let take all of data from reports table by combining another  table like gpas, gpas_detail and thrown (didn't pick) the data that has available on reports table
        $query = "
            SELECT 
                reports.*, 
                gpa_details.semester, 
                gpa_details.semester_gpa,
                gpas.cumulative_gpa
            FROM reports
             JOIN gpa_details ON reports.id_gpas = gpa_details.id_gpa
             JOIN gpas ON reports.id_gpas = gpas.id_gpa
        ";

        $data = mysqli_query($this->koneksi, $query);
        while($row = mysqli_fetch_array($data)) {
            // Because there is colomn has acc, we made is following method above and take the $this->getAccStatus From databse derived
            $row['has_acc_academic_advisor'] = $this->getAccStatus($row['has_acc_academic_advisor']);
            $row['has_acc_head_of_program'] = $this->getAccStatus($row['has_acc_head_of_program']);
            $hasil[] = $row;
        }
        return $hasil;
    }
}
class Student extends CombinedDatabase {
 //method for taking data from class CombineDatabase that was collected
    function getData() {
        $data = $this->tampil_data_combined();
        $filteredData = [];

        foreach ($data as $row) {
            $filteredData[] = [
                'id_gpa' => $row['id_gpas'],
                'cumulative_gpa' => $row['cumulative_gpa']
            ];
        }

        return $filteredData;
    }
}

class AcademicAdvisor extends CombinedDatabase {
 //method for taking data from class CombineDatabase that was collected

    function getData() {
        $data = $this->tampil_data_combined();
        $filteredData = [];

        foreach ($data as $row) {
            $filteredData[] = [
                'id_student' => $row['id_student'],
                'id_gpa' => $row['id_gpas'],
                'id_scholarship' => $row['id_scholarship'],
                'id_achievements' => $row['id_achievements']
            ];
        }

        return $filteredData;
    }
}
// instance obect that will apply on html below
$db = new database();
$combine = new CombinedDatabase();
$student = new Student();
$academicAdvisor = new AcademicAdvisor();

$data_student = $student->getData();
$data_academic_advisor = $academicAdvisor->getData();
$data_report = $db->tampil_data_reports();
$data_gpa_detail = $db->tampil_data_gpa_details();
$data_gpas = $db->tampil_data_gpas();
$data_combined = $combine->tampil_data_combined();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>Reports Views</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Report</th>
        <th>ID Warning</th>
        <th>ID GPAs</th>
        <th>ID Guidance</th>
        <th>ID Achievements</th>
        <th>ID Student Withdrawals</th>
        <th>ID Tuition Fee</th>
        <th>Report Date</th>
        <th>Status</th>
        <th>Academic Advisor Permition</th>
        <th>Head of Program Permition</th>
    </tr>
    <?php 
    $no = 1;// for nuber repitition
    foreach($data_report as $row){ //implements data report as $row that was patterned
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_report']; ?></td>
            <td><?php echo $row['id_warnings']; ?></td>
            <td><?php echo $row['id_gpas']; ?></td>
            <td><?php echo $row['id_guidance']; ?></td>
            <td><?php echo $row['id_achievements']; ?></td>
            <td><?php echo $row['id_student_withdrawals']; ?></td>
            <td><?php echo $row['id_tuition_arrears']; ?></td>
            <td><?php echo $row['report_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['has_acc_academic_advisor']; ?></td>
            <td><?php echo $row['has_acc_head_of_program']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
<h2>GPA Details Views</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID GPA Details</th>
        <th>ID GPA</th>
        <th>Semester</th>
        <th>GPA's Semester</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_gpa_detail as $row){ //implements data gpa detail as $row as pattern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_gpa_detail']; ?></td>
            <td><?php echo $row['id_gpa']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['semester_gpa']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
<h2>GPAs Views</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID GPA</th>
        <th>ID Student</th>
        <th>Cumulative GPA</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_gpas as $row){ //implements data gpas as $row that was pattern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_gpa']; ?></td>
            <td><?php echo $row['id_student']; ?></td>
            <td><?php echo $row['cumulative_gpa']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
<h2>Combined Data Views</h2>
<p>it's aim to show implementation of inheritance</p>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Report</th>
        <th>ID Warning</th>
        <th>ID GPAs</th>
        <th>ID Guidance</th>
        <th>ID Achievements</th>
        <th>ID Student Withdrawals</th>
        <th>ID Tuition Fee</th>
        <th>Report Date</th>
        <th>Status</th>
        <th>Academic Advisor Permition</th>
        <th>Head of Program Permition</th>
        <th>Semester</th>
        <th>Semester GPA</th>
        <th>Cumulative GPA</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_combined as $row){ //implements data combbined as $row that was pattern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_report']; ?></td>
            <td><?php echo $row['id_warnings']; ?></td>
            <td><?php echo $row['id_gpas']; ?></td>
            <td><?php echo $row['id_guidance']; ?></td>
            <td><?php echo $row['id_achievements']; ?></td>
            <td><?php echo $row['id_student_withdrawals']; ?></td>
            <td><?php echo $row['id_tuition_arrears']; ?></td>
            <td><?php echo $row['report_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['has_acc_academic_advisor']; ?></td>
            <td><?php echo $row['has_acc_head_of_program']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['semester_gpa']; ?></td>
            <td><?php echo $row['cumulative_gpa']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
<h2>Student Views</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID GPA</th>
        <th>Cumulative GPA</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_student as $row){ //implements data student as $row that was pattern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_gpa']; ?></td>
            <td><?php echo $row['cumulative_gpa']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>

<h2>Academic Advisor Views</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Student</th>
        <th>ID GPA</th>
        <th>ID Scholarship</th>
        <th>ID Achievements</th>
    </tr>
    <?php 
    $no = 1;
    foreach($data_academic_advisor as $row){ //implements data academic as $row that was pattern
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['id_student']; ?></td>
            <td><?php echo $row['id_gpa']; ?></td>
            <td><?php echo $row['id_scholarship']; ?></td>
            <td><?php echo $row['id_achievements']; ?></td>
        </tr>
        <?php 
    }
    ?>
</table>
</body>
</html>
