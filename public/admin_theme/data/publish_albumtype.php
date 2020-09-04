<?php

include"db.php";


$obj = bodycondition::byId($_GET['id']);
$obj->status=1;
$obj->save();



?>

<script type="text/javascript">
	location.reload();
</script>