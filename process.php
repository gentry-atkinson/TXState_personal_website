<?php
   	
	$outString = "{\"userCommand\" : \"";
	$switchVar = 0;

	try
	{
		//Form data passed in with post
		$formdata = array(
			'userCommand'=> $_POST['userCommand'],
			'originalCommand'=> $_POST['originalCommand'],
			'originalQuantity'=>$_POST['originalQuantity']
		);
		$switchVar = $_POST['page'];
		
		$outString .= $formdata['userCommand'];
		$outString .= "\", \"originalCommand\" : \"";
		$outString .= $formdata['originalCommand'];
		$outString .= "\", \"originalQuantity\" : \"";
		$outString .= $formdata['originalQuantity'];
		$outString .= "\"}\n";

		if (is_writable("logoCommands.json")){		
			$outFile = fopen("logoCommands.json", "a");
			fwrite($outFile, $outString);
			fclose($outFile);
			echo "This page is ";
			echo $switchVar;
		}
		else{
			echo "File is not writable.";
		}

		switch($switchVar){
			case 1:
				//redirect('survey2.html');
				echo "Caught 1";
				break;
			default:
				echo "Bad page number."
		}
	}
	catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

?>
