<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css" />
    <link rel="stylesheet" href="../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <link href="../assets/css/choices.min.css" rel="stylesheet" />
    <link href="..//assets/css/choices.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
  $(document).ready(function() {
    // Toastr initialization
    toastr.options = {
      // Add any additional options here (if needed) 
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    <?php
        // post question page
        if (!isset($_GET['message'])) {
                
        }else{
        $submitCheck=$_GET['message'];

        if ($submitCheck == "empty") {
        echo "toastr.error('All fields are required');";
        }
        elseif ($submitCheck == "error") {
        echo "toastr.error('Failed to post questions, please try again');";

        }elseif ($submitCheck == "questionexists") {
        echo "toastr.error('Question exists, please try again');";

        }elseif ($submitCheck == "success") {
        echo "toastr.success('Question Posted successfully');";
        }
        }
    ?>
  });
  </script>

    
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center"><br>
          <!-- <a class="sidebar-brand brand-logo" href="index.html"><img src="template/assets/images/browser-logo/firefox-logo.png" alt=""> QUESTIONNAIRE</a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="template/assets/images/browser-logo/firefox-logo.png" alt="logo" ></a> -->
          <a class="nav-link" href="../index.php">
            <h4 class="menu-title">T.K CONFLICT MODE <br> QUESTIONNAIRE</h4>
          </a>        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <!-- <img src="../../assets/images/faces/face1.jpg" alt="profile" /> -->
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <!-- <span class="font-weight-medium mb-2">Henry Klein</span>
                <span class="font-weight-normal">$8,753.00</span> -->
              </div>
              <!-- <span class="badge badge-danger text-white ml-3 rounded">3</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Forms</span>
            </a>
          <!-- </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title">Docs</span>
            </span>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="template/pages/forms/template/assets/css/documentation/documentation.html">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <!-- <div class="border-none">
                  <p class="text-black">Notification</p>
                </div> -->
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <!-- <i class="mdi mdi-bell-outline"></i> -->
                  <!-- <span class="count count-varient1">7</span> -->
                </a>
                <!-- <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="../../assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">5</span> -->
                </a>
                <!-- <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li> -->
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> English </a>
                <!-- <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Spain </a>
                  <a class="dropdown-item" href="#"> Latin </a>
                  <a class="dropdown-item" href="#"> Japanese </a>
                </div> -->
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="../../assets/images/faces/face1.jpg" />
                  <span class="profile-name">Henry Klein</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form elements</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Form elements </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description">Basic form layout</p>
                   
                    <form method="POST" action="php_action/post.php" class="needs-validation" novalidate="novalidate">
                     
                      <div class="mb-3">
                        <!-- <label for="organizerSingle2">Single</label> -->
                        <!-- <select class="form-select" id="organizerSingle2" data-choices="data-choices" size="1" required="required" name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'> -->
                          <br>
                      
                        </select><br>

                        <div class="mb-3">
                          <?php 
                            if (isset($_GET['question_no'])) {
                              $question_no=$_GET['question_no'];
                      
                              echo '
                              <div class="col-sm-6 col-lg-6">
                              <label for="question_no" class="form-label">Question Number</label>
                              <input type="text" class="form-control" name="question_no" id="question_no" placeholder="" value="'.$question_no.'">
                                </div>';
                            
                            }else{
                            echo '<div class="col-sm-6 col-lg-6">
                            <label for="question_no" class="form-label">Question Number</label>
                            <input type="text" class="form-control" name="question_no" id="question_no" placeholder="Question Number" value="">
                              </div>';
                            }
                          ?>
                         <div class="form-check">
                          <input type="text" name="option_a" id="" placeholder="Option A">
                          <select class="" name="response_criteria_a" >
                            <option value="" selected disabled>--SELECT OPTION--</option>
                            <?php

                              $result = mysqli_query($conn,"SELECT * FROM response_criteria");
                              while($row = mysqli_fetch_array($result)) {
                              ?>
                              <option value="<?=$row["response_criteria_id"];?>"><?= $row["response_criteria_name"];?></option>
                              <?php
                              }
                            ?>
                        </select>
                         </div> <div class="form-check">
                          <input type="text" name="option_b" id="" placeholder="Option B">
                          <select class="" name="response_criteria_b" >
                            <option value="" selected disabled>--SELECT OPTION--</option>
                            <?php

                              $result = mysqli_query($conn,"SELECT * FROM response_criteria");
                              while($row = mysqli_fetch_array($result)) {
                              ?>
                              <option value="<?=$row["response_criteria_id"];?>"><?= $row["response_criteria_name"];?></option>
                              <?php
                              }
                            ?>
                        </select>
                         </div>
                        </div>
                        
<!-- 
                        <div class="mb-3">
                          <label for="question1" class="form-label">Question 1:</label><br>
                         

                      </div>
                   
                      <div class="mb-3"> -->
                          <!-- <label for="options" class="form-label">Select an option:</label> --
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="option" id="option1" value="option1">
                              <label class="form-check-label" for="option1">
                                A. There are times when I let others take responsibility for solving the problem.
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="option" id="option2" value="option2">
                              <label class="form-check-label" for="option2">
                                B .Rather than negotiate the things on which we disagree, I try to stress those things upon which we both agree.
                              </label>
                          </div>
                      </div>

                   <!-- Question 2 --
                   <div class="mb-3">
                    <label for="question2" class="form-label">Question 2:</label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2A" value="A">
                        <label class="form-check-label" for="question2A">
                            A. I try to find a compromise solution.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2B" value="B">
                        <label class="form-check-label" for="question2B">
                            B. I attempt to deal with all of another's and my concerns.
                        </label>
                    </div>
                </div>

<!-- Question 3
<div class="mb-3">
  <label for="question3" class="form-label">Question 3:</label><br>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question3" id="question3A" value="A">
      <label class="form-check-label" for="question3A">
          A. I am usually firm in pursuing my goals.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question3" id="question3B" value="B">
      <label class="form-check-label" for="question3B">
          B. I might try to soothe the other's feelings and preserve our relationship.
      </label>
  </div>
</div>


<!-- Question 4 --<div class="mb-3">
  <label for="question4" class="form-label">Question 4:</label><br>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question4" id="question4A" value="A">
      <label class="form-check-label" for="question4A">
          A. I try to find a compromise solution.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question4" id="question4B" value="B">
      <label class="form-check-label" for="question4B">
          B. I sometimes sacrifice my own wishes for the wishes of the other person.
      </label>
  </div>
</div>


<!-- Question 5 --
<div class="mb-3">
  <label for="question5" class="form-label">Question 5:</label><br>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question5" id="question5A" value="A">
      <label class="form-check-label" for="question5A">
          A. I consistently seek the other's help in working out a solution.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question5" id="question5B" value="B">
      <label class="form-check-label" for="question5B">
          B. I try to do what is necessary to avoid useless tensions.
      </label>
  </div>
</div>


<!-- Question 6 --
<div class="mb-3">
  <label for="question6" class="form-label">Question 6:</label><br>


  <div class="form-check">
      <input class="form-check-input" type="radio" name="question6" id="question6A" value="A">
      <label class="form-check-label" for="question6A">
        A. I try to avoid creating unpleasantness for myself.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question6" id="question6B" value="B">
      <label class="form-check-label" for="question6B">
        B. I try to win my position.
      </label>
  </div>
</div>

<!-- Question 7 --
<div class="mb-3">
  <label for="question7" class="form-label">Question 7:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question7" id="question7A" value="A">
      <label class="form-check-label" for="question7A">
        A. I try to postpone the issue until I have had some time to think about it.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question7" id="question7B" value="B">
      <label class="form-check-label" for="question7B">
        B. I give up some points in exchange for others.
      </label>
  </div>
</div>

<!-- Question 8 --
<div class="mb-3">
  <label for="question8" class="form-label">Question 8:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question8" id="question8A" value="A">
      <label class="form-check-label" for="question8A">
        A. I am usually firm in pursuing my goals.

      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question8" id="question8B" value="B">
      <label class="form-check-label" for="question8B">
        B. I attempt to get all concerns and issues immediately out in the open.

      </label>
  </div>
</div>

<!-- Question 9 --
<div class="mb-3">
  <label for="question9" class="form-label">Question 9:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question9" id="question9A" value="A">
      <label class="form-check-label" for="question9A">
        A. I feel that differences are not always worth worrying about.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question9" id="question9B" value="B">
      <label class="form-check-label" for="question9B">
        B. I make some effort to get my way.
      </label>
  </div>
</div>

<!-- Question 10 --
<div class="mb-3">
  <label for="question10" class="form-label">Question 10:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question10" id="question10A" value="A">
      <label class="form-check-label" for="question10A">
        A. I am firm in pursuing my goals.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question10" id="question10B" value="B">
      <label class="form-check-label" for="question10B">
        B. I try to find a compromise solution.
      </label>
  </div>
</div>

<!-- Question 11 --
<div class="mb-3">
  <label for="question11" class="form-label">Question 11:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question11" id="question11A" value="A">
      <label class="form-check-label" for="question11A">
        A. I attempt to get all concerns and issues immediately out in the open.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question11" id="question11B" value="B">
      <label class="form-check-label" for="question11B">
        B. I might try to soothe the other's feelings and preserve our relationship.
      </label>
  </div>
</div>

<!-- Question 12 --
<div class="mb-3">
  <label for="question12" class="form-label">Question 12:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question12" id="question12A" value="A">
      <label class="form-check-label" for="question12A">
        A. I sometimes avoid taking positions which would create controversy.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question12" id="question12B" value="B">
      <label class="form-check-label" for="question12B">
        B. I will let another have some of their positions if they let me have some of mine.
      </label>
  </div>
</div>

<!-- Question 13 --
<div class="mb-3">
  <label for="question13" class="form-label">Question 13:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question13" id="question13A" value="A">
      <label class="form-check-label" for="question13A">
        A. I propose middle ground.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question13" id="question13B" value="B">
      <label class="form-check-label" for="question13B">
        B. I press to get my points made.
      </label>
  </div>
</div>

<!-- Question 14 --
<div class="mb-3">
  <label for="question14" class="form-label">Question 14:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question14" id="question14A" value="A">
      <label class="form-check-label" for="question14A">
        A. I tell another my ideas and ask them for theirs.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question14" id="question14B" value="B">
      <label class="form-check-label" for="question14B">
        B. I try to show him the logic and benefits of my position.
      </label>
  </div>
</div>

<!-- Question 15 --
<div class="mb-3">
  <label for="question15" class="form-label">Question 15:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question15" id="question15A" value="A">
      <label class="form-check-label" for="question15A">
        A. I might try to soothe the other's feelings and preserve our relationship.
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question15" id="question15B" value="B">
      <label class="form-check-label" for="question15B">
        B. I try to do what is necessary to avoid tension.
      </label>
  </div>
</div>

<!-- Question 17 --
<div class="mb-3">
  <label for="question17" class="form-label">Question 17:</label><br>
  <span>A. I am usually firm in pursuing my goals.</span><br>
  <span>B. I try to do what is necessary to avoid useless tensions.</span>
</div>

<!-- Options for Question 17 --
<div class="mb-3">
  <label for="options17" class="form-label">Select an option for Question 17:</label>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question17" id="question17A" value="A">
      <label class="form-check-label" for="question17A">
          Option A (Competing)
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question17" id="question17B" value="B">
      <label class="form-check-label" for="question17B">
          Option B (Avoiding)
      </label>
  </div>
</div>

<!-- Question 18 --
<div class="mb-3">
  <label for="question18" class="form-label">Question 18:</label><br>
  <span>A. If it makes the other person happy, I might let them maintain their views.</span><br>
  <span>B. I will let the other person have some of their positions if they let me have some of mine.</span>
</div>

<!-- Options for Question 18 --
<div class="mb-3">
  <label for="options18" class="form-label">Select an option for Question 18:</label>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question18" id="question18A" value="A">
      <label class="form-check-label" for="question18A">
          Option A (Accommodating)
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question18" id="question18B" value="B">
      <label class="form-check-label" for="question18B">
          Option B (Compromising)
      </label>
  </div>
</div>

<!-- Question 19 --
<div class="mb-3">
  <label for="question19" class="form-label">Question 19:</label><br>
  <span>A. I try to get all concerns and issues immediately out in the open.</span><br>
  <span>B. I try to postpone the issue until I have had some time to think it over.</span>
</div>

<!-- Options for Question 19 --
<div class="mb-3">
  <label for="options19" class="form-label">Select an option for Question 19:</label>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question19" id="question19A" value="A">
      <label class="form-check-label" for="question19A">
          Option A (Collaborating)
      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question19" id="question19B" value="B">
      <label class="form-check-label" for="question19B">
          Option B (Avoiding)
      </label>
  </div>
</div>

<!-- Question 20 --
<div class="mb-3">
  <label for="question20" class="form-label">Question 20:</label><br>
  
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question20" id="question20A" value="A">
      <label class="form-check-label" for="question20A">
        A. I attempt to immediately work through our differences.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question20" id="question20B" value="B">
      <label class="form-check-label" for="question20B">
        B. I try to find a fair combination of gains and losses for both of us.      </label>
  </div>
</div>

<!-- Question 21 --
<div class="mb-3">
  <label for="question21" class="form-label">Question 21:</label><br>
  
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question21" id="question21A" value="A">
      <label class="form-check-label" for="question21A">
        A. In approaching negotiations, I try to be considerate of the other person's feelings.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question21" id="question21B" value="B">
      <label class="form-check-label" for="question21B">
        B. I always lean toward a direct discussion of the problem.      </label>
  </div>
</div>

<!-- Question 22 --
<div class="mb-3">
  <label for="question22" class="form-label">Question 22:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question22" id="question22A" value="A">
      <label class="form-check-label" for="question22A">
        A. I try to find a position that is intermediate between mine and another person's.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question22" id="question22B" value="B">
      <label class="form-check-label" for="question22B">
        B. I assert my wishes.      </label>
  </div>
</div>

<!-- Question 23 --
<div class="mb-3">
  <label for="question23" class="form-label">Question 23:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question23" id="question23A" value="A">
      <label class="form-check-label" for="question23A">
        A. I am often concerned with satisfying all my wishes.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question23" id="question23B" value="B">
      <label class="form-check-label" for="question23B">
        B. There are times when I let others take responsibility for solving problems.      </label>
  </div>
</div>

<!-- Question 24 --
<div class="mb-3">
  <label for="question24" class="form-label">Question 24:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question24" id="question24A" value="A">
      <label class="form-check-label" for="question24A">
        A. If the other's position seems important to them, I would try to meet their wishes.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question24" id="question24B" value="B">
      <label class="form-check-label" for="question24B">
        B. I try to get the other person to settle for a compromise.      </label>
  </div>
</div>

<!-- Question 25 --
<div class="mb-3">
  <label for="question25" class="form-label">Question 25:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question25" id="question25A" value="A">
      <label class="form-check-label" for="question25A">
        A. I try to show the other person the logic and benefits of my position.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question25" id="question25B" value="B">
      <label class="form-check-label" for="question25B">
        B. In approaching negotiations, I try to be considerate of the other person's wishes.
      </label>
  </div>
</div>

<!-- Question 26 --
<div class="mb-3">
  <label for="question26" class="form-label">Question 26:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question26" id="question26A" value="A">
      <label class="form-check-label" for="question26A">
        A. I propose a middle ground.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question26" id="question26B" value="B">
      <label class="form-check-label" for="question26B">
        B. I am nearly always concerned with satisfying all my wishes.
      </label>
  </div>
</div>

<!-- Question 27 --
<div class="mb-3">
  <label for="question27" class="form-label">Question 27:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question27" id="question27A" value="A">
      <label class="form-check-label" for="question27A">
        A. I sometimes avoid taking positions that would create controversy.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question27" id="question27B" value="B">
      <label class="form-check-label" for="question27B">
        B. If it makes the other person happy, I might let them maintain their views.      </label>
  </div>
</div>

<!-- Question 28 --
<div class="mb-3">
  <label for="question28" class="form-label">Question 28:</label><br>
  
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question28" id="question28A" value="A">
      <label class="form-check-label" for="question28A">
        A. I am usually firm in pursuing my goals.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question28" id="question28B" value="B">
      <label class="form-check-label" for="question28B">
        B. I feel that differences are not always worth worrying about.      </label>
  </div>
</div>

<!-- Question 29 --
<div class="mb-3">
  <label for="question29" class="form-label">Question 29:</label><br>

  <div class="form-check">
      <input class="form-check-input" type="radio" name="question29" id="question29A" value="A">
      <label class="form-check-label" for="question29A">
        A. I propose middle ground.
            </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question29" id="question29B" value="B">
      <label class="form-check-label" for="question29B">
        B. I feel that differences are not always worth worrying about.      </label>
  </div>
</div>

<!-- Question 30 --
<div class="mb-3">
  <label for="question30" class="form-label">Question 30:</label><br>
 
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question30" id="question30A" value="A">
      <label class="form-check-label" for="question30A">
        A. I try not to hurt the other person's feelings.      </label>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="radio" name="question30" id="question30B" value="B">
      <label class="form-check-label" for="question30B">
        B. I always share the problem with the other person so that we can work it out.      </label>
  </div>
</div> -->









                        <div class="invalid-feedback">Please select one</div>
                      </div><button class="btn btn-primary" type="submit" name="post_question">Submit form</button>
                    </form>
                    
              
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Form</h4>
                    <p class="card-description">Horizontal form layout</p>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password" />
                        </div>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description">Basic form elements</p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" />
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" />
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4"
                        ></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input size</h4>
                    <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                    <div class="form-group">
                      <label>Large input</label>
                      <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" />
                    </div>
                    <div class="form-group">
                      <label>Default input</label>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" />
                    </div>
                    <div class="form-group">
                      <label>Small input</label>
                      <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select size</h4>
                    <p class="card-description"> Add classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>. </p>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Large select</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Default select</label>
                      <select class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Small select</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic input groups</h4>
                    <p class="card-description">Basic bootstrap input groups</p>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <div class="input-group-prepend">
                          <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="button"> Search </button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Contact</a>
                            <a class="dropdown-item" href="#">Helpdesk</a>
                            <a class="dropdown-item" href="#">Chat with us</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find in facebook" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-facebook" type="button">
                            <i class="mdi mdi-facebook"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Checkbox Controls</h4>
                    <p class="card-description"> Checkbox and radio controls (default appearance is in primary color) </p>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" /> Default </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Checked </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" disabled /> Disabled </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" disabled checked /> Disabled checked </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="" /> Default </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked /> Selected </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled /> Disabled </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled checked /> Selected and disabled </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    <p class="card-description"> Add class <code>.form-check-{color}</code> for checkbox and radio controls in theme colors </p>
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Primary </label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Success </label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Info </label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Danger </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" checked /> Warning </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio1" id="ExampleRadio1" checked /> Primary </label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked /> Success </label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio3" id="ExampleRadio3" checked /> Info </label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio4" id="ExampleRadio4" checked /> Danger </label>
                            </div>
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="ExampleRadio5" id="ExampleRadio5" checked /> Warning </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inline forms</h4>
                    <p class="card-description"> Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row </p>
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe" />
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" />
                      </div>
                      <div class="form-check mx-sm-2">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" checked /> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary mb-2"> Submit </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Horizontal Two column</h4>
                    <form class="form-sample">
                      <p class="card-description">Personal info</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked /> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2" /> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">Address</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select 2</h4>
                    <div class="form-group">
                      <label>Single select box using select 2</label>
                      <select class="js-example-basic-single" style="width: 100%;">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Multiple select using select 2</label>
                      <select class="js-example-basic-multiple" multiple="multiple" style="width: 100%;">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Typeahead</h4>
                    <p class="card-description">A simple suggestion engine</p>
                    <div class="form-group row">
                      <div class="col">
                        <label>Basic</label>
                        <div id="the-basics">
                          <input class="typeahead" type="text" placeholder="States of USA" />
                        </div>
                      </div>
                      <div class="col">
                        <label>Bloodhound</label>
                        <div id="bloodhound">
                          <input class="typeahead" type="text" placeholder="States of USA" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Waltergates Ghana Limited  from  <a href="https://www.wgghana.com/" target="_blank">WGGHANA</a></span>
            <!-- <br>  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  </span> -->
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <script src="template/assets/js/choices.min.js"></script>

  </body>
</html>