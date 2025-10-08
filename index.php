<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_homework</title>
</head>
<body>
    <?php
    echo "Hello world,print <br>"; //echo youse 
    print "Hello world,print <br>"; // print youse
    printf("Hello world ,print <br>");//printf youse
    print_r("Hello world,print <br>");// print_r youse


    // varibole declare

    $name ="pranjit"; //string
    $age =21;         //number
    var_dump($age);   //bolean


    // constant declare
    // clase constant
    define("SITE_NAME", "I'come to home <br>");
     echo SITE_NAME;
     
     // constant array
     define("cars",[
     "pranjit",
     "BMW",
     "toyota<br>"]);

     echo cars[2];

     // Global varibole use

      $name="pranjit  </br>";
      
    define("POST_NAME", "mywebsite<br>");
        function greet(){
        echo POST_NAME.$GLOBALS['name'];
        }
       greet();
     // string-int

       $x=30;
       $y=(int)$x;

       echo$y . "<br>";
       echo gettype($y). "<br>"; 

     //int-float
     $x =100;
     $y =3.14;
     echo is_float($y). "<br>";
     echo gettype($y). "<br>";
    
    






    
    
    ?>
    
</body>
</html>