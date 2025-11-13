<?php 
define('BASE_AUTOLOAD', __DIR__ .'/vendor/autoload.php');
require_once BASE_AUTOLOAD;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\BootstrapController;

$request = Request::createFromGlobals();

$request->query->get('/')
    $response = (new BootstrapController())->dashbord($request) : null; 
$response->send();


?>