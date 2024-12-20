<?php


// how to work json file;
//1. json_encode jo hai jo array lega ya list me lega like this .
// $arr=["name"=>"abhishek","age"=>"20","email"=>"abhishek@123"];
// $json_arr=json_encode($arr);
// echo $json_arr;

//2. json_decode ye jo hai dict ke form me lega like this.
// $arr = '{"name":"abhishek","age":"20","email":"abhishek@123"}';

// JSON ko PHP object me decode kare;
// $json_arr = json_decode($arr);
// print_r($json_arr);

// PHP object ko print kare
// echo "Name: " . $json_arr->name . "\n";
// echo "Age: " . $json_arr->age . "\n";
// echo "Email: " . $json_arr->email . "\n";


// 3. kaise pata kare ki jo list/data diya gaya hai wo array hai ki nhi ?.

//$arr=["name"=>"abhishek","age"=>"20","email"=>"abhishek@123"];
// $arr=["asdfghjkj",12345,[1234567]];
// if(is_array($arr)){  //is_array se 
//     echo "this is array";
// }else{
//     echo "this is not a aray";
// }
// $arr=["name","abhishek","age","20","email","abhishek@123"];
// //unset($arr[0]);// unset takes index number we remove the values ;
// //print_r($arr);

// echo implode($arr);//given array to convert the string like this code nameabhishekage20emailabhishek@123;

// $str="Hello abhishek how are you today";
// print_r(explode(" ",$str));


//4. duplicate values ko remove krne ke liye 
// $arr =$list = ["Apple", "Banana", "Cherry", "Date", "Elderberry","Apple"];
// $res=array_unique($arr);
// print_r($res);


//  image uploaded here write code.

if (isset($_FILES['file'])){
   // echo "image uploaded";
    //print_r($_FILES);
    $file_name=$_FILES['file']['name'];

    $file_tmp=$_FILES['file']['tmp_name'];
    //$file_size=$_FILES['file']['size'];
    //$file_type=$_FILES['file']['type'];
    $folder= "upload/".$file_name;
    if(move_uploaded_file($file_tmp,$folder)){  //jo dot laga hai wo concatnate krta hai;
        echo "file uploaded";
    }
}else{
    echo "file not submitted";
}
// How to show user image.
echo "<img src='$folder' height='100px' width='100px' >";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>
    <h1>image uploaded</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="submit">

    </form>
</body>
</html>
