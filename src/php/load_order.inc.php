<?php

array_values($_SESSION['orderDetails']['orderItems']);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqlServer = "sql9.freemysqlhosting.net";
$username = "sql9310996";
$password = "Ibe6kjHdmm";
$db = "sql9310996";

$conn = mysqli_connect($mysqlServer, $username, $password, $db);
$price_total = 0;



foreach ($_SESSION['orderDetails']['orderItems'] as $key => $value) {

    $itemID = $value;
    $sql = "SELECT * FROM menu WHERE dishID = $itemID";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
                <li id="' . $key . '"class="list-group-item px-0">
                    <div class="row ">
                        <div class="col-sm-2 ">
                            ' . $row['item'] . '
                        </div>
                        <div class="col-sm-5">
                        </div>
                        <div class="col-sm-2 text-right">
                           $' . $row['itemPrice'] . '
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 text-center">
                            <button onclick="removeItem(' . $key . ');" class="btn btn-dark">&times;</button>
                        </div>
                    </div>
                </li>    
                ';
        $price_total += (float) $row['itemPrice'];
    }
}



echo '
    <li class="list-group-item px-0">
        <div class="row ">
            <div class="col-sm-2 h4">
                <h5 class="text-uppercase font-weight-bold">Total</h5>
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-2 text-right font-weight-bold text-uppercase" id="priceTotal">
              <h5> $' . $price_total . '</h5>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 text-center">
            </div>
        </div>
    </li>  
    ';
