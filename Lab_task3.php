<!DOCTYPE html>
<html>
<body>

<h2>Registration Formorm</h2>
<?php
 
$nameerror=$emailerror=$dderror=$mmerror=$yyyyerror=$gendererror=$degreeerror=$blooderror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if(empty($_POST["name"]))
  {
	  $nameerror="name required";
  }
  else
  {
      $nameerror=$POST["name"];
  }
  
  if(empty($_POST["email"]))
  {
	  $emailerror="email required";
  }
  else
  {
      $emailerror=$POST["email"];
  }
  
  if(empty($_POST["dd"]))
  {
	  $dderror="date required";
  }
  else
  {
      $dderror=$POST["dd"];
  }
  if(empty($_POST["mm"]))
  {
	  $mmerror="month required";
  }
  else
  {
      $mmerror=$POST["mm"];
  }
  
  if(empty($_POST["yyyy"]))
  {
	  $yyyyerror="year required";
  }
  else
  {
      $yyyyerror=$POST["yyyy"];
  }
}



?>



<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="post">
 
 <b>NAME: </b>
  <input type="text" name="name">
  <span type="color:blue"><?php echo $nameerror; ?><span/>
 
  <br><br>
  
 <b>EMAIL: </b>
  <input type="email" name="email">
  <span type="color:blue"><?php echo $emailerror; ?><span/>
 
  <br><br>
  
  <b>DATH OF BIRTH: </b>
  <input type="number" name="dd">
  <span type="color:blue"><?php echo $dderror; ?><span/>
  <b>/</b>
  <input type="number" name="mm">
  <span type="color:blue"><?php echo $mmerror; ?><span/>
  <b>/</b>
  <input type="number" name="yyyy">
  <span type="color:blue"><?php echo $yyyyerror; ?><span/>
 
  <br><br>
  
  <b>GENDER:</b>

  <input type="checkbox" name="gender" value="ssc"/>SSC
  <input type="checkbox" name="gender" value="hsc"/>HSC
  <input type="checkbox" name="gender" value="bsc"/>BSc
  <input type="checkbox" name="gender" value="msc"/>MSc
  <span type="color:blue"><?php echo $gendererror; ?><span/>
  <br><br>
  
  <br> <br>
  
  <b>DEGREE:</b>

  <input type="checkbox" name="degree" value="ssc">SSC
  <input type="checkbox" name="degree" value="hsc">HSC
  <input type="checkbox" name="degree" value="bsc">BSc
  <input type="checkbox" name="degree" value="msc">MSc
  <span type="color:blue"><?php echo $degreeerror; ?><span/>
  <br>
  <br>
  
  <br><br>
  
  <b>BLOOD GROUP: </b>
  <br><br>
  <select name="blood">
   <option value="none">None</option>
   <option value="A+">A+</option>
   <option value="B+">B+</option>
   <option value="A-">A-</option>
   <option value="B-">B-</option>
   <option value="AB+">AB+</option>
   <option value="AB-">AB-</option>
   <option value="O+">O+</option>
   <option value="O-">O-</option>   
   </select>
   <span type="color:blue"><?php echo $blooderror; ?><span/>
   <br><br><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>