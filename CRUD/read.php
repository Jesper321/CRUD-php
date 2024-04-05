<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        i {
            color: darkblue;
        }
        td {
            color: darkblue;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
 

<?php
$query = $conn->query("SELECT * FROM tabellen");
?>

<table>
    <tr>
        <th>name</th>
        <th>surname</th>   
        <th>year</th>
        <th>update</th>
        <th >verwijderen</th>
    </tr>
    
    <?php while ($row = $query->fetch()) { ?>

    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['year']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"><i class='bx bx-pencil'></i></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class='bx bx-trash'></i></a></td>
    </tr>
    <?php } ?>
    
</table>
</body>
</html>