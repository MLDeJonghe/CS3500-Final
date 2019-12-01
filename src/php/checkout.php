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

    <title>[CHECKOUT] Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php include 'nav.inc.php'; ?>

    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="display-3">CHECKOUT</p>
                <hr class="my-4 bg-primary">
            </div>
        </div>

        <div class="row justify-content-between mb-4">
            <div class="col-md-12  border border-sm rounded border-muted shadow-sm">
                <ul class="list-group list-group-flush pl-0 mb-3 ">
                    <div class="row pt-3">
                        <div class="col">
                            <p class="h1">ORDER SUMMARY</p>
                            <hr class="my-1 bg-primary">
                        </div>
                    </div>

                    <div class="row justify-content-between h4 mb-0 mt-2 font-weight-bold">

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

        <div class="row justify-content-between mb-4">
            <div class="col-6 border border-muted rounded shadow-sm">
                <form id="paymentForm" action="submit_order.php" method="post" onsubmit="return validateInfo();">
                    <div class="form-group">
                        <div class="row pt-3">
                            <div class="col">
                                <p class="h1">PAYMENT</p>
                                <hr class="my-1 bg-primary">
                            </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-between">
                            <div class="col-6-sm">
                                <p class="h3">Payment Type:</p>
                            </div>

                            <div class="col-6-sm">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-lg btn-primary " name="radioButton">
                                        <input name="paymentType" type="radio" value="Cash" autocomplete="off">
                                        Cash
                                    </label>
                                    <label class="btn btn-lg btn-primary active" name="radioButton">
                                        <input name="paymentType" type="radio" value="Card" autocomplete="off" checked>
                                        Card
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div id="creditInfo">
                            <div class="form-row">
                                <div class="col-md-9">
                                    <label for="firstName" class="col-form-label text-nowrap ">Card Owner</label>
                                    <input type="text" class="form-control" name="cardOwner" id="cardOwner" placeholder="Firstname Lastname">
                                </div>
                                <div class="col-md-3">
                                    <label for="firstName" class="col-form-label text-nowrap ">Expiration</label>
                                    <input type="text" class="form-control" name="expiration" id="expiration" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-9">
                                    <label for="email" class="col-form-label text-nowrap">Card Number</label>
                                    <input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="#### #### #### ####">
                                </div>
                                <div class="col-sm-3">
                                    <label for="lastName" class="col-form-label text-nowrap ">CVV</label>
                                    <input type="text" class="form-control" name="cvv" id="cvv" placeholder="###">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="streetAddress1" class="col-form-label text-nowrap ">Billing Address</label>
                                        <input id="billingAddress" type="text" class="form-control" name="billingAddress" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="streetAddress2" class="col-form-label text-nowrap ">Address 2 (Optional)</label>
                                        <input id="address2" type="text" class="form-control" name="address2" placeholder="Apartment, suite, floor...">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="city" class="col-form-label ">City</label>
                                        <input id="city" type="text" name="city" id="city" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="city" class="col-form-label ">State</label>
                                        <select name="state" id="state" class="form-control">
                                            <option value="AK">AK</option>
                                            <option value="AL">AL</option>
                                            <option value="AR">AR</option>
                                            <option value="AZ">AZ</option>
                                            <option value="CA">CA</option>
                                            <option value="CO">CO</option>
                                            <option value="CT">CT</option>
                                            <option value="DC">DC</option>
                                            <option value="DE">DE</option>
                                            <option value="FL">FL</option>
                                            <option value="GA">GA</option>
                                            <option value="HI">HI</option>
                                            <option value="IA">IA</option>
                                            <option value="ID">ID</option>
                                            <option value="IL">IL</option>
                                            <option value="IN">IN</option>
                                            <option value="KS">KS</option>
                                            <option value="KY">KY</option>
                                            <option value="LA">LA</option>
                                            <option value="MA">MA</option>
                                            <option value="MD">MD</option>
                                            <option value="ME">ME</option>
                                            <option value="MI">MI</option>
                                            <option value="MN">MN</option>
                                            <option value="MO">MO</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="NC">NC</option>
                                            <option value="ND">ND</option>
                                            <option value="NE">NE</option>
                                            <option value="NH">NH</option>
                                            <option value="NJ">NJ</option>
                                            <option value="NM">NM</option>
                                            <option value="NV">NV</option>
                                            <option value="NY">NY</option>
                                            <option value="OH">OH</option>
                                            <option value="OK">OK</option>
                                            <option value="OR">OR</option>
                                            <option value="PA">PA</option>
                                            <option value="RI">RI</option>
                                            <option value="SC">SC</option>
                                            <option value="SD">SD</option>
                                            <option value="TN">TN</option>
                                            <option value="TX">TX</option>
                                            <option value="UT">UT</option>
                                            <option value="VA">VA</option>
                                            <option value="VT">VT</option>
                                            <option value="WA">WA</option>
                                            <option value="WI">WI</option>
                                            <option value="WV">WV</option>
                                            <option value="WY">WY</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="city" class="col-form-label ">Zip</label>
                                        <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <input type="submit" id="submitButton" value="PLACE ORDER" class="form-control btn-primary mt-2 mx-auto">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-5">
                <div class="row border border-sm rounded border-muted shadow-sm">
                    <div class="col">

                        <div class="row pt-3">
                            <div class="col">
                                <p class="h1">ORDER INFO</p>
                                <hr class="my-1 bg-primary">
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-5 text-right">
                                        <h5 class="text-right font-weight-bold text-uppercase">Order Type:</h5>
                                    </div>
                                    <div class="col-7 text-left">
                                        <p class="h5  "><?php echo $_SESSION['orderDetails']['orderType'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-5 text-right">

                                        <h5 class="text-right font-weight-bold text-uppercase">Name:</h5>
                                    </div>
                                    <div class="col-7 text-left">

                                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['firstName'] . ' ' . $_SESSION['orderDetails']['lastName']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-5 text-right">
                                        <h5 class="text-right font-weight-bold text-uppercase">Email:</h5>

                                    </div>
                                    <div class="col-7 text-left">

                                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['email'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                       
                        
                        <div class="row ">
                            <div class="col">
                                <div class="row">
                                    <div class="col-5 text-right">
                                        
                                        <h5 class="text-right font-weight-bold text-uppercase">Phone:</h5>
                                    </div>
                                    <div class="col-7 text-left">
                                        <p class="h5 text-left"><?php echo $_SESSION['orderDetails']['phoneNumber']; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php 
                        if($_SESSION['orderDetails']['orderType'] == "Delivery"){

                        }
                        echo"
                        <div class=\"row pb-3\">
                            <div class=\"col\">
                                <div class=\"row\">
                                    <div class=\"col-5 text-right\">
                                        <h5 class=\"text-right font-weight-bold text-uppercase\">Address:</h5>
                                        
                                    </div>
                                    <div class=\"col-7 text-left\">";

                                        echo'
                                        <p class="h5 text-left">'. $_SESSION['orderDetails']['orderLocation']['address1'].' '.$_SESSION['orderDetails']['orderLocation']['city'].', '.$_SESSION['orderDetails']['orderLocation']['state'].' '.$_SESSION['orderDetails']['orderLocation']['zip'].'</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ';?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>