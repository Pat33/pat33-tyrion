    <?php  
    function &findValue(&$array, $search, &$found = false) {
    foreach($array as &$valRef) {
        if($valRef == $search) {
            $found = true;
            $result =& $valRef;
            break;
        }
        elseif(is_array($valRef)) {
            $result =& findValue($valRef, $search, $found);
            if($found) break;
        }
    }
    
    if($found) {
        return $result;
    }
    else {
        return $found;
    }
}
// end of function code
$array = array(
    'Hello',
    'World',
    array(
        'DeeperHello',
        'DeeperWorld'
    )
);


//this thing below
$result =& findValue($array, 'DeeperHello', $found);
if($found) {
    $result = 'ModifiedDeeperHello';
}
print_r($array);

?>

<hr>
<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
echo $myValue.'<br>';                // prints the new value of $obj->value, i.e. 2.
$obj->value = 2;
echo $myValue;                // prints the new value of $obj->value, i.e. 2.
    ?>  

    <hr>
    <?php
# Copyright (c) 2003 by Dr. Herong Yang. http://www.herongyang.com/
#
   function pvrv($arg) {
      $arg = "Two";
      return $arg;
   }
   print("\n 1. Pass by value and return by value:\n");
   $x = "One"; 
   $y = pvrv($x);
   $y = "Three";
   print("    x: $x\n");
   print("    y: $y\n");

echo "<hr>"; // ------------------ 1 x 3 --------------------------------

   function prrv(&$arg) {
      $arg = "Two";
      return $arg;
   }
   print("\n 2. Pass by reference and return by value:\n");
   $x = "One"; 
   $y = prrv($x);  // references x and makes x into 2
   $y = "Three";
   print("    x: $x\n");
   print("    y: $y\n");

echo "<hr>"; // ------------------- 2 x 3 -------------------------------

   function &pvrr($arg) {
      $arg = "Two";
      return $arg;
   }
   print("\n 3. Pass by value and return by reference:\n");
   $x = "One"; 
   $y = &pvrr($x);
   echo $y."<br>";
   $y = "Three O Five";
   print("    x: $x\n");
   print("    y: $y\n");

echo "<hr>"; // -------------------- 1 x 3 ------------------------------

   function &prrr(&$arg) {
      $arg = "Two";
      return $arg;
   }
   print("\n 4. Pass by reference and return by reference:\n");
   $x = "One"; 
   $y = &prrr($x);
   $y = "Three";
   print("    x: $x\n");
   print("    y: $y\n");

// -------------------- 3 x 3 ------------------------------


    ?>
    <hr>
    <?php

    class A {
    public $foo = 1;
}  

$a = new A;
$b = $a;     // $a and $b are copies of the same identifier
             // ($a) = ($b) = <id>
$b->foo = 2;
echo "a->foo ". $a->foo."<br>\n";


$c = new A;
$d = &$c;    // $c and $d are references
             // ($c,$d) = <id>

$d->foo = 2;

echo "c->foo ". $c->foo."<br>\n";

$e = new A;

function foo($obj) {
    // ($obj) = ($e) = <id>
    $obj->foo = 2;
}

foo($e);

echo "e->foo ". $e->foo."<br>\n";
?>