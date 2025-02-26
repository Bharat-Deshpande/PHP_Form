<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }


    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here: </p>
        <?php
        $age = 34;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else{
            echo "You cannot go to the party";
        }

        //Loops in PHP
        // 1. For loop
        for($i=0;$i<10;$i++){
            echo "<br>The value of i is: ";
            echo $i;
        }

        // 2. While loop
        $i = 0;
        while($i<10){
            echo "<br>The value of i is: ";
            echo $i;
            $i++;
        }

        // 3. Do-While loop
        $i = 0;
        do{
            echo "<br>The value of i is: ";
            echo $i;
            $i++;
        }while($i<10);

        // 4. ForEach loop
        $languages = array("Python", "C++", "PHP", "NodeJS");   
        foreach($languages as $value){
            echo "<br>The value of language is: ";
            echo $value;
        }

        //Arrays in PHP
        $languages = array("Python", "C++", "PHP", "NodeJS");
        echo $languages[0];
        echo count($languages);

        function print5(){
            echo "FIVE";
        }
        print5();

        function print_number($number){
            echo "<br>Your number is: ";
            echo $number;
        }   
        
        ?>
    </div>
</body>
</html>