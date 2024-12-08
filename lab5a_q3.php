<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function multiplication($num) {
            $results = array();
            for ($i = 1; $i <= 12; $i++) {
                $results[$i] = $i * $num;
            }
            return $results;
        }

        $multiplier = 5; // Change this value for other multipliers
        $results = multiplication($multiplier);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
            foreach ($results as $i => $answer) {
                echo "<tr>
                        <td>$i</td>
                        <td>$multiplier</td>
                        <td>$answer</td>
                      </tr>";
            }
        ?>
    </table>
</body>
</html>
