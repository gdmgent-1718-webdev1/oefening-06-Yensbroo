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

    
        $currentMonth = date('m');
        $currentMonthFull = date('F');
        $season;


        if($currentMonth>="03" && $currentMonth<="05")
            $season = "lente";
        elseif($currentMonth>="06" && $currentMonth<="08")
            $season = "zomer";
        elseif($currentMonth>="09" && $currentMonth<="11")
            $season = "herfst";
         else
            $season = "winter";


        echo "Het is de maand ${currentMonthFull}, dus het is ${season}";



    ?>
</body>
</html>