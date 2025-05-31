<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 8;
        $width = 5;
        $area = calculateArea($length, $width);

        echo "<p>The area of a rectangle with length $length and width $width is: <strong>$area</strong></p>";
    ?>
</body>
</html>