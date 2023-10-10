<?php 
$folderPath = 'Strategy_design_pattern/';


$files = glob($folderPath . '.php');



foreach($file as $file){
    include $file;
}
$folderPath1 = 'Decorator/';


$files = glob($folderPath1 . '.php');



foreach($file as $file){
    include $file;
}

$u1 = new User();

$msg = $u1->getMsg();

switch ($msg){
    case 'email':
        $objmsg = new SendEmail();
        break;
    case 'fax':
        $objmsg = new SendFax();
        break;
    case 'msg':
        $objmsg = new SendMsg();
        break;
    case 'sms':
        $objmsg = new SendSms();
        break;

    default:
    # code...
        break;
}
$objmsg->notification();



$post    =  new Post();
$comment = new Comment();
$post->filter();
$comment->filter();


?>