<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Income Certificate Portal</title>
        <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/form.css"/>
    </head>


    <body>
		<div id="registration">
		<svg class="menu_bar" viewBox="0 0 1920 47">
			<path id="menu_bar" d="M 0 0 L 1920 0 L 1920 47 L 0 47 L 0 0 Z">
			</path>
		</svg>
		<svg class="menu_box">
			<rect id="menu_box" rx="1" ry="1" x="0" y="0" width="540" height="47">
			</rect>
		</svg>
		<div id="Welcome_to_income_certificate_">
			<span>Welcome to income certificate portal</span>
		</div>
		<svg class="nav_bar" viewBox="0 0 1923 36.578">
			<path id="nav_bar" d="M 0 0 L 1923 0 L 1923 36.57830810546875 L 1014.72314453125 36.57830810546875 L 0 36.57830810546875 L 0 0 Z">
			</path>
		</svg>
		<div id="For_the_year_2021">
			<span>For the year: 2021</span>
		</div>
		<img id="ashoka_pillar" src="images/ashoka_pillar.png" srcset="images/ashoka_pillar.png 1x">
			
		<div id="INCOME_CERTIFICATE_PORTAL">
			<span>INCOME CERTIFICATE PORTAL</span>
		</div>
		<div id="Government_of_Mizoram">
			<span>Government of Mizoram</span>
		</div>
		<div id="Mizoram_e-Governance_Society">
			<span>Mizoram e-Governance Society</span>
		</div>
		<a href="https://www.digitalindia.gov.in/"><img id="digital_india" src="images/digital_india.png" srcset="images/digital_india.png 1x"></a>
			
		<div id="Home">
		<span><a href="homepage">Home</a></span>
		</div>
		<div onclick="application.goToTargetView(event)" id="About_Us">
			<span><a href="/about">About Us</a></span>
		</div>
		<div id="Services">
			<span>CSC Login</span>
		</div>
		<div id="CSC_Login">
			<span><a href="forwarder">Forwarder Login</a></span>
		</div>
		<div id="Officers_Login">
			<span><a href="circleofficer">Circle Officer Login</a></span>
		</div>
		
		<svg class="footer">
			<rect id="footer" rx="0" ry="0" x="0" y="0" width="1920" height="194">
			</rect>
		</svg>
		<div id="important">
				<span>REGISTRATION</span>
			</div>
			<div id="mandatory">
				<span>* marks are mandatory</span>
		</div>
		
		<div id="form1">
		<form action="/form" enctype="multipart/form-data" method="POST">
		@csrf
			*Application Date <input type="date" name="application_date" id="application_date" style="width: 20"><br>
			<br>
			<fieldset>
			<legend>Personal Information</legend>
			*Applicant Name <input type="text" name="applicant_name" id="applicant_name" size="50">
			*Date of Birth  <input type="date" name="date_of_birth" id="date_of_birth" style="width: 20">
			*Gender <select name="gender" id="gender">
					<option>Select</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgender</option>
					<option>Others</option>
				</select>
			
			Email <input type="email" name="email" id="email"><br>
			*Contact Number (+91) <input type="tel" name="contact_number" id="contact_number">
			*Relationship <select name="relationship" id="relationship">
				<option>Select</option>
				<option>Single</option>
				<option>Married</option>
				<option>Divorced</option>
				<option>Widowed</option>
			</select>
			*Education <select name="education" id="education">
				<option>Select</option>
				<option>Graduate</option>
				<option>Under Graduate</option>
			</select>
			*Religion <select name="religion" id="religion">
				<option>Select</option>
				<option>Christian</option>
				<option>Hindu</option>
			</select>
			*Occupation <select name="occupation" id="occupation">
				<option>Select</option>
				<option>Goverment Service</option>
				<option>Student</option>
				<option>Self-Employee</option>
			</select>
			*Annual Income <input type="text" name="annual_income" id="annual_income"><br>
			*Father's Occupation <select name="father_occupation" id="father_occupation">
				<option>Select</option>
				<option>Goverment Service</option>
				<option>Cultivation</option>
				<option>Self-Employee</option>
			</select>
			*Father's Income <input type="text" name="father_income" id="father_income">
			*Mother's Income <input type="text" name="mother_income" id="mother_income"><br>
			*Mother's Occupation <select name="mother_occupation" id="mother_occupation">
				<option>Select</option>
				<option>Goverment Service</option>
				<option>Cultivation</option>
				<option>Self-Employee</option>
			</select>
			Other Occupation <input type="text" name="other_occupation" id="other_occupation">
			Other Income <input type="text" name="other_income" id="other_income">
			</fieldset>
			<br>
			<fieldset>
				<legend>Present Address</legend>
				*House Number <input type='text' name="house_number" id="house_number">
				*Locality <input type='text' name="locality" id="locality">
				Sub-Locality <input type='text' name="sub_locality" id="sub_locality">
				Location <input type='text' name="location" id="location">
				*Sub-District <select name="sub_dictrict" id="sub_district">
				<option>Select</option>
				<option>Aibawk</option>
				<option>Chawngte</option>
				<option>Hnahthial</option>
				<option>Reiek</option>
				<option>Tlangnuam</option>
				</select>	<br>
				*District <select name="district" id="district">
				<option>Select</option>
				<option>Aizawl</option>
				<option>Kolasib</option>
				<option>Lawngtlai</option>
				<option>Lunglei</option>
				<option>Mamit</option>
				<option>Siaha</option>
				<option>Serchhip</option>
				<option>Champhai</option>
				<option>Hnahthial</option>
				<option>Khawzawl</option>
				<option>Saitual</option>
				</select>
				*State <select name="state" id="state">
				<option>Select</option>
				<option>Mizoram</option>
				</select>	
				*Pincode <input type="text" name="pincode" id="pincode">
				*Country <select name="country" id="country">
				<option>Select</option>
				<option>India</option>
				</select>
				*Police Station <select name="police_station" id="police_station">
				<option>Select</option>
				<option>AIZAWL PS</option>
				<option>BAWNGKAWN PS</option>
				<option>KULIKAWN PS</option>
				<option>VAIVAKAWN PS</option>
				<option>ZONUAM OP</option>
				<option>SIALSUK PS</option>
				<option>DARLAWN PS</option>
				<option>DARLAWN PS</option>
				<option>SAIRANG PS</option>
				<option>N.VERVEK OP</option>
				</select>
			</fieldset>
			<br>
			<fieldset>
				<legend>Permanent Address</legend>
				*House Number <input type='text' name="house_number1" id="house_number1">
				*Locality <input type='text' name="locality1" id="locality1">
				Sub-Locality <input type='text' name="sub_locality1" id="sub_locality1">
				Location <input type='text' name="location1" id="location1">
				*Sub-District <select name="sub_dictrict1" id="sub_district1">
				<option>Select</option>
				<option>Aibawk</option>
				<option>Chawngte</option>
				<option>Hnahthial</option>
				<option>Reiek</option>
				<option>Tlangnuam</option>
				</select>	<br>
				*District <select name="district1" id="district1">
				<option>Select</option>
				<option>Aizawl</option>
				<option>Kolasib</option>
				<option>Lawngtlai</option>
				<option>Lunglei</option>
				<option>Mamit</option>
				<option>Siaha</option>
				<option>Serchhip</option>
				<option>Champhai</option>
				<option>Hnahthial</option>
				<option>Khawzawl</option>
				<option>Saitual</option>
				</select>
				*State <select name="state1" id="state1">
				<option>Select</option>
				<option>Mizoram</option>
				</select>	
				*Pincode <input type="text" name="pincode1" id="pincode1">
				*Country <select name="country1" id="country1">
				<option>Select</option>
				<option>India</option>
				</select>
				*Police Station <select name="police_station1" id="police_station1">
				<option>Select</option>
				<option>AIZAWL PS</option>
				<option>BAWNGKAWN PS</option>
				<option>KULIKAWN PS</option>
				<option>VAIVAKAWN PS</option>
				<option>ZONUAM OP</option>
				<option>SIALSUK PS</option>
				<option>DARLAWN PS</option>
				<option>DARLAWN PS</option>
				<option>SAIRANG PS</option>
				<option>N.VERVEK OP</option>
				</select>
			</fieldset>
			<br>
			*Purpose for Income Certificate <textarea name="purpose" id="purpose"></textarea><br><br>
			*Remarks/Suggestion/Comments to be enclosed by the Applicant <textarea name="remark1" id="remark1"></textarea><br><br>
			*Due date for decision on Application <input type="date" name="date1" id="date1" style="width: 20"><br><br>
			*Target Date <input type="date" name="date2" id="date2" style="width: 20"><br><br>
			*Remarks/  <textarea name="remark2" id="remark2"></textarea><br><br>
			*Suggestion/Comments to be enclosed by Forwarder  <textarea name="remark3" id="remark3"></textarea><br><br>

			<a href="/homepage" class="previous">Cancel</a>
        	<input type="submit" class="next">


		</form>
		</div>

		<div onclick="application.goToTargetView(event)" id="Contact_Us__g">
	<span><a href="fieldofficer">Field Officer Login</a></span><br>
	</div>

			<footer id="footer">
			<div id="_2021__Zothansanga_Renthlei">
				<span>© 2021 , Zothansanga Renthlei</span>
			</div>
			<div id="This_website_belongs_to_Depart">
				<span>This website belongs to Department of Information & Communication Technology, State Government of Mizoram, India</span>
			</div>
			<div id="Crafted_with_care_by_Mizoram_S">
				<span>Crafted with care by Mizoram State e-Governance Society (MSeGS)</span>
			</div>
			</footer>		
		

			
    </body>


</html>