<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xkcd Password Generator</title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="Stylesheet">
	<?php require "logic.php"; ?>
</head>

<body>
	<div class="container">
		<h1>xkcd Password Generator</h1>
		<div class="password">
			<span>Password: </span>
			<span><?php echo $password; ?></span>
		</div>

		<form  method="GET">
			<div class="numWord">
				<label for="numWord"># of words:</label>
				<select name="numWord">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</div>

			<div class="addNum">
				<input type="checkbox" id="addNum" name="addNum" value="1">
				Add a number
			</div>

			<div class="addSymbol">
				<input type="checkbox" id="addSymbol" name="addSymbol" value="1">
				Add a symbol
			</div>

			<div class="uppercase">
				<input type="checkbox" id="uppercase" name="uppercase" value="1">
				Capitalize all letters
			</div>
			<div class="lowercase">
				<input type="checkbox" id="lowercase" name="lowercase" value="1">
				Lowercase all letters
			</div>

			<input type="submit" id="submit" value="Generate">
		</form>
</div>

</body>

</html>
