<?php 
    $itemModalSql = "SELECT * FROM `orders`";
    $itemModalResult = mysqli_query($conn, $itemModalSql);
    while($itemModalRow = mysqli_fetch_assoc($itemModalResult)){
        $orderid = $itemModalRow['orderId'];
        $userid = $itemModalRow['userId'];
    
?>

<!-- Modal -->
<div class="modal fade" id="orderItem<?php echo $orderid; ?>" tabindex="-1" role="dialog" aria-labelledby="orderItem<?php echo $orderid; ?>" aria-hidden="true" style="width: -webkit-fill-available;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: black;">
                <h5 class="modal-title text-light" id="orderItem<?php echo $orderid; ?>">Order Items (<b>Order Id: <?php echo $orderid; ?></b>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="container">
                    <div class="row">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table text">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="px-3">Item</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="text-center">Quantity</div>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $mysql = "SELECT * FROM `orderitems` WHERE orderId = $orderid";
                                    $myresult = mysqli_query($conn, $mysql);
                                    while($myrow = mysqli_fetch_assoc($myresult)){
                                        $vartId = $myrow['vartId'];
                                        $itemQuantity = $myrow['itemQuantity'];
                                        
                                        $itemsql = "SELECT * FROM `vart` WHERE vartId = $vartId";
                                        $itemresult = mysqli_query($conn, $itemsql);
                                        $itemrow = mysqli_fetch_assoc($itemresult);
                                        $vartName = $itemrow['vartName'];
                                        $vartPrice = $itemrow['vartPrice'];
                                        $vartDesc = $itemrow['vartDesc'];
                                        $vartCategorieId = $itemrow['vartCategorieId'];

                                        echo '<tr>
                                                <th scope="row">
                                                    <div class="p-2">
                                                    <img src="/BETTR/img/vart-'.$vartId. '.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> '.$vartName. '</h5><span class="text-muted font-weight-normal font-italic d-block">Rs. ' .$vartPrice. '/-</span>
                                                    </div>
                                                    </div>
                                                </th>
                                                <td class="align-middle text-center"><strong>' .$itemQuantity. '</strong></td>
                                            </tr>';
                                    }
                                ?>
                            </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    }
?>