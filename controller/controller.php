<?php
require_once(ROOT."model/model.php");
require_once(ROOT."views/header.php");
// die("after header");


 $page="alletudiant";
 if (isset($_REQUEST["page"])) {
    $page=$_REQUEST["page"];
 }
 if ($page=="alletudiant") {
    $etudiants=getAllEtudiant();
    require_once(ROOT."views/alletudiant.php");
 }elseif ($page=="dev") {
    $etudiants=getEtudiantsByFiliere(filiere: "dev");
    require_once(ROOT."views/dev.php");
 } 
 elseif ($page=="dn") {
    $etudiants=getEtudiantsByFiliere(filiere: "dn");
    require_once(ROOT."views/dn.php");
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
    header("location:".WEBROOT."?page=alletudiant");
    exit();
 }
   
    // var_dump($_POST);

    require_once(ROOT."views/ajout.php");
 }else{
    echo "page introuvable";
 }
 require_once(ROOT."views/footer.php");