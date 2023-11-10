<?php
    session_start();
    //var
    $email= "";
    $nume="";
    $prenume="";
    $parola="";
    $error1= False;
    $error2 = False;
    $errors = False;

    // connect to the database
    $conn = mysqli_connect("localhost", "root", "", "magazin");
    if (isset($_POST['register'])) 
    {
        $email= $_POST['email'];
        $nume=$_POST['nume'];
        $prenume=$_POST['prenume'];
        $parola=$_POST['parola'];
        if (empty($nume))//campuri goale
        {
            $error1=True;
            $errors=true; 
        }
        if (empty($prenume))
        {
            $error1=True;
            $errors=true; 
        }
        if (empty($email))
         {
            $error1=True;
            $errors=true;
         }
        if (empty($parola))
         {
            $error1=True;
            $errors=true;
         }
    }
    $result = mysqli_query($conn,"SELECT * FROM utilizator WHERE email='$email' LIMIT 1");
    $user = mysqli_fetch_assoc($result);
    if ($user) 
    { 
        if ($user['email'] === $email)
        {
            $errors=true;
            $error2=True;//campuri identice
        }
    }
    if ($errors == false) 
    {
        $parola = md5($parola);
        mysqli_query($conn,"INSERT INTO utilizator (nume,prenume,email,parola) VALUES ('$nume','$prenume','$email','$parola')");
        session_start();
        $_SESSION['loggedin'] = true;
        $result = mysqli_query($conn, "SELECT * FROM utilizator WHERE email='$email' LIMIT 1");
        $user = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user['id'];
        $_SESSION['nume']=$user['nume'];
        $_SESSION['prenume']=$user['prenume'];
        $_SESSION['email'] = $_POST['email'];
        echo $nume." ". $prenume. " ". $email. " ". $parola;
        header('location: Magazin.php');
    }
    else
    {
        if($error1==True)
        {
            echo "Camp gol";
        }
            else
        if($error2==True)
        {
            echo "Camp deja folosit";
        }
    }
    mysqli_close($conn);
?>