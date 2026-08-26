<?php

include "db.php";

$result = mysqli_query(
    $conn,
    "SELECT * FROM students ORDER BY id DESC"
);

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
