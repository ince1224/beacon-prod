
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
                                                               Questions for Presently Employed</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Are you presently employed/self employed? :

                                                                            </td>
                                                                            <td align="left" width="55%">
																		<input name="employed" type="radio" value = "Yes" required>Yes
																		<input name="employed" type="radio" value = "No" required>No
                                                                            </td>
                                                                        </tr>
																			
																		
																		
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              What type of Organization do you belong? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <select name="organization" required>
	<option value="">--Select--</option>
	<option  value="Government Organization (GO)">Government Organization (GO)</option>
	<option  value="Business Organization (BO)">Business Organization (BO)</option>
	<option  value="Private Organization">Private Organization</option>
	<option  value="Cooperative">Cooperative</option>
	<option  value="Non Government Organization">Non Government Organization</option>
<option  value="Peoples Organization">Peoples Organization</option>
</select><br/>
                                                                            </td>
																			</tr>
																				<tr><br/></tr>
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                              Were you selected according to your qualifications? :
                                                                            </td>
                                                                            <td align="left">
                                                                              <select name="selection" required>
	<option value="">--Select--</option>
	<option  value="Selection">Selection</option>
	<option  value="Retention">Retention</option>
	<option  value="Promotion">Promotion</option>
	
</select><br/>
                                                                               </td>
                                                                        </tr>
																		<tr><br/></tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              What is your annual income from your present employment? Pesos :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <input type = "text" name = "income">
                                                                            </td>
																			</tr>
																			<tr><br/></tr>
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Were you able to use the skills acquired from your degree/course to your current work? :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <select name="skills" required>
	<option value="">--Select--</option>
	<option  value="Yes">Yes</option>
	<option  value="No">No</option>

</select><br/>
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
	

$status = $_POST['employed'];
$org = $_POST['organization'];
$qualifications = $_POST['selection'];
$income = $_POST['income'];
$skills = $_POST['skills'];

$queryt = mysqli_query($conn,"select * from employed_data where name = '$get_id'")or die(mysqli_error());																								
$count = mysqli_num_rows($queryt);
	if ($count > 0){
		mysqli_query($conn,"update employed_data set employment_status = '$status',organization = '$org',qualifications = '$qualifications',income = '$income',skills ='$skills' where name = '$get_id'")or die(mysqli_error());
		?>
<script>

window.location = "employed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
else
{
mysqli_query($conn,"insert into employed_data (name,middlename,lastname,employment_status,organization,qualifications,income,skills) values('$get_id','$status','$org','$qualifications','$income','$skills')")or die(mysqli_error());
mysqli_query($conn,"delete from unemployed where name = '$get_id'")or die(mysqli_error());
?>
<script>

window.location = "employed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
}
?>
