<?php

if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../img/".$_FILES["filUpload"]["name"]))
{
    echo "Copy/Upload Complete<br>";
    
    //*** Insert Record ***//	
}else{
    echo "Not";
}

?>