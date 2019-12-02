<?php include 'sessionHandler.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php include 'validate_order.js.php'; ?>

    <title>[THANKYOU] Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php include 'nav.inc.php'; ?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="display-4">YOUR ORDER HAS BEEN PLACED!</p>
                <hr class="my-3 bg-primary">
            </div>
        </div>

        <div class="row justify-content-between mb-4">
            <div class="col-md-12  border border-sm rounded border-muted shadow-sm">
                <ul class="list-group list-group-flush pl-0 mb-3 ">
                    <div class="row pt-3">
                        <div class="col">
                            <h2 class="">ORDER SUMMARY</h2>
                            <hr class="my-1 bg-primary">
                        </div>
                    </div>

                    <div class="row justify-content-between h3 mb-0 mt-2 font-weight-bold">

                        <div class="col-3 ">
                            ITEM
                        </div>
                        <div class="col-3 text-left">
                            PRICE
                        </div>
                    </div>

                    <?php include 'checkout_order_display.php'; ?>
                </ul>
            </div>
        </div>

        <div class="row justify-content-between mb-4  border border-sm rounded border-muted shadow-sm">

            <div class="col">
                <div class="row pt-3">
                    <div class="col">
                        <h2>ORDER INFO</h2>
                        <hr class="my-1 bg-primary">
                    </div>
                </div>


                <div class="row pt-3">
                    <div class="col-2 text-right">
                        <h5 class="text-right font-weight-bold text-uppercase">Order Type:</h5>
                    </div>
                    <div class="col-2 text-left">
                        <p class="h5  "><?php echo $_SESSION['orderDetails']['orderType'] ?></p>
                    </div>

                </div>

                <hr>

                <div class="row">
                    <div class="col-2 text-right">

                        <h5 class="text-right font-weight-bold text-uppercase">Name:</h5>
                    </div>
                    <div class="col-2 text-left">

                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['firstName'] . ' ' . $_SESSION['orderDetails']['lastName']; ?></p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-2 text-right">
                        <h5 class="text-right font-weight-bold text-uppercase">Email:</h5>

                    </div>
                    <div class="col-2 text-left">

                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['email'] ?></p>
                    </div>

                </div>
                <hr>

                <div class="row">
                    <div class="col-2 text-right">
                        <h5 class="text-right font-weight-bold text-uppercase">Phone:</h5>
                    </div>
                    <div class="col-2 text-left">
                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['phoneNumber']; ?></p>
                    </div>
                </div>
                <hr>
                <?php
                if ($_SESSION['orderDetails']['orderType'] == "Delivery") {

                    echo "
                            <div class=\"row pb-3\">
                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col-2 text-right\">
                                            <h5 class=\"text-right font-weight-bold text-uppercase\">Address:</h5>
                                            
                                        </div>
                                        <div class=\"col-2 text-left\">";

                    echo '
                                            <p class="h5 text-left">' . $_SESSION['orderDetails']['orderLocation']['address1'] . ' ' . $_SESSION['orderDetails']['orderLocation']['city'] . ', ' . $_SESSION['orderDetails']['orderLocation']['state'] . ' ' . $_SESSION['orderDetails']['orderLocation']['zip'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>

<?php session_destroy();?>