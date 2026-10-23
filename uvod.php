<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Náhodné čísla v PHP</title>
    <style>
        .cislo {
            font-size: 18px; /* Základná veľkosť fontu */
            margin: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h2>Vygenerované čísla pomocou PHP:</h2>
    <div>
        <?php
        // Funkcija na vygenerovanie náhodnej HEX farby
        function vygenerujNahodnuFarbu() {
            $pismena = '0123456789ABCDEF';
            $farba = '#';
            for ($i = 0; $i < 6; $i++) {
                $farba .= $pismena[rand(0, 15)];
            }
            return $farba;
        }

        // Cyklus na vygenerovanie x čísel
        for ($i = 1; $i <= 1000; $i++) {
            // Náhodné číslo od 0 do 100
            $nahodneCislo = rand(0, 100);
            
            // Základné štýly
            $styl = "font-size: 18px;";

            // Kontrola: Ak je to každé 5. číslo (5. a 10.)
            if ($i % 5 === 0) {
                $velkostFontu = "36px";
                $farbaFontu = vygenerujNahodnuFarbu();
                $styl = "font-size: {$velkostFontu}; font-weight: bold; color: {$farbaFontu};";
            }

            // Výpis čísla s príslušným štýlom
            echo "<span class='cislo' style='{$styl}'>{$nahodneCislo}</span>";

            // Pridanie čiarky medzi čísla (okrem posledného)
            if ($i < 1000) {       
                echo ", ";
            }
        }
        ?>
    </div>

</body>
</html>