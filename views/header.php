<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/game-console.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Talk4Games</title>
    <style>

        form {
            color: #FFF;
        }
        .card {
            margin: 10px;
            padding: 5px;
            max-width: 750px;
            background: #9b989870;
            color: white;
            text-align: center;

        }

        .articleImg {
            width: 100%;
        }

        h3 {
            font-size: 1rem;
            padding: 10px;
        }

        h4 {
            font-size: 1.2rem;
        }

        .articleColumn {
            display: flex;
        }
        body {
            background-color: #000;
        }
        a {
            text-decoration: none;
        }

        .gridContainer {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark color-white text-white">
            <div class=" container-fluid">
                <a class="navbar-brand" href="index.php"><img src="assets/img/game-console.png" alt="gameboy icon"
                        class="gameboyIcon"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="?rss=news" class="nav-item text-white">Actu Ps5</a>
                <a href="?rss=pcNews" class="nav-item text-white">Actu Pc</a>
                <a href="?rss=switchNews" class="nav-item text-white">Actu Switch</a>
                <a href="?rss=test" class="nav-item text-white">test</a>
                <a href="?rss=tips" class="nav-item text-white">Soluces et tips</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <h1>TALK4GAMES</h1>
                </div>
                <a href="settings.php" target="_blank">Parametres</a>
            </div>
        </nav>
    </header>
