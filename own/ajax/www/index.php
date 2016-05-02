<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Тест</title>
    <script src="http://code.jquery.com/jquery-2.2.2.js"> </script>
    <script> 
    function funcBefore () {
    	$("#information").text ("Ожидание данных");
    }
    function funcSuccess (data) {
    	$("#information").text (data);
    }
	$(document).ready (function (){
		$("#load").bind("click", function(){
			var admin = "Admin";
			$.ajax({
				url: "content.php",
				type: "POST",
				data: ({name: admin, number: 5}),
				dataType: "html",
				beforeSend: funcBefore,
				success: funcSuccess 
			});
		});
	});
    </script>

</head>

  <body>
<p id="load" style="cursor:pointer">Загрузить данные</p>
<div id="information"></div>


  </body>

</html>