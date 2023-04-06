<?php

define('TITLE', "Welcome");
include '../assets/layouts/header.php';


?>
<html>
<head>
	<title>Techsta Report Submission</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: white;
			padding: 10px;
			text-align: center;
		}

		.container {
			max-width: 800px;
			margin: 20px auto;
			padding: 20px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		button.submit {
			background-color: red;
			color: white;
			font-size: 16px;
			font-weight: bold;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			float: right;
		}

		.report-info {
			margin-bottom: 20px;
		}

		.report-info h2 {
			margin-top: 0;
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.report-info h3 {
			margin-top: 0;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		.report-info p {
			margin: 0;
			font-size: 16px;
			line-height: 1.5;
		}

		.report-info table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}

		.report-info th,
		.report-info td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}

		.report-info th {
			background-color: #f2f2f2;
			font-weight: bold;
		}

	</style>
</head>
<body>
	<header>
		<h1>Techsta Report Submission</h1>
	</header>
	<div class="container">
		<button class="submit">Submit Report</button>
		<div class="report-info">
			<h2>In Scope</h2>
			<p>Domain: </p>
			<p>Assets in scope: 6</p>
			<p>Average bounty: $10</p>
			<h3>Policy</h3>
			<p>Hacktivity</p>
			<p>Thanks</p>
			<p>Updates (0)</p>
			<table>
				<thead>
					<tr>
						<th>Rewards</th>
						<th>Low</th>
						<th>Medium</th>
						<th>High</th>
						<th>Critical</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Bounty Range</td>
						<td>hole of fame</td>
						<td>swag</td>
						<td>$10 - $60</td>
						<td>$60 - $200</td>
					</tr>
				</tbody>
			</table>
			<p>Good luck and happy hacking!</p>
			<p>Grindr Bug Bounty Team</p>
			<p>Last updated on February 22
  </div>

  <head>
    <title>Techsta Security Vulnerability Reporting Program</title>
  </head>
  <body>
    <h1>We are happy to work together to keep Techsta and our users safe.</h1>
    <p>Please report security issues or concerns you find and note the "Out of Scope Vulnerabilities" and "Bounties and Rewards" sections to understand how we reward findings.</p>
    <p>If you need assistance with issues that do not relate to a technical security finding, please reach out to help@techsta.com and the folks there will be happy to assist you!</p>
    <h2>Techsta Security Vulnerability Reporting Program Terms</h2>
    <p>Your participation in our Security Vulnerability Reporting Program is voluntary. By joining our Security Vulnerability Reporting Program, submitting a report, or otherwise disclosing a vulnerability to us (“Submission”), you are indicating that you have read and agree to follow the rules set forth on this page (“Program Terms”).</p>
    <p>If (i) you do not meet the eligibility requirements below; (ii) you breach any of these Program Terms or any other agreements you have with Techsta or its affiliates; or (iii) we determine that your participation in our Security Vulnerability Reporting Program could adversely impact us, our affiliates, or any of our users, employees, or agents, we, in our sole and absolute discretion, may remove you from our Security Vulnerability Reporting Program and disqualify you from receiving any benefit of our Security Vulnerability Reporting Program.</p>
    <h3>Confidentiality</h3>
    <p>Any information you receive, collect or otherwise obtain about us, our services, our affiliates or any of our users, employees, or agents in connection with our Security Vulnerability Reporting Program (whether after or before you joined the Security Vulnerability Reporting Program, notably as a result of you finding and/or investigating a security bug in our in-scope applications or infrastructure) (“Confidential Information”) must be kept confidential, only used in connection with the Security Vulnerability Reporting Program, and not disclosed to any third party. You may not use, disclose or distribute any such Confidential Information, including without limitation any information regarding your participation in our Security Vulnerability Reporting Program and any Submission.</p>
    <p>By joining and participating in our Security Vulnerability Reporting Program, you represent and warrant that you have not used and will not use Confidential Information for any purpose other than in connection with the Security Vulnerability Reporting Program and that you have not shared and will not share such Confidential Information with any third party.</p>
    <p>Once a Submission is made, Techsta reserves the right to request from you, and you already accept to abide by this request, to securely and irreversibly delete any data related to such Submission, including, without limitation, any data about us, our services, our affiliates, or any of our users, employees, or agents. Additionally, you agree to securely and irreversibly delete any data related to the Submission immediately upon it no longer being reasonably necessary to retain for the purposes of conveying the impact or scope of the reported issue, after verifying with Techsta that it is no longer necessary, and/or if the Submission is closed, regardless of outcome.</p>
    <h3>Eligibility to Participate</h3>
    <p>To participate in our Security Vulnerability Reporting Program, you must:</p>
    <ul>
      <li>Be at least 18 years of age.</li>
      <li>Not be a resident of, or make a Submission to our Security Vulnerability Reporting Program from, a country against which the United States has issued export sanctions or other trade restrictions
      </li>
<li>Not be in violation of any national, state, or local law or regulation with respect to any activities directly or indirectly related to our Security Vulnerability Reporting Program.</li>
<li>Not be employed by Techsta or any of its affiliates or an immediate family member of a person employed by Techsta or any of its affiliates.</li>
<li>You are responsible for any tax implications of a bounty or reward from our Security Vulnerability Reporting Program in accordance with your country of residency and citizenship.</li>
</ul>
<h3>Response Targets</h3>
<p>Techsta will make a best effort to meet the following SLAs for hackers participating in our program:</p>
<table>
  <thead>
    <tr>
      <th>Type of Response</th>
      <th>SLA in business days</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>First Response</td>
      <td>5 days</td>
    </tr>
    <tr>
      <td>Time to Triage</td>
      <td>10 days</td>
    </tr>
    <tr>
      <td>Time to Bounty</td>
      <td>15 days</td>
    </tr>
    <tr>
      <td>Time to Resolution</td>
      <td>depends on severity and complexity</td>
    </tr>
  </tbody>
</table>
<p>We will try to keep you informed about our progress throughout the process.</p>
<h3>Disclosure Policy</h3>
<p>Follow Techsta disclosure guidelines.</p>
<h3>Program Rules</h3>
<p>Please provide detailed reports with reproducible steps. If the report is not detailed enough to reproduce the issue, the issue will not be eligible for a bounty.</p>
<p>Submit one clear vulnerability per report, unless you need to chain vulnerabilities to provide impact. Include attachments such as screenshots, videos and proof of concept code as necessary.</p>


  
  
      <body>

  </html>