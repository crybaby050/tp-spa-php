<?php
require_once(ROOT."/model/convertisseur.php");
require_once(ROOT."/model/classeModel.php");


function getAllEtudiant():array{
    return jsonToArray("etudiants")  ;
}
function getEtudiantsByFiliere(string $filiere):array{
    $etudiants=getAllEtudiant();
 return array_filter($etudiants,fn($etudiant)=>strtolower($etudiant['filiere'])==strtolower($filiere));
}
function getEtudiantsByNiveau(string $niveau):array{
    $etudiants=getAllEtudiant();
 return array_filter($etudiants,fn($etudiant)=>$etudiant['niveau']==$niveau);
}

function getEtudiantsByFilter(callable $filter):array{
       $etudiants=getAllEtudiant();
    return array_filter($etudiants,$filter);
}

function getAllEtudiantWhithClasse():array{
   $etudiants=getAllEtudiant();
   $recup=[];
   foreach ($etudiants as $etudiant) {
       $classe=getClassesById($etudiant["classe_id"]);
       $etudiantmerge=array_merge($etudiant,$classe);
       $recup[]=$etudiantmerge;
   }
   return $recup;
  
};



function addEtudiant(array $etudiant):void{
    addToJson("etudiants",$etudiant);

}
function getMatricle():string{
 return "MAT00".rand(0,2173909);
}
// $f=fn($etudiant)=>$etudiant['niveau']=="L1";
// print_r(getEtudiantsByFilter($f));