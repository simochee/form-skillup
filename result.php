<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = htmlspecialchars($_GET["name"]);
        $age = htmlspecialchars($_GET["age"]);
        echo "こんにちは、 $name さん";
        echo "<br>";
        echo "あなたは";
        if($age >= 20){
            echo "成人";
        } else {
            echo "未成年";
        }
        echo "です。"; 
    ?>
</body>
</html>