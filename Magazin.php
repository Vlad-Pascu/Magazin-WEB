<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Magazin online</title>
    <link rel="stylesheet" href="Styles/all_style.css">
    <meta charset="utf-8">
</head>

<body>
    <div id="header">
        <div id=poza_antet>
        <?php
            session_start();
            if(isset($_SESSION['loggedin']) && ($_SESSION["loggedin"])==true)
                {
                    echo '<div id="login">';
                    echo $_SESSION['nume'].' '.$_SESSION['prenume']. '<br>';
                    echo '<a href="Logout.php" alt="Logout><button id="meniu_principal">Log out</button></a>';
                    echo '</div>';
                }
            else
                echo '<div id="login"><a href="login.php" alt="Login">Intra in cont!</a></div>';
        ?>
            <img src="Styles/images/magazin3.jpg" alt="magazin" />
        </div>
        <div id="meniu_principal">
            <a href="Magazin.php" alt="HOME"><button id="meniu_principal">Home</button></a>
            <button id="meniu_principal">Date contact</button>
            <a href="Cos.php" alt="Cos cumparaturi"><button id="meniu_principal">Cos cumparaturi</button></a>
        </div>
    </div>
    <div id="main">
        <div id="meniu_stanga">
                <a href="PDB.php" alt="Link"><button id="meniu_stanga">Placi de baza</button></a>
                <a href="CPU.php" alt="Link"><button id="meniu_stanga" >Procesoare</button></a>
                <a href="RAM.php" alt="Link"><button id="meniu_stanga">Memorii RAM</button></a>
                <a href="Video.php" alt="Link"><button id="meniu_stanga">Placi video</button></a>
                <a href="Sursa.php" alt="Link"><button id="meniu_stanga">Surse</button></a>
        </div>
        <div id="main_content">
            <h1 id="main_content">Bine ai venit!</h1><br>
        </div>
    </div>
</body>
</html>