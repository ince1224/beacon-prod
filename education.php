<php

?php $get_id = $_GET['id'];?>
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
  
		
        </div>
    </div>
    <div class="cleaner">
    </div>
    <div id="container">
       
  <php echo $get_id;?>
  
        <h2>
            <span id="lbltitle" style="font-weight:bold;">Fill up form</span>
        </h2>
        <div class="mid_box">
            <div class="mid-outer">
                <div class="mid-inner">
                    <div class="mid">
                        <div id="main">
                          <div align="right">
                                            # Marked Fields are Optional
                                        </div>
                                        <div id="">
                                        
                                                        <td align="left">
                                                          <div class="form_tab">
                                                               Educational Background</div>
                                                            <fieldset>
                                                                <center>
                                                                <table cellspacing="5" cellpadding="4" width="100%">
                                                                        
                                                                    <table cellspacing="5" cellpadding="4" width="100%">
                                                                        <tbody>
																		<tr>
                                                                            <td align="right" width="45%">
                                                                               Education :

                                                                            </td>
                                                                            <td align="left" width="55%">
																			<table class="table" border = "1">
    <thead>
      <tr>
        <th>Degree & Specialization |</th>
        <th>College/School |</th>
        <th>Year Graduated |</th>
        <th>Honor(s) or Award(s) received</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>

                                                                            </td>
                                                                        </tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Professional Skills :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			<input name="pskills" type="text" maxlength="46" required>
                                                                            </td>
																			</tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                             Professional/Licensure/Competency Examination Passed :
                                                                            </td>
                                                                            <td align="left" width="55%">
																				
                                                                          <table class="table" border = "1">
    <thead>
      <tr>
        <th>Name of Examination |</th>
        <th>Date Taken |</th>
        <th>Rating |</th>
        <th>Issued by</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>
																			</tr>
																	
																				<tr>
                                                                            <td align="right" width="45%">
                                                                              Check top three(3) reasons for choosing/taking undergraduate course :
                                                                            </td>
                                                                            <td align="left" width="55%">
																		<table cellpadding="0" cellspacing="" border="1" class="table" id="example">
						
										<thead>
										  <tr>
											
												<th></th>
												
											
												<th>Reasons</th>
										   </tr>
										</thead>
										<tbody>
												
													<tr>
												
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Good grades in the subject area</td>											
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Good grades in high school</td>
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Influence of parents or relatives</td>
														</tr>
														<tr>
															<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Peer influence</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Inspired by a role model</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Strong passion for the profession</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect for immediate employment</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Status or prestige of the profession</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Availability of course offering in chosen institution</td>
														</tr>
														
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect of career advancement</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Prospect of attractive compensation</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Affordable for the family</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>No particular choice or no better idea</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Scholarship preference</td>
														</tr>
														<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td>Others</td>
														</tr>
										</tbody>
									</table>
                                                                            </td>
																			</tr>
																				<tr><br/></tr>
																			
																			
                                                                        <tr>
                                                                            <td align="right">
                                                                                Please list down advance or graduate studies you have taken after college :
                                                                            </td>
                                                                            <td align="left">
                                                                                <table class="table"  border = "1">
    <thead>
      <tr>
        <th>Advance Graduate Studies Undertaken |</th>
        <th>Field of Specialization |</th>
        <th>Institution |</th>
        <th>Period</th>
		<th>No. of Units/Degree Earned</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>
                                                                               </td>
                                                                        </tr>
																		<tr><br/></tr>
																			<tr>
                                                                            <td align="right" width="45%">
                                                                              Trainings Attended After College :
                                                                            </td>
                                                                            <td align="left" width="55%">
																			 <table class="table" border = "1">
    <thead>
      <tr>
        <th>Advance Graduate Studies Undertaken |</th>
        <th>Field of Specialization |</th>
        <th>Institution |</th>
        <th>Period</th>
		<th>No. of Units/Degree Earned</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr>
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
      <tr class="odd">
        <td contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
        <td id="" contenteditable="true"></td>
		  <td id="" contenteditable="true"></td>
      </tr>
    </tbody>
 </table>
                                                                            </td>
																			</tr>
																			<tr><br/></tr>
																			
																		
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

