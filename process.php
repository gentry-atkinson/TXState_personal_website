<?php
   	
	$outString = ",\n{\"userCommand\" : \"";
	$switchVar = 0;

	try
	{
		//Form data passed in with post
		$formdata = array(
			'userCommand'=> $_POST['userCommand'],
			'originalCommand'=> $_POST['originalCommand'],
			'originalQuantity'=> $_POST['originalQuantity']
		);
		$switchVar = $_POST['page'];
		
		$outString .= $formdata['userCommand'];
		$outString .= "\", \"originalCommand\" : \"";
		$outString .= $formdata['originalCommand'];
		$outString .= "\", \"originalQuantity\" : \"";
		$outString .= $formdata['originalQuantity'];
                $outString .= "\", \"date\" : \"";
		$outString .= date("Y/m/d");
                $outString .= "\", \"time\" : \"";
		$outString .= date("H:i:s");
		$outString .= "\"}\n]";

		if (is_writable("logoCommands.json")){		
			$outFile = fopen("logoCommands.json", "c");
                        fseek($outFile, -2, SEEK_END);
			fwrite($outFile, $outString);
			fclose($outFile);
			//echo "This page is ";
			//echo $switchVar;
		}
		else{
			echo "File is not writable.";
		}

		switch($switchVar){
			case 1:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey2.html");
				break;
                        case 2:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey3.html");
				break;
                        case 3:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey4.html");
				break;
                        case 4:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey5.html");
				break;
                        case 5:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey6.html");
				break;
			default:
				header("Location: https://userweb.cs.txstate.edu/~gma23/thanks.html");
		}
	}
	catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
        exit();

?>
