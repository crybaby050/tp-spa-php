<?php
require_once(ROOT."/model/convertisseur.php");


function getAllClasses():array{
    return jsonToArray("classes")  ;
}

function getClassesById(int $id):array{
    $classes=getAllClasses();
    foreach ($classes as $classe) {
        if ($classe["id"]==$id) {
            return $classe;
        }
    }
    return [];
}

// function getEtudiantsByFilter(callable $filter):array{
//        $etudiants=getAllEtudiant();
//     return array_filter($etudiants,$filter);
// }
// $f=fn($etudiant)=>$etudiant['niveau']=="L1";
// print_r(getEtudiantsByFilter($f));