<?php
//learning to use the GET method
echo '  <head>
            <title>Whats My Generation?</title>
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="style.css" type="text/css">
        </head>';

//the year the user inputs
$age = $_GET['age'];

//all possible generations
$userGen = array(
    'greatest'=>'Greatest Generation', 
    'silent'=>'Silent Generation',
    'babyBoomer'=>'Baby Boomer Generation',
    'babyBust'=>'Baby Bust Generation or Gen X',
    'millenial'=>'Millenial Generation or Gen Y',
    'genZ'=>'iGen, or Generation Z'
    );

//if the user inputs a year before 1900 of after 2018, they get an error
$userError = 'You didn\'t input a year between 1900 and 2018.';


//displays the result of the user's information
$results = 'Since you were born in '. $age . ' you are in the ';

//tells the user what the generation is, based on the number they input
if ($age < 1900 OR $age > 2018){
    echo $userError;
}

else if( $age >= 1900 AND $age <= 1924){
    //The Greatest Generation
    echo $results . $userGen['greatest'] .'.';
}

else if ($age >= 1925 AND $age <= 1945){
    //The Silent Generation
    echo $results . $userGen['silent'] .'.';
}

else if ($age >= 1946 AND $age <= 1964){
    //The Baby Boomer Generation
    echo $results . $userGen['babyBoomer'] .'.';
}

else if ($age >= 1965 AND $age <= 1979){
    //The Baby Bust Generation, GenX
    //if 1975-1985, Xennial
    echo $results . $userGen['babyBust'] .'.';
}

else if ($age >= 1980 AND $age <= 1997){
    //The Millenials, GenY
    echo $results . $userGen['millenial'] .'.';
}

else if ($age >= 1998 AND $age <= 2018){
    //iGen, GenZ
    echo $results . $userGen['genZ'] .'.';
}

//add button to return to homepage
echo '  <br><button>
            <a href="http://localhost/tutorials/WhatsMyGen/getPractice.html">Go Back</a>
        </button>'
?>