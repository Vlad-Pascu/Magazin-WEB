        <?php
            session_start();
            $_SESSION['loggedin'] = false;
            $_SESSION['id'] = "";
            $_SESSION['nume']="";
            $_SESSION['prenume']="";
            $_SESSION['email'] = "";
            $_SESSION['admin']=false;
            header("location: Magazin.php");
            exit;
        ?>