<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 1;

        function show(){
            // global $number;
            echo "Wartość: ", $GLOBALS['number'];
        }

        show();
        echo "<br>";

        //zmienne lokalne

        function localVariable(){
            $i = 1;
            echo "Wartość I: $i<br>";
            $i++;
        }

        localVariable();
        localVariable();
        localVariable();


        echo "<br>";
        //zmienne statyczne

        function staticVariable(){
            static $i = 1;
            echo "Wartość I: $i<br>";
            $i++;
        }

        staticVariable();
        staticVariable();
        staticVariable();

        echo "<br>";

        //przekazywanie argumentu do funckji

        function value(&$liczba){
            $liczba+=10;
        }

        $liczba = 0;
        echo "Przed: $liczba";
        value($liczba);
        echo "<br>Po: $liczba";

        //Utworz funkcje styl, 2 argumenty, 'text' - tresc tekstu wyswietlic, 'color' - kolor tekstu, 'kolor' - default red, wywolac ja trzykrotnie, ("tytul", "niebieski"), ("rodzial 1", "zielony"), ("tresc", "czerwony");

        function styledText($text, $color = "red"){
            echo "<p style='color: $color'>$text</p>";
        }

        styledText("Tytuł", "blue");
        styledText("Rodział 1", "green");
        styledText("Treść");

        function triangle($a, $b, $c){
            if($a >= $b + $c || $b >= $a + $c || $c >= $a + $b){
                return "Nie da się go zbudować z takich boków";
            }

            $half = ($a + $b + $c) / 2;
            $result = round($half * ($half-$a) * ($half-$b) * ($half-$c), 2);
            
            return "Pole wynosi: $result";
        }

        echo "Trójkąt: ", triangle(2, 5, 6);

        //FUNCKCJE TABLICOWE

        $testTab = [2, 34, 435, 2345 , 1231, 123, 1234, 45];
        echo "<br>",sizeof($testTab);
        echo "<br>",count($testTab),"<br>";

        //SORTOWANIE

        //sort - sort. tablicy indeksowanej od najm do najw
        //rsort - sort. tablicy indekoswanej od najk do najm
        //asort - asocj. wg zawartości od najm do najw
        //arsort - asocj. wg zawartości od najw do najm
        //ksort - asocj. wg klucza od najm do najw
        //krsort - asocj. wg klucza od najw do najm

        $sortingTab = [234,2,34,234,25,4,234,36546,1234,453,234,345,123,25];
        echo "<br> Before sort: <br><br>";
        for($i = 0; $i < count($sortingTab); $i++){
            echo $sortingTab[$i], " ";
        }

        sort($sortingTab);

        echo "<br> After sort: <br><br>";
        for($i = 0; $i < count($sortingTab); $i++){
            echo $sortingTab[$i], " ";
        }

        echo "<br><br>";

        //WYSZUKIWANIE in_array(element, array);
        //time() - zwraca inf. na temat biezacej daty i czasu
        //getDate([znacznik czasu]) - jest zwiazna z przekazywaniem inf o czasie, argument jest opcjonalny, zwraca asoca
        // seconds - sekundy
        // minutes - minuty
        // hours - godziny
        // mday - dzien miesiaca
        // wday - dzien tygodnia
        // mon - miesiac jako $liczba
        // year - rok w postaci cztrecyfrowej
        // yday - numer kolejnego dnia roku
        // weekday - nazwa dnia tygdonia po angielsku
        // month - nazwa miesiace po angielsku
        // 0 - aktualne znacznik czasu

        var_dump(getDate());
    ?>
</body>
</html>