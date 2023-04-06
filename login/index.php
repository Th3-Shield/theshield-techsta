<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();
?>

<html lang="en" class="no-js">
	<head>
		






<div class="container">
          <div class="row">
              <div class="col-sm-4">
      
              </div>
              <div class="col-sm-4">
                  <form class="form-auh" action="includes/login.inc.php" method="post">
      
                      <?php insert_csrf_token(); ?>
      
                      <div class="text-center">
                          <img class="mb-1" src="../assets/images/logo.png" alt="" width="130" height="130">
                      </div>
      
                      <h6 class="h3 mb-3 font-weight-normal text-muted text-center">Login to your Account</h6>
      
                      <div class="text-center mb-3">
                          <small class="text-success font-weight-bold">
                              <?php
                                  if (isset($_SESSION['STATUS']['loginstatus']))
                                      echo $_SESSION['STATUS']['loginstatus'];
      
                              ?>
                          </small>
                      </div>
      
                      <div class="form-group">
                          <label for="username" class="sr-only">Username</label>
                          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                          <sub class="text-danger">
                              <?php
                                  if (isset($_SESSION['ERRORS']['nouser']))
                                      echo $_SESSION['ERRORS']['nouser'];
                              ?>
                          </sub>
                      </div>
      
                      <div class="form-group">
                          <label for="password" class="sr-only">Password</label>
                          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                          <sub class="text-danger">
                              <?php
                                  if (isset($_SESSION['ERRORS']['wrongpassword']))
                                      echo $_SESSION['ERRORS']['wrongpassword'];
                              ?>
                          </sub>
                      </div>
      
                      <div class="col-auto my-1 mb-4">
                          <div class="custom-control custom-checkbox mr-sm-2">
                              <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
                              <label class="custom-control-label" for="rememberme">Remember me</label>
                          </div>
                      </div>
      
                      <button class="btn btn-lg btn-primary btn-block" type="submit" value="loginsubmit" name="loginsubmit">Login</button>
      
                      <p class="mt-3 text-muted text-center"><a href="../reset-password/">forgot password?</a></p>
      
                      
                  </form>
              </div>
              <div class="col-sm-4">
      
              </div>
          </div>
      </div>
















      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Security - Landing Page</title>

  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="grid-container">
      
        <div class="pageCenter">
            <div class="pageTitle">
                <h1>Security</h1>
                <h2>in the first place</h2>
            </div>
            <div class="pageSeparator">
                <div class="separator"></div>
            </div>
            <div class="pageDescription">
                <h3>techsta is a cyber security and developers working together to bring you secure system</h3>
            </div>
            <div class="pageButton">
                <div class="container">
                    <div>
                        <svg width="45" height="75" viewBox="0 0 83 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="particlesRight">
                            <g id="circleMiddle">
                            <g id="circleBlurr" filter="url(#filter0_f)">
                            <path d="M58.9997 19.248C58.9997 21.5941 60.9117 23.496 63.2703 23.496C65.6288 23.496 67.5408 21.5941 67.5408 19.248C67.5408 16.9019 65.6288 15 63.2703 15C60.9117 15 58.9997 16.9019 58.9997 19.248ZM65.6515 19.248C65.6515 20.5562 64.5854 21.6167 63.2703 21.6167C61.9552 21.6167 60.8891 20.5562 60.8891 19.248C60.8891 17.9399 61.9552 16.8794 63.2703 16.8794C64.5854 16.8794 65.6515 17.9399 65.6515 19.248Z" fill="#02D975"/>
                            </g>
                            <path id="circle" d="M58.9997 19.248C58.9997 21.5941 60.9117 23.496 63.2703 23.496C65.6288 23.496 67.5408 21.5941 67.5408 19.248C67.5408 16.9019 65.6288 15 63.2703 15C60.9117 15 58.9997 16.9019 58.9997 19.248ZM65.6515 19.248C65.6515 20.5562 64.5854 21.6167 63.2703 21.6167C61.9552 21.6167 60.8891 20.5562 60.8891 19.248C60.8891 17.9399 61.9552 16.8794 63.2703 16.8794C64.5854 16.8794 65.6515 17.9399 65.6515 19.248Z" fill="#02D975"/>
                            </g>
                            <g id="circleTiny">
                            <g id="circleBlurr_2" filter="url(#filter1_f)">
                            <path d="M49 103.5C49 105.433 50.5753 107 52.5186 107C54.4618 107 56.0371 105.433 56.0371 103.5C56.0371 101.567 54.4618 100 52.5186 100C50.5753 100 49 101.567 49 103.5ZM54.4805 103.5C54.4805 104.578 53.6021 105.452 52.5186 105.452C51.435 105.452 50.5567 104.578 50.5567 103.5C50.5567 102.422 51.435 101.548 52.5186 101.548C53.6021 101.548 54.4805 102.422 54.4805 103.5Z" fill="#02D975"/>
                            </g>
                            <path id="circle_2" d="M49 103.5C49 105.433 50.5753 107 52.5186 107C54.4618 107 56.0371 105.433 56.0371 103.5C56.0371 101.567 54.4618 100 52.5186 100C50.5753 100 49 101.567 49 103.5ZM54.4805 103.5C54.4805 104.578 53.6021 105.452 52.5186 105.452C51.435 105.452 50.5567 104.578 50.5567 103.5C50.5567 102.422 51.435 101.548 52.5186 101.548C53.6021 101.548 54.4805 102.422 54.4805 103.5Z" fill="#02D975"/>
                            </g>
                            <g id="circleBig">
                            <g id="circleBlurr_3" filter="url(#filter2_f)">
                            <path d="M15 31.6379C15 36.4086 18.8879 40.2759 23.6838 40.2759C28.4797 40.2759 32.3675 36.4086 32.3675 31.6379C32.3675 26.8673 28.4797 23 23.6838 23C18.8879 23 15 26.8673 15 31.6379ZM28.5257 31.6379C28.5257 34.298 26.3579 36.4544 23.6838 36.4544C21.0096 36.4544 18.8418 34.298 18.8418 31.6379C18.8418 28.9779 21.0096 26.8215 23.6838 26.8215C26.3579 26.8215 28.5257 28.9779 28.5257 31.6379Z" fill="#02D975"/>
                            </g>
                            <path id="circle_3" d="M15 31.6379C15 36.4086 18.8879 40.2759 23.6838 40.2759C28.4797 40.2759 32.3675 36.4086 32.3675 31.6379C32.3675 26.8673 28.4797 23 23.6838 23C18.8879 23 15 26.8673 15 31.6379ZM28.5257 31.6379C28.5257 34.298 26.3579 36.4544 23.6838 36.4544C21.0096 36.4544 18.8418 34.298 18.8418 31.6379C18.8418 28.9779 21.0096 26.8215 23.6838 26.8215C26.3579 26.8215 28.5257 28.9779 28.5257 31.6379Z" fill="#02D975"/>
                            </g>
                            </g>
                            <defs>
                            <filter id="filter0_f" x="43.9997" y="0" width="38.5411" height="38.496" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                            </filter>
                            <filter id="filter1_f" x="34" y="85" width="37.0371" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                            </filter>
                            <filter id="filter2_f" x="0" y="8" width="47.3675" height="47.2759" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                            </filter>
                            </defs>
                            </svg> 
                    </div>
                    <div><button>Work with us !</button></div>
                    <div>
                        <svg width="40" height="40" viewBox="0 0 53 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="particlesRight">
                    
                                <g id="circleTiny">
                                    <g id="circleBlurr" filter="url(#filter0_f)">
                                        <path d="M29 38C29 39.1046 29.9001 40 31.0106 40C32.121 40 33.0212 39.1046 33.0212 38C33.0212 36.8954 32.121 36 31.0106 36C29.9001 36 29 36.8954 29 38ZM32.1317 38C32.1317 38.6159 31.6297 39.1152 31.0106 39.1152C30.3914 39.1152 29.8895 38.6159 29.8895 38C29.8895 37.3841 30.3914 36.8848 31.0106 36.8848C31.6297 36.8848 32.1317 37.3841 32.1317 38Z" />
                                    </g>
                                        <path id="circle" d="M29 38C29 39.1046 29.9001 40 31.0106 40C32.121 40 33.0212 39.1046 33.0212 38C33.0212 36.8954 32.121 36 31.0106 36C29.9001 36 29 36.8954 29 38ZM32.1317 38C32.1317 38.6159 31.6297 39.1152 31.0106 39.1152C30.3914 39.1152 29.8895 38.6159 29.8895 38C29.8895 37.3841 30.3914 36.8848 31.0106 36.8848C31.6297 36.8848 32.1317 37.3841 32.1317 38Z" />
                                </g>
                    
                                <g id="circleMiddle">
                                    <g id="circleBlurr_2" filter="url(#filter1_f)">
                                        <path d="M15 40.5C15 42.433 16.5753 44 18.5185 44C20.4618 44 22.0371 42.433 22.0371 40.5C22.0371 38.567 20.4618 37 18.5185 37C16.5753 37 15 38.567 15 40.5ZM20.4804 40.5C20.4804 41.5778 19.6021 42.4516 18.5185 42.4516C17.435 42.4516 16.5566 41.5778 16.5566 40.5C16.5566 39.4222 17.435 38.5484 18.5185 38.5484C19.6021 38.5484 20.4804 39.4222 20.4804 40.5Z" />
                                    </g>
                                        <path id="circle_2" d="M15 40.5C15 42.433 16.5753 44 18.5185 44C20.4618 44 22.0371 42.433 22.0371 40.5C22.0371 38.567 20.4618 37 18.5185 37C16.5753 37 15 38.567 15 40.5ZM20.4804 40.5C20.4804 41.5778 19.6021 42.4516 18.5185 42.4516C17.435 42.4516 16.5566 41.5778 16.5566 40.5C16.5566 39.4222 17.435 38.5484 18.5185 38.5484C19.6021 38.5484 20.4804 39.4222 20.4804 40.5Z" />
                                </g>
                    
                                <g id="circleBig">
                                    <g id="circleBlurr_3" filter="url(#filter2_f)">
                                        <path d="M23 22.4604C23 26.5806 26.3578 29.9208 30.4999 29.9208C34.642 29.9208 37.9999 26.5806 37.9999 22.4604C37.9999 18.3401 34.642 15 30.4999 15C26.3578 15 23 18.3401 23 22.4604ZM34.6818 22.4604C34.6818 24.7578 32.8095 26.6202 30.4999 26.6202C28.1903 26.6202 26.318 24.7578 26.318 22.4604C26.318 20.163 28.1903 18.3006 30.4999 18.3006C32.8095 18.3006 34.6818 20.163 34.6818 22.4604Z" />
                                    </g>
                                        <path id="circle_3" d="M23 22.4604C23 26.5806 26.3578 29.9208 30.4999 29.9208C34.642 29.9208 37.9999 26.5806 37.9999 22.4604C37.9999 18.3401 34.642 15 30.4999 15C26.3578 15 23 18.3401 23 22.4604ZM34.6818 22.4604C34.6818 24.7578 32.8095 26.6202 30.4999 26.6202C28.1903 26.6202 26.318 24.7578 26.318 22.4604C26.318 20.163 28.1903 18.3006 30.4999 18.3006C32.8095 18.3006 34.6818 20.163 34.6818 22.4604Z" />
                                </g>
                    
                            </g>
                            <defs>
                                <filter id="filter0_f" x="14" y="21" width="34.0212" height="34" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                                </filter>
                                <filter id="filter1_f" x="-4.57764e-05" y="22" width="37.0371" height="37" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                                </filter>
                                <filter id="filter2_f" x="7.99995" y="0" width="44.9999" height="44.9208" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                                <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>


                
                
                
                    
            </div>
        </div>
        <div class="pageLeft">
            <img
            src="./images/techLeft.svg"
            height="500px"
            width="300px" />
        </div>
        <div class="pageRight">
            <img
            src="./images/techRight.svg"
            height="430px"
            width="230px" />
        </div>
      </div>

      

</bod














      


	</body>
</html>














      

