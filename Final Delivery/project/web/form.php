<?php 
session_start();
if(!isset($_SESSION["username"])){
	header("Location:login.php");
}
else{
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About iHealth Birth Certificate App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="app.css">
  <script src='http://code.jquery.com/jquery-2.1.4.min.js'></script>
    <!-- <script src='../dist/fhir-client.js'></script> -->
  <script src="fhir-client.js"></script>
  <script type="text/javascript" src="populateForm.js"></script>

</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">iHealth</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li ><a href="about.php">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">hello, <?=$_SESSION["username"];?></a></li>    
        <li><a href="logout.php">Logout<i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="form"  >
  <form  id="frmDataEntry" method="post" action="#"> 
    <div>
      <div> 
        <br>
        <h2>Birth Registration Form</h2><br>
        <hr class="formHr">  
      </div>      
      
      <div class="certsection" id="newborn_information">
        <div class="hdr">NEWBORN INFORMATION</div><br>      
        <!-- <label>State File Number:</label> 
        <input type="text" name="txtStateFileNumber"  size="15"  maxlength="12"/>&nbsp;&nbsp;&nbsp;

        <label>Newborn Medical Record Number:</label>
        <input type="text" name="txtChildMRN"   id="ChildMRN"  maxlength="25"/>&nbsp;&nbsp;&nbsp;

        <label>Alternate Medical Record Number:</label>  
        <input type="text" name="txtChildAlternateMRN"  size="25"  maxlength="25"/><br><br>   -->  

        <label>Child First Name:</label>
        <!-- <input type="text" name="txtChildFirst"  id="childFirst" size="50"/><br/> -->
        <input id="childFirst"/>&nbsp;&nbsp;&nbsp;

        <!--   <label>Child Middle Name</label>   
        <input type="text" name="txtChildMiddle"   size="50"  maxlength="30"/><br/>     --> 

        <label>Child Last Name:</label>
        <input id="childLast"/>&nbsp;&nbsp;&nbsp;

        <!-- <label>Child Suffix:</label>
        <input type="text" name="txtChildSuffix" value="" /> <br><br> -->
        <label>Date of Birth (yyyy-mm-dd):</label>
        <input id="childBirth"/> &nbsp;&nbsp;&nbsp;
        <label>Child Sex:</label>
        <input id="childGender"/><br/> <br>

        <label>Home address:</label>
        <input type="text" id="homeAddress" value="" />&nbsp;&nbsp;&nbsp; 
        <label>City:</label>
        <input id="childCity"/>&nbsp;&nbsp;&nbsp;   
        <label>State:</label>
        <input id="childState"/> <br><br>
        <label>Postal Code:</label>
        <input id="childPostCode"/>&nbsp;&nbsp;&nbsp;
        <label>Country:</label>
        <input id="childCountry"/>&nbsp;&nbsp;&nbsp;

        
        <hr class="formHr">  
      </div>

      <div class="certsection" id="newbornMedical">  
        <div class="hdr">NEWBORN MEDICAL</div><br>

        <label>Infant Transferred</label>
        <input type="checkbox" name="chkChildTransferred" value="X"   />&nbsp;&nbsp; 

        <label>Name of Facility Transferred To</label>
        <input type="text" name="txtChildTransferredFacility"  value="" size="40" " maxlength="60"/> 

        <label>Facility Code</label>
        <input type="text" name="txtChildTransferredFacilityCode" value="" size="3"  style="width:33; height:26" maxlength="3"/>

        <label> State Infant Transferred To</label>
        <input type="text" name="txtChildTransferredState"  value="" size="25"   maxlength="25"/>  
        <br><br>  

        <label>Infant Deceased</label> 
        <input type="radio" name="chkDeceased" id="DeceasedYes" value="Yes"   /> Yes&nbsp;&nbsp;
        <input type="radio" name="chkDeceased" id="DeceasedNo" value="No"   /> No&nbsp; 

        <label>Date of Death</label>
        <input type="text" name="txtDeathMM"  value="" size="2"  style="width: 30" maxlength="2"/>
        <input type="text" name="txtDeathDD"  value="" size="2"  style="width: 30" maxlength="2"/>
        <input type="text" name="txtDeathCCYY"  value="" size="4"  style="width: 45" maxlength="4"/>

        <label>Death State&nbsp;</label>  
        <input type="text" name="txtDeathState"  value="" size="25" maxlength="25"/>

        <label>*State File Number of Death Certificate</label>
        <input type="text" name="txtDeathSFN"  value="" size="20"  maxlength="15"/>
        <br><br>
         
        <label> Hepatitis Vaccination&nbsp;</label>
        <input type="checkbox" name="chkHepVac" id="chkHepVac" value="X"   />&nbsp;&nbsp;
        <label>*Date Given</label>
        <input name="txtHepDate" id="HepDate" style="width: 45" />&nbsp;&nbsp;
        <!-- <input type="text" name="txtHepMM"  value="" size="2"  style="width: 30" maxlength="2"/>
        <input type="text" name="txtHepDD"  value="" size="2"  style="width: 30" maxlength="2"/>
        <input type="text" name="txtHepCCYY"  value="" size="4"  style="width: 45" maxlength="4"/>&nbsp;&nbsp; -->

        <label>Hepatitis Refused</label>
        <input type="checkbox" name="chkHepRefused" id="chkHepRefused" value="X" />&nbsp;&nbsp; 

        <label>Newborn Screening Number&nbsp; </label>
        <input type="text" name="txtNewbornScreeningNumber"  value="" size="15"  maxlength="15"/>&nbsp;&nbsp; 

        <label>Newborn Screening Refused </label>
        <input type="checkbox" name="chkNewbornScreeningRefused" value="Refused Newborn Screening"   /> 
        <br><br>  

        <label>Medical Notes</label>
        <input type="text" name="txtMedicalNotes"  value="" size="60"  maxlength="60"/> 
        <hr class="formHr">       
      </div>

      <div class="certsection" id="abnormal">           

      <div class="hdr">ABNORMAL CONDITIONS OF NEWBORN</div><br/>
            <label>PLEASE CHECK ALL THAT APPLY:</label>   
            <input type="checkbox" id="chkNoAbnormalConditions" />&nbsp;&nbsp; 
            None   
           <!--  <input type="checkbox" id="chkUnknownAbnormalConditions" />&nbsp;&nbsp; 
            Unknown -->
            <br/>
            <input type="checkbox" id="chkAnemia" /> &nbsp; Anemia&nbsp;
            <br/>                   
            <input type="checkbox" id="chkAssistedVent30Mins"  /> &nbsp; 
            Assisted Ventilation Required Immediately Following Delivery (first 30 minutes)&nbsp;  <br/>
            <input type="checkbox" id="chkAssistedVent6Hours"   /> &nbsp; 
            Assisted Ventilation Required for More Than Six Hours&nbsp;
            <br/>       
            <!-- <input type="checkbox" id="chkMeningitis"   /> &nbsp; 
            Meningitis&nbsp;<br/>   
            <input type="checkbox" id="chkNICUS" /> &nbsp; NICU 
            Admission 24 Hours or Less&nbsp;
            <br/>
            <input type="checkbox" id="chkNICUL" /> &nbsp; 
            NICU Admission Greater than 24 Hours&nbsp;
            <br/>
            <input type="checkbox" id="chkSubstanceAbuse"   /> &nbsp;  
            Perinatal Substance Abuse&nbsp; <br/> -->
            <input type="checkbox" id="chkRDS"  /> &nbsp; Respiratory 
            Distress Syndrome (RDS) / Hyaline Membrane Disease&nbsp;
            <br/>
            <input type="checkbox" id="chkSeizure"  /> &nbsp; 
            Seizure or Serious Neurologic Dysfunction
            <!-- <br/><input type="checkbox" id="chkInjury" /> &nbsp; Significant 
            Birth Injury&nbsp;<br/>   
            <input type="checkbox" id="chkSurfactant" /> &nbsp; 
            Surfactant Replacement Therapy&nbsp; <br/>
            <input type="checkbox" id="chkNewbornAntibiotics" /> &nbsp; 
            Antibiotics for Suspected Neonatal Sepsis&nbsp; -->
            <hr class="formHr">  
       </div>
       

      <!-- <ul id="med_list"></ul> -->
      <div class="certsection" id="mother_confidential">  
        <div class="hdr">MOTHER INFORMATION</div><br>
        <label>Mom Marital Status at Time of this Birth:</label>
        Married to Father of Newborn
        <input type="radio" name="chkMomMaritalStatus"  value="Married to Father of Newborn" /> &nbsp;&nbsp;  
        Not Married
        <input type="radio" name="chkMomMaritalStatus"  value="Not Married" /> &nbsp; &nbsp; 
        Married, but not to Father of Newborn
        <input type="radio" name="chkMomMaritalStatus"  value="Married, but not to Father of Newborn" /> <br>

      
        <br><label>Was Mom Ever Married:</label>
        Yes
        <input type="radio" name="MomMarriedEver"  value="Yes" />&nbsp;&nbsp;
        No
        <input type="radio" name="MomMarriedEver"  value="No" /> &nbsp;&nbsp;
        Unknown
        <input type="radio" name="MomMarriedEver"  value="Unknown" />&nbsp;&nbsp;

        <label>Was Mom Married at Conception, at Birth, or Any Time in Between: </label>

        Yes 
        <input type="radio" name="chkMomMarriedBirth"  value="Yes" />&nbsp;&nbsp;
        No
        <input type="radio" name="chkMomMarriedBirth"  value="No" />  &nbsp;&nbsp;
        Unknown
        <input type="radio" name="chkMomMarriedBirth"  value="Unknown" /> <br/>

        <br>
        <label>(Mother Current Legal Name)</label>
        <label>&nbsp;First Name:</label>
        <input type="text" name="txtMomFirst"  value="" size="30"  maxlength="20"/>
        <label>Middle Name:</label>
        <input type="text" name="txtMomMiddle"  value="" size="30"  maxlength="30"/><br><br>
        <label>Last Name</label>
        <input type="text" name="txtMomLast"  value="" size="30"  maxlength="25"/>&nbsp; 
        <label>Suffix</label>
        <input type="text" name="txtMomSuffix"  value="" size="5"/>&nbsp; &nbsp; 


        <!-- <br>(Mother Name Prior to First Marriage - Maiden Name: Type &quot;Same&quot; if Mom Maiden Name and Current Name are the Same)
        <label>First Name:</label> 
        <input type="text" name="txtMomFirstPrior"  value="" size="50"  maxlength="20"/> 
        <label>Middle Name</label>
        <input type="text" name="txtMomMiddlePrior"  value="" size="50"  maxlength="30"/> 
        <label>*Last Name</label> 
        <input type="text" name="txtMomLastPrior"  value="" size="50"  maxlength="25"/>&nbsp; 
        Suffix 
        <input type="text" name="txtMomSuffixPrior"  value="" size="5"maxlength="4"/>
 -->
        <label>*Mother Date of Birth (YYYY-MM-DD)</label>
        <input type="text" name="txtMomBirth"  value="" size="15"  style="width: 30"/> 
        <hr class="formHr">                    
      </div>  

      <div class="certsection" id="mother_confidential">  
        <div class="hdr">MOTHER CONFIDENTIAL</div><br>

        <label>*Mother Medicaid Number</label>
        <input type="text" name="txtMomMedicaidNumber" value=""  size="20"  maxlength="10"/>&nbsp;&nbsp;&nbsp;

        <label>Did Mother Receive WIC Food for Herself During Pregnancy: </label>
        Yes<input type="radio" name="chkMomWIC" value="Yes" /> &nbsp;&nbsp;
        No<input type="radio" name="chkMomWIC" value="No" /> &nbsp;&nbsp;
        Unknown<input type="radio" name="chkMomWIC"  value="Unknown" /> 
        <br/><br>  

        <label>Primary Source of Payment for This Delivery: </label>&nbsp;&nbsp;&nbsp;&nbsp;

        Medicaid
        <input type="checkbox" name="chkSourceOfPayment1" value="X"   /> &nbsp;&nbsp;  
        Private Insurance
        <input type="checkbox" name="chkSourceOfPayment2" value="X"   /> &nbsp;&nbsp;
        Self-Pay
        <input type="checkbox" name="chkSourceOfPayment3" value="X"   /> &nbsp;&nbsp;    
        Indian Health Service
        <input type="checkbox" name="chkSourceOfPayment4" value="X"/> &nbsp;&nbsp;    
        CHAMPUS/TRICARE 
        <input type="checkbox" name="chkSourceOfPayment5" value="X"   /> &nbsp;&nbsp;           
        Other Government (Fed, State, Local)
        <input type="checkbox" name="chkSourceOfPayment6" value="X"   /> &nbsp;&nbsp;     
        CHIP
        <input type="checkbox" name="chkSourceOfPayment7" value="X"   /> &nbsp;&nbsp;    
        Other
        <input type="checkbox" name="chkSourceOfPayment8" value="X"   /> &nbsp;&nbsp;         
        Unknown
        <input type="checkbox" name="chkSourceOfPayment9" value="X"   /> 
        <br/> <br>

        <label>Has a Relative of the Baby had a Hearing Loss that Existed 
        Since Childhood: &nbsp;</label>
        Yes
        <input type="radio" name="chkHereditaryHearingLoss" value="Yes"   />&nbsp;&nbsp; 
        No 
        <input type="radio" name="chkHereditaryHearingLoss" value="No"   />  &nbsp;&nbsp;      
        Unknown  
        <input type="radio" name="chkHereditaryHearingLoss" value="Unknown"   />                    
     </div>  


      <div>
        <br><br>
        <input type="submit" name="submit" class="btn btn-default" id="submitForm" value="confirm and submit!" onclick="javascript:window.location.href='submit.php'; return false;">
      </div>
       
     </form>
  </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

<?php 
}
?>