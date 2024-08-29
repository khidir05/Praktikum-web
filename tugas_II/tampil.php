<?php
require_once 'database.php';
require_once 'report.php';

$database = new Database();
$db = $database->getConnection();

$report = new Report($db);

if($_POST) {
    $report->id_report = uniqid();
    $report->id_warnings = $_POST['id_warnings'];
    $report->id_gpas = $_POST['id_gpas'];
    $report->id_guidance = $_POST['id_guidance'];
    $report->id_achievements = $_POST['id_achievements'];
    $report->id_student_withdrawals = $_POST['id_student_withdrawals'];
    $report->id_tuition_arrears = $_POST['id_tuition_arrears'];
    $report->report_date = date('Y-m-d');
    $report->status = 'Pending';
    $report->has_acc_academic_advisor = 0;
    $report->has_acc_head_of_program = 0;

    if($report->create()) {
        echo "Report was created.";
    } else {
        echo "Unable to create report.";
    }
}
?>

<form action="create_report.php" method="post">
    <input type="text" name="id_warnings" placeholder="Warning ID" required>
    <input type="text" name="id_gpas" placeholder="GPA ID" required>
    <input type="text" name="id_guidance" placeholder="Guidance ID" required>
    <input type="text" name="id_achievements" placeholder="Achievements ID" required>
    <input type="text" name="id_student_withdrawals" placeholder="Withdrawals ID" required>
    <input type="text" name="id_tuition_arrears" placeholder="Tuition Arrears ID" required>
    <button type="submit">Create Report</button>
</form>
