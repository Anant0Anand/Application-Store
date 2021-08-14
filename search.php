<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css" />
    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
    <title>Details</title>
</head>
<body>
  <div >
 <form class="form-inline my-2 my-lg-0" method="POST" action="search.php" >
          <input class="form-control mr-sm-2" type="search" placeholder="Registration No." aria-label="Search" name="name">
          <input type="submit" placeholder="submit" value="submit" name="submit" />
        </form>

        <?php
           $connect=mysqli_connect('localhost','root','','webpdb');
           if(isset($_POST['submit']))
           {
             $name=$_POST['name'];
             $query=mysqli_query($connect,"select * from applications where regsno='$name' or name='$name' ")or die("Error: " . mysqli_error($connect));
             while($row=mysqli_fetch_array($query))
             {
    $name = $row['name'];
    $regsno = $row['regsno'];
    $dob=$row['dob'];
    $state = $row['state'];
    $pincode = $row['pincode'];
    $mob = $row['mob'];
    $email = $row['email'];
    $board=$row['board'];
 $school1=$row['school1'];
 $year1=$row['year1'];
    $grade=$row['grade'];
    $bord=$row['bord'];
 $school2=$row['school2'];
 $year2=$row['year2'];
    $grde=$row['grde'];
    $colg=$row['colg'];
 $year3=$row['year3'];
    $deg=$row['deg'];
    $marks=$row['marks'];
    $skills=$row['skills'];
    $interest=$row['interest'];
    $salary=$row['salary'];
             }
           }
        ?>
        </div>
        <?php
         if(isset($_POST['name']))
         {
          echo "<div id='page-wrap'>
          <div id='contact-info' class='vcard'>
          
              <!-- Microformats! -->
             
              <h1 class='fn'>Applicant Name :
              $name  
              </h1>
              <p>
                  <h2>Phone:</h2><span class='tel'>$mob</span><br><br>
                  <h2>Email:</h2><a class='email' href='mailto:greatoldone@lovecraft.com'>$email</a><br><br>
                  <h2>State:</h2><span class='email'>$state</span><br><br>
                  <h2>Date Of Birth:</h2><span class='email'>$dob</span><br><br>
                  <h2>Registration No.:</h2><span class='email'>$regsno</span><br>
              </p>
          </div>
                 
          <div class='clear'></div>
          
<dl>  
              <dd class='clear'></dd>
              
              <dt>1.Higher Education</dt>
              <dd>
                  <ul>
                      <li><Strong>Collage:</Strong>$colg</li>
                      <li><Strong>Year of Study:</Strong>$year3</li>
                      <li><Strong>Degree:</Strong>$deg</li>
                      <li><Strong>marks:</Strong>$marks</li>
                     
                  </ul>
              </dd>
              </dl>
              <dd class='clear'></dd>

<dl>
              <dd class='clear'></dd>
              
              <dt>2.Secondary Education</dt>
              <dd>
                  <ul>
                      <li><Strong>Board:</Strong>$bord</li>
<li><Strong>School:</Strong>$school2</li>
<li><Strong>Year of Study:</Strong>$year2</li>
                      <li><Strong>Grade:</Strong>$grde</li>
                     
                  </ul>
              </dd>
              </dl>
              <dd class='clear'></dd>

<dl>
              <dd class='clear'></dd>
              
              <dt>3.Primary Education</dt>
              <dd>
                  <ul>
                      <li><Strong>Board:</Strong> $board</li>
<li><Strong>School:</Strong>$school1</li>
<li><Strong>Year of Study:</Strong>$year1</li>
                      <li><Strong>Grade:</Strong> $grade</li>
                  </ul>
              </dd>
              </dl>
              <dd class='clear'></dd>

              
              <dt>Skills</dt>
              <dd> $skills</dd>
              
              <dd class='clear'></dd>
              
              <dt>Interest</dt>
              <dd>$interest</dd>
              
              <dd class='clear'></dd>
              <dt>Expected Salary</dt>
              <dd> $salary</dd>

          
          <div class='clear'></div>
      
      </div>";
        
         }
        ?>
        
</body>
</html>