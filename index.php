<!-- <?php
$myfile = fopen('files.txt', 'w');
$txt = 'jhon <br>';
fwrite($myfile, $txt);
$txt = 'Youssouf<br>';
fwrite($myfile, $txt);
$txt = 'Diarra';
fwrite($myfile, $txt);
fclose($myfile);
$read = file('files.txt');
foreach($read as $line){
	echo $line.'   ';
}
?> -->
 
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
	 <link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
</head>
<body>
<div class="w3-card">
    <?php if(isset($_POST["name"])){
      $name= $_POST["name"];
      $test = fopen('test.txt', 'a');
      fwrite($test, $name."\n");
      fclose($test);
      $read = file('test.txt');
       $count = count($read);
      foreach ($read as $line) {
        echo   "<input type='submit' name='delete' value='delete'> <li>".$line."</li>" ;
      };
     /* for ($i=0; $i <$count ; $i++) { 
        echo $read [$i];
      }*/
    }

     ?>
     
      </div>
   	<form method="POST" class="w3-container">
  		<label class="w3-label w3-text-blue">Full Name</label>
  		<input class="w3-input w3-border" type="text" name="name"> <br>
  		<input type="submit" value="Submit">
  	</form>
</body>
</html>