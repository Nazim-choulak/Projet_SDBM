<?php
 function getUrlWithoutFilename() {
    $url = $_SERVER["SCRIPT_NAME"];
    $zones = explode("/", $url);
    $resultat = "";
    for ($i=1; $i < count($zones)-1  ; $i++) { 
        $resultat .= "/". $zones[$i];
    }
    return $resultat;
 }

define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

define('PATH',getUrlWithoutFilename());

require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');

try {

    $params = explode('/', @$_GET['p']);

    if($params[0] != ""){

        $controller = ucfirst($params[0]);
        $action = isset($params[1]) ? $params[1] : 'index';

        @require_once(ROOT.'controllers/'.$controller.'.php');

        $controller = new $controller();

        if(method_exists($controller, $action)){
            unset($params[0]);
            unset($params[1]);
            call_user_func_array([$controller,$action], $params);
     
        }else{
      
            require_once(ROOT.'controllers/Erreur.php');

            $controller = new Erreur(new Exception("La page recherchée n'existe pas"));
            $controller->index();
        }
    }else{

        require_once(ROOT.'controllers/Accueil.php');

        $controller = new Accueil();
        $controller->index();
    }
} catch (Exception $e) {

    require_once(ROOT.'controllers/Erreur.php');

    $controller = new Erreur($e);
    $controller->index();

} catch (Error $err) {

    require_once(ROOT.'controllers/Erreur.php');

    $controller = new Erreur(new Exception($err->getMessage()));
    $controller->index();
} 


