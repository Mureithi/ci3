<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--<meta http-equiv="refresh" content="30" />-->
    <title><?php echo $main_title; ?></title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/admin.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/jquery-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/formvalidation.io/dist/css/formValidation.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/css/jquery-ui.css" rel="stylesheet">


    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.0.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootbox.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-daterangepicker/jquery.daterangepicker.js"></script>

    <script src="<?php echo base_url() ?>assets/plugins/highcharts/highcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/highcharts/modules/no-data-to-display.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/highcharts/modules/exporting.js"></script>

</head>

<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
    <!--\\\\\\\ wrapper Start \\\\\\-->
    <div class="header_bar">
        <!--\\\\\\\ header Start \\\\\\-->
        <div class="brand">
            <!--\\\\\\\ brand Start \\\\\\-->
            <!--\\\\\\\ brand Start \\\\\\-->
            <div class="logo" style="display:block"><img src="<?php echo base_url() ?>assets/images/coat_of_arms.png"
                                                         width="30" height="30"/><span class="theme_color">&nbsp;&nbsp;NVIP</span>
                Chanjo
            </div>
            <div class="small_logo" style="display:none"><img
                    src="<?php echo base_url() ?>assets/images/coat_of_arms.png" width="50" height="47" alt="s-logo"/>
            </div>
        </div>
        <!--\\\\\\\ brand end \\\\\\-->
        <div class="header_top_bar">
            <!--\\\\\\\ header top bar start \\\\\\-->
            <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
            <a class="add_user"> <i class="fa fa-map-marker"></i> <span><?php echo $user_object['path']; ?></span> </a>
            <div class="top_left">
                <div class="top_left_menu">
                    <ul>

                    </ul>
                </div>
            </div>

            <div class="top_right_bar">
                <div class="top_right">
                    <div class="top_right_menu">
                        <ul>

                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span
                                        class="badge badge">8</span> </a>
                                <ul class="drop_down_task dropdown-menu" id="tasks">
                                    <div class="top_pointer"></div>

                                    <li> <span class="new" id="all"><a href="#" class="pull-right">View All</a> </span> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdown"> Notifications
                                    <span class="badge badge color_2" id="count"></span> </a>
                                <div class="dropdown-menu">
                                    <div class="top_pointer"></div>
                                    <div class="box"><a href="<?php echo site_url('inbox'); ?>"> <span
                                                class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span
                                                class="block_text">Inbox</span> </a></div>

                                    <div class="box"><a href="#"> <span class="block primery_6"> <i
                                                    class="fa fa-calendar-o"></i> </span> <span
                                                class="block_text">Calendar</span> </a></div>


                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user_admin dropdown">
                    <a href="javascript:void(0);" data-toggle="dropdown"><img
                            src="<?php echo base_url() ?>assets/images/user.jpg"/><span
                            class="user_adminname"><?php echo '<b> Hello ' . $user_object['user_fname'] . ' </b>'; ?></span>
                        <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <div class="top_pointer"></div>
                        <li><a href="<?php echo site_url('users/profile'); ?>"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <!--            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>-->
                        <!--            <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>-->
                        <li><a href="<?php echo site_url('users/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <!-- <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>-->

            </div>
        </div>
        <!--\\\\\\\ header top bar end \\\\\\-->
    </div>
    <!--\\\\\\\ header end \\\\\\-->
    <div class="inner">
        <!--\\\\\\\ inner start \\\\\\-->
        <div class="left_nav">

            <!--\\\\\\\left_nav start \\\\\\-->
            <div class="">
                &nbsp;
            </div>
            <div class="left_nav_slidebar">
                <ul>
                    <li class="left_nav_active theme_border"><a href="<?php echo site_url('dashboard'); ?>"><i
                                class="fa fa-home"></i> HOME </a></li>
                    <li>
                        <a href="javascript:void(0);"> <i class="fa fa-cubes"></i>MANAGE STOCK<span class="plus"><i
                                    class="fa fa-plus"></i></span></a>
                        <ul>
                            <li>
                                <a href="<?php echo site_url('stock/physical_count'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Stock Count</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('stock/adjust_stock'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Stock Adjustment</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('stock/list_inventory'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Stock Ledgers</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('stock/list_receive_stock'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Receive Stocks</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('stock/list_issue_stock'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Issue Stocks</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('order/list_orders'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Stock Requests</b> </a>
                            </li>
                            <!-- <li> <a href="<?php //echo site_url('stock/transfer_stock');?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Transfer Stocks</b> </a> </li> -->
                            <!--  <li> <a href="#" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Arrival Tracking</b> </a> </li> -->
                            <!-- <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <i class="fa fa-th"></i>COLD CHAIN<span class="plus"><i
                                    class="fa fa-plus"></i></span> </a>
                        <ul>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inventory</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Spare Parts
                                        Management</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Remote Temperature</b>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Equipment
                                        Management</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Gap Analysis</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Planning and
                                        Budgeting</b> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <i class="fa fa-bar-chart "></i>REPORTS<span class="plus"><i
                                    class="fa fa-plus"></i></span> </a>
                        <ul>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Forecasting</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Supply Need
                                        Analysis</b> </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b></b>Consumption
                                    Analysis </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Program Management</b>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("reports/stock_movement") ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Immunization
                                        &emsp;&emsp;&emsp;Performance</b> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <i class="fa fa-user-plus"></i>RESOURCE CENTER<span class="plus"><i
                                    class="fa fa-plus"></i></span> </a>
                        <ul>
                            <?php if ($user_object['user_level'] == '1') { ?>

                                <li>
                                    <a href="<?php echo site_url('uploads/'); ?>"> <span>&nbsp;</span> <i
                                            class="fa fa-circle"></i><b>Upload Documents</b> </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('uploads/list_files'); ?>"> <span>&nbsp;</span> <i
                                            class="fa fa-circle"></i><b>Download Documents</b> </a>
                                </li>

                            <?php } else { ?>
                                <li>
                                    <a href="<?php echo site_url('uploads/list_files'); ?>"> <span>&nbsp;</span> <i
                                            class="fa fa-circle"></i><b>Download Documents</b> </a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Online Training</b>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Policy &amp; Notices</b>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"> <i class="fa fa-gear"></i>CONFIGURATIONS<span class="plus"><i
                                    class="fa fa-plus"></i></span> </a>
                        <ul><?php if ($user_object['user_level'] == '1') { ?>
                                <li>
                                    <a href="<?php echo site_url('group/'); ?>"> <span>&nbsp;</span> <i
                                            class="fa fa-circle"></i> <b>Add Groups</b> </a>
                                </li>
                            <?php } else {
                            } ?>
                            <li>
                                <a href="<?php echo site_url('users/list_users'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i><b>Add Users</b> </a>
                            </li>
                            <?php if ($user_object['user_level'] == '1') { ?>
                                <li>
                                    <a href="<?php echo site_url('vaccines'); ?>"> <span>&nbsp;</span> <i
                                            class="fa fa-circle"></i> <b>Add Vaccines</b> </a>
                                </li>
                            <?php } else {
                            } ?>
                            <li>
                                <a href="<?php echo site_url('region/'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Add Regions</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('county/'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Add County</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('subcounty/'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Add Sub-County</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('store'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Add Store</b> </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('facility'); ?>"> <span>&nbsp;</span> <i
                                        class="fa fa-circle"></i> <b>Add Facilities</b> </a>
                            </li>
                            <!-- <li> <a href="<?php //echo site_url('fridge'); ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add Fridges</b> </a> </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="<?php echo base_url() ?>assets/images/coat_of_arms.png"
                                                           width="30" height="30"/><span class="theme_color">&nbsp;&nbsp;<b>NVIP
                                    Chanjo</b></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
                        <ul>
                            <li>
                                <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>ABOUT</b> </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!--\\\\\\\left_nav end \\\\\\-->

        <div class="contentpanel">
            <!--\\\\\\\ contentpanel start\\\\\\-->
            <div class="pull-left breadcrumb_admin clear_both">
                <div class="pull-left page_title theme_color">
                    <h1><?php echo $section ?></h1>
                    <h2 class=""><?php echo $subtitle ?></h2>
                </div>
                <div class="pull-right">
                    <?php echo $breadcrumb ?>
                </div>
            </div>

            <div class="container clear_both padding_fix">
                <!--\\\\\\\ container  start \\\\\\-->
                <div class="row">
                    <div class="col-md-12">
                        <!--<div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>-->
                        <div class="block-web">
                            <div class="header">
                                <h3 class="content-header text-info "><?php echo $page_header = (isset($page_header)) ? $page_header : $user_object['user_statiton']; ?></h3>
                            </div>
                            <div class="porlets-content">
                                <?php $this->load->view($module . '/' . $view_file); ?>
                            </div>
                            <!--/porlets-content-->
                        </div>
                        <!--/block-web-->
                    </div>
                    <!--/col-md-12-->
                </div>

            </div>
            <!--\\\\\\\ container  end \\\\\\-->
        </div>
        <!--\\\\\\\ content panel end \\\\\\-->
    </div>
    <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script>
    // function notifications() {
    //     url = "<?php echo site_url('notifications/get_notification_count');?>";
    //     $.ajax({
    //         url: url,
    //         cache: false,
    //         success: function (data) {
    //             $("#count").html(data);
    //         }
    //     });
    // }

    // function tasks() {
    //     url = "<?php echo site_url('notifications/task_count');?>";
    //     $.ajax({
    //         url: url,
    //         cache: false,
    //         success: function (data) {
                
    //             $(data).insertBefore("#all");
                
    //         }
    //     });
    // }


    // $(document).ready(function () {

    //     notifications(); 
    //     tasks(); 

    // });

    //Refresh auto_load() function after 10000 milliseconds
    // setInterval(notifications, 2000);
    // setInterval(tasks, 2000);
</script>

<script src="<?php echo base_url() ?>assets/js/common-script.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sparkline.js"></script>
<script src="<?php echo base_url() ?>assets/js/sparkline-chart.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.bootstrap.wizard.js"></script>

<script src="<?php echo base_url() ?>assets/js/graph.js"></script>
<script src="<?php echo base_url() ?>assets/js/edit-graph.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/kalendar/kalendar.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/validation/parsley.min.js"></script>


<script src="<?php echo base_url() ?>assets/plugins/knob/jquery.knob.min.js"></script>


<script src="<?php echo base_url() ?>assets/js/jPushMenu.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/side-chats.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/scroll/jquery.nanoscroller.js"></script>


<script src="<?php echo base_url() ?>assets/plugins/formvalidation.io/dist/js/formValidation.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/formvalidation.io/dist/js/framework/bootstrap.min.js"></script>
</body>

</html>