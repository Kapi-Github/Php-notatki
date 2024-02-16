<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Dołączanie plików

        //Aby dołaczyc plik php do main script nalezy zastosowac polecenie include lub require
        //include - wygeneruje ostrzezenie jesli plik nie moze byc odczytany ale main script bedzie nadal działał
        //require - wyrzuci fatal error - zakończy działanie main script


        //Sprawdzanie czy plik istnieje
        //file_exists(filename) - sprawdza czy plik istnieje
        //is_file(filename) - sprawdza czy argument jest plikiem
        //filesize(filename) - zwraca wage pliku
        //touch(filename) - tworzy pusty plik o podanej nazwie, jesli juz istnieje nie ulegnie on zmianie
        //unlink(filename) - usuwa plik 
        //fopen(filename, open_mode) - moze otwierac, istniejace pliki
        //tryby: 
        //r - plik zostanie owarty w trybie tylko do odczytu
        //w - w trybie tylko do zapisu
        //a - w trybie do dopisywania
    ?>
</body>
</html>