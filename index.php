<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Covid Tracker</title>

        <link rel="stylesheet" href="assets/style/style.css">
    </head>

    <body>
        <header>
            <img src="assets/img/bg_covid.jpg" class="bg_covid">

            <div class="g">
                <h1>Covid Tracker</h1>
                <p>Bienvenue sur Covid Tracker, ici vous verrez toutes les statistiques recenssés à propos de la covid dans le monde entier.</p>
            </div>

            <div class="d">
                <h2 class="title_h2">Statistiques Mondiales :</h2>

                <div class="cas">
                    <h2>Nombre de cas :</h2>
                    <p>400,000,000 Cas</p>
                </div>

                <div class="deces">
                    <h2>Nombre de décès :</h2>
                    <p>5,000,000 de décès</p>
                </div>
            </div>
        </header>

        <div class="form">
            <h3>Veuillez entrer un nom d'un pays :</h3>
            <form action="" method="post" id="myForm">
                <input type="text" id="country" placeholder="Nom du Pays" required>
                <input type="submit" value="Recherche">
            </form>
        </div>

        <div class="nombre">
            <h3 id="cas">Nombre de Cas : </h3>
            <h3 id="morts">Nombre de Morts : </h3>
        </div>

        <div class="graph">
            <h3>Graphique :</h3>
            <canvas id="myChart" width="10px" height="10px"></canvas>
        </div>

        <script src="assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="assets/js/chart.js"></script>
    </body>
</html>