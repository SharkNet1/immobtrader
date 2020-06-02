<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre }}</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <!-- Navbar -->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                 </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nom Agent</strong>
                                 </span> <span class="text-muted text-xs block">Détailes<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="agent">Profile</a></li>
                            <li><a href="agent">Contacts</a></li>
                            <li><a href="mail">boite mail</a></li>
                            <li class="divider"></li>
                            <li><a href="login" onclick="return confirm('Confirmez l\'action ?')";>Déconnexion</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        ImT
                    </div>
                </li>
                <li>
                    <a href="accueil"><i class="fa fa-cubes"></i> <span class="nav-label">Accueil</span></a>
                </li>
                <li>
                    <a href="bien"><i class="fa fa-diamond"></i> <span class="nav-label">Biens</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="bien">Nouveaux</a></li>
                        <li><a href="bien">list</a></li>
                        <li><a href="bien">Recherche</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-folder-open"></i> <span class="nav-label">Procedures</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="procedure">Nouvelle</a></li>
                        <li><a href="procedure">Encours</a></li>
                        <li><a href="procedure">Recherche</a></li>
                    </ul>
                </li>
                <li>
                    <a href="agent"><i class="fa fa-users"></i> <span class="nav-label">Agents</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="agent">Nouveaux</a></li>
                        <li><a href="agent">list</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fournisseur"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Fournisseurs</span>  </a>
                </li>
                <li>
                    <a href="tache"><i class="fa fa-list"></i> <span class="nav-label">Taches</span>  </a>
                </li>
                <li>
                    <a href="mail"><i class="fa fa-weixin" class="fa fa-envelope-o"></i> <span class="nav-label">Communication</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="mail">mail</a></li>
                        <li><a href="messagerie">messagerie</a></li>
                        <li><a href="note">Notes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="statistique"><i class="fa fa-pie-chart"></i> <span class="nav-label">Statistique</span>  </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div id="page-wrapper" class="gray-bg">
        <!-- Navbar -->
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.4/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Recherche..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"><b>ImmobTrader</b>.</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right">temps</small>
                                        <strong>EXPEDITEUR</strong><br>lib......<br>
                                        <small class="text-muted">date message  [00/00/0000]</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right">temps</small>
                                        <strong>EXPEDITEUR</strong><br>lib......<br>
                                        <small class="text-muted">date message  [00/00/0000]</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div>
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> Boite de Messagerie</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">2</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <span style="color: red"><i class="fa fa-close"></i>  Error</span>
                                        <span class="pull-right text-muted small">10 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <span style="color: yellow"><i class="fa fa-warning"></i>  Warning</span>
                                        <span class="pull-right text-muted small">3 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <span style="color: green"><i class="fa fa-unlock"></i>  Mise à jours</span>
                                        <span class="pull-right text-muted small">1 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>Consulté les alertes</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login" onclick="return confirm('Confirmez l\'action ?')";>
                            <i class="fa fa-sign-out"></i> Déconnexion
                        </a>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Content -->
        <div class="wrapper wrapper-content">
            @yield('content')
        </div>
        <!-- Footer -->
        <div class="footer">
            <div class="pull-right">
                <strong>ImT </strong>v1.
            </div>
            <div>
                <strong>Copyright &copy;</strong> ImmobTrader  2019-2020
            </div>
        </div>
    </div>
    <!-- right sicebar -->
    <div id="right-sidebar">
        <div class="sidebar-container">
            <ul class="nav nav-tabs navs-3">
                <li class="active"><a data-toggle="tab" href="#tab-1">
                        Notes
                    </a></li>
                <li><a data-toggle="tab" href="#tab-2">
                        Taches
                    </a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">
                        <i class="fa fa-gear"></i>
                    </a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h3> <i class="fa fa-comments-o"></i> Notes</h3>
                        <small><i class="fa fa-tim"></i> vous avez 2 nnotes.</small>
                    </div>
                    <div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a1.jpg">

                                    <div class="m-t-xs">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                </div>
                                <div class="media-body">

                                    There are many variations of passages of Lorem Ipsum available.
                                    <br>
                                    <small class="text-muted">Today 4:21 pm</small>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-message">
                            <a href="#">
                                <div class="pull-left text-center">
                                    <img alt="image" class="img-circle message-avatar" src="img/a2.jpg">
                                </div>
                                <div class="media-body">
                                    The point of using Lorem Ipsum is that it has a more-or-less normal.
                                    <br>
                                    <small class="text-muted">Yesterday 2:45 pm</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="sidebar-title">
                        <h3> <i class="fa fa-cube"></i> Liste des taches</h3>
                        <small><i class="fa fa-tim"></i> Taches en cours : 3</small>
                    </div>
                    <ul class="sidebar-list">
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Business valuation</h4>
                                It is a long established fact that a reader will be distracted.

                                <div class="small">Completion with: 22%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                </div>
                                <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Contract with Company </h4>
                                Many desktop publishing packages and web page editors.

                                <div class="small">Completion with: 48%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="small pull-right m-t-xs">9 hours ago</div>
                                <h4>Meeting</h4>
                                By the readable content of a page when looking at its layout.

                                <div class="small">Completion with: 14%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="sidebar-title">
                        <h3><i class="fa fa-gears"></i> Reglages</h3>
                        <small><i class="fa fa-tim"></i> A....</small>
                    </div>
                    <div class="setings-item">
                                <span>
                                    bloqué les notifications
                                </span>
                        <div class="switch">
                            <div class="onoffswitch">
                                <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                <label class="onoffswitch-label" for="example">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-content">
                        <h4>Reglages</h4>
                        <div class="small">
                            Reglage des ........
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Flot -->
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/jquery.flot.spline.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js"></script>
<script src="js/plugins/flot/jquery.flot.time.js"></script>
<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>
<script src="js/demo/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<!-- jQuery UI -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Jvectormap -->
<script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- EayPIE -->
<script src="js/plugins/easypiechart/jquery.easypiechart.js"></script>
<!-- Sparkline -->
<script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- Sparkline demo data  -->
<script src="js/demo/sparkline-demo.js"></script>
</body>
</html>