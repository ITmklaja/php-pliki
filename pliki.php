<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print_r(file('plik.txt'));
    ?>

    <?php
        $file = file('plik.txt');
        for($i = 0; $i < count($file); $i++){
            echo $file[$i] . "<br/>";
        }
    ?>

    <?php
    //       $file = file('plik.txt');
    //    $szukaj = 'eerw'; 
    //  for($i = 0; $i <= count($file); $i++){
    //    if(strpos($szukaj, $file[$i])){
    //      echo $file[$i] . "<br/>";
    //        }
    //   }
    ?>

    <?php
        $file = fopen('plik.txt', 'r');
        echo fread($file, "10");
        fclose($file);
    ?>

    <?php
        $file = fopen('plik.txt', 'w');
        echo (fwrite($file, 'hello world'));
        fclose($file);
    ?>

    <?php
        $file = fopen('plik.txt', 'w');
        fputs($file, "<p>ghiodasfg hasfihjdgbaiorg, \n
        afsdjnkjkn jknjknjknk \n
        dsjhf awuibviuarsegb asiugawer.</p>");
        fclose($file);
    ?>

    <?php
        echo filesize('plik.txt');
        echo filemtime('plik.txt');
    ?>

    <?php
        if(file_exists('plik.txt')){
            echo 'istnieje';
        }else{
            echo 'nie istnieje';
        }
    ?>

    <?php
        $katalog = "/";
        if($deskr = opendir($katalog)){
            while(($plik = readdir($deskr)) !== false){
                echo "$plik<br>";
                closedir($deskr);
            }
        }else{
            echo "nie można otworzyć pliku";
        }
    ?>
</body>
</html>