<form name="register" class="form-horizontal" role="form" action="php/doRegister.php" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<label for="passwordAgain" class="col-sm-2 control-label">Password (again)</label>
		<div class="col-sm-10">
				<input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Password (again)">
		</div>
	</div>
	<div class="form-group">
	 		<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" id="doRegister" name="doRegister" class="btn btn-default">Register</button>
		</div>
		</div>
</form>