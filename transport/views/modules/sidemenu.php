<!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home">
                    <br>
                    <H4>MUST - TIMS</H4>
                   <!--  <img class="main-logo" src="views/img/logo/logo.png" alt="" /> -->
                </a>
                <strong><a href="home"><img src="views/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <?php
                        if ($_SESSION["role"] == "System Adminstrator") {
                    echo ' <li>
                            <a title="Landing Page" href="manageusers" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">User Management</span></a>
                            </li>
                            <li>
                            <a title="Landing Page" href="departments" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Manage Departments</span></a>
                            </li>';
                        }

                        if ($_SESSION["role"] == "Head of Department") {
                           echo '
                            <li>
                            <a title="Landing Page" href="manageusers" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">User Management</span></a>
                            </li>
                           <li>
                            <a title="" class="has-arrow" href="requesttransport" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Request Transport</span></a>
                           
                        </li> 
                        <li>
                            <a title="" href="requestsmade" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Requests Made</span></a>
                            </li>

                        <li>
                            <a title="" href="myrequests" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">My Requests</span></a>
                            </li>
                        
                        ';
                        }

                       if ($_SESSION["role"] == "User") {
                          echo ' 
                          <li>
                            <a title="Landing Page" href="requesttransport" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Request Transport</span></a>
                            </li>
                           
                        <li>
                            <a title="" href="requestsmade" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Requests Made</span></a>
                            </li>
                        ';
                        } 
                        if ($_SESSION["role"] == "Transport Officer") {
                          echo '<li>
                            <a title="Landing Page" href="managevehicles" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Manage Vehicles</span></a>
                            </li>

                            <li>
                            <a title="" href="assignvehicles" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Assign Vehicles</span></a>
                            </li>'; 
                        }
                        ?>

                       
                                          
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- End Left menu area -->