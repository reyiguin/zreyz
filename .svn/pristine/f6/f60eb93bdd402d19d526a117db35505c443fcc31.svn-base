@include('app.frontend._tpl.header')  

<div class="container">
          <div class="row">
            <div class="col-sm-12" id="signup-view">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                    <div align = "center">
                      <!-- <h3 class = "h3-custom"><b>Register Now to <img src = "/assets/img/logo.png"/></b></h3> -->
                      <h4>Join us now and get started growing your business online!</h4>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <form  onsubmit="return false;" id="registrationForm" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" id="signUpUsername" class="form-control" name="username" placeholder="Username"maxlength = "20"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input type="text" id="signUpFullName" class="form-control" name="fullname" placeholder="Full Name" maxlength = "40"/>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-12 input-daterange" id="datepicker" class = "datepicker">
                            <input type="text" class="form-control birthdate" placeholder="Birthday" id="birthdate" name = "birthdate">
                          </div>
                        </div>
                        <!--
                        <div class="row form-group">
                          <div class="col-sm-4">
                            <select id="signUpMonth" name="month" value="" class="input-md combosize form-control">
                              <option value="">Select Month</option>
                              <option value="01">January</option>
                              <option value="02">February</option>
                              <option value="03">March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>
                          </div>
                           <div class="col-sm-4">
                              <select id="signUpDay" name="day" value="" class="input-md combosize form-control">
                                <option value="">Select Day</option>
                                <% for(i = 01; i <= 31; i++) { %>
                                  <option value="<%= i %>"><%= i %></option>
                                <% } %>
                              </select>
                          </div>
                          <div class="col-sm-4">
                              <select id="signUpYear" name="year" value="" class="input-md combosize form-control">
                                <option value="">Select Year</option>
                                <% for(i = 1905; i <= 2016; i++) { %>
                                  <option value="<%= i %>"><%= i %></option>
                                <% } %>
                              </select>
                          </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input id="emailSignUp" type="text" class="form-control" name="email" placeholder="Email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input id="passwordSignUp" type="password" class="form-control" name="password" placeholder="Password"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <input id="contactSignUp" type="text" class="form-control" name="phoneNumber" placeholder="Contact Number"maxlength = "13"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea id="addressSignUp" type="text" class="form-control" name="address" placeholder="Address"></textarea>
                            </div>
                        </div>

                          <button id="btnSignUp" class="btn btn-ipostmo-green btn-block">Sign up</button>
                          <p>Already have an account? <a href = "/login/">Login </a>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <hr class="visible-xs">
                      <div class="vertical-border">
                        <div class="btn-facebook">
                          <button type = "button" class = "btn btn-primary btn-block hidden-md hidden-xs" id = "btnSignupFbMobile"><i class="fa fa-facebook"></i> Sign up with Facebook</button>
                          <p class="text-center">We will never post anything without your permission</p>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('app.frontend._tpl.footer') 
