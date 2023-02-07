<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Meu Criativo Tech</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="<?php echo INCLUDE_PATH;?>css\style.css" rel="stylesheet"/>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="palavras chave do meu site">
<script src="https://kit.fontawesome.com/17fd118a24.js" crossorigin="anonymous"></script>    
</head>
<body>

    <header>
    <div class="center">
    <div class="logo left"><a href="<?php echo INCLUDE_PATH;?>/">Meu Criativo Tech</a> </div>  <!--Logo-->
    <nav class="desktop right">
    <ul>
        <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>

    </ul>

    </nav>
    <nav class="mobile right">
        <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
    <ul>
    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
    </ul>

    </nav>
    <div class="clear"></div><!--clear-->
    </div><!--center-->
    </header>
    
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            include('pages/404.php');
        }
    ?>

<footer>
    <div class="center">
<p>Todos os direitos reservados ©  Meu Criativo Tech 2022 </p>
    </div><!--center--> 
</footer>
<script src="<?php echo INCLUDE_PATH;?>js/jquery.min.js"></script>
<script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>

    <?php
		if($url == 'contato'){
	?>
	<?php } ?>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>

</body>
</html>