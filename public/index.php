<?php
define("WEBROOT","http://localhost:8002/");
define("ROOT", (substr($_SERVER['DOCUMENT_ROOT'] ,0, -6)));

require_once(ROOT."views/header.php");


$view=ROOT."views/classes";
$controllers=[
    "etudiant"=>"etudiant",
    "classe"=>"classe"
];

 $controller=$_REQUEST["controller"]??"etudiant";
if (array_key_exists($controller, $controllers)) {
    require_once(ROOT."controller/".$controllers[$controller]."Controller.php");
}
else{
    echo "controller introuvable";
}
 

require_once(ROOT."views/footer.php");
