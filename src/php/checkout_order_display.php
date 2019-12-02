<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqlServer = "fdb17.your-hosting.net";
$username = "3238555_bumbu";
$password = "Bumbupassword!1";
$db = "3238555_bumbu";

$conn = mysqli_connect($mysqlServer, $username, $password, $db);

$price_total = 0;

foreach($_SESSION['orderDetails']['orderItems'] as $key => $value) {

    $itemID = $_SESSION['orderDetails']['orderItems'][$key];
    $sql = "SELECT * FROM menu WHERE dishID = $itemID";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <li class="list-group-item px-1">
            <div class="row justify-content-between">
                <div class="col-3">
                    ' . $row['item'] . '
                </div>
                <div class="col-3 ">
                   $' . $row['itemPrice'] . '
                </div>
            </div>  
        </li>';
        $price_total += (float) $row['itemPrice'];
    }
}

if ($_SESSION['orderDetails']['orderType'] === "Delivery") {

    $price_total += 2.99;

    echo '
    <li class="list-group-item px-1 ">
        <div class="row justify-content-between">
            <div class="col-3 pl-5 ">
                
            </div>
            <div class="col-3 pl-5 text-right font-weight-bold">
            DELIVERY FEE: 
            </div>
            <div class="col-3 ">
            $2.99
            </div>
        </div>
    </li>';
}

echo '
<li class="list-group-item px-1">
    <div class="row justify-content-between">
        <div class="col-3 pl-5">
            
        </div>
        <div class="col-3 pl-5 text-right font-weight-bold">
            TAX:
        </div>
        <div class="col-3 ">
        $'. round($price_total * 0.06, 2) .'
        </div>
    </div>
</li>';


echo '
    <li class="list-group-item bg-secondary text-light ">
        <div class="row justify-content-between">
            <div class="col-3 font-weight-bold h4 mb-0">
            TOTAL
              
            </div>
            <div class="col-3 font-weight-bold h4 mb-0">
            </div>
            <div class="col-3 font-weight-bold ">
            $' . round($price_total * 1.06, 2) . '
            </div>
        </div>
    </li>';

?>
