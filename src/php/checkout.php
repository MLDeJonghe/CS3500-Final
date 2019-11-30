<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <title>Document</title>
</head>

<body>
    <?php
    include 'sessionHandler.php';
    include 'nav.inc.php';
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                    <p class="display-3">ORDER SUMMARY</p>
                <hr class="my-4 bg-primary">
                <div class="row justify-content-between border border-sm rounded border-muted">
                    <div class="col-5-sm ">
                        <div class="row justify-content-between">
                            <div class="col-5">
                                <h3><strong>Order Name:</strong></h3>
                            </div>
                            <div class="col-5-sm text-right">
                                <h3><?php echo $_SESSION['orderDetails']['firstName'] . ' ' . $_SESSION['orderDetails']['lastName']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-5-sm ">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <h3><strong>Email:</strong></h3>
                            </div>
                            <div class="col-lg-5 text-right">
                                <h3><?php echo $_SESSION['orderDetails']['email']?></h3>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <h3><strong>Phone:</strong></h3>
                            </div>
                            <div class="col-lg-5 text-right">
                                <h3><?php echo $_SESSION['orderDetails']['phoneNumber'] ; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-7 border border-muted rounded shadow-sm ">
                <form action="submit_order.php" method="post">
                    <div class="form-group">
                        <div class="form-row justify-content-start">
                            <div class="col-sm">
                                <br>
                                <p class="h1">Payment Method</p2>
                            </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-center">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-primary active" name="radioButton">
                                    <input name="paymentType" id="isDelivey" type="radio" value="Cash" autocomplete="off" checked>
                                    Cash
                                </label>
                                <label class="btn btn-lg btn-primary" name="radioButton">
                                    <input name="paymentType" type="radio" value="Card" autocomplete="off">
                                    Card
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-start">
                            <div class="col-md-6 ">
                                <h2>Order Info</h2>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-6-md">
                                <label for="firstName" class="col-form-label text-nowrap ">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                            </div>
                            <div class="col-m=6d">
                                <label for="lastName" class="col-form-label text-nowrap ">Last Name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email" class="col-form-label text-nowrap">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="email@email.com">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="col-form-label text-nowrap ">Phone Number</label>
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="(###)-###-####">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="streetAddress1" class="col-form-label text-nowrap ">Address</label>
                                    <input id="address1" type="text" class="form-control" name="address1" placeholder="Street Address">
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


                        <div class="form-row">
                            <input type="submit" id="submitButton" value="BEGIN ORDER" class="form-control btn-primary mt-4 mx-auto">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 border border-muted rounded shadow-sm ">

            </div>
        </div>
    </div>
</body>

</html>