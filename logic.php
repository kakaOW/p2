<?php
	# Possible symbols to be added
	$symbol = array("!", "@", "#", "$", "%", "^", "&", "*", "/", "\\");
  # var_dump ($symbol);

  # Method of generation the password
	if($wordlist = file("wordlist.txt", FILE_IGNORE_NEW_LINES)) {
		$password = "";
		$count = (empty($_GET["numWord"]) ? 4 : $_GET["numWord"]);
		for ($i = 0; $i < $count; $i++) {
			$word = $wordlist[rand(0, 58110)];
			if (isset($_GET["uppercase"])) {
				$word = strtoupper($word);
			}
			if (isset($_GET["lowercase"])) {
				$word = strtolower($word);
			}
			if ($i != 0) {
				$password .= ("-".$word);
			} else {
				$password .= $word;
			}
		}

	#If add a number is selected
		if(isset($_GET["addNum"])) {
				$password .= rand(0, 9);
		}

	#If add a symbol is selected
		if(isset($_GET["addSymbol"])) {
				$password .= $symbol[array_rand($symbol,1)];
		}

	}
