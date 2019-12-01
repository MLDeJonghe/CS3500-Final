<div class="container-fluid bg-light">

    <nav class="navbar navbar-expand-md navbar-light">


        <a class="navbar-brand mr-5" href="#">
        <img src="../images/BumbuFan-01.svg" alt="" height="40px" width="40px">    
        <span class="align-middle h4">
            BUMBU
        </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNav" aria-controls="collapsibleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-uppercase" id="collapsibleNav">
            <div>
                <ul class="navbar-nav text-center ">
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-primary" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="about.php">About</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <?php 
                    if(isset($_SESSION['orderDetails'])){
                        echo'
                        <a href="checkout.php"<button type="button" class="btn btn-secondary btn-block">Checkout</button></a>
                        ';
                    }
                ?>
            </div>
        </div>
    </nav>
</div>