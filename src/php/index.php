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
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="menu.php"><img class="d-block w-100" src="../images/Me.jpg" alt="First slide" height="250" width="400"></a>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/pic.jpg" alt="Second slide" height="250">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/Me.jpg" alt="Third slide" height="250">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p data-aos="flip-down">
                    Here at Bumbu, we aim to bring our guest the most authentic Indonesian flavors as possible.
                    You will be indulged with mouth watering traditional Indonesian dishes and the aroma of spices.
                    At Bumbu, we ensure only the highest quality ingredients will be served to our guests.
                    Our restaurants feature an impeccable atmosphere that will bolster your experience and leave you wanting more.
                    Visit us at one of our three Michigan locations today!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Review</h2>
                <hr>
                <div class="row justify-content-between">
                    <div class="col-md-6" data-aos="fade-up">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-1 ">
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0 ">
                                            <p>SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS</p>
                                            <footer class="blockquote-footer">Robbie Weirdick <cite title="Source Title">Source Title</cite></footer>
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
                                            <p>No lamb sauce.</p>
                                            <footer class="blockquote-footer">Gordon Ramsey <cite title="Source Title">Source Title</cite></footer>
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
                                            <p>No lamb sauce.</p>
                                            <footer class="blockquote-footer">Gordon Ramsey <cite title="Source Title">Source Title</cite></footer>
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
                                            <p>Chef is good</p>
                                            <footer class="blockquote-footer">Sherlock Holmes &starf; s<cite title="Source Title">Source Title</cite></footer>
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
                                            <p>That is my spot</p>
                                            <footer class="blockquote-footer">Sheldon Copper <cite title="Source Title">Source Title</cite></footer>
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
                <?php
                include "footer.inc.php";
                ?>

    <script>
        AOS.init();
    </script>
</body>