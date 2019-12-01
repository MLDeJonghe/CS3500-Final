<?php include 'orderScript.inc.php'?>
<div class="container">
    <br>
    <div class="row">
        <div class="col">

            <p class=" display-3 text-uppercase">Welcome, <?php echo $_SESSION['orderDetails']['firstName'] ?>!</p>
            <hr class="my-4 bg-primary">
        </div>

    </div>
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
                <button type="button" class="btn btn-block btn-dark my-2 text-nowrap" data-toggle="modal" data-target="#cancelOrderModal">Cancel Order<span class="m-1 font-weight-bold">&times;</span></button>
                <div class="modal fade" id="cancelOrderModal" tabindex="-1" role="dialog" aria-labelledby="cancelOrderModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cancelOrderModalTitle">Cancel yout order?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you would like to cancel your order?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Cancel Order</button>
                            </div>
                        </div>
                    </div>
                </div>
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