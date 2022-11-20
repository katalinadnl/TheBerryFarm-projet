<?php
session_start();
$dbco = new PDO("mysql:host=localhost;dbname=TheBerryFarm", 'root', '');


if(isset($_POST['email'])&& isset($_POST['mdp'])){
    $email=htmlspecialchars($_POST['email']);
    $mdp=htmlspecialchars($_POST['mdp']);

    $check= $dbco->prepare('SELECT * FROM UTILISATEUR where email = ?');
    $check->execute(array($email));
    $data= $check->fetch();
    $row=$check->rowCount();

    if($row>0){

        if($data['mdp']== $mdp){
            $_SESSION['email']= $data['email'];
            $_SESSION['mdp']= $data['mdp'];
            $_SESSION['nom']= $data['nom'];
            $_SESSION['prenom']= $data['prenom'];
            $_SESSION['phone']= $data['Telesphone'];
            $_SESSION['id']= $data['id'];
            header('Location: dashboard.php');
            die();
        }else{
            header('location: seConnecterhtml.php? mdp=error');
            die();
        }
    }else{
            header('location: seConnecterhtml.php');
            die();
    }
}
?>

