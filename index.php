<?php

// isset() function use for checking a variable is declare or not 

$name = "Jual";

echo isset($name); // 1 means true


$null_var = null;

if (isset($null_var)){
    echo "Hello";
} else {
    echo "Bye"; // output Bye
}



// Null Coalescing Operator

$nill = null; 

$actul_value = $nill ?? "something"; // jodi nill e value set kora na thake tahole somthing k add koro.

echo $actul_value;

?>