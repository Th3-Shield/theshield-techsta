

<?php

define('TITLE', "services");
include '../assets/layouts/header.php';
check_logged_out();
?>





<html>
<head>
  <meta charset="UTF-8">
  <title>Vulnerabilities Overview</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
    .container {
      margin-top: 50px;
    }
    .navbar {
      background-color: black;
      color: white;
    }
    .navbar a {
      color: white;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Techsta</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Tech Girls</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Other Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Coding Club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boys Tech Club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">qualified stuff</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container">
    <h1 class="text-center">Vulnerabilities Overview</h1>
    <h2 class="text-center">Techsta, un umbrella tech company for The Shield bug hunters and programmers, believes that every system is vulnerable and it's their work to secure it.</h2>
    <hr>
    <div class="accordion" id="vulnAccordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button

           class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Cross-Site Scripting (XSS)
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#vulnAccordion">
          <div class="card-body">
            Cross-Site Scripting (XSS) is a vulnerability in which an attacker injects malicious scripts into a website, which is then executed by unsuspecting users who visit the site. This can lead to sensitive information being stolen or malicious actions being performed on behalf of the user.
          </div>
        </div>
      </div>
    


      <div class="card">
  <div class="card-header" id="headingTwo">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        SQL Injection
      </button>
    </h5>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#vulnAccordion">
    <div class="card-body">
      SQL Injection is a vulnerability that allows an attacker to inject malicious SQL code into a database through a vulnerable website or application. This can result in sensitive information being stolen or altered, or unauthorized actions being performed on the database.
    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  // Select the target element to scroll to
  var target = $("#vulnAccordion");
  
  // Scroll to the target element
  $('html, body').animate({
    scrollTop: target.offset().top
  }, 1000); // The duration of the scroll animation in milliseconds
});
</script>


  <div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapsethree">
      Remote Code Execution (RCE) 
      </button>
    </h5>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to execute arbitrary code on a vulnerable system, potentially giving them complete control of the system.
    </div>
  </div>
</div>





<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
      Cross-Site Request Forgery (CSRF) 
      </button>
    </h5>
  </div>
  <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to trick a user into performing actions on a website without their knowledge or consent.
    </div>
  </div>
</div>








