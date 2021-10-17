<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php echo $titulo ?></title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/footer.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/noticia.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/prefeitura.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/imagens/logosite.png'); ?>">

</head>

<body>
  <header class="header_top">
    <div id="topo2">
      <div class="conteiner">
        <div class="itens_topo">
          <a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url('assets/imagens/logoprincipal.png '); ?>" alt="logo"></a>
          <a href="#" id="anucie">ANUNCIE AQUI</a>
          <form class="ps" action="<?php echo base_url('home.php'); ?>" method="post">
            <input type="text" name="" value="" placeholder="O que você procura ?">
            <a href="#" id="psq"></a>
          </form>
        </div>
      </div>
    </div>


    <nav id="navtopo2">
      <div class="conteiner">
        <ul>
          <li><a href="<?php echo base_url(''); ?>">HOME</a></li>
          <li><a href="<?php echo base_url('covid'); ?>">COVID-19</a></li>
          <li><a href="<?php echo base_url('noticia'); ?>">NOTÍCIAS</a></li>
          <li><a href="<?php echo base_url('prefeitura'); ?>">PREFEITURA</a></li>
          <li><a href="<?php echo base_url('emprego'); ?>">EMPREGO</a></li>
          <li><a href="<?php echo base_url('sobre'); ?>">SOBRE</a></li>
        </ul>
      </div>
    </nav>
  </header>