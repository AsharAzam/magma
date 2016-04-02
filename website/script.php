<?php
if(isset($_POST['copy'])){

	
	$url = $_POST['url'];
	$copy_from = strstr($url ,'http');
	$startFrom = '.com';
	$dir = strstr($url, $startFrom);
	$dir = str_replace($startFrom, '', $dir);
	$file_name = explode('/',$dir);
	$file_name = $file_name[count($file_name)-1];
	$dir = str_replace($file_name,'', $dir);
	$dir = substr($dir,1);
	$file_name = explode("?", $file_name);
	$file_name = $file_name[0];
	$copy_to = $dir.$file_name;

	 if(is_dir($dir)){

	 }else{
	 	$path = '';
	 	$created_dir = array();
	 	foreach (explode('/', $dir) as $key => $directory) {
	 		if(strlen($directory)>1){

	 			if($key == 0){
		 			$path .= ''. $directory.'';
	 			}else{
		 			$path .= '/'. $directory.'';	 				
	 			}
	 			if(!is_dir($path)){
		 			if(mkdir($path)){
		 				$created_dir[] = $path;
		 			}

	 			}
	 		}
	 	}
	 	$path = '';
	 }

	 if(!file_exists($copy_to)){
	 	if(copy($copy_from,$copy_to)){
	 		$msg =  "File is Created";
	 	}else{
	 		ECHO $copy_from;
	 		$msg = "error";
	 	}
	 }else{
	 	$msg = "File is Aavailable";
	 }

	

}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
<form method="post" action="script.php">
<div class="col-xs-12" style="margin-bottom:10px;">
	<div class="form-group">
	    <label for="exampleInputEmail1">Copy Url</label>
		<textarea class="form-control" placeholder="Copy Url" name="url"></textarea>
	  </div>
	  <input  type="submit" class="btn btn-default" value="Copy" name="copy">
	  <?php 
	  	if(isset($msg)){
	  		echo "<span class='well well-sm'>$msg</span>";
	  	} 
	  ?>
</div>

</form>
<div class="col-xs-12">
	<div class="panel panel-default">
	  <div class="panel-heading">Created Directories</div>
	  <div class="panel-body">
	    <?php
	    	if(isset($created_dir)){
	    		foreach ($created_dir as $key => $dir) {
	    			echo "<ul class='list-group'>";
	    			echo "<li class='list-group-item' >$dir</li>";
	    			echo "</ul>";

	    		}
	    	}
	    ?>
	  </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>