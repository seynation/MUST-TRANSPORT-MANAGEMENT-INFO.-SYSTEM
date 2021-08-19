<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>MUST- TRANSPORT INFORMATION MANAGEMENT SYSTEM</h3>
				
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img class="main-logo" src="views/img/logo/logo1.png" alt=""  />
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                         
                        <form id="loginForm" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required=""  name="username"  class="form-control">
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required=""  name="password"  class="form-control">
                               
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                            
                             <?php
                            $useradd = new usersmanagectrl();
                            $useradd ->UserLoginctrl();
                              ?>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2021. All rights reserved. <br><a href="">Jonathan Mugisha & Joel Mapamba</a></p>
			</div>
		</div>   
    </div>