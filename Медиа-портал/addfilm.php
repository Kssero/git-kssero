

<?php
if(isset($_POST['email'])&& $_POST['name'] && $_POST['link']){

    $email = $_POST['email'];
    $email = $_POST['name'];
    $email = $_POST['link'];



}else{
    header('Location: /');
}


?>