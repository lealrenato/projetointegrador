<?php
  require 'class.conexao.php';
  require 'ensopado.php';
  require 'ensipado.dao.php';
  
  $id = $_GET['receita'];
  
  $dao = new EnsopadoDAO();
  $o = $dao->receita($id);

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
	
echo '<article>';
echo '<header><h2>#' . $o->id . ' ' . $o->prato . '</a></h2></header>';
echo '<strong>Valor: ' . $o->valor . '</strong>';
echo '<p><textarea id="receita">' . $o->receita . '</textarea></p>';
echo '</article>';
	
?>

</section>

<footer>
   <pre>Site desenvolvido para EAD Pernambuco.</pre>
</footer>

<?php
require_once "template.end.php";
?>