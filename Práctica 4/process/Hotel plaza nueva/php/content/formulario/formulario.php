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
			Teléfono: <input type="text" title="Teléfono compuesto por 9 números" pattern="^[9|6|7][0-9]{8}$" name="telefono" size="35" maxlength="9" required />
			<br><br>
			Asunto: <input type="text"   size="37" name="asunto" required />
			<br><br>
			Cuentenos su consulta<br>
            <textarea cols="65" rows="6" name="mensaje" style="resize:vertical;" placeholder="Escriba aquí su consulta..."></textarea>
			<br><br>


			
			<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0" style="margin-right:150px">
			<tr>
			<td><div align="center">
			<input type="submit" value="Enviar formulario">
			</div></td>
			<td><div align="center">
			<input type="Reset" value="Borrar formulario">
			</div></td>
			</tr>
			</table>
		</form>
		
		<!--<form name="frmContacto" method="post" action="mail.php">
<table width="500px">
<tr>
<td>
<label for="first_name">Nombre: *</label>
</td>
<td>
<input type="text" name="nombre" maxlength="50" size="25">
</td>
</tr>
<tr>
<td valign="top"">
<label for="last_name">Apellido: *</label>
</td>
<td>
<input type="text" name="last_name" maxlength="50" size="25">
</td>
</tr>
<tr>
<td>
<label for="email">Dirección de E-mail: *</label>
</td>
<td>
<input type="text" name="email" maxlength="80" size="35">
</td>
</tr>
<tr>
<td>
<label for="telephone">Número de teléfono:</label>
</td>
<td>
<input type="text" name="asunto" maxlength="25" size="15">
</td>
</tr>
<tr>
<td>
<label for="comments">Comentarios: *</label>
</td>
<td>
<textarea name="mensaje" maxlength="500" cols="30" rows="5"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="Enviar">
</td>
</tr>
</table>
</form>-->
		
		
	  
	  
	  
	</div>

</body>
</html>