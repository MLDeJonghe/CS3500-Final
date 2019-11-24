<?php

if (!isset($conn)) {
    $mysqlServer = "sql9.freemysqlhosting.net";
    $username = "sql9310996";
    $password = "Ibe6kjHdmm";
    $db = "sql9310996";

    $conn = mysqli_connect($mysqlServer, $username, $password, $db);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">

    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>

    <?php include 'nav.inc.php' ?>
    <br>
    <div class="container">

        <div class="jumbotron bg-dark text-light">
            <h1 class="display-3 ">MENU</h1>
            <p class="lead">Welcome to our menu! Below you'll find all of our dishes.</p>
            <hr class="my-4">
            <p>Some our dishes are marked with a <span class="badge badge-primary">HOT</span> tag. These dishes are very spicy!</p>
        </div>

        <div class="row">
            <div class="col">
                <h3>SOUP</h3>
                <ul class="list-group list-group-flush">
                    <?php
                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 200) {
                            echo '
                                <li class="list-group-item">
                                <div class="row justify-content-between">
                                <div class="col-sm-2"><p class="font-weight-bold">';

                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }

                            echo $row['item'] . '</p>
                               </div>
                                <div class="col-sm-6"><p>' . $row['itemDescription'] . '</p></div>
                                <div class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                <div class="col-sm-2 ml-2 float-right" ><button class="btn btn-primary">Add to Order</button></div>
                                </div>
                                </li>
                                ';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <br>
        <hr class="bg-primary">
        <br>
        <div class="row">
            <div class="col">
                <h3>SAMBAL CHILI SAUCE</h3>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 300 && $row['dishID'] >= 200) {
                            echo '
                                    <li class="list-group-item">
                                    <div class="row justify-content-between">
                                    <div class="col-sm-2"><p class="font-weight-bold">';

                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }

                            echo $row['item'] . '</p>
                                    </div>
                                    <div class="col-sm-6"><p>' . $row['itemDescription'] . '</p></div>
                                    <div class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                    <div class="col-sm-2 ml-2 float-right" ><button class="btn btn-primary">Add to Order</button></div>
                                    </div>
                                    </li>
                                    ';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <br>
        <hr class="bg-primary">
        <br>
        <div class="row">
            <div class="col">
                <h3>SATAY</h3>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 400 && $row['dishID'] >= 300) {
                            echo '
                                    <li class="list-group-item">
                                    <div class="row justify-content-between">
                                    <div class="col-sm-2"><p class="font-weight-bold">';

                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }

                            echo $row['item'] . '</p>
                                    </div>
                                    <div class="col-sm-6"><p>' . $row['itemDescription'] . '</p></div>
                                    <div class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                    <div class="col-sm-2 ml-2 float-right" ><button class="btn btn-primary">Add to Order</button></div>
                                    </div>
                                    </li>
                                    ';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <br>
        <hr class="bg-primary">
        <br>
        <div class="row">
            <div class="col">
                <h3>RICE PLATES</h3>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 500 && $row['dishID'] >= 400) {
                            echo '
                                    <li class="list-group-item">
                                    <div class="row justify-content-between">
                                    <div class="col-sm-2"><p class="font-weight-bold">';

                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }

                            echo $row['item'] . '</p>
                                    </div>
                                    <div class="col-sm-6"><p>' . $row['itemDescription'] . '</p></div>
                                    <div class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                    <div class="col-sm-2 ml-2 float-right" ><button class="btn btn-primary">Add to Order</button></div>
                                    </div>
                                    </li>
                                    ';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <br>
        <hr class="bg-primary">
        <br>
        <div class="row">
            <div class="col">
                <h3>NOODLES</h3>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 600 && $row['dishID'] >= 500) {
                            echo '
                                    <li class="list-group-item">
                                    <div class="row justify-content-between">
                                    <div class="col-sm-2"><p class="font-weight-bold">';

                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }

                            echo $row['item'] . '</p>
                                    </div>
                                    <div class="col-sm-6"><p>' . $row['itemDescription'] . '</p></div>
                                    <div class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                    <div class="col-sm-2 ml-2 float-right" ><button class="btn btn-primary">Add to Order</button></div>
                                    </div>
                                    </li>
                                    ';
                        }
                    }

                    mysqli_close($conn);
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <br>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/menu_script.js"></script>
<script src="../js/nav_script.js"></script>

</html>