<?php
    session_start();
    include "DB_Connection.php";
    if(isset($_POST['tbAdminUSer']) && 
       isset($_POST['tbAdminPassword']))
    {
        $username = $_POST['tbAdminUSer'];
        $password = $_POST['tbAdminPassword'];
         $result = $conn->query("SELECT username,password FROM accounts WHERE username LIKE '$username' AND password LIKE '$password' AND position = 'admin'");
        if($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $userdb = $row['username'];
                $passdb = $row['password'];
                $pos = $row['position'];
            }
            if($userdb == $username &&  $passdb == $password )
                {
                    $_SESSION['username'] = $username;
                }
            if($pos != "admin"){
            header("location: adminLogin.php?message=you are not the admin");
            }
        }else {
            header("location: adminLogin.php?message=username does not exist or enter your username & password");
        } 
    }
    if(isset($_SESSION['username'])){}
    else{
       header("location: adminLOGIN.php?message=You have not logged in please login");
        die();
    }
?>


<!DOCTYPE html>
<html>
<head>
   <title>School Management System</title>
    <link rel="stylesheet" href="external.css">
    <style type="text/css">
        body{
            
           background-color: white;
            margin: 1px 0px 1px 1px;
            max-width: 1100px;
            margin: 0 auto;
            max-width: 1130px;
        
   
        }
        a{
            color:dimgrey;
            font-size: 18px;
            
        }   
   
    li {
        float: right;
    }

    li a,.hdr, .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-family: Century Gothic;
    }
    
        .content{
            width: auto;
            height: auto;
            background-color: white;
            text-align: justify;
            padding: 2em 3em 3em 3em;
            
        }
        p{
            text-align: center;
        }
        
        
        a._aLnks{
            font-family: Century Gothic;
            text-decoration: none;
            color: blue;
        }
        a._aLnks:hover{
            color: orangered;
        }
        h1,h2,h3{
        font-family: Century Gothic;
        color: #003366;
        line-height: 0.7;
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; 
    }
        .tbtitle{
            width: 439px;
            border-radius: 5px;
            border-style: hidden;
            height: 25px;
            box-shadow: 0px 0px 1px;
        }
        .consaa{
            width: auto;
            height: 1900px;
            background-color: /*#eeeeef*/ yellow;
           
            float: inherit;
            box-shadow: 0px 0px 2px gray;
            float: right;
            
        }
        .to_float{
            background-color: ;
            width: 240px;
            height: auto;
            float: inherit;
            
           
        }
        .to_float,.consaa,.afterAdd{
            display: inline-block;
            height: auto;
            
        }
        .afterAdd{
            width: 231px;
            height: 500px;
            background-color:;
            float: right;
           
            
        }
        .myprofile{
            width: 200px;
            height: auto;
            background-color: #eeeeef;
            padding: 0.2em 1em 1em 1em;
            box-shadow: 0px 5px 4px 1px #dcdcdc;
        }
        .evnts{
             width: 185px;
            height: auto;
            background-color: #eeeeef;
            padding: 1em;
            float: right;
            box-shadow: 0px 5px 4px 1px #dcdcdc;
            text-align: left;
            display: block;
        }
        .ptxts{
            font-family: Century Gothic;
            line-height: 1.1;
            text-align: left;
            font-size: 15px;
        }
        .submitbutton{
            width: 120px;
            height: 40px;
            border-style: hidden;
            float: right;
            background-color: #40c4f0;
            border-radius: 2px;
        }
        .submitbutton:hover{
            
            background-color: #00b1eb;
            box-shadow: 0px 0px 15px 0px gray;
        }
        .titles{
            text-align: center;
            font-family: Century Gothic;
             line-height: 0.8;
            font-weight: bold;
        }
        .toradius{
            border-radius: 2px;
            resize: none;
        }
      
        .logo{
             width: 185px;
            height: auto;
            padding: 1em;
            float: right;
        }
        .toradius{
            font-family: Century Gothic;
            border-style: hidden;
            font-size: 14px;
             resize:none;
        }
        #boto{
            font-family: Century Gothic;
            color:white;
        }
        .pp{
            font-family: Century Gothic;
            text-align: center;
        }
        .in_a{
            font-size: 14px;
        }
        .formss{
            width: 496px;
            height: auto;
            background-color: #eeeeef ;
            padding:1em 2em 0.2em 2em;
            float: inherit;
           box-shadow: 0px 5px 4px 1px #dcdcdc;
            float: right;
        }
        .x{
        width: 200px;
        height: 30px;
        }
    </style>
    <div class="link">
        <ul class="linkhdr">
           
            
            <li class="dropdown"><a class="hdr"  href="" class="dropbtn">&emsp;&emsp;&emsp;</a>
            <li class="dropdown"><a class="hdr"  href="logout.php" class="dropbtn">Logout</a>
            <li class="dropdown"><a class="hdr"  href="EditMyAccount.php" class="dropbtn">Edit Acount</a>
             <li class="dropdown"><a class="hdr" href="#" class="dropbtn">Students</a>
            <div class="dropdown-content">
            <a class="hdr" href="RegStudent.php"> Register Student</a>
            <a class="hdr" href="UpdateStudent.php">Update Student</a>
            <a class="hdr" href="MasterList.php">View Students Master list</a>
       
            </div>
            </li>
            <li class="dropdown"><a class="hdr" href="#" class="dropbtn">Teachers</a>
            <div class="dropdown-content">
            <a class="hdr" href="RegTeacher.php"> Register Teacher</a>
            <a class="hdr" href="TeacherMasterList.php">Update Teacher</a>
            <a class="hdr" href="TeacherMasterList.php">View Teacher Master list</a>
          

            </div>
                <li><a class="hdr" href="ListSites.php">My Sites</a></li> 
            </li>
            <li><a class="hdr" href="AdminAddPic.php">&nbsp;Upload Files</a></li>  
            <li><a class="hdr" href="Admin.php">&nbsp;Home</a></li>  
        </ul>
      <br><br>
           
        
         
    </div> 
    </head>
    <body>
          
        
   <br>
      
           
        <div class="content">
     <br>
            
          
      
             <div class="to_float">
            <div class="myprofile">
          
                        <?php  
                                $username = $_SESSION['username'];
                                $result = $conn->query("SELECT ID FROM accounts WHERE username LIKE '$username'");
                                if($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        $ID = $row['ID'];
                                    }
                                     $result = $conn->query("SELECT DISTINCT MAX(datetime) AS datetime, filename FROM uploads WHERE placed LIKE 'Profile' AND uploaderID LIKE '$ID' ");
                                    if($result->num_rows > 0)
                                    {
                                        while ($row = $result->fetch_assoc())
                                        {   
                                            $filename = $row['filename'];  
                                           echo '
                                           <center> <p class="titles">My profile </p>
                                           <center>
                                           <img src="images/'.$filename.'" width="180px>';
                                        }
                                    }
                                    else
                                    {
                                        echo '<center><p class="titles">My profile </p>
                                            <img src="images/L2.jpg" width="180px">';
                                    }
                                    $result = $conn->query("SELECT * FROM teachers WHERE teachersID LIKE '$ID' ");
                                    if($result->num_rows > 0)
                                    {
                                        while ($row = $result->fetch_assoc())
                                        {   
                                            $tid = $row['teacherID'];
                                            $nme = $row['name'];
                                            $midnme = $row['middlename'];
                                            $sname= $row['surname'];
                                            
                                           echo ' <p class="ptxts"></p>
                                                  <p class="ptxts">Name: '.$nme.'</p>
                                                  <p class="ptxts">Middle: '.$midnme.'</p>
                                                  <p class="ptxts">Surname: '.$sname.'</p>
                                                  <p class="ptxts"><a class="in_a" href="EditMyAccount.php" >
                                                  Edit Account</a></p>';
                                        }
                                    }
                                    else
                                    {
                                        echo 'no name';
                                    }
                                }
                                else{
                                   //echo '<img src="images/L2.jpg" width="180px"> ';
                                }
                    ?>
                
                       </center>
                 </div><p>
                 <div class="myprofile">
                     
                     
                     <?php   
                                $username = $_SESSION['username'];
                                
                    
                                $result = $conn->query("SELECT ID FROM accounts WHERE username LIKE '$username'");
                                if($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        $ID = $row['ID'];
                                    }
                                     $result = $conn->query("SELECT * FROM teachers WHERE teachersID LIKE '$ID'");
                                    if($result->num_rows > 0)
                                    {
                                        while ($row = $result->fetch_assoc())
                                        {   
                                            $id = $row['teachersID'];
                                            $bd = $row['birthdate'];
                                            $cn = $row['contactnumber'];
                                            $ad= $row['address'];
                                            
                                           echo '
                                                <p class="titles">About</p><hr>
                                                  <p class="ptxts">ID number: '.$id.'</p>
                                                  <p class="ptxts">B-date: '.$bd.'</p>
                                                  <p class="ptxts">Contact: '.$cn.'</p>
                                                   <p class="ptxts">Address: '.$ad.'</p><br>
                                                  ';
                                                
                                        }
                                    }
                                    else
                                    {
                                        echo 'no result';
                                    }
                                }
                        
                    ?>
               
                 </div><p>
                 <div class="myprofile"><p class="titles">Tasks</p>
                     <hr>
                 <p class="ptxts">Secured all data's</p>
                 <p class="ptxts">Registers all Faculty and Staff</p>
                      <p class="ptxts">To passed this subject</p>
                 </div>
                 
            </div>
            <div class="afterAdd">
                <div class="logo">
                <img src="images/logo_5.png" width="185px">
                </div>
                
                <div class="evnts"><p class="titles">Upcoming event</p><hr>
                  <?php
                                $result = $conn->query('SELECT title FROM pages WHERE site LIKE 1');
                                if($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        $title = $row['title'];
                                        echo '
                                            <p class="ptxts">'.$title.'</p>';
                                    }
                                }
                                else
                                {
                                    echo "<p>No announcements at this time.</p>";
                                }
                            ?>
                </div>
                
                 
                
               
               
                
            </div>
            <div class="consaa">
           <center>
              
               <div class="formss">
                    <h2 class="ttl"><span style="font-family:Century Gothic; color:slategray; font-size:30px;">WELCOME ADMINISTRATOR</span><hr></h2>
            <table border="0">
                <tr>
                    <td><p class="ptxts">Select site to add :</p></td>
                <form class="toradius" action="InsertQuote.php" method="post"> 
                 
                    <td><select name="tbsite"> 
                        <option value="1">Announcement</option> 
                        <option value="2">News</option> 
                        <option value="3">Awards</option> 
                        <option value="4">History</option> 
                        <option value="5">School Profile</option> 
                        <option value="6">Hym</option> 
                        <option value="7">Academic Programs</option> 
                        <option value="8">Enrollment Process</option> 
                        <option value="9">Prospectve Students</option> 
                        <option value="10">Students Organization</option> 
                        <option value="11">Organizational Structure</option> 
                        <option value="12">Faculty $ Staff</option> 
                        <option value="13">Contact Us</option> 
                        <option value="14">Goals</option> 
                        <option value="15">Vision</option> 
                        <option value="16">Mission</option> 
                        <option value="17">Contact</option> 
                    </select>
                     </td><br>
                </tr>
            </table>
                   <input class="tbtitle" type="text" name="tbtitle" placeholder=" Title here.."><br><br>
                  <textarea class="toradius" name="tbtextcontent" rows="14" cols="60" placeholder=" Insert field here.."></textarea>
                   
                   <br><br>
                   <input class="submitbutton" id="boto" type="submit" value="Add this Quote"></p>
                   <br>
                   <br>
               <?php
                if(isset($_GET['message']))
                    echo $_GET['message'];
        
                ?><br><br><br>
                    </center>  
                </form>
            </div>
            </div>
       
            
            </div>
            
            <div class="consaa">
                
            </div>
    
         
    
            </div>
    
    </body>
     <footer>
       <center>
            <p><br><span style="font-size:12px; font-family: Century Gothic;"> &copy; Copyright 2016  |<a class="lfooter" href=""> Holy Cross of Davao College</a> | Develop and Powered by team i5 | <a class="lfooter" href="" >About us</a><br>Reproduction in whole or in part in any form or medium without express written permission of team boywang is prohibited. </span></p>
        </center>
        <br> 
    </footer>
</html>