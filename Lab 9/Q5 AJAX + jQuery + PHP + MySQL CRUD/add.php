<?php

include "db.php";

$name = $_POST["name"] ?? "";
$roll = $_POST["roll"] ?? "";
$course = $_POST["course"] ?? "";
$semester = $_POST["semester"] ?? "";

if ($name == "" || $roll == "" || $course == "" || $semester == "") {

    echo "All fields are required.";
    exit;

}

$sql = "INSERT INTO students
(name, roll_no, course, semester)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssi",
    $name,
    $roll,
    $course,
    $semester
);

if (mysqli_stmt_execute($stmt)) {
    echo "Student added successfully.";
} else {
    echo "Error adding student.";
}

?>
