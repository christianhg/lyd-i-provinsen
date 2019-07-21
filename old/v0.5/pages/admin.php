<?php
	if($loggedIn)
	{
?>
<form id="addFeatureForm" method="post" action="php/doAddFeature">
	<fieldset>
		<p>
			<label for="title">Titel</label>
			<input type="text" name="title">
		</p>
		<p>
			<label for="date">Dato</label>
			<input type="date" name="date">
		</p>
		<p>
			<label for="content">Indhold</label>
			<textarea name="content"></textarea>
		</p>
		<p>
			<label for="public">Offentliggjort</label>
			<input type="checkbox" name="public">
		</p>
		<p>
			<input type="submit" name="doAddFeature" value="Tilføj feature">
		</p>
	</fieldset>
</form>
<?php
		block("logout");
	}
	else
	{
		block("login");
	}
?>