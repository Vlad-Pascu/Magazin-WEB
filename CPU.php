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
             <?php
                    $conn=mysqli_connect("localhost","root","","magazin");
                    $result=mysqli_query($conn,"SELECT * FROM produs JOIN procesor ON produs.specificatii_id=procesor.specificatii_id WHERE produs.componenta_id='1'");
                    echo "<table>";
                    While($row1=mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                            echo "<td>". "<img src=\"Styles\images\Procesor\\".$row1['poza']."\" alt=".$row1['nume'].">";
                            echo "<hr>";
                            echo "</td>";
                            echo "<td>".$row1['id']. ".Procesor ". $row1['producator']." ". $row1['nume'];
                            echo "<ul>";
                                echo "<li>". "Socket: ". $row1['socket']."</li>";
                                echo "<li>". "Serie: ". $row1['serie']."</li>";
                                echo "<li>". "Nucleu: ". $row1['nucleu']."</li>";
                                echo "<li>". "Frecventa: ". $row1['frecventa']." Ghz</li>";
                                echo "<li>". "Tehnologie: ". $row1['tehnologie']." nm</li>";
                            echo "</ul>";
                            echo "</td>";
                            echo "<td>";
                                echo "<h2>"."Pret: ".$row1['pret']. " RON ". "</h2>";
                                if($row1['stoc']==0)
                                    echo 'Stoc epuizat';
                                echo "<br>";
                                echo '<form action="adaugaCos.php" method ="post">
                                    <label for="cant">Cantitate:</label>
                                    <input type="number" min="1" max="10" name="cant"><br>
                                    <input type="submit" value="Adauga in cos" name="cos"> ';
                                echo '<input type = "hidden" name = "cos" value = "'. $row1['id'].'" />';
                                echo '</form>';
                            echo "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($conn);
             ?>
        </div>
    </div>
</body>
</html>