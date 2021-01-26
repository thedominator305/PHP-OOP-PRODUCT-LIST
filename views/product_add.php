<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Product Add Page</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
    <script src="./app.js"></script>
</head>
<body>
<form name="form" method="post" action="create.php">
<header>
<div class="main-container">
    <div id="product-add">
        <h1>Product Add</h1>
    </div>
    <nav>
        <ul>
            <li><button type="submit" name="save" class="button">save</button></li>
        </ul>
    </nav>
</header>
<hr>
<div class="main-container">
    <label><br>
        SKU   </label><input type="text" name="sku" class="sku" placeholder="Sku">
    <label><br>
        NAME  </label><input type="text" name="name"  class="name" placeholder="Name">
    <label><br>
        PRICE </label><input type="text" name="price" class="price" placeholder="Price">
    <div id="showSelected"></div>
    <label>Type Switcher</label>
    <select name="select" class="form-control" id="select_all" onchange="show()">
        <option selected disabled hidden>Type Switcher</option>
        <option value="Size"> Size </option>
        <option value="HxWxL">  HxWxL </option>
        <option value="Weight"> Weight </option>
    </select>
    </div>
</div>
</form>
</body>
</html>
    


    
        