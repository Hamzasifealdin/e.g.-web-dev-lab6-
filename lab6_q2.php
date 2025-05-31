<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
        $students = [
            "John" => "BIT",
            "Aisyah" => "BIS",
            "Ravi" => "BCS",
            "Mei Ling" => "BIT",
            "Ali" => "BCS"
        ];
    ?>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Course</th>
        </tr>
        <?php
            foreach($students as $name => $course) {
                echo "<tr><td>$name</td><td>$course</td></tr>";
            }
        ?>
    </table>
</body>
</html>