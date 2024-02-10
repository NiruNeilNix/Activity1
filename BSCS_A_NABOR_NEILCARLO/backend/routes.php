<?php
require_once './api/get.php';
require_once './api/post.php';

$get = new Get();
$post = new Post();

if(isset($_REQUEST['request'])){
    $request = explode('/', $_REQUEST['request']);
}
else{
    http_response_code(404);
    echo "Endpoint does not exist";
}

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        switch($request[0]){
            case 'employee':
                echo json_encode($get->get_employees());
            break;
            case 'job':
                echo json_encode($get->get_jobs($request[1]));
            break;
        }
    break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"));

        switch($request[0]){
            case 'add_employee':
                echo json_encode($post->add_employee($data));
            break;
            case 'add_job':
                echo 'This is a job route.';
            break;
        }
    break;
    default:
        echo 'Forbidden';
        http_response_code(403);
    break;
}
?>

