<?php
define("WEBROOT","http://localhost:8002/");
define("ROOT", (substr($_SERVER['DOCUMENT_ROOT'] ,0, -6)));
require_once(ROOT."/model/convertisseur.php");
var_dump(jsonToArray("classes"));
die;

require_once(ROOT."/controller/controller.php");
