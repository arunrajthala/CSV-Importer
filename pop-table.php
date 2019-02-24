<?php
/**
 * save CSV file to upload folder, then
 * Import CSV to table `original_data` 
 *
*/
$target_dir = "uploads/";
$filename = $_FILES["file"]["name"];
$target_file = $target_dir . basename($filename);

$ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));

if(isset($_POST["submit"])) {
	if($ext == ".csv") {

		$file_uploaded = move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);



		

		
	  $file = fopen($target_file, "r");
		
	  $row = 1;
	  if ($file !== FALSE) {
	         while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
	         {	
     	        // unset($data[0]);
     	        // $product_array[] = $data;
	         	echo "<pre>";
     	        print_r($data);
     	        echo "</pre>";


	         	        $num = sizeof($data);
				        // echo "<p> $num fields in line $row: <br /></p>\n";
				     //    for ($row = 0; $row < 4; $row++) {

					    //     $row++;
					        // for ($c=0; $c < $num; $c++) {
					        //     echo $data[$c] . "<br />\n";
					        // }
					    // }
	         	        // echo "</pre>";
	         //    // $sql = "INSERT into tableName(name,email,address) values('$emapData[0]','$emapData[1]','$emapData[2]')";
	         //    // mysql_query($sql);
	         }
	             // fclose($file);
	     }
	         fclose($file);
	         // echo "CSV File has been successfully Imported.";
	}
	else {
	    echo "Error: Please Upload only CSV File";
	}


}
?>