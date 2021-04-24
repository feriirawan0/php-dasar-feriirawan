
<?php
if(isset($_POST['bil1'])){
  $bil1 = $_POST['bil1'];
  switch($bil1){
    case 1:
      require('function/mahasiswa.php');
    break;
    case 2:
      require('function/klak.php');
    break;
    case 3:
      require('function/gnp.php');
    break;
    case 4:
      require('function/tgs2b.php');
    break;
    default;
    echo "<h1>* Silahkan pilih materi</h1>";
  }
}
?>
