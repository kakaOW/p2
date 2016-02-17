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
		<h1>Awesome xkcd Password Generator</h1>
		<div class="password">
			<span><?php echo $password; ?></span>
		</div>

		<form action="index.php" method="POST">
<!--# of words selector-->
			<div class="numWord">
				<label for="numWord"># of words:</label>
				<select name="numWord">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4" selected>4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</div>
<!--options for case-->
			<div class="case">
				<label for="case">Case:</label>
				<select name="case">
					<option value="default" selected>Default</option>
					<option value="uppercase">All Uppercase</option>
					<option value="lowercase">All Lowercase</option>
					<option value="fuppercase">Capitalize First Letter</option>
				</select>
			</div>
<!--add number to the password-->
			<div class="addNum">
				<input type="checkbox" id="addNum" name="addNum" value="1"> Add a random number (0-9)
			</div>
<!--add symbol to the password-->
			<div class="addSymbol">
				<input type="checkbox" id="addSymbol" name="addSymbol" value="1"> Add a symbol
			</div>
<!--make it fun and use hero list as password-->
			<div class="wordfile">
				<input type="checkbox" id="wordfile" name="wordfile" value="1"> Use <span class="marvel">Marvel</span> & <span class="dc">DC Universe</span> Heroes as password!
			</div>

			<input type="submit" id="submit" value="Generate">
		</form>
	</div>

	<div class="container">
		<div class="xkcdInfo">
			<h2>Purpose</h2>
			<p>
				This is an xkcd style password generator that makes password easier to remember!
			</p>
			<img class="comic" src="<?php echo $xkcdimg; ?>" alt="xkcd style password comic">
		</div>
	</div>
</body>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>CSCI E-15 Yung Wei Project 2</p>
      </div>
    </div>
  </div>
</footer>
</html>
