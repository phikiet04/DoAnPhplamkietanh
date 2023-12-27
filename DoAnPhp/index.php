<?php
// include_once "./dbconnect.php";
$request=$_SERVER['REQUEST_URI'];
$viewDir ='/views/';
     
         switch ($request ){
            case '/DoAnPhp':
                require __DIR__ . $viewDir . 'home.php';
                break;
            default:
            require __DIR__ .$viewDir .'404.php';    
         }

// echo $reque
var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title></title>
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
</body>

</html>