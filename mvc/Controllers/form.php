<?php
if(isset($_POST['submit'])){
    if($_POST['txt']==null){
        $loi[]="truong nay khong duoc de trong";
    }
    else
    {
        $txt=$_POST['txt'];
    }
    //chào người anh em thiện lành .....
}
//tu index di vao cac duong da
include ('Views/form.php');