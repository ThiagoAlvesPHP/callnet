<?php
$config = array();
$config['title'] = "Callnet - Gandu/BA";
$config['description'] = "CALLNET-BA - O seu provedor de internet";
$config['favicon'] = "logo.png";
$config['name_total'] = "CALLNET GANDU";
$config['city'] = "";
$config['endereco'] = "Pc Mario Andreazza - Nº 130 / Centro";
$config['phone1'] = "(73) 99917-9660";
$config['phone2'] = "(73) 3254-0606";
$config['email'] = "callnetba@hotmail.com";
$config['facebook'] = "https://www.facebook.com/callnet.gandu";

$planos = array(
  array(
    'plano'=>'Pacote 01',
    'class'=>'success',
    'qt_mega'=>20,
    'price'=>'59.90'
  ),

  array(
    'plano'=>'Pacote 02',
    'class'=>'primary',
    'qt_mega'=>30,
    'price'=>'69.90'
  ),

  array(
    'plano'=>'Pacote 03',
    'class'=>'danger',
    'qt_mega'=>40,
    'price'=>'79.90'
  ),

  array(
    'plano'=>'Pacote 04',
    'class'=>'warning',
    'qt_mega'=>50,
    'price'=>'99.90'
  )
);

$dicas = array(
  array(
    'dica'=>'Dica 01',
    'text'=>'
    Quando alguém entra na internet recebe um IP, um número
    único e exclusivo no mundo. O provedor ou a operadora de
    Internet é obrigado por Lei a identificar quem esta usando este 
    IP. Então, se por ventura você compartilhou sua internet, seja
    através da senha do WI-FI ou através de cabos externos
    ligados no seu roteador, para um vizinho que pode passar
    para outro vizinho, ou outra pessoa, e um deles podem cometer um crime.<br><br>

    CRIMES CONTRA BANCOS | CRIMES DE PEDOFILIA | CRIMES DE DIFAMAÇÃO | CRIMES DE CALÚNIA | CRIMES DE CONTRABANDO
    '
  ),
  array(
    'dica'=>'Dica 02',
    'text'=>'
    Quando você compartilha sua internet a sua velocidade de conexão pode ficar mais lenta,
    porque outras pessoas estarão usando em outros locais, onde você nunca saberá o que estão fazendo,
    se estão assistindo filmes, vídeos ou baixando arquivos, ou até mesmo cometendo algum crime.
    Outro detalhe importante a ser considerado é que cada roteador tem uma especificação e um límite 
    de distância. A recomendação é que antes de comprar um roteador entre em contato com a '.$config['name_total'].', 
    para comprar o(s) roteador(es) testados e homologados(s) pela '.$config['name_total'].', que são adequados(s) para sua residência, ou empresa.
    '
  )
);