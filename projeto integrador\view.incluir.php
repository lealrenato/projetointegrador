<?php
require_once "template.begin.php";
?>

<header>
  <h1><spam>Sr. Quindim</spam></h1>
</header>

<nav>
  <ul>
    <il><a href="view.incluir.php">Incluir</a> | 
    <il><a href="view.listar.php">Listar</a>
  </ul>
</nav>



<section>
  <form method="post" action="control.incluir.php" class="form-actions">


    <p>^_^ { Coloque sua receita aqui! }</p>
    <p><input type="text" name="prato" placeholder="Nome do prato"></p>
    <p><input type="text" name="valor" placeholder="Valor do prato"></p>
	<p><textarea name="receita">Coloque aqui os ingredientes e o modo de preparo.</textarea><br /></p>
    <input type="submit" value="Inserir" />
  </form>
</section>

<footer>
   <pre>Site desenvolvido para EAD Pernambuco.</pre>
</footer>

<?php
require_once "template.end.php";
?>
