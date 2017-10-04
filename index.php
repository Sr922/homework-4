<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<br>';

$date = str_replace("-", "/", $date);
echo $date.'<br>';

if (strcasecmp($date, $tar) > 0) {
    echo 'the future<br>';
} elseif (strcasecmp($date, $tar) < 0){
	echo 'the past<br>';
} elseif (strcasecmp($date, $tar) == 0) {
	echo 'Oops<br>';
}

$positions = array();
$pos = -1;
while (($pos = strpos($date, '/', $pos+1)) !== false) {
    $positions[] = $pos;
}

$result = implode(' ', $positions);

print_r($result);
echo '<br>';

$string = "The value of \$date: ".$date;
$wordCount = str_word_count($string);
echo $wordCount.'<br>';

echo strlen($string).'<br>';

echo ord($string[0]).'<br>';

echo substr($string, strlen($string)-2).'<br>';

$dates = explode("/", $date);
foreach ($dates as $value) {
    echo trim($value);
}
echo '<br>';

function getResultForLeapYear($leapYearOrNot) {
    switch ($leapYearOrNot) {
	    case 0:
	        echo "False ";
	        break;
	    case 1:
	        echo "True ";
	        break;
	    case 2:
	        echo "Something wrong with your leap year logic";
	        break;
	}
}

foreach ($year as $value) {
	$leapYearOrNot = (0 == $value % 4) and (0 != $value % 100) or (0 == $value % 400) ;
    getResultForLeapYear($leapYearOrNot);
}
echo '<br>';

for ($x=0; $x < count($year); $x++) {
	$leapYearOrNot = (0 == $year[$x] % 4) and (0 != $year[$x] % 100) or (0 == $year[$x] % 400) ;
    getResultForLeapYear($leapYearOrNot);
}

echo '<br>';

?>