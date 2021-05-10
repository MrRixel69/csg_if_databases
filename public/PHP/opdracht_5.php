<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$reeks=array();
//Deze for-loop vult de array $reeks met getallen
for ($t=1;$t<=8;$t++) {
  array_push($reeks,2*$t-1);
}
print_r($reeks);
echo "<br>";

$macht3=array();
foreach ($reeks as $getal) {
    array_push($macht3, pow($getal,3));
}
print_r($macht3);
//echo "<br";




/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>