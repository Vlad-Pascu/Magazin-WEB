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
                    if($_SESSION['admin'] == true)
                    {
                        echo '<a href="operatiiPDB.php" alt="Operatii PDB">Add/Del/Upd</a><br>';
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
            <button id="meniu_principal">Cos cumparaturi</button>
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
            $total=0;
			$val=false;
			$conn = mysqli_connect("localhost","root","","magazin");
			if(($_SESSION["loggedin"])==true)
            {
                $result=mysqli_query($conn,"SELECT * FROM cos ORDER by id");
                echo'<table>';
                echo '<tr>';
                echo '<td>Produse:</tr></td>';
                while($row=mysqli_fetch_assoc($result))
                {
                    if($row['email_client'] == $_SESSION['email'])
                    {
                        $val=true;
                        echo '<tr><td>Produs: '.$row['nume_produs'].'</td>';
                        echo '<td>Cantitate : '.$row['cant'].'</td';
                        echo '<td> Pret Produs: '.$row['pret']." RON</td></tr>";
                        $total=$total+$row['pret'];
                    }
                }
                echo '<tr>';
                echo '<td>Pret total: '.$total. ' RON</td></tr>';
                echo'</table>';
                if($val==false)
                    echo '<td>Cos gol</td>';
            }
                
            else
                echo 'Intra in cont';
			?>
        </div>
    </div>
</body>
</html>