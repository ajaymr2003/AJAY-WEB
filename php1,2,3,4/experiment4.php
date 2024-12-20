<html>
<head>
<title>CRICKT TEAM</title>
</head>
<body>
<h1>INDIAN CRICKT TEAM</h1>
<?php
// PHP block to define arrays
$name = ["Rohit Sharma", "Virat Kohli", "Shubman Gill", "KL Rahul", "Hardik Pandya", "Jasprit Bumrah", "Mohammed Shami", "Ravindra Jadeja", "Ruturaj Gaikwad", "Prithvi Shaw", "Shreyas Iyer"
];
$role = ["Batsman (C)", "Batsman", "Batsman", "Batsman", "All-rounder", "Bowler", "Bowler", "All-rounder", "Batsman", "Batsman", "Batsman"
];
?>

<table border="1">
    <tr>
        <th>No.</th>
        <th>Player Name</th>
        <th>Role</th>
    </tr>
    <?php
    // PHP block to generate table rows
    for ($i = 0; $i < count($name); $i++) {
        // Check if the name and role are not empty
        if (!empty($name[$i]) && !empty($role[$i])) {
            echo "<tr><td>" . ($i + 1) . "</td><td>" . $name[$i] . "</td><td>" . $role[$i] . "</td></tr>";
        }
    }
    ?>
</table>
</body>
</html>
