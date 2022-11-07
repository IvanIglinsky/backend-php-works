<?php
class Dir{
    public  static  $dir= "./Text/";

     function ReadFile($name)
     {
         $fp=fopen( self::$dir.$name,'r+');
         $val=fread($fp,filesize(self::$dir.$name));
         fclose($fp);
         return $val;

     }
     function WriteFile($name,$value)
     {
         $fp=fopen( self::$dir.$name,'r+');
         fwrite($fp,$value);
         fclose($fp);
     }
     function ClearFile($name)
     {
         $fp=fopen( self::$dir.$name,'w+');
         fwrite($fp,'');
         fclose($fp);
     }
}
$dir=new Dir();
echo $dir->ReadFile('File1.txt');
$dir->WriteFile('File2.txt','123');
$dir->ClearFile('File3.txt');