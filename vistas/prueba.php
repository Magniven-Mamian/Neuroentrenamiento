<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css" >

    <script
  src="estilos/js/jqueryselect.min.js"></script>


<link href="estilos/select2/css/select2.min.css" rel="stylesheet" />
<script src="estilos/select2/js/select2.min.js"></script>


</head> 
<body>



  <select id="bien" class="form-control input-sm">
    <option>Selecione</option>
    <option>Bien</option>

</select>


</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
  $("#bien").select2();

	});

</script>
