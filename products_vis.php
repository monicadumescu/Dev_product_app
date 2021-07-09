<?php
//<!doctype html>
//<html lang="en">
$servername="localhost";
$username="monica";
$password="123456";
$dbname="php_training";
$connection=new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error)
    die("Connection failed:" . $connection->connect_error);

echo '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Devcademy</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/custom_theme.css">

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">
        <img src="images/logo.svg" widh="100%" height="50"/>
    </a>
    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item">
                <button class="nav-link dropdown-toggle bg-transparent btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="pt-5 pb-5 ">
     </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <h2>Our products<h2><br>';
                $sql="select * from products ";
$result=$connection->query($sql);
if($result->num_rows>0)
{
    while ($row = $result->fetch_assoc()) {
        echo 'Label:' . $row['label'] . 'Description' . $row['description']  . PHP_EOL, '<input type="button" value="Add to favorites">';
    }
}
else
{
    echo "0 results";
}
       echo '</div>

    </div> <!-- /container -->

</div>

<footer class="container mt-5">
    <p>&copy; Company 2017-2021</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>';
?>