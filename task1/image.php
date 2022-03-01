<?php
// подчёт количества запусков скрипта, соответственно загрузки изображения
$file = "counterOpenImage.dat";
fclose(fopen($file,"a+b"));     // проверка наличия файла, на всякий пожарный
$f = fopen($file,"r+t");        
flock($f, LOCK_EX);            
$count = fread($f, 100);        
$count = $count + 1;                    
ftruncate($f, 0);               
fseek($f, 0, SEEK_SET);         
fwrite($f, $count);             
fclose($f); 

// загрузка и отправка изображения
$filename = "car.png";
 $handle = fopen($filename, "r");
 $contents = fread($handle, filesize($filename));
 header("Content-Type: image/png");
 echo $contents;
 fclose($handle);
?>
