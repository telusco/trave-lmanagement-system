<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        padding: 23px;
        margin: auto;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        this is container
        <?php
    $age=6;
    if($age>18){
        echo"you can go to the party";
    }
    elseif($age=6){
        echo"special case";
    }
    else{
        echo"you can not go to the party";
    }
    // array in php
    $languages=array("c++","python","nodejs");
    echo $languages[0];
    echo count($languages);

    //loops in php
    $a=0;
    while ($a <= 10) {
        echo "<br>the value of a is:";
        echo $a;
        $a++;
    }
  
    //iterating array in php using while loop
    $a=0;
    while ($a < count($languages)) {
        echo "<br>the value of language is:";
        echo $languages[$a];
        $a++;
    }
      //do while loop
      $a=0;
      do{
           echo "<br>the value of a is:";
           echo $a;
           $a++;
       }  while ($a <= 10);
     //for loop 
   
     for ($a=0; $a < 10; $a++) { 
        echo "<br>the value of a from for loop  is:";
        echo $a;
     }

        foreach($languages as $values){
        echo"<br> the value from foreach loop is:";
        echo $values;
     }
     //function in php
     function printnumber($number){
        echo"<br>the num is:";
        echo$number;
     }
     printnumber(45);
     printnumber(4);
     printnumber(5);




    ?>
    </div>
</body>
</html>