<?php

session_start();
if(isset($_SESSION['usuario']) && is_object($_SESSION['usuario'])){
    $user= $_SESSION['usuario'];
    $_SESSION ['profile_id']=$user->profile_id;
} else{
    $_SESSION['profile_id']= null;
}
if(!isset($_SESSION['autenticar']) || $_SESSION['autenticar'] != 'SIM'){
    header('Location: index.php?login=erro');
}

?>