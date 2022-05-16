<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>






    <?php
   

    try {
       echo' <h2 style="text-align: center; color:gray ; margin-top: 20px;">All Products</h2>';
        $sql = "SELECT * FROM product";
        echo ('<div class="table-responsive-sm" id="table-div"  style="width:80%; padding-left: 300px; padding-top: 50px; color: gray; " >
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody id="info">');
        $statment = $conn->query($sql);

        $pro = $statment->fetchAll();
        if ($pro) {
            // output data of each row
            foreach ($pro as $value) {
                echo "<tr><td>" . $value["Product_ID"] . "</td><td>" . $value["Product_Name"] . "</td><td>" . $value["Price"] . "</td><td>" . $value["Category"] . "</td></tr>";
            }
            echo "</tbody></table>";
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    } finally {
        $conn = NULL;
    }
    // header('location: index.php');

    echo ('<br><form action="addProduct.php" ><button class="btn btn-primary" id="btn" style="display: inline-block; margin-bottom: 3%; color: rgb(232, 227, 227); background-color: #ee61a3;  height: 50px; width: 150px;margin-top:20px;"> Add Product</a></button></form>
    ');

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>