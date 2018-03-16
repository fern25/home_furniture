<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>
<body>

	<script type="text/javascript">
		$(document).ready(function(){

			data_array1 = new Array();
			data_array2 = new Array();

			data_array1 = [];
			data_array2 = [];

			$.ajax({
				url: "testfile.php",
				type: "post",
				cache: false,
				dataType: "JSON",
				data: {
					"request":1
				},
				success: function(data){

					for(var x = 0;x<data[0].length;x++){
						data_array1.push(data[0][x]);
					}
					for(var x = 0;x<data[1].length;x++){
						data_array2.push(data[1][x]);
					}

					console.log(data_array1);

					var txt = $("<p></p>").text(data_array2);

				$("#comment_sec").append(txt);
			}
		});
		});
	</script>
</body>
</html>