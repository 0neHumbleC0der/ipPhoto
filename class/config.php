<!--The script where the ip is saved into the text document.
Feel free to implement and improve the script.-->

<?php  function ipPhoto() {
  $archive="ipPhoto.txt";
  $process=fopen($archvie,"a") or die("trash");
  $ip = $_SERVER['REMOTE_ADDR'];
  $date=date("d/m/y");
  $data="ip = ".$ip.", date = ".$date."\n";   fwrite($process,$data);
  fclose($prox);
}
  ipPhoto(); ?>
