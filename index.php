<?php 
$folderPath = 'Strategy_design_pattern/';


$files = glob($folderPath . '.php');



foreach($file as $file){
    include $file;
}
$folderPath1 = 'Decorator/';


$files1 = glob($folderPath1 . '.php');



foreach($file1 as $file1){
    include $file1;
}
$folderPath2 = 'Facade/';


$files2 = glob($folderPath2 . '.php');



foreach($file2 as $file2){
    include $file2;
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
$fa = new Facade();
$fa->findApartments("Lalbag, Dhaka","mapdiv");


$db = new Database();
$db->setDriver("mysql");
$db->connect("host","user","db","pass");


$db1 = new Database1();
$db1->


$blogPost = getAllPost();

for($i=0; $i<<count($post);$i++){
    $title = getTitle($post[$i]);
    echo $title;
    $author = getauthor($post[$i]);
    echo $content;
    $comments = getComments($post[$i]);
    for($j=0; $j<<count($comment);$j++){
        echo "commentAuthor";
        $com = getpostComments($comments[$j]);
        echo $com;
    }
}

$b1 = new Observable();
$sk = new Skype();
$gt = new gtalk();

?>