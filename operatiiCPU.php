<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Procesoare</title>
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
                        if($_SESSION['admin'] == true)
                        {
                            echo '<a href="operatiiCPU.php" alt="Operatii CPU">Add/Del/Upd</a><br>';
                            echo '<a href="Logout.php" alt="Logout><button id="meniu_principal">Log out</button></a>';
                            echo '</div>';
                        }
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
            <p>
                <form action="AdaugaCPU.php" method=post>
                    <label for="nume">Nume:</label>
                    <input type="text" name="nume"><br>
                    <label for="producator">Producator:</label>
                    <input type="text" name="producator"><br>
                    <label for="pret">Pret:</label>
                    <input type="number" name="pret"><br>
                    <label for="socket">Socket:</label>
                    <input type="text" name="socket"><br>
                    <label for="serie">Serie:</label>
                    <input type="text" name="serie"><br>
                    <label for="nucleu">Nucleu:</label>
                    <input type="text" name="nucleu"><br>
                    <label for="frecventa">Frecventa:</label>
                    <input type="text" name="frecventa"><br>
                    <label for="tehnologie">Tehnologie:</label>
                    <input type="number" name="tehnologie"><br>
                    <input type="submit" value="Adauga"><br>
                    <br>
                </form>
                <form action="StergeCPU.php" method=post>
                    <label for="id">Id produs:</label>
                    <input type="numeric" name="id">
                    <input type="submit" value="Sterge"><br>
                    <br>
                </form>
                <form action="UpdateCPU.php" method=post>
                    <label for="id">Id:</label>
                    <input type="numeric" name="id"><br>
                    <label for="nume">Nume:</label>
                    <input type="text" name="nume"><br>
                    <label for="producator">Producator:</label>
                    <input type="text" name="producator"><br>
                    <label for="pret">Pret:</label>
                    <input type="number" name="pret"><br>
                    <label for="stoc">Stoc:</label>
                    <input type="number" name="stoc"><br>
                    <label for="socket">Socket:</label>
                    <input type="text" name="socket"><br>
                    <label for="serie">Serie:</label>
                    <input type="text" name="serie"><br>
                    <label for="nucleu">Nucleu:</label>
                    <input type="text" name="nucleu"><br>
                    <label for="frecventa">Frecventa:</label>
                    <input type="text" name="frecventa"><br>
                    <label for="tehnologie">Tehnologie:</label>
                    <input type="number" name="tehnologie"><br>
                    <input type="submit" value="Update"><br>
                </form>
            </p>
        </div>
    </div>
</body>
</html>