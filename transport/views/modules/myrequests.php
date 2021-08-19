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

        <div class="data-table-area mg-b-20">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Requests Made</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                                                      
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3"></div>
                                        
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                         <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="FullName" data-editable="true">Full Name</th>
                                                <th data-field="department" data-editable="true">Department</th>
                                                <th data-field="destination" data-editable="Destination">Role</th>
                                                                                 
                                                 <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="nature" data-editable="true">Nature</th>
                                                <th data-field="passengercount" data-editable="true">Passengers</th>
                                                <th data-field="vid" data-editable="true">FEEDBACK</th>
                                            </tr>
                                        </thead>
                                        <tbody>';

                                       <?php

                                            $item = null;
                                            $value = null;
                                            $departs = transportctrl::advtransportctrlshow($item,$value); 
                                            foreach ($departs as $key => $value) {

                                            $iem = "id";
                                            $alue = $value["vid"];
                                            $dprts = vehiclesmanagectrl::vehiclesmanagectrlshow($iem,$alue);

                                                $id = $value["id"];
                                                $vid = $value["vid"];

                                            echo '<tr>
                                                
                                                <td>'.($key+1).'</td>
                                                <td>'.$value["FullName"].'</td>
                                                <td>'.$value["department"].'</td>
                                                <td>'.$value["destination"].'</td>
                                                <td>'.$value["date"].'</td>
                                                <td>'.$value["nature"].'</td>
                                                <td>'.$value["passengercount"].'</td>';

                                                if ($value["vid"] == null) {
                                                    echo '<td>Pending...</td></td></tr>';
                                                }

                                                elseif ($value["vid"] != null) {
                                                    echo '<td>'.$dprts["plate"].'</td></td></tr>';
                                                }

                                               
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


