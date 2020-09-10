<?php
         $inputFile=fopen("input.txt","r") or die("Unable to open file!!!");
         $textArray=preg_split("/[\s,]+/",fread($inputFile,filesize("input.txt")));
         fclose($inputFile);
 
         $count=array_count_values($textArray);
         $number_count=array();
 
         foreach($count as $key=>$value) {
                   if($value >=3)
                             array_push($number_count,$value);
         }
 
         $result=implode(',',$number_count);
         echo 'Repeating number >= three time:',$result,"\n";
?>
