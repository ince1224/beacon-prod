<?php

?>
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
                                                               Questions for Self Employed</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                              If currently self-employed, what type of activity/business you are engaged in? :

                                                                            </td>
                                                                            <td align="left" width="55%">
																		  <select name="business" required>
	<option value="">--Select--</option>
	<option  value="Direct Selling">Direct Selling</option>
	<option  value="Farming">Farming</option>
	<option  value="Fishing">Fishing</option>
	<option  value="Franchise">Franchise</option>
	<option  value="Franchising">Franchising</option>
	<option  value="Service Operation">Service Operation</option>
	<option  value="Trading">Trading</option>
	<option  value="Others">Others</option>

</select><br/>
                                                                            </td>
                                                                        </tr>
																			
																			<tr>
                                                                            <td align="right" width="45%">
                                                                             Is your business related to the course/degree you finished? :
																			 
                                                                            </td>
                                                                            <td align="left" width="55%">
																				<input name="related" type="radio" value = "Yes" required>Yes
																				<input name="related" type="radio" value = "No" required>No
                                                                            </td>
																			
																			</tr>
																		<tr><br/></tr>
																		
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Reasons for engaging in self-employment :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			  <select name="reasons" required>
	<option value="">--Select--</option>
	<option  value="Higher Income">Higher Income</option>
	<option  value="More Flexible Time">More Flexible Time</option>
	<option  value="Family Affair">Family Affair</option>
	<option  value="Had the opportunity to put up my business">Had the opportunity to put up my business</option>
	<option  value="Advised by husband/wife/relatives">Advised by husband/wife/relatives</option>
	<option  value="To have time to attend household chores">To have time to attend household chores</option>
	<option  value="I want to be the boss of my own">I want to be the boss of my own</option>
	<option  value="Others">Others</option>
	
</select><br/>
                                                                            </td>
																			</tr>
																				<tr><br/></tr>
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                              How many persons do you employ in your business? :
                                                                            </td>
                                                                            <td align="left">
																			<input type = "text" name = "numberofemployee">
																			 </td>
                                                                        </tr>
																		 <tr>
                                                                            <td align="right">
                                                                              What skills acquired in college were you able to apply in you work? :
                                                                            </td>
                                                                            <td align="left">
																			<input type = "text" name = "skills">
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
	

$business = $_POST['business'];
$related = $_POST['related'];
$reasons = $_POST['reasons'];
$numberofemployee = $_POST['numberofemployee'];
$skills = $_POST['skills'];

$queryt = mysqli_query($conn,"select * from selfemployed where name = '$get_id'")or die(mysqli_error());																								
$count = mysqli_num_rows($queryt);
	if ($count > 0){
		mysqli_query($conn,"update selfemployed set business = '$business',related = '$related',reasons = '$reasons',noofemployee = '$numberofemployee',skills ='$skills' where name = '$get_id'")or die(mysqli_error());
		?>
<script>

window.location = "selfemployed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
else
{
mysqli_query($conn,"insert into selfemployed (name,business,related,reasons,noofemployee,skills) values('$get_id','$business','$related','$reasons','$numberofemployee','$skills')")or die(mysqli_error());
mysqli_query($conn,"delete from unemployed where name = '$get_id'")or die(mysqli_error());

?>
<script>

window.location = "selfemployed.php<?php echo '?id='.$get_id; ?>";
</script>
<?php
}
}
?>

