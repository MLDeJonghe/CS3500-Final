<?php include "sessionHandler.php";?>
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
    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php
    include "nav.inc.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <p class="display-4">LOCATIONS </p>
                <hr class="bg-primary my-4">
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 mb-3">
                <h2 class="text-uppercase mb-1">Branches</h2>
                <hr class="my-1">
                <p>
                    We now have Branches of Bumbu throughout Michigan State! Each Bumbu restaurant provides the same customer service, same quality food and price.
                    This is to ensure customer could enjoy Indonesian Cuisine whenever and wherever they are. Don't wait! Get on your car and drive to Bumbu!
                </p>
            </div>
        </div>
        <hr class="bg-primary my-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-KZ-list" data-toggle="list" href="#list-KZ" role="tab" aria-controls="KZ">
                        Kalamazoo
                    </a>
                    <a class="list-group-item list-group-item-action" id="list-GR-list" data-toggle="list" href="#list-GR" role="tab" aria-controls="GR">
                        Grand Rapids
                    </a>
                    <a class="list-group-item list-group-item-action" id="list-L-list" data-toggle="list" href="#list-L" role="tab" aria-controls="L">
                        Lansing
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content " id="nav-tabContent">
                    <div class="tab-pane fade show active w-100" id="list-KZ" role="tabpanel" aria-labelledby="list-KZ-list">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=5498%20Minuteman%20Cir%20Kalamazoo%2C%20Michigan(MI)%2C%2049009&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">news</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-GR" role="tabpanel" aria-labelledby="list-GR-list">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=720%204th%20St%20NW%20Grand%20Rapids%2C%20Michigan(MI)%2C%2049504&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">news</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-L" role="tabpanel" aria-labelledby="list-L-list">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=8630%20Camellia%20St%20Lansing%2C%20Michigan(MI)%2C%2048917&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/">news</a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<footer>
    <?php
    include "footer.inc.php";
    ?>
</footer>

</html>