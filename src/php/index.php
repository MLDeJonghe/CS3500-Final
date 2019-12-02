<?php include "sessionHandler.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">
    <link rel="stylesheet" href="../css/misc.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php

    include "nav.inc.php";
    ?>
    <br>
    <div class="container">

        <div class="row">
            <div class="col">
                <p class="display-4">WELCOME!</p>
                <hr class="bg-primary my-3">
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-6 mb-3">
                <h2 class="text-uppercase mb-1">About Bumbu</h2>
                <hr class="my-1">
                <p>Here at Bumbu, we aim to bring our guests the most authentic Indonesian flavors we can.
                    You will be met with traditional Indonesian dishes and the aroma of spices.
                    At Bumbu, we ensure only the highest quality ingredients will be served to our guests.
                    Our restaurants feature an impeccable atmosphere that will bolster your experience and leave you wanting more.
                    Visit us at one of our three Michigan locations today!
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="../images/Bumbu_300-01.png">
            </div>
        </div>
        <hr class="bg-primary">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide"  data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/indonesian-food.jpg" class="d-block w-100" style="max-height:25rem; object-fit:cover;" alt="Food Platter">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/home_bg.jpg" class="d-block w-100" style="max-height:25rem; object-fit:cover;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/bumbu-bali.jpg" class="d-block w-100" style="max-height:25rem; object-fit:cover;" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <hr class="bg-primary">
        <div class="row">
            <div class="col">
                <h2>HEAR FROM OUR GUESTS</h2>
                <hr>
                <div class="row justify-content-between">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-1 ">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0 ">
                                            <p>Had dinner with girl friends. Menu is <strong class="text-primary">outstanding</strong>, something for everyone. Service was awesome and Jason was very accommodating. Will be back definitely!</p>
                                            <footer class="blockquote-footer">Linda <cite title="Source Title">&starf;&starf;&starf;&starf;&starf;</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card  mb-1">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p><strong class="text-primary">The food was fresh</strong>, properly prepared and a great value for the price. We highly recommend it. The breakfast buffet on Sunday was equally as good.</p>
                                            <footer class="blockquote-footer">Fatimah Rose <cite title="Source Title">&starf;&starf;&starf;</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card  mb-1">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p>Blew away all expectations. This is the place to go if you want <strong class="text-primary">authentic</strong> Indonesian cuisine.</p>
                                            <footer class="blockquote-footer">John Smith <cite title="Source Title">&starf;&starf;&starf;&starf;</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-1">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p>It was beautiful, peaceful, and relaxing. <strong class="text-primary">Staff was outstanding</strong>. The restaurant was exceptional along with the hosts and servers.</p>
                                            <footer class="blockquote-footer">Kyle Tan <cite title="Source Title">&starf;&starf;&starf;&starf;</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card  mb-1">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p>More of a <strong class="text-primary">family oriented</strong> place with lots of kids and larger groups. We got in without a wait at prime time on Friday night which tells you something. Sever was friendly.</p>
                                            <footer class="blockquote-footer">Michael <cite title="Source Title">&starf;&starf;&starf;&starf;&starf;</cite></footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        AOS.init();
    </script>
</body>

<?php
include "footer.inc.php";
?>

</html>