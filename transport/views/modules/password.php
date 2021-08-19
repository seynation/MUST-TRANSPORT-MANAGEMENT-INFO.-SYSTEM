
    <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="home">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Users</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Change Password</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                    <form method="POST">
                                        <div class="basic-login-form-ad">
                                            <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Username</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="username" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                            

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">New Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" class="form-control" name="password" required="" / required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                        

                                        </div>
                                    </div>
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">CHANGE</button>
                                    </div>
                                      <?php
                                     $useradd = new usersmanagectrl();
                                     $useradd ->usersmanagectrlpassword();
                                        ?>  
                                    </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
