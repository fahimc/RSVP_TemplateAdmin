<?php
//echo $_POST['data'];
//echo $_FILES['mainImage']["name"];
$data = json_decode($_POST['data']);
const imageFolder = "../../../resource/images/";
const imagePrefix = "resource/images/";
foreach ($data->{'content'} as $key => $val)
{
	foreach ($data->{'content'}->{$key} as $keyB => $valB)
	{
		switch($valB->type)
		{
			case "file":
			$path=	storeImage($valB,$keyB);
				echo "path:".($path==null?"null":"has");
				if($path!=null)$valB->value = $path;
			break;
		}
	}
}
function storeImage($obj,$name)
{
	//echo "image foldeer:".imageFolder."/n";
	
	if($_FILES[$name]==null)return null;
	$path = imageFolder. $_FILES[$name]['name'] ;
	move_uploaded_file( $_FILES[$name]["tmp_name"],$path );
	//echo $_FILES[$name]["name"];
	return imagePrefix.$_FILES[$name]['name'];
}
file_put_contents("../../data.json", json_encode($data));
file_put_contents("../../../data.json", json_encode($data));
?>