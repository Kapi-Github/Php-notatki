<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //nl2br(string) przed kazdym znakiem konca linii automatycznie wstawi <br/>

        //wordwrap() max ilosc znakow w linii

        $text = <<<TX
            Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Itaque nemo molestias illum 
            eos, vero quaerat? Doloribus ab expedita quasi 
            ratione unde. Eum soluta odio, et dolor nostrum sunt 
            ad totam, cum cumque recusandae aspernatur. 
            MolestiaerationDeserunt iste ad laboriosam, 
            nesciunt reprehenderit possimus 
            maiores recusandae ea inventore accusamustyu omnis.
        TX;

        echo wordwrap($text, 50, "<br>\n", true);

        //strtoupper(string) do duzych
        //strtolower(string) do malych
        //opcjonalnie jesli ma zmienic postac kodowanie to wtedy mb_strtoupper/lower(string, [kodowanie])

        //ucfirst() pierwsza litera zdania duza
        //ucwords() pierwsza litera kazdego slowa duza


        //FUNKCJE USUWANIA CIAGU ZNAKOW

        //biale znaki na poczatku lub na koncu zdania np.(spacja - 32, tab - 9, nowa linia - 10, powrot karetki - 13, tab pionowa - 0)
        //trim - usuwa podane znaki z poczatku i konca zdania 
        //ltrim - tylko z poczatku
        //rtrim - tylko z konca


        //FUNKCJE ANALIZOWANIA CIAGU ZNAKOW

        //strlen(string) - zwraca ilosc znakow, opcjonalnie mb_strlen - modyfikacja kodowania

        echo "<br><br>";
        echo "Znaki: ", strlen($text);

        //strstr(string, szukana fraza) - rozroznia wielkosc liter, jesli nie chcemy patrze\c na wielkosc liter to wtedy trzeba uzyc stristr() zwraca tekst od znalezionego albo false

        echo "<br><br>";
        echo nl2br(strstr($text, "dolor"));

        //subpos(string, szukany podciag, pozycja w ciagu zrodlowym) - szuka slowa jezeli znadzie to zwroci jego indeks
        //substr(string, indeks poczatku, dlugosc)

        echo "<br><br>";
        echo substr($text, -14, 5);

        //strtok(string, ciag znakow ktory rozdziela) - rozdziela tekst jezeli dojdzie do konca to zwraca false, zeby zwrocila kolejne ciagi warto wywolac ja w petli

        //FUNKCJE DO POROWNYWANIA CIAGOW

        //strcmp(string1, string2) - porownuje stringi, <0 jesli string1 jest mniejszy od string2, >0 jesli string1 jest wiekszy od string2, 0 jesli sa rowne

        //strcasecmp() - dziala tak samo jako strcmp() tyle ze patrzy na wielkosc liter
    ?>
</body>
</html>