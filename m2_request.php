<?php
//파일 만들기
$log_dir = $_SERVER['DOCUMENT_ROOT'].'data/test';  

if($_GET)
{
   if(!is_file($log_dir))
   {
      mkdir($dir,0777);
   }



   $myfile = fopen($log_dir."/log4.txt", "a"); 

   chmod ($log_dir."/log4.txt", 0777); 

   fwrite($myfile,chr(10).$_POST['memo']);

   fclose($myfile); 
}

$myfile = fopen($log_dir."/log4.txt", "r"); 
$list = fread($myfile,1024);
$list=split("\n",$list); 

for($i=0; $i<sizeof($list); $i++) { 
    $data .= '<li>'.$list[$i].'</li>'; 
} 

echo $data;
?>