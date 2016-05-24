
<html>
  <head>
    <meta charset="utf-8">
    <title>goods form</title>
    
</head>

  <body>
    <form method="POST" action="result.php">
   <p><strong>Product name</strong></p>
   <p><input name="product_name" maxlength="25" size="40" ></p>
  
 <label> Product category</label>
 <select name="category">
  <option value="IT items" selected="selected">IT items</option>
  <option value="toys">Toys</option>
  <option value="electronics">Electronics</option>
  <option value="accesuars">Accesuars</option>
</select>
 <p><strong> Product cost</strong></p>
   <p><input name="cost" maxlength="10" size="20" ></p>
   <input type="submit"  value="Отправить данные"/>
</form>
    </body>

</html>