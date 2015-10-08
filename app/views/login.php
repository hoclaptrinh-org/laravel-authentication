<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<form method="POST" action="login">
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" type="text" name="email">
					</div>

					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="password" name="password">
					</div>

					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
		<footer class="text-center">
			<a href="http://www.hoclaptrinh.org">&copy; hoclaptrinh.org</a>
		</footer>
	</div>
	<style type="text/css">
		form {
			margin-top: 150px;
		}
	</style>
</body>
</html>