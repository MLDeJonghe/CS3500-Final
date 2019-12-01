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

    <title>Bumbu Indonesian Cuisine</title>
</head>

<body>
    <?php 
    include 'sessionHandler.php';
    include 'nav.inc.php'; 
    
    if(!isset($_SESSION['orderDetails'])){
        include 'begin_order.inc.php';
    }else{
        include 'continue_order.inc.php';
    }
    ?>
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




</html>