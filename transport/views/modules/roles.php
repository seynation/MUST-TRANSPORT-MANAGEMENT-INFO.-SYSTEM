<?php if ($_SESSION["role"] == "System Adminstrator" || "Transport Officer") {
                                            $item = null;
                                            $value = null;
                                            $departs = usersmanagectrl::usersmanagectrlshow($item,$value); 
                                        }else{
                                            $item = null;
                                            $value = null;
                                            $departs = usersmanagectrl::deprtusersmanagectrlshow($item,$value);