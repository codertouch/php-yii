<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/3
 * Time: 9:59
 */
if(empty($_FILES)){
    exit('no files submit');
}

$error=$_FILES['photo']['error']==0?'succ':'fail';
echo "<script>parent.document.getElementsById('progress').innerHTML='$error'</script>";