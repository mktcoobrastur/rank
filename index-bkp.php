<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ranking Televenda Coobrastur</title>
        <!--script src="ajax.js"></script-->
	    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!--script src="//code.jquery.com/jquery-1.11.2.min.js"></script-->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="e.css">
</head>
<body>
<div class="tp"></div>
    <div class="topo"></div>
        <img width="300" src="img/ranking-coobrastur.png" alt="Coobrastur" />
    </div>
    <div class="auto">
        <div class="outLista">
            <ul>
                <?php 
                    $conn = mysqli_connect('localhost','root','','sistema');
                    $query = mysqli_query($conn,'select id, nome, qnt_vendas from atendentes');
                    $coluna2 = $dadosJSON;
                    while($res = mysqli_fetch_array($query)) {
                       ?>
                        <li class='linha'>
                            <img class="img-circle ftAtendente" src="img/foto.jpg" alt="" />
                            <?php echo utf8_encode($res['nome']); ?>
                        </li>
                        <?php
                    }
                    if ($res >= 10) {
                        echo "<div class='coluna2'>".$coluna2."</div>";
                    }
            ?>
            </ul>
        </div>
    </div>
    <?php  print_r($atendentesA); ?>
    <?php echo date("d-m-Y"); ?>

<div class="bt"></div>

<script type="text/javascript">
    new Vue {
        
    }
</script>
</body>
</html>