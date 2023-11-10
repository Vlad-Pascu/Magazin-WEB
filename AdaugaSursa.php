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
                <?php
                    $conn=mysqli_connect("localhost","root","","magazin");
                    if(isset($_POST['putere']) && isset($_POST['eficienta']) && isset($_POST['certificare']))
                        {
                            $putere=$_POST['putere'];
                            $eficienta=$_POST['eficienta'];
                            $certificare=$_POST['certificare'];
                            $query="INSERT INTO sursa (putere,eficienta,certificare) VALUES ('$putere','$eficienta','$certificare')";
                            mysqli_query($conn,$query);
                            $nr=mysqli_insert_id($conn);
                            $nume=$_POST['nume'];
                            $poza=$nume.".jpg";
                            $producator=$_POST['producator'];
                            $pret=$_POST['pret'];
                            mysqli_query($conn,"INSERT INTO produs (nume,poza,producator,pret,stoc,componenta_id,specificatii_id)
                            VALUES ('$nume','$poza','$producator','$pret','10','5','$nr')");
                        }
                    mysqli_close($conn);
                ?>
            </p>
        </div>
    </div>
</body>
</html>