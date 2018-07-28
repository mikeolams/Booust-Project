<?php


/* A simple program that echos out 
years between 1980 and 2018
*/



//Initialize Start year

$timestamp = strtotime("1980");
$year = date('Y',$timestamp);

//Initialize Stop year

$timestamp = strtotime("2018");
$stopYear = date('Y',$timestamp);

//initialize counter
$count =0;

// funtion to determine the leap years included
 function isLeapYear($year)
{
	$isLeapYear = false;
	if((($year%4)==0 and ($year%100)<>0)or($year % 400)==0)
		$isLeapYear =true;
	return $isLeapYear;
}


//run the loop to do the work

while ( $year<= $stopYear) {
	if (isLeapYear($year)) {
		$count += 1;
		echo $year ."Leap Year" . '<br>';
	}
		else
			echo $year .'<br>';

		//Increament year to go to the next year
		$year += 1;
}

// print the count number of leap years
echo '<br>'. "Total Number of Leap Years = " . $count;


?>