<div class="container">
    <br>
    <h1 class="text-uppercase">Welcome, <?php echo $_SESSION['orderDetails']['firstName'] ?>!</h1>
    <hr class="my-4 bg-primary">
    <div class="row">
        <div class="col">
            <h3 class="2">Order Details</h3>
        </div>
    </div>
    <br>
    <div class="row justify-content-between">
        <div class="col-sm-2  h4">
            Items
        </div>
        <div class="col-sm-5"></div>
        <div class="col-sm-2  text-right h4">
            Price
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2  text-center h4">
            Actions
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group-flush pl-0">
                <?php include 'load_order.inc.php'; ?>
            </ul>
        </div>
    </div>

    <hr class="my-4 bg-primary">
    <div class="row">
        <div class="col-md-3">
            <form action='order_handler.php?proceed=false' method="POST">
                <button type="submit" class="btn btn-block btn-dark my-2 text-nowrap">Cancel Order<span class="m-1 font-weight-bold">&times;</span></button>
            </form>
        </div>
        <div class="col-md-3 ml-auto">
            <form action="order_handler.php?proceed=true" method="POST">
                <button type="submit" class="btn btn-block btn-primary my-2 text-nowrap">Checkout<span class="m-1 font-weight-bold">&check;</span></button>
            </form>
        </div>
    </div>
    <br>
    <br>
</div>