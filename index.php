<!DOCTYPE html>
<head>
	<title>srj_001</title>
</head>
<body>
	<pre>
	<?php
	$stuff = array("name" => "Chuck",
	"course" => "WA4Exccx", "last name"=> "Valetov");
	foreach($stuff as $k => $v){
		echo "Keys=",$k, "Value=",$v,"\n";
	}
	$thing = FALSE;
	echo("One\n");
	print_r($thing);
	var_dump($thing);
	echo ("Two\n");
	var_dump($thing);
	$va[]="Hello";
	$va[]="World§";
	$va[]="World2";
	$va[]="World3";
	$va[]="World4";
	$va[]="World5";
	$va[]="World6";
	$va[]="World7";
	print_r($va);
	echo"\n\n\n";

	for ($i=0; $i < count($va); $i++){
		echo "I=",$i, " Val=", $va[$i],"\n";
	}

	$products = array(
		'paper' => array(
			'copier' => "Copier & Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser printer",
			'photo' => "Photographic paper"),
		'pens' => array (
			'ball' => "Ball Point",
			'hilite' => "Highlighters",
			'marker' => "Markers"),
		'misc' => array (
			'tape'=> "Sticky tape",
			'glue'=> "Adhesives",
			'clips' => "Paperclips")
		);
	
		foreach($products as $k => $v){
			echo "key is ",$k ,"\n";
		};

		echo $products["paper"]["copier"];
		echo "\n".count($products)."\n\n";

		$za["name"]= "Chuck";
		$za["course"]= "WA4E";
		if (array_key_exists('course',$za)){
			echo "Courese exist\n";
		} else {
			echo "Courese does not exist\n";
		}

		echo(isset($za['name']))? "name is set\n" : "name is not set\n";
		echo(isset($za['addr']))? "addr is set\n" : "addr is not set\n";

		$name = $za['name']?? 'not found';
		$addr = $za['addr']?? 'not found';

		echo "Name=$name\n";
		echo "Address=$addr\n\n\n";

		$inp = "This is a sentence with seven words";
		$temp = explode (' ', $inp);
		var_dump ($temp);
		print_r ($temp);

		$stuff = array('course' => 'PHP-Intro', 'topic' => 'Arrays');
		var_dump (isset($stuff['section']));

	?>
	</pre>
</body>
