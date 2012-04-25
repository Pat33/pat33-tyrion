<?php



$query_item = array("fo&o", "b&ar", "ha&llo", "wo&rld");
		echo '<pre>';
		print_r ($query_item);
		echo '</pre>';

foreach($query_item as $key => &$value)
{
    $value = str_replace('&',' test ',$value);
}



		echo '<pre>';
		print_r ($query_item);
		echo '</pre>';

?>

<?php
class BaseClass {
   function __construct() {
       print "In BaseClass constructor\n";
   }
}

class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();
       print "In SubClass constructor\n";
   }
}

$obj = new BaseClass();
echo '<br>';
$obj = new SubClass();
echo "<hr>";
echo ("" < -1);
echo "<hr>";
        $testtest = "dog";
        str_replace( "dog", "cat", $testtest);
        echo $testtest;
echo "<hr>";
$afsd = "dog";
        $bodytag = str_replace("dog", "cat", $afsd );
        echo $bodytag;
?>
