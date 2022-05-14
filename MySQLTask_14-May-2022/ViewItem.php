<?php
include 'header.php';
session_start();
?>





    <!-- PHP -->
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <?php

            if (!empty($_SESSION['name']) && !empty($_SESSION['pricee']) && !empty($_SESSION['Details'])) {
                $_SESSION['name'];
                $_SESSION['pricee'];
                $_SESSION['Details'];
                $_SESSION['photo'];
                $arrName = explode("<br>", $_SESSION['name']);
                $arrPrice= explode("<br>", $_SESSION['pricee']);
                $arrDetail = explode("<br>", $_SESSION['Details']);
                $arrImg = explode("<br>", $_SESSION['photo']);
                for ($i = 0; $i < count($arrName) - 1; $i++) {
                    echo ('<div class="col-md-4 mt-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions"> <img src="images/'.$arrImg[$i].'" class="card-img img-fluid" alt="Image" id="pimage"> </div>
                        </div>
                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arrName[$i] . '</h5><p class="text-muted" data-abc="true">' . $arrDetail[$i] . '</p>
                            </div>
                            <h4 class="mb-0 font-weight-semibold">$' . $arrPrice[$i] . '</h4>
                            <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                            <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                        </div>
                    </div>
                </div>');
                }
            } else {
                echo ('<div class="container" id="error"> <h2>There are no products to display!!! </h2></div>');
            }
            ?>
        </div>
    </div>







    <?php include 'footer.php'; ?>