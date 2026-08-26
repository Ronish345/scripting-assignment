<?php

$name = trim($_POST["name"] ?? "");
$roll = trim($_POST["roll"] ?? "");
$course = trim($_POST["course"] ?? "");
$semester = trim($_POST["semester"] ?? "");

if ($name == "" || $roll == "" || $course == "" || $semester == "") {

    echo "All fields are required.";

} elseif (!is_numeric($semester)) {

    echo "Semester must be a number.";

} elseif ($semester < 1 || $semester > 8) {

    echo "Semester must be between 1 and 8.";

} else {

    echo "Student registered successfully!";

}

?>
