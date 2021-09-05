<?php

//  1- We have a message encoded in ASCII hexadecimal format. For example:
// $hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
// Decode it back to read the message.


   $hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
      echo  hex2bin( $hexMessage );
          echo '<br>' ;


// 2- We have HTML content stored inside a variable. For example:
// $htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
// Find a way to remove all HTML tags from the content (keeping only the text inside it)

     $htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
        echo strip_tags($htmlContent);
           echo '<br>' ;

// 3- Some of our website users submit their form inputs with extra spaces (before or after the actual data). For example:
// $username = "  Kareem Fouad ";
// Find a way to remove these extra spaces.

     $username = "  Kareem Fouad ";
       echo trim( $username);
         echo '<br>' ;

 //  4- Displaying large numbers in the website may be hard to read. 
//  It’s too hard to read a number like this:
//  $num = 15023198.91;
//  Find a way to display the numbers in this grouped format: 15,023,198.91
         
        $num = 15023198.91;
          echo number_format($num  , 2);
           echo '<br>';


//  4- Given an associative array, For example:
// $employeePositions = [
//     'kareem fouad' => 'backend',
//     'ahmed bahnasy' => 'frontend',
//     'mohammed nabeel' => 'android', ];
// Convert it into two numeric arrays: one for keys only and the other for values only.

$employeePositions = [
  'kareem fouad' => 'backend',
  'ahmed bahnasy' => 'frontend',
  'mohammed nabeel' => 'android', ];

    $employees = array_keys($employeePositions);
    $positions = array_values($employeePositions);
 

     echo '<pre>';
     print_r($employees);
     print_r($positions);
     echo '</pre>';
// 5- Given a numeric array of three elements, For example:
// $nums = [4, 7, 1];
// Destructure the array into three variables $x, $y and $z (in only one statement).

$nums = [4, 7, 1];

list ($x , $y , $z ) = $nums ;

echo $x , $y , $z ;

echo '<br>';





// 6- Given an associative array, For example:
// $userData = [
//     'name' => 'kareem',
//     'job' => 'backend',
//     'language' => 'php',
//     'framework' => 'laravel',
// ];
// Destructure the array into variables $name, $job … etc (in only one statement, variable names 
// should be the same as key names).


$userData = [
        'name' => 'kareem',
        'job' => 'backend',
        'language' => 'php',
        'framework' => 'laravel',
    ];
    extract ($userData);
    echo $name , $job , $language , $framework  ;

?>