<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
      Broken Authentication and Session Management 
      </button>
    </h5>
  </div>
  <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to bypass authentication and authorization mechanisms in a web application, potentially gaining unauthorized access to sensitive data.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
     insecure Direct Object References -  
      </button>
    </h5>
  </div>
  <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to access unauthorized data by manipulating direct object references in a web application.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
      insufficient Input Validation on User
      </button>
    </h5>
  </div>
  <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#vulnAccordion">
    <div class="card-body">
    Supplied Document Files - a vulnerability that arises from poor input validation on user-supplied document files, potentially allowing an attacker to upload malicious files to a web application.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
      Cross-Site Scripting by Reflection -
      </button>
    </h5>
  </div>
  <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#vulnAccordion">
    <div class="card-body">
    a type of XSS vulnerability in which malicious scripts are reflected back to a user, executed in their browser, and potentially steal sensitive data.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
      Insecure Cryptographic Storage 
      </button>
    </h5>
  </div>
  <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor implementation of cryptography, potentially allowing an attacker to access encrypted data without the proper keys or algorithms.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
      Insecure Configuration Management 
      </button>
    </h5>
  </div>
  <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor management of server and network configurations, potentially leaving systems open to attack.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
      Injection Flaws
      </button>
    </h5>
  </div>
  <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to inject malicious data into a web application, potentially compromising the application or the underlying system.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
      Broken Access Control 
      </button>
    </h5>
  </div>
  <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to bypass access controls and access sensitive data or perform unauthorized actions.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
      Insufficient Logging and Monitoring 
      </button>
    </h5>
  </div>
  <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor logging and monitoring practices, making it difficult to detect and respond to security incidents.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
      Failure to Restrict URL Access 
      </button>
    </h5>
  </div>
  <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to access restricted pages or functionality on a website by manipulating URLs.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
      Insufficient Authentication/Authorization
      </button>
    </h5>
  </div>
  <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor implementation of authentication and authorization mechanisms, potentially allowing an attacker to gain unauthorized access to sensitive data or functionality.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
      Insufficient Session Expiration
      </button>
    </h5>
  </div>
  <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to hijack a user's session and potentially steal sensitive data.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
      Cross-Site Request Forgery on Forms 
      </button>
    </h5>
  </div>
  <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#vulnAccordion">
    <div class="card-body">
    a type of CSRF vulnerability in which an attacker tricks a user into submitting a malicious form on a website.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
      Insufficient Transport Layer Protection - 
      </button>
    </h5>
  </div>
  <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor implementation of encryption and secure communication mechanisms, potentially allowing an attacker to intercept sensitive data in transit.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
      Insufficient Encryption Key Management 
      </button>
    </h5>
  </div>
  <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor management of encryption keys, potentially allowing an attacker to access encrypted data.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
      Insufficient Input Validation -
      </button>
    </h5>
  </div>
  <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
      Insufficient Output Encoding 
      </button>
    </h5>
  </div>
  <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor encoding of output data, potentially allowing an attacker to inject malicious scripts into a web application.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
      Insufficient Password Strength Requirements
      </button>
    </h5>
  </div>
  <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from weak password requirements, potentially allowing an attacker to easily guess or crack user passwords.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
      Insufficient Account Lockout
      </button>
    </h5>
  </div>
  <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor account lockout policies, potentially allowing an attacker to repeatedly guess or crack user passwords.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
      Insufficient Password Recovery
      </button>
    </h5>
  </div>
  <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor password recovery
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
      Insufficient Session Invalidation
      </button>
    </h5>
  </div>
  <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to access sensitive data by manipulating session variables
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
      Insufficient Error Handling  
      </button>
    </h5>
  </div>
  <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor error handling, potentially revealing sensitive information to an attacker.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
      Insufficient Logout
      </button>
    </h5>
  </div>
  <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to access sensitive data after a user has logged out of a web application.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
      Insufficient Authentication Session Management -
      </button>
    </h5>
  </div>
  <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authentication session management, potentially allowing an attacker to hijack user sessions.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
      Insufficient Authorization
      </button>
    </h5>
  </div>
  <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authorization, potentially allowing an attacker to access sensitive data or functionality without proper permission.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
      Insufficient Password History Requirements -
      </button>
    </h5>
  </div>
  <div id="collapse34" class="collapse" aria-labelledby="heading34" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from weak password history requirements, potentially allowing an attacker to easily reuse old passwords.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
      Insufficient Password Complexity Requirements
      </button>
    </h5>
  </div>
  <div id="collapse35" class="collapse" aria-labelledby="heading35" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from weak password complexity requirements, potentially allowing an attacker to easily guess or crack user passwords.
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
      Insufficient Session Timeout -
      </button>
    </h5>
  </div>
  <div id="collapse36" class="collapse" aria-labelledby="heading36" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that allows an attacker to access sensitive data after a user's session has timed out.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse37" aria-expanded="false" aria-controls="collapse39">
      Insufficient Authentication Throttling
      </button>
    </h5>
  </div>
  <div id="collapse38" class="collapse" aria-labelledby="heading38" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authentication throttling, potentially allowing an attacker to repeatedly guess or crack user passwords.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
      Insufficient Input Filtering 
      </button>
    </h5>
  </div>
  <div id="collapse39" class="collapse" aria-labelledby="heading39" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input filtering, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
      Insufficient Output Filtering
      </button>
    </h5>
  </div>
  <div id="collapse40" class="collapse" aria-labelledby="heading40" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor output filtering, potentially allowing an attacker to inject malicious scripts into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
      Insufficient Input Validation on Forms
      </button>
    </h5>
  </div>
  <div id="collapse41" class="collapse" aria-labelledby="heading41" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on forms, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
      Insufficient Output Encoding on Forms
      </button>
    </h5>
  </div>
  <div id="collapse42" class="collapse" aria-labelledby="heading42" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor encoding of output data on forms, potentially allowing an attacker to inject malicious scripts into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
      Insufficient Input Validation on Query Strings
      </button>
    </h5>
  </div>
  <div id="collapse43" class="collapse" aria-labelledby="heading43" data-parent="#vulnAccordion">
    <div class="card-body">
    vulnerability that arises from poor input validation on query strings, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
      Insufficient Input Validation on Cookies
      </button>
    </h5>
  </div>
  <div id="collapse44" class="collapse" aria-labelledby="heading44" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on cookies, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
      Insufficient Input Validation on Headers
      </button>
    </h5>
  </div>
  <div id="collapse45" class="collapse" aria-labelledby="heading45" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on headers, potentially allowing an attacker to inject malicious data into a web application.
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
      Insufficient Input Validation on Hidden Fields -
      </button>
    </h5>
  </div>
  <div id="collapse46" class="collapse" aria-labelledby="heading46" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on hidden fields, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
      Insufficient Input Validation on Uploaded Files
      </button>
    </h5>
  </div>
  <div id="collapse47" class="collapse" aria-labelledby="heading47" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on uploaded files, potentially allowing an attacker to upload malicious files to a web application.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
      Insufficient Input Validation on User-Supplied Data
      </button>
    </h5>
  </div>
  <div id="collapse48" class="collapse" aria-labelledby="heading48" data-parent="#vulnAccordion">
    <div class="card-body">
    - a vulnerability that arises from poor input validation on user-supplied data, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>




