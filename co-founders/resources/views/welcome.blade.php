<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Co Founders</title>

        <head>
            <!-- Basic Page Needs -->
            <meta charset="UTF-8">
            <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
            <title>One Admin</title>

            <meta name="author" content="themsflat.com">

            <!-- Mobile Specific Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- Boostrap style -->
            <link rel="stylesheet" type="text/css" href="{{asset('resources/views/oneadmin/stylesheets/bootstrap.min.css')}}">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('resources/views/oneadmin/stylesheets/bootstrap4-alpha3.min.css')}}">

            <!-- FONTS-->
            <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">

            <!-- Theme style -->
            <link rel="stylesheet" type="text/css" href="{{asset('resources/views/oneadmin/stylesheets/style.css')}}">

            <!-- Calendar -->
            <link href="{{asset('resources/views/oneadmin/stylesheets/fullcalendar.min.css')}}" rel='stylesheet' />
            <link href="{{asset('resources/views/oneadmin/stylesheets/fullcalendar.print.min.css')}}" rel='stylesheet' media='print' />

            <!-- Responsive -->
            <link rel="stylesheet" type="text/css" href="{{asset('resources/views/oneadmin/stylesheets/responsive.css')}}">

            <!-- Favicon -->
            <link href="{{asset('resources/views/oneadmin/images/icon/favicon.png')}}" rel="shortcut icon">
        </head>
    <body>
    <header id="header" class="header fixed">
        <div class="navbar-top">
            <div class="curren-menu info-left">
                <div class="logo">
                    <a href="#" title="">
                        <img src="{{asset('resources/views/oneadmin/images/logo.png')}}" alt="One Admin">
                    </a>
                </div><!-- /.logo -->
                <div class="top-button">
                    <span></span>
                </div><!-- /.top-button -->
            </div><!-- /.curren-menu -->
            <ul class="info-right">
                <li>
                    <a href="#" title="">
                        {{isset($client)?'Welcome '.$client->username:'Please Log In'}}
                    </a>
                </li>
                <li>
                    <button id="bntSL" type="button" class="btn btn-primary">{{isset($client)?"Sign Out":"Log In"}}</button>
                </li>
                <li></li>
            </ul><!-- /.info-right -->
            <div class="clearfix"></div>
        </div>	<!-- /.navbar-top -->
    </header><!-- /header <-->

    <section class="vertical-navigation left">
        <div class="user-profile">
            <div class="user-img">
                <a href="#" title="">
                    <div class="img">
                        <img src="{{asset('resources/views/oneadmin/images/avatar/avatar-dashboard.png')}}" alt="">
                    </div>
                    <div class="status-color blue heartbit style1"></div>
                </a>
            </div>
            <ul class="user-options">
                <li class="name"><a href="#" title="">STUARD ALEX</a></li>
                <li class="options">ADMINISTRATOR</li>
            </ul>
        </div>
        <ul class="sidebar-nav">
            <li class="dashboard waves-effect waves-teal">
                <div class="img-nav">
                    <img src="{{asset('resources/views/oneadmin/images/icon/message.png')}}" alt="">
                    <span>3</span>
                </div>
                <span>MESSAGE</span>
            </li>
        </ul>
    </section><!-- /.vertical-navigation -->

    <main>
        <section id="dashboard">
            <div class="rows">
                <div class="box box-inbox right" style="width:100%;">
                    <div class="box-header with-border">
                        <div class="box-title">
                            <h3>INBOX</h3>
                            <span>47</span>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.box-header -->
                    <div class="box-content">
                        <ul class="inbox-list">
                            <li class="waves-effect">
                                <a href="#" title="">
                                    <div class="left">
                                        <img src="{{asset('resources/views/oneadmin/images/avatar/inbox-01.png')}}" alt="">
                                        <div class="info">
                                            <p class="name">John Alex</p>
                                            <p>Hey! How are you?Hey! How are you?Hey! How are you?Hey! How are you?Hey! How are you?Hey! How are you?Hey! How are you?</p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        12:20 PM
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li class="waves-effect">
                                <a href="#" title="">
                                    <div class="left">
                                        <img src="{{asset('resources/views/oneadmin/images/avatar/inbox-02.png')}}" alt="">
                                        <div class="info">
                                            <p class="name">John Alex</p>
                                            <p>Hey! How are you?</p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        12:20 PM
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li class="waves-effect">
                                <a href="#" title="">
                                    <div class="left">
                                        <img src="{{asset('resources/views/oneadmin/images/avatar/inbox-03.png')}}" alt="">
                                        <div class="info">
                                            <p class="name">John Alex</p>
                                            <p>Hey! How are you?</p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        12:20 PM
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li class="waves-effect">
                                <a href="#" title="">
                                    <div class="left">
                                        <img src="{{asset('resources/views/oneadmin/images/avatar/inbox-04.png')}}" alt="">
                                        <div class="info">
                                            <p class="name">John Alex</p>
                                            <p>Hey! How are you?</p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        12:20 PM
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                        </ul><!-- /.inbox-list -->
                    </div><!-- /.box-content -->
                </div><!-- /.box box-inbox -->
                <div class="clearfix"></div>
            </div><!-- /.rows -->
        </section><!-- /#dashboard -->
    </main><!-- /main -->
    <section class="member-status right">
        <div class="sidebar-member">
            <ul class="member-tab">
                <li>
                    <i class="fa fa-users" aria-hidden="true"></i>
                </li>
            </ul><!-- /.member-tab -->
            <div class="content-tab">
                <div class="scroll content">
                    <ul class="member-list online">
                        <li class="member-header">OTHER APPS</li>
                        <li>
                            <a href="#" title="">
                                <div class="avatar">
                                    <img src="{{asset('resources/views/oneadmin/images/avatar/02.png')}}" alt="">
                                    <div class="status-color green heartbit"></div>
                                </div>
                                <div class="info-user">
                                    <p class="name">APP1</p>
                                    <p class="options">This is a good chat app.</p>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul><!-- /.member-list online -->
                </div><!-- /.content scroll -->
            </div><!-- /.cotnent-tab -->
        </div><!-- /.sidebar-member -->
    </section><!-- /.member-status -->
    <!-- jQuery 3 -->
    <script src="{{asset('resources/views/oneadmin/javascript/jquery.min.js')}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{asset('resources/views/oneadmin/javascript/tether.min.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/bootstrap4-alpha3.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('resources/views/oneadmin/javascript/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/smoothscroll.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/waypoints.min.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/jquery-countTo.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/waves.min.js')}}"></script>
    <script src="{{asset('resources/views/oneadmin/javascript/canvasjs.min.js')}}"></script>

    <script src="{{asset('resources/views/oneadmin/javascript/main.js')}}"></script>

    <script>
        $(function(){
            $("#bntSL").click(function () {
                var $client="{{isset($client)?$client->id:''}}";
                if($client==""){
                    window.location.href = "{{url('/login')}}";
                }else{
                    window.location.href = "{{url('/signout')}}";
                }
            });
        });
    </script>

    </body>
</html>