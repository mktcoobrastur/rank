<?php
    //Conecta com o banco via 'conn.php'
    require "conn.php";
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT id, nome, img, mp3, qnt_vendas FROM atendentes order by qnt_vendas DESC limit 0,1");
	while($res = mysqli_fetch_assoc($qryLista)){
?>
    <div class="campeao">
        <img src="img/<?php echo $res['img']; ?>" class="img-circle" />
        <span><?php echo utf8_encode($res['nome']); ?></span>
        <div class="Tvendas">
            <h3>TOTAL DE VENDAS</h3>
            <b><?php echo $res['qnt_vendas']; ?></b> 
        </div>
    </div>
        <?php
        $dados[] = array_map('utf8_encode', $res);
        print_r($res);
        //$audio = $res['mp3'];
    }
?>
