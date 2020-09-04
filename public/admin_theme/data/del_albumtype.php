<?php

include"db.php";

$user = bodycondition::byId($_GET['id']);
$user->delete();


?>

<script type="text/javascript">
	location.reload();
</script>