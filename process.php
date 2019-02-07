<?php
   	
	$outString = ",\n{\"userCommand\" : \"";
	$switchVar = 0;

	try
	{
		//Form data passed in with post
		$formdata = array(
			'userCommand'=> addslashes($_POST['userCommand']),
			'originalCommand'=> $_POST['originalCommand'],
			'originalQuantity'=> $_POST['originalQuantity']
		);
		$switchVar = $_POST['page'];
                
                $formdata["userCommand"] = trim($formdata["userCommand"]);
		
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
                        case 6:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey7.html");
				break;
                        case 7:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey8.html");
				break;
                        case 8:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey9.html");
				break;
                        case 9:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey10.html");
				break;
                        case 10:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey11.html");
				break;
                        case 11:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey12.html");
				break;
                        case 12:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey13.html");
				break;
                        case 13:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey14.html");
				break;
                        case 14:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey15.html");
				break;
                        case 15:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey16.html");
				break;
                        case 16:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey17.html");
				break;
                        case 17:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey18.html");
				break;
                        case 18:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey19.html");
				break;
                        case 19:
				header("Location: https://userweb.cs.txstate.edu/~gma23/survey20.html");
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
