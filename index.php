<?php 
$base_server_path_files=$_SERVER['DOCUMENT_ROOT'].'/agencia';
require($GLOBALS["base_server_path_files"].'/route.php');
require($GLOBALS["base_server_path_files"].'/library/functions.php');


Route::add('/agencia/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/formacao_academica/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/conhecimentos/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/cargo_pretendido/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/dados_pessoais/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/dados_basicos/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/experiencia_profissional/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');
Route::add('/agencia/cadastro_estados/',function(){
    require_once($GLOBALS["base_server_path_files"].'/template.html');
},'get');



require_once($GLOBALS["base_server_path_files"].'/mvc/controller/estadosController.php');

Route::add('/agencia/server/estados',function(){
  // if(controlAcess())
   (new estadosController())->find();
},'get');

Route::add('/agencia/server/estados',function(){
  // if(controlAcess())
   (new estadosController())->save();
},'post');

Route::add('/agencia/server/estados/([0-9]*)',function($id){
   //if(controlAcess())
  (new estadosController())->findById($id);
},'get');

Route::add('/agencia/server/estados',function(){
    //if(controlAcess())
    (new estadosController())->save();
},'put');

Route::add('/agencia/server/estados',function(){
    //if(controlAcess())
    (new estadosController())->del();
},'delete');

Route::run('/');


?>