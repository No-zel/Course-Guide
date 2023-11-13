<?php
session_start();

//DATABASE CONNECTION
$dbservername = "group5-admin.cwcul3ylqcmq.ap-southeast-1.rds.amazonaws.com";
$dbusername = "admin";
$dbname = "UserAccounts";
$dbpassword = "ilovecookies696969";
//CONNETION
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    $sql = "SELECT USERNAME, ACTION, datatime FROM UsersLog";
    $result = $conn->query($sql);
    $logData = [];
    while ($row = $result->fetch_assoc()) {
    $logData[] = [
        "user" => $row['USERNAME'],
        "activity" => $row['ACTION'],
        "date" => $row['datatime'] 
    ];
}


// Sample DB
// $logData = [
//     ["user" => "Bob1", "activity" => "login", "date" => "2023-11-13 08:30:00"],
//     ["user" => "Bob2", "activity" => "login", "date" => "2023-11-13 09:15:00"],
//     ["user" => "Bob3", "activity" => "logout", "date" => "2023-11-13 12:45:00"],
//     ["user" => "Bob4", "activity" => "login", "date" => "2023-11-13 08:30:00"],
//     ["user" => "Bob5", "activity" => "login", "date" => "2023-11-13 09:15:00"],
//     ["user" => "Bob6", "activity" => "logout", "date" => "2023-11-13 12:45:00"],
//     ["user" => "Bob7", "activity" => "login", "date" => "2023-11-13 08:30:00"],
//     ["user" => "Bob8", "activity" => "login", "date" => "2023-11-13 09:15:00"],
//     ["user" => "Bob9", "activity" => "logout", "date" => "2023-11-13 12:45:00"],
//     ["user" => "Bob10", "activity" => "login", "date" => "2023-11-13 08:30:00"],
// ];
$maxpage = 5;
$page = isset($_GET['pageindex']) ? intval($_GET['pageindex']):1;

$index = ($page - 1) * $maxpage;

// Get the logs for the current page
$logs = array_slice($logData, $index, $maxpage);

// calculates for the pages
$totalPages = ceil(count($logData) / $maxpage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="../assets/favicon.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log Data</title>
</head>
<body>
<h2>Sample Log History</h2>

<table>
    <tr>
        <th>User</th>
        <th>Activity</th>
        <th>Date</th>
    </tr>

    <?php foreach ($logs as $entry): ?>
        <tr>
            <td><?= $entry['user'] ?></td>
            <td><?= $entry['activity'] ?></td>
            <td><?= $entry['date'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Pagination links -->
<div>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?pageindex=<?= $i ?>"><?= $i ?></a>
    <?php endfor; ?>
    <a href="../Pages/change-pass.php"> changepasspage </a>
</div>
</body>
</html>