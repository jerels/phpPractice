<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $charName = 'John';
        $charAge = 35;

        echo "There once was a man named $charName <br>";
        echo "He was $charAge years old <br>";
        echo "He really liked the name $charName <br>";
        echo "But didn't like being $charAge <br>";


        $phrase = "To be or not to be";
        $age = 30;
        $gpa = 3.8;
        $isHappy = true;
        $break = "<br>";
        echo strtolower($phrase);
        echo $break;
        echo strtoupper($phrase);
        echo $break;
        echo strlen($phrase);
        echo $break;
        echo $phrase[0];
        echo $break;
        $phrase[0] = "B";
        echo $phrase;
        echo $break;
        echo $phrase[0];
        echo $break;
        echo str_replace('Bo', 'Jerel', $phrase);
        echo $break;
        echo $phrase;
        echo $break;
        echo substr($phrase, 9, 3);
    ?>
</body>
</html>