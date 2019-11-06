


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
                        <li class="nav-item active">
                            <a class="nav-link " href="">Menu</a>
                        </li>
                        <li class="nav-item ">
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

        <h1>Menu</h1>

        <?php 
            $mysqlServer = "sql9.freemysqlhosting.net";
            $username = "sql9310996";
            $password = "Ibe6kjHdmm";
            $db = "sql9310996";

            $conn = mysqli_connect($mysqlServer, $username, $password, $db);


            if($conn){
                $sql = "SELECT * FROM menu";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<p> dishID: " . $row['dishID'] . " Item: " . $row['item'] . 
                        " Item Description: " . $row['itemDescription'] . " Item Spice: " . $row['itemSpice'] .
                        " Item Price: $" . $row['itemPrice'] ."</p>";
                    }
                }

            }
            
            mysqli_close($conn);
        ?>
        
    </div>
    <br><br><br><br>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/menu_script.js"></script>
<script src="../js/nav_script.js"></script>

</html>