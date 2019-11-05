<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $paymentType = $_POST['paymentType'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
}
?>

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
        <h1 class="text-uppercase"><strong><?php echo $fName . " " . $lName; ?></strong>, confirm your order!</h1>
        <br>
        <div class="row justify-content-between">
            <div class="col-md-7 border border-muted rounded shadow-sm">
                <br>
                <div>
                    <p>First Name: <?php echo $fName; ?></p>
                    <p>Last Name: <?php echo $lName; ?></p>
                    <p>Address1 : <?php echo $address1; ?></p>
                    <p>Address2: <?php echo $address2; ?></p>
                    <p>City: <?php echo $city; ?></p>
                    <p>State: <?php echo $state; ?></p>
                    <p>Zip: <?php echo $zip; ?></p>
                    <p>Payment Type: <?php echo $paymentType; ?></p>
                </div>

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


<?php




?>