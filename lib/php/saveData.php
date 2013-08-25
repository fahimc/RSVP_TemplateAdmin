<?php
//echo $_POST['data'];
//echo $_FILES['mainImage']["name"];
$data = json_decode($_POST['data']);

foreach ($data->{'content'} as $key => $val)
{
	foreach ($data->{'content'}->{$key} as $keyB => $valB)
	{
		switch($valB->type)
		{
			case "file":
				storeImage($valB,$keyB);
			break;
		}
	}
}
function storeImage($obj,$name)
{
	echo $_FILES[$name]["name"];
}
file_put_contents("../../data.json", $_POST['data']);
?>