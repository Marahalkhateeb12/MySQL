<?php

include 'header.php';
session_start();
?>





    <div class="container">

    <h3 style="margin-top: 100px;   text-align: center; ">Add New Item</h3>
<form action="" method="post"  enctype="multipart/form-data">
   
    <div class="mb-3 mt-3">
        <label for="item_name">Item Name:</label>
        <input type="text" class="form-control" id="item_name" name="item_name"  ">
    </div>
    <div class="mb-3 mt-3">
        <label for="item_name">Price:</label>
        <input type="number" class="form-control" id="price" name="price" ">
    </div>
    <div class="mb-3">
        <label for="details">Details:</label>
        <textarea class="form-control" rows="5" id="details" name="details"></textarea> 
    </div>
  
    <div class="mb-3">
        <label for="imageUpload" class="form-label">
            Click to upload Image...
        </label>
        <input type="file" class="form-control-file" id="pic" name="filee" accept="image/*" required>
    </div>
 
    <button type="submit" name="submit" class="btn btn-default">Insert Item</button>
</form>
        <br>


    </div>
    <div class="table-responsive-sm" id="table-div">
    <table id="items" class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Item Details</th>  
            <th>Item Image</th>
        </tr>
    </thead>
    <tbody>
    
                <?php
                if (isset($_POST['submit'])) {
                    if (!(file_exists("images/" . $_FILES["filee"]["name"]))) {
                        move_uploaded_file($_FILES["filee"]["tmp_name"], "images/" . $_FILES["filee"]["name"]);
                    }
                    // $filename = $_FILES["filee"]["name"];
                    // $tempname = $_FILES["filee"]["tmp_name"];  
                    // $folder = "images/".$filename;
                    $_SESSION['name'] .= $_POST['item_name'] . '<br>';
                    $_SESSION['pricee'] .= $_POST['price'] . '<br>';
                    $_SESSION['Details'] .= $_POST['details'] . '<br>';
                    $_SESSION['photo'] .= $_FILES["filee"]["name"] . '<br>';
                    $arrName = explode("<br>", $_SESSION['name']);
                    $arrPrice = explode("<br>", $_SESSION['pricee']);
                    $arrDetails = explode("<br>", $_SESSION['Details']);
                    $arrImg = explode("<br>", $_SESSION['photo']);
                    for ($i = 0; $i < count($arrName) - 1; $i++) {
                        echo ('<tr><td>' . $i .'</td><td>' . $arrName[$i] . '</td><td>' . $arrPrice[$i] . '</td><td>' . $arrDetails[$i] . '</td><td><img src="images/' . $arrImg[$i] . '" alt="Image" style=" width: 100px;   height: 100px;"></td></tr><br>');
                    }
                }
                // session_unset();
                ?>
            </tbody>
        </table>
    </div>

  
    <?php include 'footer.php'; ?>