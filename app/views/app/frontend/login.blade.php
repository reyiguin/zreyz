@include('app.frontend._tpl.header')  
    <section class="login-view">
    	<div class="container">
        	<div class="row">
               <div class="col-sm-12">
               		<div class="panel panel-default">
                    	<div class="panel-body">
                    		<div class="row">
                    			<h4 class="text-center">Login your account and start selling with us</h4>
                    			
                    		
                    			<div class="col-md-6 col-sm-6">
                    				<form onsubmit="return false;" id="loginForm" class="form-horizontal" method="post">
                    					<div class="form-group">
                        					<div class="col-lg-12">
                        						<input type="text" class="form-control" name="username" id="emailLogin" placeholder="Username or Email"/>
                        					</div>
                        				</div>
		                        		<div class="form-group">
		                        			<div class="col-lg-12">
		                        				<input type="password" class="form-control" name="password" id="passwordLogin" placeholder="Your Password"/>
		                        			</div>
		                        		</div>
		                        		<hr>
                        					<button type = "submit" id="btnLogin" class="btn btn-ipostmo-green btn-block">Log In</button>
                        					<p href="#" style="margin-top: 5px;"> <a href='#' id = "btnforgotPassword" data-toggle="modal" data-target="#forgotPasswordModal"> Forgot Password? </a> </p>
                        					<p> Dont have an account? <a href='{{ URL::route('signup')}}'>Sign up </a> </p>
                        			</form>
                        		</div>
				                <div class="col-md-6 col-sm-6">
				                	<hr class="visible-xs">
				                		<div class="vertical-border">
				                			<div class="btn-facebook">
				                				<button class = "btn-primary-custom btn btn-primary btn-block hidden-xs" id = "btnfbLogin">
				                					<i class="fa fa-facebook"></i> Login with Facebook
				                				</button>
				                				<p class="text-center" style="margin-top: 5px;">We will never post anything without your permission</p>
				                			</div>
				                    		<br/>
				                    	</div>
				                </div>
                    		</div>

                    				<!-- FORGOT PASSWORD MODAL -->
                    				<div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    					<div class="modal-dialog" role="document">
                    						<div class="modal-content">
                    							<div class="modal-header">
                    								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    									<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                    							</div>
                    								<form onsubmit="return false;" id="forgotPasswordForm" class="form-horizontal" method="post">
                    									<div class = "col-md-1"></div>
                    									<div class="modal-body col-md-10">
                    										<div class="form-group">
                    											<input type = "text" class = "form-control" id = "txtForgotPass" name = "email" placeholder = "Input Email Address" required/>
                    										</div>
                    									</div>
                    									<div class = "col-md-1"></div>
                    									<div class="modal-footer">
                    										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    										<button type="submit" id="modalForgotPassBtn" data-dismiss="modal" class="btn btn-primary">Send</button>
                    									</div>
                    								</form>
                    						</div>
                    					</div>
                    				</div>
                    		</div>
                    	</div>
                    </div>
           		</div>
           	</div>
      	</section></br></br>
@include('app.frontend._tpl.footer')