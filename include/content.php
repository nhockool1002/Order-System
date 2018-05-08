<?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                            switch($page){
                                case "themloaibenh" :
                                    require_once("include/content/content-addbenh.php");
                                    break;
                                case "thembacsi" :
                                    require_once("include/content/content-addbacsi.php");
                                    break;
                                case "themnguonden" :
                                    require_once("include/content/content-addnguonden.php");
                                    break;
                                case "themphuongthuc" :
                                    require_once("include/content/content-addphuongthuc.php");
                                    break;
                                default :
                                require_once("include/content/content-404.php");
                            }
                        }
                        else require_once("include/content/content-home.php");
                        ?>


