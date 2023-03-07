<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        this is my first php website
    </div>
    <?php
    echo"this is php";
    // fhgj
    // gffjyk
    // ffjtj
    $var1=34;
    $var2=34;
    echo $var1;
    echo $var2;
    echo"<br>";
    echo $var1+$var2;
    // operators in php
    // airthmatic operator
    echo"the value of var1 +var2 is";
    echo $var1+$var2;
    echo"<br>";
    echo"the value of var1 -var2 is";
    echo $var1-$var2;
    echo"<br>";
    echo"the value of var1 *var2 is";
    echo $var1*$var2;
    echo"<br>";
    echo"the value of var1 /var2 is";
    echo $var1/$var2;
    echo"<br>";
    //asignment operator
    $newvar=$var1;
    echo"the value of new var is";
    // $newvar-=1;
    // $newvar*=2;
     $newvar/=2;
    echo $newvar;
    //comparision operator
    echo"<br>";
    echo"the value of 1==4 is";
    echo var_dump(1==4);
    echo"<br>";
    echo"the value of 1!=4 is";
    echo var_dump(1!=4);
    echo"<br>";
    echo"the value of 1<=4 is";
    echo var_dump(1<=4);
    echo"<br>";
    echo"the value of 1>=4 is";
    echo var_dump(1>=4);
    echo"<br>";
    //increment decrement operator
   echo -- $var1;
   echo"<br>";
   echo $var1;
//    echo  $var--;
//    echo  ++$var;
//    echo  --$var;
//logical operator
// and
// or
//  xor
// !
    ?>
    <?php
    define('pi',3.14);
    // data types in PHP
    // string
    // integer
    // boolean
    // float
    // array
    // object
    echo"<br>Data types<br>";
    $var="this is a srting";
    echo var_dump($var);
    $var=45;
    echo"<br>";
    echo var_dump($var);
    $var=45.1;
    echo"<br>";
    echo var_dump($var);
    $var=true;
    echo"<br>";
    echo var_dump($var);
    echo"<br>";
    echo pi;



?>
</body>
</html>