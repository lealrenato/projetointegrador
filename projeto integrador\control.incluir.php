<?php
  require 'class.conexao.php';
  require 'ensopado.php';
  require 'ensopado.dao.php';
  
  $objeto = new Ensopado();
  $objeto->prato = $_POST['prato'];
  $objeto->valor = $_POST['valor'];
  $objeto->receita = $_POST['receita'];
  
  $dao = new EnsopadoDao();
  $dao->incluir($objeto);
  
  header('Location: index.php');
  exit;
?>