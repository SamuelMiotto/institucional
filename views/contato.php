<h1>Contato</h1>
<form method="POST" class="contato">

	<?php if(!empty($aviso)) {
		echo $aviso."<br/><br/>";
	}
	?>
	Seu Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	Seu E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Mensagem:<br/>
	<textarea name="mensagem"></textarea><br/><br/>

	<input type="submit" value="Enviar Mensagem" />
</form>