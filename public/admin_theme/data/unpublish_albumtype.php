<?php

include"db.php";

$obj = bodycondition::byId($_GET['id']);
$obj->status=0;
$obj->save();

?>

<script type="text/javascript">
	location.reload();
</script>