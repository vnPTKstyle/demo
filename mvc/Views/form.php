<?php
if(isset($loi)){
    foreach ($loi as $loi_form) {
       echo $loi_form;
    }

}
    else
    {
    echo $txt;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form method="post">
    <input type="text" name="txt" value="<?php if(!isset($loi)) {echo $txt;} ?>">
    <input type="submit" name="submit" value="Check">
</form>
</body>
</html>