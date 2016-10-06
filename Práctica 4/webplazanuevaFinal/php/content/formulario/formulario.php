<html>
<body>

	<div id="content">

      <center><span class="headline">Formulario de contacto</span></center>

	  <br />



		<form action="mail.php" method="post" name="contact_form">
			Nombre: <input type="text" name="nombre" size="36" maxlength="50"required/>
			<br><br>
			Correo electrónico: <input type="text" title="mail@example.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" size="27" name="email" required />
			<br><br>
			Teléfono:  <input type="text" title="Teléfono compuesto por 9 números" pattern="^[9|6|7][0-9]{8}$" name="telefono" size="35" maxlength="9" required />
			<br><br>
			Asunto: <input type="text"   size="37" name="asunto" required />
			<br><br>
			Cuentenos su consulta<br>
            <textarea cols="65" rows="6" name="mensaje" style="resize:vertical;" placeholder="Escriba aquí su consulta..."></textarea>
			<br><br>



			<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0" style="margin-right:150px">
			<tr>
			<td><div align="center">
			<input type="submit" value="Enviar formulario  ">
			</div></td>
			<td><div align="center">
			<input type="Reset" value="Borrar formulario  ">
			</div></td>
			</tr>
			</table>
		</form>


	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />	<br />
	<br />	<br />	<br />	<br />	<br />	<br />	<br />  <br />	<br />	<br />	<br />	<br />	<br />	<br />  <br />  


	</div>

</body>
</html>
