<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Product List Page</title>
    <link rel="stylesheet" type="text/css" href="css/list.css">
    <script src="./app.js"></script>
</head>
<body>
<form method="post">
    <header>
        <div class="main-container">
            <div id="product-list">
                <h1>Product List</h1>
            </div>
                <nav>
                    <ul>
                        <li>
                            <select id="select_id" onchange="select_all()" class="select">
                                <option value="" selected disabled hidden>Mass Delete Action</option>
                                <option value="deselect_all">deselect</option>      
                                <option value="select_all">Mass Delete Action</option>
                            </select>
                        </li>
                        <li><input type="submit" class="button"  name="delete" value="apply"/></li>
                    </ul>
                </nav>
        </div>  
</header>
<hr>

<section id="boxes">
    <div class="box-container">
    <?php $result = $disk->getBaseProducts("tbl_base");?>
    <?php foreach($result as $product): ?>
            <div class="box">
                <input type="checkbox" name="check[]" id="check" value="<?php echo $product->id; ?>">
                <h3><strong> <?php echo $product->sku;   ?> </strong></h3>
                <h3><strong> <?php echo $product->name;  ?> </strong></h3>
                <h3><strong> <?php echo $product->price; ?> </strong></h3>
      
                <h3><strong> <?php $furniture->setProducts("tbl_furniture", ["height, width, length"], "product_id", $product->id); ?> </strong></h3>   
                <h3><strong> <?php echo $disk->setProducts("tbl_disk", ["size"  ], "product_id", $product->id); ?> </strong></h3> 
                <h3><strong> <?php echo $book->setProducts("tbl_book", ["weight"], "product_id", $product->id); ?> </strong></h3>  
            </div>
        <?php endforeach; ?>
    </div>
</section>
</form>
</body>
</html>






