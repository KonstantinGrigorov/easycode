<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <title>goods form AJAX</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
    function funcBefore () {
      $("#informationWhole").text ("Ожидание данных");
    }
    function funcSuccess (data) { 
      $("#informationWhole").text (data);
    }
$(document).ready (function (){
    $("#load").bind("click", function(){
      $.ajax({
        url: "available.php",
        type: "POST",
        data: ({name: $("#loadName").val(),category: $("#loadCategory").val(),cost: $("#loadCost").val()}),
        dataType: "html",
        beforeSend: funcBefore,
        success: funcSuccess 
      });
    });
  });
</script>
</head>

  <body>
    
   <p><strong>Product name</strong></p>
   <p><input id="loadName" name="product_name" maxlength="25" size="40" ></p>
   <div id="informationName"></div>
  
 <label> Product category</label>
 <select id="loadCategory" name="category">
  <option value="IT items" selected="selected">IT items</option>
  <option value="toys">Toys</option>
  <option value="electronics">Electronics</option>
  <option value="accesuars">Accesuars</option>
</select>


 <p><strong> Product cost</strong></p>
   <p><input id="loadCost" name="cost" maxlength="10" size="20" ></p>
   <input id="load" type="submit"  value="Отправить данные"/>

   <div id="informationCost"></div>
   <div id="informationWhole"></div>
    </body>

</html>