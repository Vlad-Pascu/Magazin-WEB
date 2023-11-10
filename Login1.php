
<?php
    session_start();

    //vedem daca e logat deja
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: Magazin.php");
        exit;
    }

        if (isset($_POST['login1'])) 
        {	
            $conn = mysqli_connect("localhost","root","","magazin");
            //date post
            $email= $_POST['email'];
            $parola = $_POST['parola'];
            $result = mysqli_query($conn,"SELECT * FROM utilizator WHERE email='$email'");//utilizatorul exista
            $user= mysqli_fetch_assoc($result);
            //luam parola hashuita
            $parola = md5($parola);
            echo $email . " " .$parola; 
            if($user==0) 
            {
                echo "Utilizatorul nu exista";
            } 
            else if (hash_equals($parola,$user['parola']))
                {
                    session_start();
                    $_SESSION['admin']=$user['admin'];
                    $_SESSION["loggedin"] = true;
                    $_SESSION['nume'] = $user['nume'];	
                    $_SESSION['prenume']=$user['prenume'];
                    $_SESSION['email']=$user['email'];
                    header('location: Magazin.php');
                }
                else 
                {
                    echo "Parola gresita";
                }
        }
    ?>