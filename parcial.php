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
</head>
<body>
<div class="tp"></div>
    <div class="topo"></div>
        <img width="300" class="rankingTitulo" src="img/ranking-coobrastur.png" alt="Coobrastur" />
    </div>

    <div class="auto">
        <div class="outLista" id="flip-list">
            <button v-on:click="shuffle">Refresh</button>
            <!-- DADOS LISTAGEM ORDER BY qnt_vendas DESC -->
            <transition-group name="flip-list" tag="ul" id="lista">
                <ul v-for="items as item">
                    {{ items.nome.id }}
                </ul>
            </transition-group>
             
            <!-- DADOS CAMPEÃO -->
            <transition-group name="flip-list" tag="ul" id="listaC">
            </transition-group>

        </div>
    </div>

<?php
    $json           = file_get_contents('https://localhost/televenda/dados.json');
    $jsonDecode     = (json_decode($json, true));
?>

<div class="bt"></div>

        <!--div class="player">
            <audio autoplay="autoplay">
                <source src="javascript:tocamp3();" type="audio/mp3" />
                seu navegador não suporta HTML5
            </audio>
        </div-->
    <script src="ajax.js"></script>
</body>
</html>