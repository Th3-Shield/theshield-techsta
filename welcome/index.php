<?php

define('TITLE', "Welcome");
include '../assets/layouts/header.php';


?>



<main role="main">

    <section class="jumbotron text-center py-5">
        <div class="container">
            <h1 class="jumbotron-heading mb-4">welcome to techsta this is an organization managed by the shield developers and bug hanters</h1>
            <p class="text-muted">
                some  additional information will be put heare by thee techster volontiers and shield mabers
                
                <head>
                    
<!--  i need  separate this css file -->

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: lightgray;
    }
  </style>
  
<!--  this javascript file should be external-->

<script>
  window.onload = function() {
    fetch("data.json")
      .then(response => response.json())
      .then(data => {
        let records = Object.values(data);
        let table = document.getElementById("table");
        for (let record of records) {
          let row = document.createElement("tr");
          let domainCell = document.createElement("td");
          let dateCell = document.createElement("td");
          let bountyCell = document.createElement("td");
          let linkCell = document.createElement("td");
          let vulnCell = document.createElement("td");
          
          domainCell.innerHTML = `<img src="${record.domain_image}" alt="${record.domain}" width="100" height="100"><br>${record.domain}`;
          dateCell.innerHTML = record.registration_date;
          bountyCell.innerHTML = record.bounty;
          linkCell.innerHTML = `<a href="${record.link}" target="_blank">${record.link}</a>`;
        
          
          row.appendChild(domainCell);
          row.appendChild(dateCell);
          row.appendChild(bountyCell);
          row.appendChild(linkCell);
          row.appendChild(vulnCell);
          table.appendChild(row);
        }
      });
  };
  
  function findVulnerability(domain) {
    // Your code to find vulnerability goes here
    console.log(`Finding vulnerability for domain: ${domain}`);
  }
</script>

<body>

<table id="table">
  <thead>
    <tr>
      <th>Domain</th>
      <th>Registration Date</th>
      <th>Bounty</th>
      <th>see the scope</th>
      
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</body>




    </section>

    <div class="album py-5">
        <div class="container">

            <div class="text-center text-muted mb-5">
                <h2>Check Out more Projects</h2>
                <hr width="300">
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src='../assets/images/repo_gitklik.png' alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Version Control application in Laravel using Git for core operationality.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="https://github.com/Th3-Shield" class="btn btn-primary my-2" target="_blank">See Creator</a>
                <a href="https://chat.whatsapp.com/IitfL5P6TYeCg5nSXBxlHz" class="btn btn-secondary my-2" target="_blank">See Repository</a>
                                </div>
                                <small class="text-muted">[under development]</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src='../assets/images/repo_klik.png' alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">PHP social media website with additional blogs and forums functionality.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                 <a href="https://github.com/Th3-Shield" class="btn btn-primary my-2" target="_blank">See Creator</a>
                                <a href="https://chat.whatsapp.com/IitfL5P6TYeCg5nSXBxlHz" class="btn btn-secondary my-2" target="_blank">See Repository</a>
                                </div>
                                <small class="text-muted">[development concluded]</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src='../assets/images/repo_loginsystem.png' alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Embeddable and secure PHP authentication system.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="https://github.com/Th3-Shield" class="btn btn-primary my-2" target="_blank">See Creator</a>
                                <a href="https://chat.whatsapp.com/IitfL5P6TYeCg5nSXBxlHz" class="btn btn-secondary my-2" target="_blank">See Repository</a>
                                </div>
                                <small class="text-muted">[development concluded]</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>


<?php

include '../assets/layouts/footer.php'

?>