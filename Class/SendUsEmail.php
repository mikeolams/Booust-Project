<?php

/**
 * 
 */
class SendUsEmail 
{
	public static function processMail($parem)
	{
		# code...
		date_default_timezone_set("African/Lagos");
		// Open or Create contact.csv if not available
		$file = fopen("contact.csv", "a");

		// Create csv columns once
		// fputcsv($file, $arrayName = array('' => , ); fields)
		fputcsv($file, array('Name',"Email", "Message", "Date"));

		// Add Contact details to csv file
		fputcsv($file,array($parem['name'],$parem["your-email"],$parem["message-text"],date('Y-m-d h:i:sa')));

		// close file
		fclose($file);

		// Email message to be sent to submitted request
		$message = "Hello".$parem['name'].',\n\nThank you for contacting us.\n\nRegards';
		$headers = "Reply-To: Movie Admin <md@flamerentals.com>\r\n";
		$headers .= "Return-Path:Movie Admin <md@flamerentals.com>\r\n";
		$headers .= "From: Movie Admin <md@flamerentals.com>\r\n";

		// send mail
		mail($parem['your-email'],"Booust Movie request",$message,$headers);

		// access Information from CSV file
		$csv = array_map("str_getcsv", file(contact.csv));
		echo $csv[sizeof($csv)-1][0] . '<br>';
		echo $csv[sizeof($csv)-1][1] . '<br>';
		echo $csv[sizeof($csv)-1][2] . '<br>';
		echo $csv[sizeof($csv)-1][3] . '<br>';


	}
}










?>
