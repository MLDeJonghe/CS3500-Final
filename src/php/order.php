
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/order.css">

    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="">BUMBU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNav" aria-controls="collapsibleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end text-uppercase" id="collapsibleNav">
                    <ul class="navbar-nav justify-content-end text-right ">
                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">Menu</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">About</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <br>
        <h1 class="text-uppercase"><strong>Order Online</strong></h1>
        <br>
        <div class="row justify-content-between">
            <div class="col-md-7 border border-muted rounded shadow-sm">
                <br>
                <form method="POST" action="confirm_order.php">
                    <div class="form-group">
                        <div class="form-row justify-content-start">
                            <div class="col-6-md ">
                                <h2>Order Type</h2>
                            </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-center">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-primary active">
                                    <input name="delivery" type="radio" name="delivery" autocomplete="off">
                                    Delivery
                                </label>
                                <label class="btn btn-lg btn-primary">
                                    <input name="pickup" type="radio" name="pickup" autocomplete="off">
                                    Pick Up
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="form-row justify-content-start">
                            <div class="col-6-md ">
                                <h2>Order Info</h2>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="firstName" class="col-form-label text-nowrap ">First Name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="col-form-label text-nowrap ">Last Name</label>
                                <input type="text" class="form-control" name ="lastName" id="lastName" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="streetAddress1" class="col-form-label text-nowrap ">Address</label>
                                    <input type="text" class="form-control" name="address1" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="streetAddress2" class="col-form-label text-nowrap ">Address 2</label>
                                    <input type="text" class="form-control" name="address2" placeholder="Apartment, suite, floor...">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="city" class="col-form-label ">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
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
                            <div class="form-group col-md-4">
                                <label for="paymentType">Payment Type</label>
                                <select name="paymentType" id="paymentType" class="form-control" aria-placeholder="Payment Type">
                                    <option value="Card">Card</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <input type="submit" class="form-control">
                        </div>
                    </div>
                    <br>

                </form>
            </div>

            <div class="col-md-4 ">
                <div class="row border border-muted rounded shadow-sm">
                    <div class="container">
                        <br>
                        <div class="row justify-content-end">
                            <div class="col-md-12">
                                <h2>Order Details</h2>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-between">
                            <div class="col-md-9">
                                <p>Something about an order</p>
                                <p>Something about an order</p>
                                <p>Something about an order</p>
                                <br>
                                <p>Total:</p>
                            </div>
                            <div class="col-md-3">
                                <p>$7.80</p>
                                <p>$7.80</p>
                                <p>$7.80</p>
                                <br>
                                <p>$38.60</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
            </div>
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo officiis sequi cum quo consectetur?
                Aperiam perferendis ex inventore qui perspiciatis saepe explicabo facilis, repellendus mollitia, totam
                animi, cumque accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore amet inventore nihil quaerat reiciendis
                ea accusamus, molestias dicta, perferendis eum debitis? Iure quas atque sit magni nihil nesciunt odio
                totam?
            </div>

        </div>
    </div>
    
</body>
<br>
<br>
<footer>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="footer_content">
                <p>&#169;2019 Darryl & Mitch WebDev Group</p>
                <div>
                    <p>Icons provided by <a href="https://www.flaticon.com/authors/freepik">Freepik</a></p>
                    <p>Logo designed by <a href="https://www.instagram.com/bailydesigns/?hl=en">Baily McDaniel</a></p>
                    <p>Picture graciously borrowed from <a href="https://themom100.com/recipe/lamb-satay/">this</a>
                        source.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>