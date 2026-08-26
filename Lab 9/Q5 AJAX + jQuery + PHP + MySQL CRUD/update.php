<?php

include "db.php";

$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$roll = $_POST["roll"] ?? "";
$course = $_POST["course"] ?? "";
$semester = $_POST["semester"] ?? "";

$sql = "UPDATE students
SET name=?, roll_no=?, course=?, semester=?
WHERE id=?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssii",
    $name,
    $roll,
    $course,
    $semester,
    $id
);

if (mysqli_stmt_execute($stmt)) {
    echo "Student updated successfully.";
} else {
    echo "Error updating student.";
}

?>
