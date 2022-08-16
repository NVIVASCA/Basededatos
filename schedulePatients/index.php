<?php
include ('config/config.php');
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title> calendario </title>
<link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
    <ul class="navbar-nav">
        <li class="nav item">
            <a class="nav-link" href="#"> ver calendario</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= ROOT ?>/patients/add.php"> registrar paciente </a>
        </li>
    </ul>
</nav>
 <div class="container">
    <h1 class="text-center"> calendario</h1>
</div>
</body>

</html>



