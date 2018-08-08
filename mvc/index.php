<?php
if(isset($_GET['controller'])){
    switch ($_GET['controller']){
        case 'demo':include_once ('./Controllers/demo.php');
        break;
        case 'form':include_once ('./Controllers/form.php');
        break;
    }

}
?>