<!DOCTYPE html>
<html lang="ro">
<head>
    <title>RAM</title>
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
                            echo '<a href="operatiiRAM.php" alt="Operatii RAM">Add/Del/Upd</a><br>';
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
                if(isset($_POST['id']))
                    {
                        $id=$_POST['id'];
                        $tip=$_POST['tip'];
                        $capacitate=$_POST['capacitate'];
                        $frecventa=$_POST['frecventa'];
                        $latenta=$_POST['latenta'];
                        $stoc=$_POST['stoc'];
                        $result=mysqli_query($conn,"SELECT * FROM produs WHERE id='$id'");
                        $row=mysqli_fetch_assoc($result);
                        $specificatii=$row['specificatii_id'];
                        mysqli_query($conn,"UPDATE ram SET tip='$tip',capacitate='$capacitate',frecventa='$frecventa',latenta='$latenta' WHERE specificatii_id='$specificatii'");
                        $nume=$_POST['nume'];
                        $poza=$nume.".jpg";
                        $producator=$_POST['producator'];
                        $pret=$_POST['pret'];
                        mysqli_query($conn,"UPDATE produs SET nume='$nume',poza='$poza',producator='$producator',pret='$pret',stoc='$stoc' WHERE id='$id'");
                    }
                echo "Produs Actualizat";
                mysqli_close($conn);
            ?>
            </p>
        </div>
    </div>
</body>
</html>