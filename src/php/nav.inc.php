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
                        <a class="nav-link text-primary" href="locations.php">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="about.php">About</a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto">
                <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#loginModal">LOGIN</button>

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="login.php">

                            </form>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>