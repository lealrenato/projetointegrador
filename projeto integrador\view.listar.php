<?php
  require 'class.conexao.php';
  require 'ensopado.php';
  require 'ensopado.dao.php';
  
  $dao = new EnsopadoDao();
  $lista = $dao->listar();

  require_once "template.begin.php";
?>

<header>
  <h1><spam>Sr. Quindim<spam></h1>
</header>

<nav>
  <ul>
    <il><a href="view.incluir.php">Incluir</a> | 
    <il><a href="view.listar.php">Listar</a>
  </ul>
</nav>

<section>

<?php
	foreach ($lista as $o) {
		echo '<article>';
		echo '<header><h2><a href=view.receita.php?receita='. $o->id . '>#' . $o->id . ' ' . $o->prato . '</a></h2></header>';
		echo '<strong>Valor: R$ ' . $o->valor . '</strong>';
		echo '</article>';
	 }
?>

</section>

<footer>
   <pre>Site desenvolvido para EAD Pernambuco.</pre>
</footer>

<?php
require_once "template.end.php";
?>