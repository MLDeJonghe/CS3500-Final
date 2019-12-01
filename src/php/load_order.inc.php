<?php
    
    array_values($_SESSION['orderDetails']['orderItems']);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqlServer = "sql9.freemysqlhosting.net";
    $username = "sql9310996";
    $password = "Ibe6kjHdmm";
    $db = "sql9310996";

    $conn = mysqli_connect($mysqlServer, $username, $password, $db);
    $price_total = 0;

    if(count($_SESSION['orderDetails']['orderItems']) === 0){
        
    }else{

        //echo "<script> console.log(".count($_SESSION['orderDetails']['orderItems'][1]).")</script>";
        for($i = 0; $i < count($_SESSION['orderDetails']['orderItems']); $i++){
            //echo "<script> console.log(".$_SESSION['orderDetails']['orderItems'][$i].")</script>";
            $itemID = $_SESSION['orderDetails']['orderItems'][$i];
            $sql = "SELECT * FROM menu WHERE dishID = $itemID"; 
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)){
                echo '
                <li id="'.$i.'"class="list-group-item px-0">
                    <div class="row ">
                        <div class="col-sm-2 font-weight-bold pl-5">
                            '.$row['item'].'
                        </div>
                        <div class="col-sm-5">
                        </div>
                        <div class="col-sm-2 text-right">
                           $'.$row['itemPrice'].'
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2 text-center">
                            <button onclick="removeItem('.$i.');" class="btn btn-dark">&times;</button>
                        </div>
                    </div>
                </li>    
                ';
                $price_total += (float)$row['itemPrice'];
            }
    
        }
    }


    echo '
    <li class="list-group-item px-0">
        <div class="row ">
            <div class="col-sm-2 h4">
                Total
            </div>
            <div class="col-sm-5"></div>
            <div class="col-sm-2 text-right font-weight-bold" id="priceTotal">
               $'.$price_total.'
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 text-center">
            </div>
        </div>
    </li>  
    ';

?>


