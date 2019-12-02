<?php include 'sessionHandler.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap4.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
                <p class="display-4 text-uppercase">About The Developers</h1>
                    <hr class="bg-primary my-3">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 text-center mb-5">
                        <img src="../images/pic.jpg" alt="Avatar" style="width:300px;height:300px;" class="rounded-circle border border-primary">
                        <h2 class="pt-3 text-left">Darryl <a class="align-top" href="https://github.com/Gandlfer"><img src="..\images\GitHub-Mark-120px-plus.png" class="github" width=25px height=25px></a></h2>


                        <div class="text-left" data-aos="fade-right">
                            Darryl is a 20 year old Junior in Western Michigan University, currently pursuing his Bachelor in Computer Science. At the age of 17, he started programming in INTI College Penang. He was involved in a Student Employment
                            Project with Plexus for their Human Resource Team.
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-5">
                        <img src="../images/Me.jpg" alt="Avatar" style="width:300px;height:300px;" class="rounded-circle border border-primary mx-auto">
                        <h2 class="pt-3 text-left">Mitch <a class="align-top" href="https://github.com/MLDeJonghe"><img src="..\images\GitHub-Mark-120px-plus.png" class="github" width=25px height=25px></a></h2>


                        <div class="text-left" data-aos="fade-left">
                            Mitch is a 23 year old computer science student attending Western Michigan University.
                            His interests include software and web develeopment, music production, and gaming. He is currently seeking an internship for the summer of 2020.
                        </div>
                    </div>
                </div>
                <hr class="bg-primary my-4">
                <div class="row">
                    <div class="col" data-aos="fade-up">
                        
                            <h2 class="text-uppercase">Project Team Number: <strong class="text-primary">5</strong></h2>
                            <h2>Project Description:</h2>
                            <p> For our final project we've decided to extend the previous mid-term project. The order page is fully functional with PHP,SQL and AJAX.
                                We have a database that stores a number of food items that has itemID. Using the knowledge of PHP and SQL, we get all the data from the database into the Menu Page.
                                Users have to first decide if they are going to order for delivery or pick up. Based on the selection, the data that are required from user will vary.
                                All data input has validations on them to avoid fraud and security purposes. 
                                After the information is filled, users will be able to add items to order. We have also added a remove button function to remove an item from the list.
                                Once the user is done ordering, click on checkout, and they will be directed to the check out page. 
                                They are required to give the payment type and the information. Once it is done, click on pay and they will be directed to the end of the Session with information about their order.
                            </p>
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