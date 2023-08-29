
<?php 
$get_id = $_GET['id'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fill The Form</title>
<link href="table.css" type="text/css" rel="stylesheet">
</head>

<body>
<form name="aspnetForm" method="post" action="home.php" >
  <div class="top_banner">
    <div class="in_banner">
            <div class=" logo">
              <img alt="jee" src="images/nbsc.png"></div>
      <div class="banner_text">
        <h1>
                   NORTHER BUKIDNON STATE COLLEGE
          </h1>
              <h2>
                   ALUMNI TRACKING SYSTEM
              </h2>
        </div>c 
      </div>
  </div>
    <div class="cleaner">
    </div>
    <div id="menu">
      <div id="menu_in">
		
            <ul>
                 <li><a href="employed.php<?php echo '?id='.$get_id; ?>">Employed</a></li>
					<li><a href="selfemployed.php<?php echo '?id='.$get_id; ?>">Self Employed</a></li>
                    <li><a  href="unemployed.php<?php echo '?id='.$get_id; ?>">Unemployed</a></li>
<li><a href = "index.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       

  
        <h2>
            <span id="lbltitle" style="font-weight:bold;">Fill up form</span>
        </h2>
		
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
	
                        
                                        <div align="right">
                                          <span id="lbltitle" style="font-weight:bold;">Login as : <?php echo $get_id;?></span>
										
                                        </div>
                                        <div id="">
                                        
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               Questions for Never Employed</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                              If never employed, what is the reason why you are not yet employed? :

                                                                            </td>
                                                                            <td align="left" width="55%">
																		  <select name="reason" required>
	<option value="">--Select--</option>
	<option  value="I cannot find a good job">I cannot find a good job</option>
	<option  value="advance or further study first">advance or further study first</option>
	<option  value="i do not like to be tied with a job and have a boss">i do not like to be tied with a job and have a boss</option>
	<option  value="Advise of husband/wife or relatives">Advise of husband/wife or relatives</option>
	<option  value="No job opportunity">No job opportunity</option>
	<option  value="Health-related reasons">Health-related reasons</option>
	<option  value="Family concern and decided no to find a job">Family concern and decided no to find a job</option>
	<option  value="I want to put my own business">I want to put my own business</option>
		<option  value="I want to be of my own">I want to be of my own</option>
	<option  value="Lack of work experience">Lack of work experience</option>
	<option  value="Did not look for job">Did not look for job</option>
	<option  value="Others">Others</option>

</select><br/>
                                                                            </td>
                                                                        </tr>
																			
																			<tr>
                                                                            <td align="right" width="45%">
                                                                             Have you been seeking for a job? :
																			 
                                                                            </td>
                                                                            <td align="left" width="55%">
																				<input name="seek" type="radio" value = "Yes" required>Yes
																				<input name="seek" type="radio" value = "No" required>No
                                                                            </td>
																			
																			</tr>
																		<tr><br/></tr>
																		
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Since graduation, what have you been doing? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <input type = "text" name = "doing">
                                                                            </td>
																			</tr>
																				
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                              How did you finance your living? :
                                                                            </td>
                                                                            <td align="left">
																			  <select name="finance" required>
	<option value="">--Select--</option>
	<option  value="Supported by parents">Supported by parents</option>
	<option  value="Supported by relatives/brothers/sisters">Supported by relatives/brothers/sisters</option>
	<option  value="Do buy and sell">Do buy and sell</option>
	<option  value="Supported by husband/wife">Supported by husband/wife</option>
	<option  value="Farm laborer of other farms">Farm laborer of other farms</option>
	<option  value="Entered as domestic helper">Entered as domestic helper</option>
	<option  value="Others">Others</option>


</select><br/>
																			 </td>
                                                                        </tr>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                             Do you still desire to look for an employment? :
																			 
                                                                            </td>
                                                                            <td align="left" width="55%">
																				<input name="desire" type="radio" value = "Yes" required>Yes
																				<input name="desire" type="radio" value = "No" required>No
                                                                            </td>
																			
																			</tr>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                             Do you consider NBSC and the course you selected as a factor for not being unemployed? :
																			 
                                                                            </td>
                                                                            <td align="left" width="55%">
																				<input name="consider" type="radio" value = "Yes" required>Yes
																				<input name="consider" type="radio" value = "No" required>No
                                                                            </td>
																			
																			</tr>
																		
                                                                    </tbody>
																	</table>
                                                                 
                                       
                                        <br>
                                        <center>
                                            <table cellspacing="0" width="80%" border="0">
                                                <tbody><tr>
                                                    <td align="center">
                                                        <input type="submit" name="submit" id="submit" class="sub_red" >
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody></table>
                        
</div>
                        
                        <br>
                        
                    </div>
                </div>
            </div>
            <div class="bottom-outer">
                <div class="bottom-inner">
                    <div class="bottom">
                    </div>
                </div>
            </div>
        </div>
		</div>
		</div>
	
        </form>
</body>
</html>
<?php
include('admin/dbcon.php');
if (isset($_POST['submit'])){
	

$reason = $_POST['reason'];
$seek = $_POST['seek'];
$doing = $_POST['doing'];
$desire = $_POST['desire'];
$consider = $_POST['consider'];
$finance = $_POST['finance'];

$queryt = mysqli_query($conn,"select * from unemployed where name = '$get_id'")or die(mysqli_error());																								
$count = mysqli_num_rows($queryt);
if ($count > 0){
		mysqli_query($conn,"update unemployed set reason = '$reason',seek = '$seek',doing = '$doing',desire = '$desire',consider ='$consider',finance ='$finance' where name = '$get_id'")or die(mysqli_error());
		?>
<script>

window.location = "unemployed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
else
{
mysqli_query($conn,"insert into unemployed (name,middlename,lastname,reason,seek,doing,desire,consider,finance) values('$get_id','$reason','$seek','$doing','$desire','$consider','$finance')")or die(mysqli_error());
mysqli_query($conn,"delete from employed_data where name = '$get_id'")or die(mysqli_error());
mysqli_query($conn,"delete from selfemployed where name = '$get_id'")or die(mysqli_error());

?>
<script>

window.location = "unemployed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
}
?>