<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
      Insufficient Input Validation on User-Supplied URLs -
      </button>
    </h5>
  </div>
  <div id="collapse49" class="collapse" aria-labelledby="heading9" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on user-supplied URLs, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
      Insufficient Input Validation on User-Supplied File Paths 
      </button>
    </h5>
  </div>
  <div id="collapse50" class="collapse" aria-labelledby="heading50" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
      Insufficient Input Validation on User-Supplied IP Addresses
      </button>
    </h5>
  </div>
  <div id="collapse51" class="collapse" aria-labelledby="heading51" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on user-supplied IP addresses, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse52" aria-expanded="false" aria-controls="collapse53">
      Insufficient Input Validation on User-Supplied Phone Numbers 
      </button>
    </h5>
  </div>
  <div id="collapse52" class="collapse" aria-labelledby="heading52" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on user-supplied phone numbers, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse55" aria-expanded="false" aria-controls="collapse56">
      Insufficient Input Validation on User-Supplied Dates-
      </button>
    </h5>
  </div>
  <div id="collapse55" class="collapse" aria-labelledby="heading55" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on user-supplied dates, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>

<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
      Insufficient Input Validation on User-Supplied Time
      </button>
    </h5>
  </div>
  <div id="collapse57" class="collapse" aria-labelledby="heading57" data-parent="#vulnAccordion">
    <div class="card-body">
    input validation on user-supplied time, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse58" aria-expanded="false" aria-controls="collapse4">
      Insufficient Input Validation on User-Supplied Time Zones
      </button>
    </h5>- a vulnerability that arises from poor input validation on user-supplied time zones, potentially allowing an attacker to inject malicious data into a web application.
  </div>
  <div id="collapse58" class="collapse" aria-labelledby="heading58" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authentication session management, potentially allowing an attacker to hijack user sessions.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
      Insufficient Input Validation on User-Supplied Currency Values 
      </button>
    </h5>
  </div>
  <div id="collapse59" class="collapse" aria-labelledby="heading59" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor input validation on user-supplied currency values, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
      Insufficient Input Validation on User-
      </button>
    </h5>
  </div>
  <div id="collapse60" class="collapse" aria-labelledby="heading62" data-parent="#vulnAccordion">
    <div class="card-body">
    -Supplied Percentages - a vulnerability that arises from poor input validation on user-supplied percentages, potentially allowing an attacker to inject malicious data into a web application.
    </div>
  </div>
</div>



<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
      a vulnerability that arises from poor input validation on user-supplied latitude and longitude coordinates, potentially allowing an attacker to inject malicious data into a web application.
      </button>
    </h5>
  </div>
  <div id="collapse63" class="collapse" aria-labelledby="heading63" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authentication session management, potentially allowing an attacker to hijack user sessions.
    </div>
  </div>
</div>




<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
      Insufficient Input Validation on User-Supplied Image Files 
      </button>
    </h5>
  </div>
  <div id="collapse64" class="collapse" aria-labelledby="heading64" data-parent="#vulnAccordion">
    <div class="card-body">
    a vulnerability that arises from poor authentication session management, potentially allowing an attacker to hijack user sessions.
    </div>
  </div>
</div>


<div class="card-header" id="headingthree">
    <h5 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
      Insufficient Input Validation on User-Supplied Audio Files 
      </button>
    </h5>
  </div>
  <div id="collapse66" class="collapse" aria-labelledby="heading66" data-parent="#vulnAccordion">
    <div class="card-body">
    - a vulnerability that arises from poor input validation on user-supplied audio files, potentially allowing an attacker to upload malicious files to a web application.
    </div>
  </div>
</div>


    </div>
  </div>
</body>
</html>

