<html>
  <div>
    <input type="button" onclick="location.href='index3.php'" name="back" value="Go back"/>
  </div>
</html>

<?php
$output = '';
$dir = "uploaded_files/";
$ar=scandir($dir);
$box=$_POST['box'];


while (list ($key,$val) = @each ($box)) {
$path=$dir	."/".$val;
if(unlink($path)) echo "Deleted file ";
echo "$val,";
}
echo "<hr>";
$ar=scandir($dir);// Once again directory content is scanned to exclude deleted files.
/// displaying the file names with checkbox and form ////
echo "<form method=post name='f1' action=''>";
while (list ($key, $val) = each ($ar)) {
if(strlen($val)>3){
echo "<input type=checkbox name=box[] value='$val'>$val <img src='uploaded_files/".$val."' /><br />";
  }
}
echo "<input type=submit value='Delete'></form>";
?>


<!-- #var_dump($_POST);
$output .= '<form method="post" action=" '.$_SERVER['php_self'].'">';

// foreach ($images as $checkbox){
//   echo '<ar>';
//   echo '<input type="checkbox" name= '.$checkbox.'> <img src="'.$checkbox.'" /><br />';
//   echo '</ar>';
// }
echo '<ar>';
$output .= '<input type="submit" name="Submit" value="Click here when boxes have been selected"></form><br>';

echo '</ar>';
echo $output;
?> -->

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles_delete.css">

</html>
