<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
        <form method="post" action="page2.php">
                <div>
                    <label>Nom :
                        <input type="text" name="nom" required>
                    </label>
                </div>
                <div>
                    <label>Email :
                        <input type="email" name="email" required placeholder=" Destinataire">
                    </label>
                </div>
                <div>
                    <label>Objet :
                        <input type="text" name="objet" required placeholder=" objet">
                    </label>
                </div>
                <div id="prior">
                    <label>Priorité :
                        <select name="Priorité" size="large">
                            <option>urgent</option>
                            <option>non-urgent</option>
                            <option>normal</option>
                        </select>
                    </label>
                </div>

                <div id="message">
                    <label>Message :
                        <textarea name="message" maxlength="500" rows="10" cols="45" required placeholder=" Votre message ici."></textarea>
                    </label>
                </div>
                <button id="btn"  type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Envoyer
                </button>
        </form>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,256L12,256C24,256,48,256,72,250.7C96,245,120,235,144,197.3C168,160,192,96,216,90.7C240,85,264,139,288,144C312,149,336,107,360,85.3C384,64,408,64,432,80C456,96,480,128,504,138.7C528,149,552,139,576,122.7C600,107,624,85,648,74.7C672,64,696,64,720,85.3C744,107,768,149,792,176C816,203,840,213,864,218.7C888,224,912,224,936,218.7C960,213,984,203,1008,186.7C1032,171,1056,149,1080,122.7C1104,96,1128,64,1152,42.7C1176,21,1200,11,1224,16C1248,21,1272,43,1296,58.7C1320,75,1344,85,1368,101.3C1392,117,1416,139,1428,149.3L1440,160L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</body>
</html>




