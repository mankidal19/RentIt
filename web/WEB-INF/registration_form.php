<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="rentit_css.css">
        <script type="text/javascript" src="formValidation.js"></script>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">RentIt</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link">More</a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-info dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-1">
                      <li class="p-3">
                            <form class="form" role="form" method="POST" action="../php/check_login.php" onsubmit="return validateLogin();">
                                <div class="form-group">
                                    <input id="emailInput" name="emailInput" placeholder="Email" class="form-control form-control-sm" type="text">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" name='passwordInput' placeholder="Password" class="form-control form-control-sm" type="password">
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="usertype" value="RentalMaster" checked>Rental Master<br>
                                    <input type="radio" name="usertype" value="Customer"> Customer<br>
                                    <input type="radio" name="usertype" value="Admin"> Admin
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-xs-center">
                                    <small><a href="#">Forgot password?</a></small>
                                    <small><a href="#">Register Now</a></small>
                                </div>
                                
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
        
        <div class="jumbotron text-center" >
            <h1>Welcome to RentIt Registration Form!</h1>
            <p>Let's join our growing community!</p>
            
            I want to:
            <select id="usertype" onChange="handleSelection(value);" class='form-control'>
                <option selected>Please select one </option>
                <option value="div1">Rent a car </option>
                <option value="div2">Put my car on rent </option>
            </select>
            
        </div>
        <div class='container-fluid' style="background-color:#66ccff;">
            
            <form name='customer' id='div1' action='../php/insertUser.php' method='POST' class="hide" onsubmit="return validateRegisterUser();">
                <h2>Register as Customer</h2>
                <h3>User Information</h3>
               
                
                <div class='form-group'>
                <p>
                     <label for='EMail' style='color:red;'>* E-mail:</label>
                     <input type="text" id="EMail_div1" name="EMail_div1" class='form-control' placeholder="johndoe@mail.com" required autofocus/>
                </p>
                </div>
                
                
                
                <div class='form-group'>
                <p>
                    <label for='gender' style='color:red;'>* Gender:</label>
                    <input type="radio" name="gender_div1" id='gender_div1' value="Male" class='form-control' default>Male<br>
                    <input type="radio" name="gender_div1" id='gender_div1' value="Female" class='form-control'>Female<br>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='birthDate' style='color:red;'>* Date of Birth:</label>
                     <input type="date" id="birthDate_div1" name="birthDate_div1" class='form-control' required autofocus/>
                </p>
                </div>
                
                
                <div class='form-group'>
                <p>
                     <label for='Phone'>Contact Number:</label>
                     <input type="text" id="Phone_div1" name="Phone_div1" class='form-control' placeholder="0123456789" required autofocus/>
                </p>
                </div>
                
                <h3>Security Verification</h3>
                <div class='form-group'>
                <p>
                     <label for='password'>Password</label>
                     <input type="password" id="password_div1" name="password_div1" class='form-control' required autofocus onkeyup='check();'/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='confirm_password'>Re-enter Password</label>
                     <input type="password" id="confirm_password_div1" name="confirm_password_div1" class='form-control' required autofocus onkeyup='check();'/>
                     <label id="message_div1"></label>
                </p>
                </div>
                
                <!--wants to add captcha features here-->
                
                <br><br><div class='checkbox'>
                    <input type='checkbox' name='agree' value='yes' checked class='form-control'><center>I agree to the terms of service.</center>
                <br><br></div>
                <center><button type="submit" id='registerButton_div1' class="btn btn-default">Register</button></center>
            </form>
           
             <form name='rentalMaster' id='div2' action='../php/insertRentalMaster' method='POST' class="hide" onsubmit="return validateRegisterRentalMaster();">
                 
                <h2>Register as Rental Master</h2>
                <h3>Company Information</h3>
                <div class='form-group'>
                <p>
                     <label for='companyName' style='color:red;'>* Company Name:</label>
                     <input type="text" id="companyName_div2" name="companyName_div2" class='form-control' placeholder="Car Rental SDN BHD" required autofocus/>
                </p>
                </div>
                
                
                <div class='form-group'>
                <p>
                     <label for='establishDate' style='color:red;'>* Date of Establishment:</label>
                     <input type="date" id="establishDate_div2" name="establishDate_div2" class='form-control' required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='address1' style='color:red;'>Address (line 1):</label>
                     <input type="text" id="address1_div2" name="address1_div2" class='form-control' placeholder="123, Street ABC" required autofocus/>
                     
                     <label for='address2'>Address (line 2):</label>
                     <input type="text" id="address2_div2" name="address2_div2" class='form-control' placeholder="off Petaling Street"/>
                     
                     <label for='postcode' style='color:red;'>* Postcode</label>
                     <input type="text" id="postcode_div2" name="postcode_div2" class='form-control' placeholder="08100" required autofocus/>
                     
                     <input type="hidden" name="country_div2" id="countryId_div2" value="MY"/>
                     <label for='state' style='color:red;'>* State</label>
                       <select name="state" class="states order-alpha form-control" id="stateId" required autofocus>
                        <option value="">Select State</option>
                       </select>
                     
                     <label for='city' style='color:red;'>* City</label>
                       <select name="city_div2" class="cities order-alpha form-control" id="cityId_div2" required autofocus>
                         <option value="">Select City</option>
                    </select>
                    
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='EMail' style='color:red;'>* Company E-mail:</label>
                     <input type="text" id="EMail_div2" name="EMail_div2" class='form-control' placeholder="rentacar@mail.com" required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='Phone' style='color:red;'>* Company Contact Number:</label>
                     <input type="text" id="Phone_div2" name="Phone_div2" class='form-control' placeholder="0123456789" required autofocus/>
                </p>
                </div>
                
                <h3>Person in-Charge Information</h3>
                <div class='form-group'>
                <p>
                     <label for='title' style='color:red;'>* Title:</label>
                     <select id="title_div2" name="title_div2" class='form-control'>
                        <option selected>Please select one </option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Miss">Miss</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Sir">Sir</option>
                        <option value="Madam">Madam</option>
                        <option value="Dr">Dr</option>
                        <option value="Dato">Dato</option>
                        <option value="Datuk">Datuk</option>
                        <option value="Datin">Datin</option>
                        <option value="Professor">Professor</option>
                    </select>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='firstName' style='color:red;'>* First Name:</label>
                     <input type="text" id="firstName_div2" name="firstName_div2" class='form-control' placeholder="John" required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='lastName' style='color:red;'>* Last Name:</label>
                     <input type="text" id="lastName_div2" name="lastName_div2" class='form-control' placeholder="Doe" required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                    <label for='gender' style='color:red;'>* Gender:</label>
                    <input type="radio" name="gender_div2" id='gender_div2' value="Male" class='form-control' checked>Male<br>
                    <input type="radio" name="gender_div2" id='gender_div2' value="Female" class='form-control'>Female<br>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='position' style='color:red;'>* Position:</label>
                     <input type="text" id="position_div2" name="position_div2" class='form-control' placeholder="Marketing Officer" required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='EMail' style='color:red;'>* E-mail:</label>
                     <input type="text" id="privateEMail_div2" name="privateEMail_div2" class='form-control' placeholder="johndoe@mail.com" required autofocus/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='Phone'>Contact Number:</label>
                     <input type="text" id="privatePhone_div2" name="privatePhone_div2" class='form-control' placeholder="0123456789" required autofocus/>
                </p>
                </div>
                
                <h3>Security Verification</h3>
                <div class='form-group'>
                <p>
                     <label for='password'>Password</label>
                     <input type="password" id="password_div2" name="password_div2" class='form-control' required autofocus onkeyup='check();'/>
                </p>
                </div>
                
                <div class='form-group'>
                <p>
                     <label for='confirm_password'>Re-enter Password</label>
                     <input type="password" id="confirm_password_div2" name="confirm_password_div2" class='form-control' required autofocus onkeyup='check();'/>
                     <label id="message_div2"></label>
                </p>
                </div>
                
                <!--wants to add captcha features here-->
                
                <br><br><div class='checkbox'>
                    <input type='checkbox' name='agree' value='yes' checked class='form-control'><center>I agree to the terms of service.</center>
                <br><br></div>
                <center><button type="submit" id='registerButton_div2' class="btn btn-default">Register</button></center>
            </form>
           
            
           <!--<script type="text/javascript">
                var frmvalidator  = new Validator("surveyresults");
                frmvalidator.addValidation("Name","req","Please enter your Full Name");
                 
                frmvalidator.addValidation("EMail","maxlen=50");
                frmvalidator.addValidation("EMail","req","Please enter your E-mail Address");
                frmvalidator.addValidation("EMail","email");
                
                frmvalidator.addValidation("Phone","maxlen=50");
                frmvalidator.addValidation("Phone","numeric");
                
                frmvalidator.addValidation("FavMusicDecade","req","Please choose favorite music decade");

            
            </script>
           -->
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <script type="text/javascript" src="statecity.js"></script>
    </body>
</html>
