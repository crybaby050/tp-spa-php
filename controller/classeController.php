<?php
require_once(ROOT."model/classeModel.php");
$view=ROOT."views/classes";

// var_dump(getClassesById(1));

 $page="allclasse";
 if (isset($_REQUEST["page"])) {
    $page=$_REQUEST["page"];
 }
 if ($page=="allclasse") {
    $classes=getAllClasses();
    require_once($view."/liste.php");
 }
 elseif ($page=="ajout") {
    $errors=[];
    $save=$_POST;
    if (empty($_POST["matricule"])) {
       unset($save["matricule"]) ;
        $errors["matricule"]="matricule est obligatoire";
    }
    if (empty($_POST["nom"])) {
        unset($save["nom"]) ;
        $errors["nom"]="nom est obligatoire";
    }
 if(count($errors)==0){
    $newEtudiant=[
        "nom"=>$_POST["nom"],
        "prenom"=>$_POST["prenom"],
        "email"=>$_POST["email"],
        "telephone"=>$_POST["telephone"],
        "niveau"=>$_POST["niveau"],
        "filiere"=>$_POST["filiere"]
    ];
    // addEtudiant($newEtudiant);
    header("location:".WEBROOT."?page=allclasse");
    exit();
 }
   
    // var_dump($_POST);

    require_once($view."/ajout.php");
 }else{
    echo "page introuvable";
 }
