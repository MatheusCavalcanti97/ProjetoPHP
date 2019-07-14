<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['sala'] = "sala/index";
$route['sala/(:num)'] = "sala/mostrar/$1";
$route['salaCriar']['post'] = "sala/inserir";
$route['salaEditar/(:any)'] = "sala/editar/$1";
$route['salaAtualizar/(:any)']['put'] = "sala/atualizar/$1";
$route['salaExcluir/(:any)']['delete'] = "sala/excluir/$1";

$route['bloco'] = "bloco/index";
$route['bloco/(:num)'] = "bloco/mostrar/$1";
$route['blocoCriar']['post'] = "bloco/inserir";
$route['blocoEditar/(:any)'] = "bloco/editar/$1";
$route['blocoAtualizar/(:any)']['put'] = "bloco/atualizar/$1";
$route['blocoExcluir/(:any)']['delete'] = "bloco/excluir/$1";


$route['categoriaPessoa'] = "categoriaPessoa/index";
$route['categoriaPessoa/(:num)'] = "categoriaPessoa/mostrar/$1";
$route['categoriaPessoaCriar']['post'] = "categoriaPessoa/inserir";
$route['categoriaPessoaEditar/(:any)'] = "categoriaPessoa/editar/$1";
$route['categoriaPessoaAtualizar/(:any)']['put'] = "categoriaPessoa/atualizar/$1";
$route['categoriaPessoaExcluir/(:any)']['delete'] = "categoriaPessoa/excluir/$1";


$route['pessoa'] = "pessoa/index";
$route['pessoa/(:num)'] = "pessoa/mostrar/$1";
$route['pessoaCriar']['post'] = "pessoa/inserir";
$route['pessoaEditar/(:any)'] = "pessoa/editar/$1";
$route['pessoaAtualizar/(:any)']['put'] = "pessoa/atualizar/$1";
$route['pessoaExcluir/(:any)']['delete'] = "pessoa/excluir/$1";