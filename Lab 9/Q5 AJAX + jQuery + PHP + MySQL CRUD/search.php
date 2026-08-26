<?php

include "db.php";

$name = $_POST["name"] ?? "";

$sql = "SELECT * FROM students
        WHERE name LIKE ?
        ORDER BY id DESC";

$stmt = mysqli_prepare($conn, $sql);

$name = "%" . $name . "%";

mysqli_stmt_bind_param($stmt, "s", $name);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {

    echo "<tr><td colspan='6'>No students found.</td></tr>";

} else {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["roll_no"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["course"]) . "</td>";
        echo "<td>" . $row["semester"] . "</td>";

        echo "<td>
        <button onclick='editStudent(" . $row["id"] . ")'>Edit</button>
        <button onclick='deleteStudent(" . $row["id"] . ")'>Delete</button>
        </td>";

        echo "</tr>";
    }
}

?>
