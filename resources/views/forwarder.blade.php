<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Income Certificate Portal</title>
        <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/forwarder.css"/>
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
			<span><a href="important">CSC Login</a></span>
		</div>
		<div id="CSC_Login">
			<span>Forwarder Login</span>
		</div>
		<div id="Officers_Login">
			<span><a href="circleofficer">Circle Officer Login</a></span>
		</div>
		
		<svg class="footer">
			<rect id="footer" rx="0" ry="0" x="0" y="0" width="1920" height="194">
			</rect>
		</svg>
		<h1 id="list">LIST OF SUBMITTED APPLICATIONS</h1>
		<style>
        

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

				<table id="table">

						<tr>
						<th>#</th>
						<th>Application Number</th>
						<th>Name</th>
						<th>Date</th>
						<th>Date of Birth</th>
						<th>Contact Number</th>
						<tr>

						@foreach($forwarder as $forwarder)

						<tr>
						<td>{{$forwarder->id}}</td>
						<td><a href="/submitted/{{$forwarder->id}}">{{$forwarder->Application_Number}}</a></td>
						<td>{{$forwarder->applicant_name}}</td>
						<td>{{$forwarder->created_at}}</td>
						<td>{{$forwarder->date_of_birth}}</td>
						<td>{{$forwarder->contact_number}}</td>
						</tr>

						@endforeach


				</table>

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