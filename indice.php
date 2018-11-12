<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ranking Televenda Coobrastur</title>
	    <!--script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script-->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="e.css">
        <!--### FLIP LIST ###-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<body>
<div class="tp"></div>
<?php
    $metaTotal = 550;
    require "conn.php";
    $consulta = mysqli_query($con, "SELECT (SUM(qnt_vendas)) AS total FROM atendentes");
    $query = mysqli_fetch_array($consulta);
    $totalVendas = $query['total'];
?>

<div class="logoCobrastur">
    <img src="img/logo-coobrastur.png" />
</div>



<div class="bt"></div>
</body>
</html>