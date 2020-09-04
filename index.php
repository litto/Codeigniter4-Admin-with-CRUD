<?php
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    define('ENVIRONMENT', 'development');
}else{
    define('ENVIRONMENT', 'production');
}
?>