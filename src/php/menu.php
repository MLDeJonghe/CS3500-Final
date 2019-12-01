<?php

include 'sessionHandler.php';

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
    <link rel="stylesheet" href="../css/misc.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>[Menu] Bumbu Indonesian Cuisine</title>
</head>

<body>

    <?php
    include 'nav.inc.php';
    include 'orderScript.inc.php';
    ?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="display-4">MENU</p>
                <hr class="my-3 bg-primary">
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-lg-4 mb-3">
                <h2 class="text-uppercase mb-1">About the Menu</h2>
                <hr class="my-1">
                <p>Our menu is packed full of traditional and non-traditional Indonesian dishes that deliver a broad spectrum
                    of authentic flavors. It is our goal to bring you the best flavor for the best price, and we believe we have done
                    just that.
                </p>

                <small>NOTE: Some our dishes are marked with a <span class="badge badge-primary">HOT</span> tag. These dishes are very spicy!</small>
            </div>

            <div class="col-lg-8">
                <div class="jumbotron jubotron-fluid bg-secondary text-light pt-4 pb-4">
                    <div class="row">
                        <div class="col">
                            <h1 class="font-weight-bold">TOP PICKS</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#302">
                                <div class="card bg-light mb-3">
                                    <img src="../images/lamb-satay.jpg" alt="" class="card-img-top header-img ">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p class="m-0 text-primary text-uppercase">Sate Kombinasi</p>
                                            <p class="text-dark">Five skewers of combination satay of chicken, pork and lamb.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#504">
                                <div class="card bg-light mb-3">
                                    <img src="../images/bakmi-babi.jpg" alt="" class="card-img-top header-img ">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p class="m-0 text-primary text-uppercase">Bakmi Kuah Babi</p>
                                            <p class="text-dark">Pork, egg and fresh vegetable in egg noodle soup.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 ">
                            <a href="#403">
                                <div class="card bg-light mb-3">
                                    <img src="../images/nasi-goreng.jpg" alt="" class="card-img-top header-img">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p class="m-0 text-primary text-uppercase">Nasay Goreng</p>
                                            <p class="text-dark">Chicken fried rice mixed with fried noodle, bean sprouts and cabbage.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-primary">
        <div class="row">
            <div class="col">
                <h2>SOUP</h2>
                <ul class="list-group list-group-flush">
                    <?php
                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 200) {
                            echo '
                            <li id="' . $row['dishID'] . '" class="list-group-item pl-0 ">
                                <div class="row justify-content-between align-middle">
                                    <div class="col-sm-2 align-middle">';

                            echo '<p id="item" class="font-weight-bold ">' . $row['item'] . '</p>
                               </div>
                                <div class="col-sm-6"><p>';
                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }
                            echo $row['itemDescription'];
                            echo
                                '</p></div>
                                <div id="price" class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                <div class="col-sm-2 ml-2 float-right" >';

                            if (isset($_SESSION['orderDetails'])) {
                                echo '<button class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#addItemModal' . $row['dishID'] . '">Order</button>
                                    <div class="modal fade" id="addItemModal' . $row['dishID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Add item to order</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Add item to order?</p>
                                                    <div class="row justify-content-between">
                                                    <div class="col-sm-4"><p><strong>' . $row['item'] . '</strong></p></div>
                                                    <div class="col-sm-2"><p>$' . $row['itemPrice'] . '</p></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary" onclick="addItem(' . $row['dishID'] . ')">Add to order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    ';
                            } else {
                                echo '<a href="order.php">
                                        <button class="btn btn-sm btn-primary text-uppercase float-right" >Order</button>
                                        </a>';
                            }

                            echo '</div>
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
                <h2>SAMBAL CHILI SAUCE</h2>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 300 && $row['dishID'] >= 200) {
                            echo '
                                <li id="' . $row['dishID'] . '" class="list-group-item pl-0">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-2">';

                            echo '<p id="item" class="font-weight-bold">' . $row['item'] . '</p>
                                        </div>
                                         <div class="col-sm-6"><p>';
                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }
                            echo $row['itemDescription'];
                            echo
                                '</p></div>
                                         <div id="price" class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                         <div class="col-sm-2 ml-2 float-right" >';

                            if (isset($_SESSION['orderDetails'])) {
                                echo '<button class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#addItemModal' . $row['dishID'] . '">Order</button>
                                    <div class="modal fade" id="addItemModal' . $row['dishID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Add item to order</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Add item to order?</p>
                                                    <div class="row justify-content-between">
                                                    <div class="col-sm-4"><p><strong>' . $row['item'] . '</strong></p></div>
                                                    <div class="col-sm-2"><p>$' . $row['itemPrice'] . '</p></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary" onclick="addItem(' . $row['dishID'] . ')">Add to order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    ';
                            } else {
                                echo '<a href="order.php">
                                        <button class="btn btn-sm btn-primary text-uppercase float-right" >Order</button>
                                        </a>';
                            }

                            echo '</div>
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
                <h2>SATAY</h2>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 400 && $row['dishID'] >= 300) {
                            echo '
                                <li id="' . $row['dishID'] . '" class="list-group-item pl-0">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-2">';

                            echo '<p id="item" class="font-weight-bold">' . $row['item'] . '</p>
                                        </div>
                                         <div class="col-sm-6"><p>';
                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }
                            echo $row['itemDescription'];
                            echo
                                '</p></div>
                                         <div id="price" class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                         <div class="col-sm-2 ml-2 float-right" >';

                            if (isset($_SESSION['orderDetails'])) {
                                echo '<button class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#addItemModal' . $row['dishID'] . '">Order</button>
                                    <div class="modal fade" id="addItemModal' . $row['dishID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Add item to order</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Add item to order?</p>
                                                    <div class="row justify-content-between">
                                                    <div class="col-sm-4"><p><strong>' . $row['item'] . '</strong></p></div>
                                                    <div class="col-sm-2"><p>$' . $row['itemPrice'] . '</p></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary" onclick="addItem(' . $row['dishID'] . ')">Add to order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    ';
                            } else {
                                echo '<a href="order.php">
                                        <button class="btn btn-sm btn-primary text-uppercase float-right" >Order</button>
                                        </a>';
                            }

                            echo '</div>
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
                <h2>RICE PLATES</h2>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 500 && $row['dishID'] >= 400) {
                            echo '
                                <li id="' . $row['dishID'] . '" class="list-group-item pl-0">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-2">';

                            echo '<p id="item" class="font-weight-bold">' . $row['item'] . '</p>
                                        </div>
                                         <div class="col-sm-6"><p>';
                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }
                            echo $row['itemDescription'];
                            echo
                                '</p></div>
                                         <div id="price" class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                         <div class="col-sm-2 ml-2 float-right" >';

                            if (isset($_SESSION['orderDetails'])) {
                                echo '<button class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#addItemModal' . $row['dishID'] . '">Order</button>
                                    <div class="modal fade" id="addItemModal' . $row['dishID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Add item to order</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Add item to order?</p>
                                                    <div class="row justify-content-between">
                                                    <div class="col-sm-4"><p><strong>' . $row['item'] . '</strong></p></div>
                                                    <div class="col-sm-2"><p>$' . $row['itemPrice'] . '</p></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary" onclick="addItem(' . $row['dishID'] . ')">Add to order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    ';
                            } else {
                                echo '<a href="order.php">
                                        <button class="btn btn-sm btn-primary text-uppercase float-right" >Order</button>
                                        </a>';
                            }

                            echo '</div>
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
                <h2>NOODLES</h2>
                <ul class="list-group list-group-flush">
                    <?php

                    $sql = "SELECT * FROM menu";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dishID'] < 600 && $row['dishID'] >= 500) {
                            echo '
                                <li id="' . $row['dishID'] . '" class="list-group-item pl-0">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-2 align-middle">';

                            echo '<p id="item" class="font-weight-bold">' . $row['item'] . '</p>
                                        </div>
                                         <div class="col-sm-6"><p>';
                            if ($row['itemSpice'] == 1) {
                                echo '<span class="badge badge-primary mr-2">HOT</span>';
                            }
                            echo $row['itemDescription'];
                            echo
                                '</p></div>
                                         <div id="price" class="col-sm-1"><p>$' . $row['itemPrice'] . '</p></div>
                                         <div class="col-sm-2 ml-2 float-right" >';

                            if (isset($_SESSION['orderDetails'])) {
                                echo '<button class="btn btn-primary text-uppercase float-right" data-toggle="modal" data-target="#addItemModal' . $row['dishID'] . '">Order</button>
                                    <div class="modal fade" id="addItemModal' . $row['dishID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Add item to order</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Add item to order?</p>
                                                    <div class="row justify-content-between">
                                                    <div class="col-sm-4"><p><strong>' . $row['item'] . '</strong></p></div>
                                                    <div class="col-sm-2"><p>$' . $row['itemPrice'] . '</p></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary" onclick="addItem(' . $row['dishID'] . ')">Add to order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    ';
                            } else {
                                echo '<a href="order.php">
                                        <button class="btn btn-sm btn-primary text-uppercase float-right" >Order</button>
                                        </a>';
                            }

                            echo '</div>
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



</html>