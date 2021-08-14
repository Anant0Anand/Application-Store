<?php
 if(isset($_POST['name']))
 {
 $connect=mysqli_connect('localhost','root','','webpdb');
  $insert=false;
 //check connection
  if(mysqli_connect_errno($connect))
  {
     echo 'Failed to connect to database: '.mysqli_connect_error();
 }
 else
     //echo 'Connected Successfully!!';

    $name = $_POST['name'];
    $regsno = $_POST['regsno'];
    $dob=$_POST['dob'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $board=$_POST['board'];
$school1=$_POST['school1'];
$year1=$_POST['year1'];
    $grade=$_POST['grade'];
    $bord=$_POST['bord'];
$school2=$_POST['school2'];
$year2=$_POST['year2'];
    $grde=$_POST['grde'];
    $colg=$_POST['colg'];
$year3=$_POST['year3'];
    $deg=$_POST['deg'];
    $marks=$_POST['marks'];
    $skills=$_POST['skills'];
    $interest=$_POST['interest'];
    $salary=$_POST['salary'];
    $sql = "INSERT INTO `webpdb`.`applications` (`name`, `regsno`, `dob`, `state`, `pincode`, `mob`, `email`,`board`,`school1`,`year1`,`grade`,`bord`,`school2`,`year2`,`grde`,`colg`,`year3`,`deg`,`marks`,`skills`,`interest`,`salary`)     
    VALUES ('$name', '$regsno', '$dob', '$state', '$pincode', '$mob', '$email','$board','$school1','$year1','$grade','$bord','$school2','$year2','$grde','$colg','$year3','$deg','$marks','$skills','$interest','$salary' );";
    // echo $sql;

    // Execute the query
    if($connect->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $result='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Form</strong> Suceesfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
        echo "ERROR: $sql <br> $connect->error";
    }

    // Close the database connection
    $connect->close();
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel = "stylesheet"
   type = "text/css"
   href = "style.css" />
    <title>Ncs portal</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">NCS Portal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home.html">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="search.php">view application<span class="sr-only">(current)</span></a>
          </li>
         
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    
        
       
    
    <div class="box" style="width: 80%;  margin: auto;" >

      <form action="index.php" method="post"><fieldset>

<h2 style="text-align:left; font-style: italic;color: black;">*-->Read the instructions carefully<--*</h2>
<h2 style="text-align:left; font-style: italic;color: black;">1.Enter your Registration number in this form G20****SK</h2>
<h2 style="text-align:left; font-style: italic;color: black;">2.Remember your registration number</h2>
<h2 style="text-align:left; font-style: italic;color: black;">3.Fill the information honestly</h2><br><br>

<h3 style="font-style: italic;color: red;">APPLICATION FORM</h3>
<h3 style="text-align:left; font-style: italic;color: green;">*Personal Informatation*</h3>
 <table border="1" width="600" height="10" style="text-align:center;" cellspacing="0">
<div>
<tr>

<td><label>Name :</label></td>
        <td><input type="text" id="name" name="name" placeholder="Name" /></td>
</tr>
</div>
<div>
<tr>
<td><label>Registration No.:</label></td>
        <td><input type="text" id="regsno" name="regsno" placeholder="G20****SK" /></td>
</tr>
</div>

<div>
<tr>
<td><label>Date Of Birth :</label></td>
        <td><input type="text" id="dob"  name="dob" placeholder="dd-mm-yy" /></td>
</tr>
</div>
<div>
<tr>
<td><label>State:</label></td>
        <td><input type="text" id="state" name="state" placeholder="Enter your state" /></td>
</tr>
</div>

<div>
<tr>
<td><label>Pincode :</label></td>
        <td><input type="text" id="pincode" name="pincode" placeholder="Pincode" /></td>
</tr>
</div>

<div>
<tr>
<td><label>Mobile No. :</label></td>
        <td><input type="text" id="mob" name="mob" placeholder="Mobile No." /></td>
</tr>
</div>

<div><tr>
<td><label>Email :</label></td>
        <td><input type="text" id="email"  name="email" placeholder="Email" /></td>
</tr></div>
</table>

<h3 style="text-align:left; font-style: italic;color: green;">*Educational Informatation*</h3>
 <table border="1" width="600" height="10" style="text-align:center;" cellspacing="0">
<div><tr>
<td><label>Board of 10th :</label></td>
        <td><input type="text" id="board"  name="board" placeholder="CBSE/State board" /></td>
</tr>
</div>

<div><tr>
<td><label>10th School :</label></td>
        <td><input type="text" id="school1"  name="school1" placeholder="School Name" /></td>
</tr>
</div>

<div><tr>
<td><label>Year of Study:</label></td>
        <td><input type="text" id="year1"  name="year1" placeholder="Year of Study" /></td>
</tr>
</div>

<div><tr>
<td><label>Grade in 10th :</label></td>
        <td><input type="text" id="grade"  name="grade" placeholder="CGPA/Percentage" /></td>
</tr>
</div>

<div><tr>
<td><label>Board of 12th :</label></td>
        <td><input type="text" id="bord"  name="bord" placeholder="CBSE/State board" /></td>
</tr>
</div>

<div><tr>
<td><label>12th School :</label></td>
        <td><input type="text" id="school2"  name="school2" placeholder="School Name" /></td>
</tr>
</div>

<div><tr>
<td><label>Year of Study:</label></td>
        <td><input type="text" id="year2"  name="year2" placeholder="Year of Study" /></td>
</tr>
</div>

<div><tr>
<td><label>Grade in 12th :</label></td>
        <td><input type="text" id="grde"  name="grde" placeholder="CGPA/Percentage" /></td>
</tr>
</div>

<div><tr>
<td><label>Collage :</label></td>
        <td><input type="text" id="colg"  name="colg" placeholder="Enter your collage name" /></td>
</tr>
</div>

<div><tr>
<td><label>Year of Study:</label></td>
        <td><input type="text" id="year3"  name="year3" placeholder="Year of Study" /></td>
</tr>
</div>

<div><tr>
<td><label>Degree :</label></td>
        <td><input type="text" id="deg"  name="deg" placeholder="Btech/Mtech and stream" /></td>
</tr>
</div>

<div><tr>
<td><label>Marks :</label></td>
        <td><input type="text" id="marks"  name="marks" placeholder="CGPA/Percentage" /></td>
</tr>
</div>
</table>

<h3 style="text-align:left; font-style: italic;color: green;">*Other Informatation*</h3>
 <table border="1" width="600" height="10" style="text-align:center;" cellspacing="0">
<div><tr>
<td><label>Skills :</label></td>
        <td><input type="text" id="skills"  name="skills" placeholder="Enter your skills" /></td>
</tr>
</div>

<div><tr>
<td><label>Interest :</label></td>
        <td><input type="text" id="interest"  name="interest" placeholder="Enter your hobbies" /></td>
</tr>
</div>
<div><tr>
<td><label>Expected Salary :</label></td>
        <td><input type="text" id="salary"  name="salary" placeholder="Enter expected salary" /></td>
</tr>
</div>
</table>

</div>

        <input type="submit" value="submit"/>

       </fieldset></form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>