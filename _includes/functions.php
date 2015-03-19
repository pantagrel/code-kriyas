<?php
	// get contents of a directory.
	// return the files of designated suffix and the date they were created
	function dateSort_directory($directory, $suffix){
		$allFiles = scandir($directory);
		foreach ($allFiles as $key => $value){
			if (substr_count($value, $suffix) > 0){
				$onlySuffixedFiles[] = $value;
				$tempDateHolder[] = date ("m/d/y H:i:s", filemtime($directory.$value));
				}	
		}
		// here's where i had to combine two arrays
		// $datedFiles = array_combine($tempDateHolder, $onlySuffixedFiles);
		// sort by key:
		// krsort($datedFiles, $sort_flags = SORT_REGULAR);
		// return $datedFiles;

		return $onlySuffixedFiles;
	}
	// print_r(dateSort_directory('code-kriyas/', '.php'));
?>

<?php
	$about1 = 
		"<p>
		Scintillus is a work in progress. We aim to cultivate a creative community for people who want to make compelling and beautiful work on small scales. We are interested in low- or no-budget enterprises, being out and about, and the nebulous realm where ideas, emotions and the singular beauty of the physical world converge. We like animated conversation with well-informed people.
		</p><p>
		We want independence from routine and the freedom to act naturally. We want to reduce and reuse before we recycle. We want to celebrate in our way, however we can, the dazzling weirdness in the spectrum of life, from black holes to mascara.
		</p><p>
		We are ambitious, we are curious. We believe that perfection is a difficult myth and no person is entirely what they seem. We like our space. We aren’t exclusive. We love earnestness and geeky devotion to the good idea. We strive for balance.
		</p>"

	function show_aboutText($about1){}
		return $about1;
	}
?>