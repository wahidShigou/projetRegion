<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script type="text/javascript" src"http://localhost:82/mesprojets/mvc/public/js/jquery-ui.js" ></script>
	<script type="text/javascript" src"http://localhost:82/mesprojets/mvc/public/js/jquery-ui.min.css" ></script>
	<link rel="stylesheet" href"http://localhost:82/mesprojets/mvc/public/js/jquery.js"/>

	<script>
		$(document).ready( function ()
		{
			$.Ajax({
				url: ""
				dataType:"json",
				success:function (datas){
					$.each(datas, function(cle,valeur){
						alert(valeur)
					});
				}
			});
		});
	</script>
</head>
<body>

</body>
</html>