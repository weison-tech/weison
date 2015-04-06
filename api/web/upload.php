<?php

if ($_FILES["file"]["error"] > 0)
  {
  		echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  { 
          echo "ddddaaa";
          // $folder = '/home/wwwroot/weison/uploads'."/".date('Ymd');
          // if(!is_dir($folder)){
          //     mkdir($folder);
          //     chmod($folder,0777);
          // }
          // $tmp = explode(".", $_FILES["file"]["name"]);
          // $ext = $tmp[count($tmp)-1];
          // $fileName = md5(uniqid(rand())).".".$ext;
          // if(move_uploaded_file($_FILES["file"]["tmp_name"], $folder."/".$fileName)){
          //     echo "移动文件成功";
          // }else{
          //     echo"移动文件失败";
          // }
          echo "ddddaaacccadadf";
  }
?>