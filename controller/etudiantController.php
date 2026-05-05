<?php
require_once(ROOT."model/etudiantModel.php");
$view=ROOT."views/etudiants";
// die("after header");


 $page="alletudiant";
 if (isset($_REQUEST["page"])) {
    $page=$_REQUEST["page"];
 }
 if ($page=="alletudiant") {
    $etudiants=getAllEtudiantWhithClasse() ;
    
    require_once($view."/alletudiant.php");
 }elseif ($page=="dev") {
    $etudiants=getEtudiantsByFiliere(filiere: "dev");
    require_once($view."/dev.php");
 } 
 elseif ($page=="dn") {
    $etudiants=getEtudiantsByFiliere(filiere: "dn");
    require_once($view."/dn.php");
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
         "id"=>getId("etudiants"),
         "matricule"=>getMatricle(),
        "nom"=>$_POST["nom"],
        "prenom"=>$_POST["prenom"],
        "email"=>$_POST["email"],
        "telephone"=>$_POST["telephone"],
        "classe_id"=>$_POST["classe_id"],
        
    ];
   //  var_dump($newEtudiant);
   //  die;
    addEtudiant($newEtudiant);
    header("location:".WEBROOT."?controller=etudiant&page=alletudiant");
    exit();
 }
   
    // var_dump($_POST);
      $classes=getAllClasses();
    require_once($view."/ajout.php");
 }else{
   echo "page introuvable";
 }
