<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Televenda Coobrastur</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../e.css">
<body class="bUsers">

<div class="topoUsers"></div>
<form action="users.php" method="post">
<div class="loginUsers">
    <label><img id="lgUser" src="i/helpdesk.png" alt="Televenda Coobrastur" /></label>
    <div class="form-group">

            <select name="users" class="form-control">
                <?php
                    require "../../televenda/conn.php";
                    $consulta = mysqli_query($con, "SELECT * FROM atendentes");
                
                    while ($l = mysqli_fetch_array($consulta)) {
                ?>
                        <option value="<?php echo $l['id']; ?>">
                            <?php echo $l['nome']; ?>
                        </option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" name="submit" value="Entrar" class="form-control btn btn-primary">
    </div>
</div>
</form>
</body>
</html>