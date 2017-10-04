<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/04/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

 //Question 2
echo "<hr>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br><br>";

//Question 3
echo "<hr>";                  
$r = strcmp($date, $tar);
if ($r>0) 
{
 echo "The Future";
}
elseif ($r<0) 
{
 echo "The Past";
}
elseif ($r=0) 
{
 echo "Oops";
}
echo "<br><br>";

//Question 4
echo "<hr>";                                  
echo "The positions of '/' in \$date are: ";                     
$loc = strpos($date,'/',1);
echo $loc." ";
$loc2 = strpos($date, '/',5);
echo $loc2."<br>";
echo "<br>";

//Question 5
echo "<hr>";
$lenght = str_word_count($data);
echo "The number of words in \$date is: ".$lenght."<br><br>";

//Question 6
echo "<hr>";
$x = strlen($date);
echo "The lenght of the string \$date is: ".$x."<br><br>";

//Question 7
echo "<hr>";
echo "The ASCII value of the first character of \$date is: ".ord($date)."<br><br>";

//Question 8
echo "<hr>";
$strt = strlen($date);
echo "The last two characters in \$date are: ".substr($date, $strt-2)."<br><br>";

//Question 9
echo "<hr>";
$arr1 = explode('/', $date);
print_r($arr1);
echo "<br><br>";

//Question 10
echo "<hr>";
echo "Leap years with their respective values of being true or flase are:<br>";
 foreach ($year as $value)
 {
 	for ($i=0; $i < 1 ; $i++) 
 	{ 
 	
     switch ($value) 
     {
    	case (($value%4 == 0) and ($value%100 !=0) or ($value%400) ==0):
    		echo $value.": True"."<br>";
    		break;
    	
    	default:
    		echo $value.": False"."<br>";
    		break;
     }
    }
 }

?>