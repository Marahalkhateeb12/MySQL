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
<h2 style="text-align: center; color:gray ; margin-top: 20px;">Add New Product</h2>
    <form action="insert.php" method="post" style="padding-left: 300px; width: 80%; padding-top: 50px; color: gray;">
   
        <div class="mb-3 mt-3">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" id="product_name" name="product_name" Required>
        </div>
        <div class="mb-3 mt-3">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" Required>
        </div>
       
            <?php
            $sql = 'SELECT * FROM category order by Category_ID';

            $statment = $conn->query($sql);

            $categories = $statment->fetchAll();
            ?>
            <div class="form-group">
                <label for="category"><b> Category: </b></label>
                <select name="category" class="form-control" Required>
                    <option>Select Category</option>
                    <?php foreach ($categories as $value) : ?>
                        <option value="<?php echo $value['Category_Name']; ?>"><?php echo $value['Category_Name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="add" id="add" style=" color: rgb(232, 227, 227); background-color: #ee61a3;  height: 50px; width: 150px;margin-top:20px;">Add Product</button>
        </form>
    </div>

    








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>