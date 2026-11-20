<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rezervácia ubytovania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="header-band">
            <h2>Rezervácia izby</h2>
            <p>Vyplňte údaje a my vám potvrdíme dostupnosť pobytu.</p>
        </div>

        <form action="#" method="POST">
            <div class="grid-2">
                <div class="field">
                    <label for="prichod">Dátum príchodu</label>
                    <input type="date" id="prichod" name="prichod" required>
                </div>

                <div class="field">
                    <label for="odchod">Dátum odchodu</label>
                    <input type="date" id="odchod" name="odchod" required>
                </div>
            </div>

            <div class="grid-2">
                <div class="field">
                    <label for="izba">Typ izby</label>
                    <select id="izba" name="izba" required>
                        <option value="" disabled selected>Vyberte izbu...</option>
                        <option value="jednolozkova">Jednolôžková izba</option>
                        <option value="dvojlozkova">Dvojlôžková izba</option>
                        <option value="apartman">Apartmán</option>
                    </select>
                </div>

                <div class="field">
                    <label for="osoby">Počet osôb</label>
                    <input type="number" id="osoby" name="osoby" min="1" max="4" value="2" required>
                </div>
            </div>

            <div class="field">
                <label for="meno">Meno a priezvisko</label>
                <input type="text" id="meno" name="meno" placeholder="Ján Novák" required>
            </div>

            <div class="grid-2">
                <div class="field">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="jan@priklad.sk" required>
                </div>

                <div class="field">
                    <label for="telefon">Telefónne číslo</label>
                    <input type="tel" id="telefon" name="telefon" placeholder="+421 900 000 000" required>
                </div>
            </div>

            <div class="field">
                <label for="poznamka">Poznámka (voliteľné)</label>
                <textarea id="poznamka" name="poznamka" rows="3" placeholder="Napr. detská postieľka, parkovanie..."></textarea>
            </div>

            <button type="submit">Rezervovať pobyt</button>
        </form>
    </div>

</body>
</html>