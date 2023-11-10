<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Sursa</title>
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
                            echo '<a href="operatiiSursa.php" alt="Operatii Sursa">Add/Del/Upd</a><br>';
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
                <form action="AdaugaSursa.php" method=post>
                    <label for="nume">Nume:</label>
                    <input type="text" name="nume"><br>
                    <label for="producator">Producator:</label>
                    <input type="text" name="producator"><br>
                    <label for="pret">Pret:</label>
                    <input type="number" name="pret"><br>
                    <label for="putere">Putere:</label>
                    <input type="text" name="putere"><br>
                    <label for="eficienta">Eficienta:</label>
                    <input type="text" name="eficienta"><br>
                    <label for="certificare">Certificare:</label>
                    <input type="text" name="certificare">
                    <input type="submit" value="Adauga"><br>
                    <br>
                </form>
                <form action="StergeSursa.php" method=post>
                    <label for="id">Id produs:</label>
                    <input type="numeric" name="id">
                    <input type="submit" value="Sterge"><br>
                    <br>
                    <br>
                </form>
                <form action="UpdateSursa.php" method=post>
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
                    <label for="putere">Putere:</label>
                    <input type="text" name="putere"><br>
                    <label for="eficienta">Eficienta:</label>
                    <input type="text" name="eficienta"><br>
                    <label for="certificare">Certificare:</label>
                    <input type="text" name="certificare">
                    <input type="submit" value="Update"><br>
                </form>
            </p>
        </div>
    </div>
</body>
</html>