<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <style>
td, th {
  border: 1px solid #999;
  padding: 0.5rem;
}
body {
    background: linear-gradient(90deg, rgba(11,200,204,1) 0%, rgba(209,195,195,1) 82%);
    font-family: verdana;
}
.box {
    width: 500px;
    margin: auto;
    text-align: center;
}
</style>

    <title>CRUD Jesper</title>
 
</head>
<body>
    <div class="box">
        Add
    <form method="post" action="create.php">
        <input type="text" placeholder="name" name="name"><br>
        <input type="text" placeholder="surname" name="surname"><br>
        <input type="number" placeholder="year" name="year" value="2000"><br>
        <input type="submit" name="submit" value="Verzenden"><br>
    </form><br>

    <?php include 'read.php'; ?>
</div>    

</body>
</html>
