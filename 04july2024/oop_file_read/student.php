<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

		if(isset($_REQUEST['submit'])){
			$stid = $_REQUEST['stid'];

			$datas = file('result.txt');
			//echo "<pre>";
			//print_r($datas);

			foreach($datas as $data){
				$line = explode("|", $data);
				list($id, $name, $score, $result) = $line;
				if($id==$stid){
					echo $id, $name, $score, $result;	
				} 
			}
		}

	 ?>
	<form action="" method="post">
 	<select name="stid">
 		<option value="">Select One</option>
 		<option value="1">Saif</option>
 		<option value="2">Zamil</option>
 		<option value="3">Tanim</option>
 	</select>
 	<input type="submit" name="submit" value="SHOW RESULT">
 </form>

</body>
</html>