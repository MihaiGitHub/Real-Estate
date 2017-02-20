<?php
session_start();

include 'include/dbconnect.php';

if(!isset($_SESSION['pid'])){
    $stmt = $objDb->prepare('INSERT INTO properties (`uid`) VALUES (:uid)');
    $result = $stmt->execute(array('uid' => $_SESSION['id']));
    $_SESSION['pid'] = $objDb->lastInsertId($result);

//	$stmt = $objDb->prepare('SELECT id FROM properties  (:uid)');
  //  $result = $stmt->execute(array('uid' => $_SESSION['id']));
    //$_SESSION['pid'] = $objDb->lastInsertId($result);
}

///////////////////////////////////////////////////////////////////////////
//	if($result){
		

		//////////////////////////////////////////////////////////////////////////////////////////////////////
//		$j = 0; //Variable for indexing uploaded image 

		if (!is_dir('uploads/'.$_SESSION['id'].'/'.$_SESSION['pid'])) {
			mkdir('uploads/'.$_SESSION['id'].'/'.$_SESSION['pid'], 0777, true);
		}
		
		$target_path = "uploads/".$_SESSION['id']."/".$_SESSION['pid']."/"; //Declaring Path for uploaded images

//		for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

			$validextensions = array("JPG", "JPEG", "PNG", "jpeg", "jpg", "png");  //Extensions which are allowed
			$ext = explode('.', basename($_FILES['file']['name']));//explode file name from dot(.) 

            //echo $_FILES['file']['name'];

			$file_extension = end($ext); //store extensions in the variable

			$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
	//		$j = $j + 1;//increment the number of uploaded images according to the files in array
		
			if (($_FILES["file"]["size"] < 6000000) //Approx. 100kb files can be uploaded.
						&& in_array($file_extension, $validextensions)) {
					if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {//if file moved to uploads folder
					//	echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
					
						if(isset($_GET['type'])){
							$stmt2 = $objDb->prepare('INSERT INTO properties_images (`pid`, `url`, `type`) VALUES (:pid, :url, :type)');
							$result2 = $stmt2->execute(array('pid' => $_SESSION['pid'], 'url' => $target_path, 'type' => "floorplan"));
						} else {
							$stmt2 = $objDb->prepare('INSERT INTO properties_images (`pid`, `url`, `type`) VALUES (:pid, :url, :type)');
							$result2 = $stmt2->execute(array('pid' => $_SESSION['pid'], 'url' => $target_path, 'type' => "gallery"));
						}

                        if($result2){
                            echo 'success';
                        }
					} else {//if file was not moved.
		//				echo $j. '2).<span id="error">please try again!.</span><br/><br/>';
					}
				} else {//if file size and file type was incorrect.
		//			echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
				}
	//	}

		/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//		header("Location:index.php");
//		exit;
//	}
//////////////////////////////////////////////////////////////////////////////////
/*
//$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . "/" . $storeFolder . "/";  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

 
    move_uploaded_file($tempFile,$targetFile); //6

    echo 'success in files';
     
}
echo 'success outside if';
*/


/*
if (isset($_POST['submit'])) {
    $j = 0; //Variable for indexing uploaded image 
    
	$target_path = "uploads/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
        
		$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
      
	  if (($_FILES["file"]["size"][$i] < 100000) //Approx. 100kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {//if file moved to uploads folder
                echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
            } else {//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
}
*/
?>