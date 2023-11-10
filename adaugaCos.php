
<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","magazin");
    if (isset($_POST['cant']))
    {
        $email=$_SESSION['email'];
        $id=$_POST['cos'];
        $result=mysqli_query($conn,"SELECT * FROM produs WHERE produs.id='$id'");
        $row=mysqli_fetch_assoc($result);
        $nume_prod=$row['nume'];
        $stoc=$row['stoc'];
        $cant=$_POST['cant'];
        $comp=$row['componenta_id'];
        if($stoc-$cant<0)
            $cant=1;
        $stoc=$stoc-$cant;
        $pret=$cant*$row['pret'];
        mysqli_query($conn,"UPDATE produs SET stoc='$stoc' WHERE id='$id'");
        mysqli_query($conn,"INSERT INTO cos (nume_produs,componenta_id,email_client,cant,pret) VALUES ('$nume_prod','$comp','$email','$cant','$pret')");
    }
    mysqli_close($conn);
    header('location: Cos.php');
?>