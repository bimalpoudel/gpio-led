<?php
require_once("inc.angular.php");
require_once("inc.colors.php");

$color = $default = "off";
if(empty($_POST["color"]["code"]))
{
	$_POST["color"]["code"] = $default;
}

# Validate
foreach($colors as $color)
{
	if($_POST["color"]["code"] == $color["code"])
	{
		$color = $color["code"];
		break;
	}
}

# chmod -R 755 shell/*.sh
exec("../shell/on.sh"); // reset
exec("../shell/{$color}.sh");

$message = array("status" => "ok");
echo json_encode($message);
