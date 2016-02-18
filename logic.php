<?php
	# Possible symbols to be added
	$symbol = array("!", "@", "#", "$", "%", "^", "&", "*", "/", "\\");

	# Setting Default Photo
	$xkcdimg= "http://imgs.xkcd.com/comics/password_strength.png";

	# If picking Herolist
	$wordfile = "wordlist.txt";

	if (isset($_POST["wordfile"])) {
			$wordfile = "herolist.txt";
			$xkcdimg= "http://orig09.deviantart.net/2a9d/f/2014/020/4/6/marvel_vs_dc_universe___fan_concept_by_soul_blade22-d7337k4.jpg";
		}

	# Count # of line in $wordfile reference: http://stackoverflow.com/questions/2162497/efficiently-counting-the-number-of-lines-of-a-text-file-200mb
	$linecount = -1;
	$handle = fopen($wordfile, "r");
	while(!feof($handle)){
	$line = fgets($handle);
	$linecount++;
	}
	fclose($handle);

  # Method of generation the password
	$wordlist = file($wordfile, FILE_IGNORE_NEW_LINES);
	$password = "";
	$count = (empty($_POST["numWord"]) ? 4 : $_POST["numWord"]);

	# Validate number#
 $addNum = (empty($_POST["addNum"]) ? null : $_POST["addNum"]);

 if (!is_null($addNum) AND ($addNum > 99 OR !ctype_digit($addNum))) {
			$password .= "Please enter a valid number ranging	 0 to 99";
	}
	else {

			for ($i = 0; $i < $count; $i++) {
				$word = $wordlist[rand(0, $linecount)];
				if ($i != 0) {
					$password .= ("-".$word);
				}
				else {
					$password .= $word;
				}
			}

			#Set case
			if (isset($_POST["case"])){
				if ($_POST["case"]== "uppercase") {
				$password = strtoupper($password);
				}
				if ($_POST["case"]== "lowercase") {
				$password = strtolower($password);
				}
				if ($_POST["case"]== "fuppercase") {
				$password = ucfirst($password);
				}
			}

		#If a number is entered
			if(isset($_POST["addNum"])) {
				$password .= $addNum;
			}

		#If add a symbol is selected
			if(isset($_POST["addSymbol"])) {
				$password .= $symbol[array_rand($symbol,1)];
			}

 }
