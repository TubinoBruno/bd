<?php


define('ACTION', 0);
define('PARAMS', 1);

include_once './view/View.php';
//include_once './model/Model.php';
include_once './config/ConfigApp.php';

include_once 'controller/PublicController.php';

function dB(){

  

  $connection = new PDO('pgsql:host=dbases.exa.unicen.edu.ar;port=5432;dbname=cursada;user=unc_249018;password=249018');

}
dB();
function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}
if(isset($_GET['action'])){
   $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> index
        $controller =  new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
             $controller->$metodo($params);
        }
        else{
            $controller->$metodo();
        }
    }
}



//
// define('ACTION',0);
// define('PARAMS',1);
//
// require_once './config/ConfigApp.php';
// require_once 'controller/AsignaturasController.php';
// require_once 'controller/test.php';
//
//
// function parseURL($url){
//   $urlExploded = explode('/', $url);
//   $arrayReturn [ConfigApp::$ACTION] = $urlExploded[ACTION];
//   $arrayReturn [ConfigApp::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
//   return $arrayReturn;
// }
// if(isset($_GET['action'])){
//   $urlData = parseURL($_GET['action']);
//   $action = $urlData[ConfigApp::$ACTION];
//   if(array_key_exists($action,ConfigApp::$ACTIONS)){
//     $params = $urlData[ConfigApp::$PARAMS];
//     $action = explode('#',ConfigApp::$ACTIONS[$action]);
//     $controller = new $action[0]();
//     $metodo = $action[1];
//     if(isset($params) && $params != null) {
//       echo $controller->$metodo($params);
//        }
//        else{
//          echo $controller->$metodo();
//        }
//   }
//   else{
//     $controller = new AsignaturasController();
//     echo $controller->Home();
//   }
// }
 ?>
