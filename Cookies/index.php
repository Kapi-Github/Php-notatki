<?php
    $month = 2592000 + time();
    setcookie("wizyta", date("Y-m-d G:i:s"), time() + 3600 );
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Pliki cookies to niewielkie pliki tekstowe wysyłane przez serwer lub skrypt do przeglądarki i umieszczane przez nią na dysku użytkownika. Pliki te są częścią specyfikacji protokołu HTTP i są wysyłane do przeglądarki w postaci nagłówka o nazwie Set-Cookie. Max 4kB pamięci może zajmować taki plik.
        //1 - serwer wysyła do przeglądarki nagłówek Set-Cookie 
        //2 - przeglądarka zapisuje plik cookie na dysku użytkownika
        //3 - Przy kolejnym połączeniu z serwerem przeglądarka wysyła na serwer przechowywany na dysku plik cookie

        //Tworzenie pliku cookie - setcookie(nazwa, wartość, czas trwania, ścieżka dostępu, domena, bezpieczeństwo)

        //nazwa - musi być, nazwa cookie
        //wartość - wartość cookie
        //czat trwania - w milisekundach
        //ścieżka dostępu - ścieżka dostępu na serwerze dla pliku cookie
        //bezpieczenstwo - true - https, false - http
        //tylko http - true tylko przez protokół http

        //setcookie musi być wywoływane przed całym kodem strony
        //każdy wysłany plik cookie jest automatycznie umieszczany w superglobalnej tablicy $_COOKIE
        //jeżeli dla pliku cookie:
        //1 - zostanie ustalony czas waznosci to zostanie on automatycznie usunuiety po okreslonym czasie
        //2 - jeżeli czas waznosci nie byl ustawiony to plik zostanie usuniety przy zamykaniu przegladarki
        //3 - aby usunac samodzielnie plik cookie wystarczy ustawic czas cookie na np -1, (czas waznosci ktory juz upplynal)

        //date("F jS - g:ia") - pełna nazwa miesiąca, dzien miesiąca, sekundy bez zera, format 12 godzinny, minuty z zerami, am/pm
    ?>
    <?php
        if(isset($_COOKIE["wizyta"])){
            $last = $_COOKIE["wizyta"];
            echo "Witamy ponownie! Ostatni raz odwiedziłeś nas: ".$last;
        }else{
            echo "Witaj na naszej stronie";
        }
    ?>
</body>
</html> 