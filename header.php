<?php
require 'dados.php';
$number = preg_replace("/[^0-9]/", "", $config['phone1']);
$url = "https://www.callnetba.net.br/";
//Aqui ira pegar o dominio
$dominio = $_SERVER['HTTP_HOST'];
//Aqui ira concatenar com o http:// ou https:// e salvar em url
$urlAtual = (isset($_SERVER['HTTPS']) ? "https" : "http")."://".$dominio. $_SERVER['REQUEST_URI'];
//Verifica se é diferente
/*if($url != $urlAtual){
  header('Location: https://www.callnetba.net.br/'); 
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="assets/img/<?=$config['favicon']; ?>" type="image/x-icon"/>
  <title><?=$config['title']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?=$config['title']; ?>">
  <meta property="og:description" content="<?=$config['description']; ?>">
  <meta property="og:image" content="assets/img/logo2.png; ?>">
  <meta property="og:image:type" content="image/png">
  <meta property="og:type" content="website">
  <meta name="robots" content="noindex">
  <meta name="robots" content="index, follow">
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="<?=$config['title']; ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/stile.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<a href="https://api.whatsapp.com/send?phone=55<?=$number; ?>&text=Gostaria de informações sobre os planos" target="_blank">
  <img id="zap" src="assets/img/icone_zap.png">
</a>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">
        <!-- <img src="assets/img/logo2.png"> -->
        <?=$config['name_total']; ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#pricing">PLANOS</a></li>
        <li><a href="#dicas">DICAS</a></li>
        <li><a href="#contact">CONTATO</a></li>
        <li class="central">
          <a target="_black" href="https://sgp.net.br/callnet/accounts/central/login">
            <b>CENTRAL DO ASSINANTE</b>
          </a>
        </li>
        <li>
          <a href="<?=$config['facebook']; ?>" target="_blank" title="Facebook">
            <img width="15" src="assets/img/facebook.png">
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>