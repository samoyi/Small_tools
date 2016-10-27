<pre><?php 
/*
 * 直接运行该文件，当前目录中所有文件将按照foreach循环中rename函数的规则重命名
 * 并不保证所有文件都可以正确转换。该页会打印出所有文件原来的名字作为对比
 */



$aAllInThisDir = scandir("./"); // 当前目录的所有文件、文件夹和目录
$aAllFilesToBeRename = array(); // 将要被重命名的文件
$thisFileName =  basename( $_SERVER['PHP_SELF'] ); // 该脚本文件名

foreach($aAllInThisDir as $value) 
{
   if( is_file($value) &&  $value!==$thisFileName )
   {  
      $aAllFilesToBeRename[] = $value;
      rename($value, substr($value, 7));
   }
}

print_r( $aAllFilesToBeRename ); // 作为检查和对照，打印原来的文件名



?></pre>