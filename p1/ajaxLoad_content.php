<? include "functionService.php"; ?>
<?
   $file = $_POST["file"];
   $str = readFiles($admin_folder.$content_folder.$file);
   echo $str;
?>