 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Department</span>
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

 <br>
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                	 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Department Lists</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-4">
                                            <button  type="submit" class="btn btn-success btn-block loginbtn" data-toggle="modal" data-target="#PrimaryModalalert">New Department</button>
                                        </div>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Name</th>
                                                <th data-field="email" data-editable="true">ShortForm</th>                                        
                                                <th data-field="price" data-editable="true">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $item = null;
                                        $value = null;
                                        $departs = departctrl::departctrlshow($item,$value); 
                                        foreach ($departs as $key => $value) {
                                         echo
                                                 '<tr>
                                                 <td>
                                                 '.($key+1).'</td>
                                                <td>'.$value["name"].'</td>
                                                <td>'.$value["shortform"].'</td>
                                                <td>
                                                <button type="button" class="btn btn-danger deletedepart" dpid="'.$value["id"].'">DEL</button>
                                                <button type="button" class="btn btn-warning editdepart" dprtid="'.$value["id"].'"  data-toggle="modal" data-target="#editdepartement">EDIT</button>
                                                </td>
                                                </tr>';
                                            }

                                        ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>Add New Department</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                         <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Department Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="departname" required="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Short Form</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control " name="shortform" required="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
           							 $useradd = new departctrl();
            						 $useradd ->departctrladd();
           								?>  
                                    </form>
                                </div>
                            </div>
                        </div>

                        

   
     <div id="editdepartement" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <h2>Edit Department Details</h2>
                                        <form method="POST">
                                        <div class="basic-login-form-ad">
                                         <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Department Name</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="editname" name="editname" required="" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Short Form</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" >
                                                                <input type="text" class="form-control " id="editshortform" name="editshortform" required="" />
                                                                <input type="hidden" name="editid" id="idi">
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">                                
                                        <button class="btn btn-danger"data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit">SAVE</button>
                                    </div>
                                      <?php
                                     $useradd = new departctrl();
                                     $useradd ->departctrledit();
                                        ?>  
                                    </form>
                                </div>
                            </div>
                        </div>

                         <?php
            $useradd = new departctrl();
            $useradd ->departctrldel();
            ?>  