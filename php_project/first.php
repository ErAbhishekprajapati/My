<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hi Abhishek ji</h1>
    <?php
    // for ($a=1;$a<=10;$a++)
    // //echo "<br>"
    // echo $a;
    // $i=10;
    // while ($i>0)
     
    // {
    //     // if ($i>=8){
    //     //     echo "Hi";
    //     // }
    //     // else{
    //     //     echo "hello";
    //     // }
        
    //     echo $i;
    //     $i--;           
    // }
    // for each;
    // $colors = array("red", "green","blue","yellow",2);
    // foreach ($colors as $x){
    //     if($colors =="red"){
    //         echo "h";
    //     }

    //     echo "this is color $x <br>";
    // }
    
// $a = readline('Input the text: ');

// switch ($a) {
//     case "red":
//         echo "Your favorite color is red!";
//         break; // यह `switch` से बाहर निकलने के लिए आवश्यक है
//     case "blue":
//         echo "Your favorite color is blue!";
//         break;
//     case "green":
//         echo "Your favorite color is green!";
//         break;
//     default:
//         echo "Your favorite color is neither red, blue, nor green!";
// }

// Function 

// function myage($n){
//     if ($n >=18){
//         echo "Adult";
//     }
//     elseif($n>=13){
//         echo "child";
//     }
//     else{
//         echo "not Adult";
//     }
//     echo $n;
// }
// myage(21);

// $myarry=Array("Hi","abhishek","prajapati",1);
// // foreach ($myarry as $x){
// //     echo $x;

// // }
// // $myarry[0]=5;
// // var_dump ($myarry);
// array_push($myarry,"ji");
// var_dump($myarry);

// 1.Regex 

// $string = "Hello World!";
// $pattern = "/Hello World/";

// if (preg_match($pattern, $string)) {
//     echo "Match found!";
//     echo $string;
// } else {
//     echo "No match!";
// }

//2.Regex

// $string = "cat, bat, rat, cat,cat";
// $pattern = "/cat/";

// preg_match_all($pattern, $string, $matches);
// print_r($matches);

//3.Regex

// $string = "The quick brown fox jumps over the lazy dog.";
// $pattern = "/dog/";
// $replacement = "cat";

// $result = preg_replace($pattern, $replacement, $string);//First values takes pattern second takes replacment and third takes string
// print_r ($result);
// var_dump ($result);// this gives string index like this The quick brown fox jumps over the lazy cat.string(44)

//4.Regex

// $string = "one, two, three, four";
// $pattern = "/,\s*/";

// $res = preg_split($pattern,$string);
// print_r($res);
// Mobile number validation pattern.
// $number = "+919876543201";
// $pattern = "/^(\+91|0)?[6-9]\d{9}$/";

// if (preg_match($pattern, $number)) {
//     echo "Valid mobile number.";
// } else {
//     echo "Invalid mobile number.";
// }
// Email Validation ke liye,
$email="anhishek123@gmail.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@gmail\.com$/";// you are given like this=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
if(preg_match($pattern,$email)){
    echo "valid email id ";
}
else{
    echo "invalid email id";
}
    ?>
</body>
</html>