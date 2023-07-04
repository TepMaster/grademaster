<?php

$row = DB::query("SELECT data FROM logins WHERE id =%s ", $_SESSION['usr_id']);

$obj =json_decode($row[0]["data"],true);

$hdr = '<div class="comp-header" style="background-color: rgb(255, 64, 5)">

            <div style="box-sizing: border-box; position: relative; margin-left: auto; margin-right: auto; padding: 0px;" class="comp-header-content-log" >
                <div style="margin-left: 0px; margin-right: 0px; display: flex; flex-flow: row wrap; flex-grow: 0; flex-shrink: 0; align-items: normal; justify-content: flex-start;">
                    <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 16.6667%; flex: 0 0 16.6667%; max-width: 16.6667%; margin-left: 0%; right: auto; left: auto;">

                    </div>
                    <div style="box-sizing: border-box; min-height: 1px; position: relative; padding-left: 0px; padding-right: 0px; width: 83.3333%; flex: 0 0 83.3333%; max-width: 83.3333%; margin-left: 0%; right: auto; left: auto;">
                        <div class="header-content-right">
                            <div class="wrapper-school-info"></div>
                            <div class="comp-tooltip-menu tooltip-preferinte works-on-click">
                                <div class="more-actions">
                                    <div class="info-profile">
                                        <div class="comp-person-tag false person-tag-avatar ">
                                            <div class="comp-person-tag-share " role="button" tabindex="0">
                                                <div class=" ">
                              <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(0, 0, 0); --darkreader-inline-fill: #e8e6e3;" data-darkreader-inline-fill=""><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                              </span>
                                                </div>
                                                <p class="info-left-side">
                                                    <span> </span>
                                                    <span class="small">

                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="info-profile-right">
                                            <p>'.$obj['n'].'</p>
                                            <p>'.$obj['r'].'</p>
                                            
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                
                                <div>
                                    <div class="submenu light  false" style="top: 40px; margin-top: unset;">
                                       
                                    </div>
                                </div>
                                 <a href="/logout" style="color: black;">Iesire</a>
                            </div>
                        </div>
                    </div>
                </div>
                <span style="display: table; clear: both;"></span>
            </div>
        </div>';