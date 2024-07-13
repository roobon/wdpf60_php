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

			$obj = new Student("result.txt");
			$obj->show_result($stid);
			 	
		}

		// Class 
		class Student {
			public $datas;
			public $arrayData;

			public function __construct($file){
				$this->datas = $file;
				$this->arrayData = file($this->datas);
			}

			public function show_result($stid){
				foreach($this->arrayData as $data){
					$line = explode("|", $data);
					list($id, $name, $score, $result) = $line;
					if($id==$stid){
						$output = "ID: ". $id . " Name: ". $name . " Score: " . $score . " Result: " . $result;	
					} 
				}
				echo $output;
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