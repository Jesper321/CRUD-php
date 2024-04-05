<!DOCTYPE html>
<html lang="en">
<head><style>
    body {
        background: linear-gradient(90deg, rgba(11,200,204,1) 0%, rgba(209,195,195,1) 82%);
    }
    .box2 {
        text-align: center;
        margin-top: 250px;
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating </title>
</head>
<body>
    
<?php
print_r($_POST);
// die;

include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$select = $conn->query("SELECT * FROM tabellen WHERE id=$id");
$row = $select->fetch();

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $country = $_POST['surname'];
    $jaartal = $_POST['year'];

    $query = "UPDATE tabellen SET name = '".$name."',
                            surname = '".$surname."',
                            year = '".$year."'
                            WHERE id=$id";
// die($query);
    $stmt = $conn->prepare($query);

    $stmt->execute();

    header("location: index.php");
}
?>

<form method="post" class="box2">
    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" onkeyup="checkInput(this)"><br>
    <input type="text" name="surname" value="<?php echo $row['surname']; ?>"><br>
    <input type="number" name="year" value="<?php echo $row['year']; ?>"><br>
    <input type="submit" name="submit" value="Updaten"><br>
</form>
</body>
</html>