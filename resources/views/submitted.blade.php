<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Income Certificate Portal</title>
        <link rel="stylesheet" type="text/css" id="submittedstylesheet" href="css/applicaion.css"/>
    </head>


    <body>
		<!-- <div id="registration">
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
		<img id="digital_india" src="images/digital_india.png" srcset="images/digital_india.png 1x">
			
		<div id="Home">
		<span>Home</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="About_Us">
			<span><a href="/about">About Us</a></span>
		</div>
		<div id="Services">
			<span>Services</span>
		</div>
		<div id="CSC_Login">
			<span>CSC Login</span>
		</div>
		<div id="Officers_Login">
			<span>Officer's Login</span>
		</div>
		<div id="Login">
			<span>Login</span>
		</div>
		<div id="Apply">
			<span><a href="/registration">Apply</a></span>
		</div>
		<img id="apply_icon" src="images/apply_icon.png" srcset="images/apply_icon.png 1x">
			
		<img id="login_icon" src="images/login_icon.png" srcset="images/login_icon.png 1x">
		<svg class="footer">
			<rect id="footer" rx="0" ry="0" x="0" y="0" width="1920" height="194">
			</rect>
		</svg> -->
        <style>
            table{
                width:100%;
                font-family:arial, sans-serif;
            }
            th,td:nth-child(odd)

            {
                padding:6px;
                border:1px solid black;
            }
            th,td:nth-child(even)

            {
                padding:6px;
                border:1px solid black;
            }
        </style>


<div id="table">
    <h1 id="details">FORM DETAILS</h1>
        <fieldset>
            <legend>Personal Information</legend>
            <table>
                <tr>
                <td>Application Number</td>
                <td>{{$submitteds->Application_Number}}</td>
                </tr>
                <tr>
                <td>Applicant Name</td>
                <td>{{$submitteds->applicant_name}}</td>
                </tr>
                <tr>
                <td>Date of Birth</td>
                <td>{{$submitteds->date_of_birth}}</td>
                </tr>
                <tr>
                <td>Gender</td>
                <td>{{$submitteds->gender}}</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>{{$submitteds->email}}</td>
                </tr>
                <tr>
                <td>Contact Number</td>
                <td>{{$submitteds->contact_number}}</td>
                </tr>
                <tr>
                <td>Relationship</td>
                <td>{{$submitteds->relationship}}</td>
                </tr>
                <tr>
                <td>Education</td>
                <td>{{$submitteds->education}}</td>
                </tr>
                <tr>
                <td>Religion</td>
                <td>{{$submitteds->religion}}</td>
                </tr>
                <tr>
                <td>Occupation</td>
                <td>{{$submitteds->occupation}}</td>
                </tr>
                <tr>
                <td>Annual Income</td>
                <td>{{$submitteds->annual_income}}</td>
                </tr>
                <tr>
                <td>Father's Income</td>
                <td>{{$submitteds->father_income}}</td>
                </tr>
                <tr>
                <td>Mother's Income</td>
                <td>{{$submitteds->mother_income}}</td>
                </tr>
                <tr>
                <td>Mother's Occupation</td>
                <td>{{$submitteds->mother_occupation}}</td>
                </tr>
                <tr>
                <td>Other Occupatioin</td>
                <td>{{$submitteds->other_occupation}}</td>
                </tr>
                <tr>
                <td>Other Income</td>
                <td>{{$submitteds->other_income}}</td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Present Address</legend>
            
            <table>

                <tr>
                <td>House Number</td>
                <td>{{$submitteds->house_number}}</td>
                </tr>
                <tr>
                <td>Locality</td>
                <td>{{$submitteds->locality}}</td>
                </tr>
                <tr>
                <td>Sub Locality</td>
                <td>{{$submitteds->sub_locality}}</td>
                </tr>
                <tr>
                <td>Location</td>
                <td>{{$submitteds->location}}</td>
                </tr>
                <tr>
                <td>Sub District</td>
                <td>{{$submitteds->sub_dictrict}}</td>
                </tr>
                <tr>
                <td>District</td>
                <td>{{$submitteds->district}}</td>
                </tr>
                <tr>
                <td>State</td>
                <td>{{$submitteds->state}}</td>
                </tr>
                <tr>
                <td>Pincode</td>
                <td>{{$submitteds->pincode}}</td>
                </tr>
                <tr>
                <td>Country</td>
                <td>{{$submitteds->country}}</td>
                </tr>
                <tr>
                <td>Police Station</td>
                <td>{{$submitteds->police_station}}</td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
        <legend>Permanent Address</legend>

            <table>
                <tr>
                <td>House Number</td>
                <td>{{$submitteds->house_number1}}</td>
                </tr>
                <tr>
                <td>Locality</td>
                <td>{{$submitteds->locality1}}</td>
                </tr>
                <tr>
                <td>Sub Locality</td>
                <td>{{$submitteds->sub_locality1}}</td>
                </tr>
                <tr>
                <td>Location</td>
                <td>{{$submitteds->location1}}</td>
                </tr>
                <tr>
                <td>Sub District</td>
                <td>{{$submitteds->sub_dictrict1}}</td>
                </tr>
                <tr>
                <td>District</td>
                <td>{{$submitteds->district1}}</td>
                </tr>
                <tr>
                <td>State</td>
                <td>{{$submitteds->state1}}</td>
                </tr>
                <tr>
                <td>Pincode</td>
                <td>{{$submitteds->pincode1}}</td>
                </tr>
                <tr>
                <td>Country</td>
                <td>{{$submitteds->country1}}</td>
                </tr>
                <tr>
                <td>Police Station</td>
                <td>{{$submitteds->police_station1}}</td>
                </tr>
            </table>
        </fieldset>
            <table>
                <tr>
                <td>Purpose for Income certtificate</td>
                <td>{{$submitteds->purpose}}</td>
                </tr>
                <tr>
                <td>Remarks/Suggestion/Comments to be enclosed by the Applicant</td>
                <td>{{$submitteds->remark1}}</td>
                </tr>
                <tr>
                <td>Due date for decision on Application</td>
                <td>{{$submitteds->date1}}</td>
                </tr>
                <tr>
                <td>Target Date</td>
                <td>{{$submitteds->date2}}</td>
                </tr>
                <tr>
                <td>Remarks/Suggestion/Comments to beenclosed by Forwarder</td>
                <td>{{$submitteds->remark2}}</td>
                </tr>
                <tr>
                <td>Remarks/Suggestion/Comments to be enclosed by officer</td>
                <td>{{$submitteds->remark3}}</td>
                </tr>
            </table>
</div>
                <form action="/forwarder/{{$submitteds->id}}/check" method="POST">
                    
                    @csrf
                    <input type="submit" name="reject" class="previous" value="REJECT">
                    <input type="submit" name="forward" class="next" value="Forward to the Circle Officer">

                </form>

</body>
 
            <!-- <footer id="footer">
			<div id="_2021__Zothansanga_Renthlei">
				<span>© 2021 , Zothansanga Renthlei</span>
			</div>
			<div id="This_website_belongs_to_Depart">
				<span>This website belongs to Department of Information & Communication Technology, State Government of Mizoram, India</span>
			</div>
			<div id="Crafted_with_care_by_Mizoram_S">
				<span>Crafted with care by Mizoram State e-Governance Society (MSeGS)</span>
			</div>
			</footer>		 -->
		

			
    


</html>