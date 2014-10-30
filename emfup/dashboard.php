<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php' ?>

</head>
<body data-menu-position="closed">

<?php include 'template/header.php'; ?>

<div id="sidebar">
    <?php include 'template/sidebar.php' ?>
</div>

<div id="content">
<div id="content-header">
    <h1>Dashboard</h1>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Lalmohan Flood</h5><div class="buttons"><a href="#" class="btn"><i class="icon-refresh"></i> <span class="text">Update stats</span></a></div></div>
                    <div class="widget-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <ul class="site-stats">
                                    <li><div class="cc"><i class="icon-user"></i> <strong>1433</strong> <small>Total Houeshold Interview</small></div></li>
                                    <li><div class="cc"><i class="icon-arrow-right"></i> <strong>260</strong> <small>Dummy</small></div></li>
                                    <li><div class="cc"><i class="icon-usd"></i> <strong>25900</strong> <small>Dummy</small></div></li>
                                    <li><div class="cc"><i class="icon-tag"></i> <strong>8650</strong> <small>Total Dummy</small></div></li>
                                    <li><div class="cc"><i class="icon-repeat"></i> <strong>29</strong> <small>Dummy Data</small></div></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="widget-box">
                                    <div class="widget-title">
                                        <span class="icon"><i class="icon-repeat"></i></span>
                                        <h5>Recent Activity</h5>
                                    </div>
                                    <div class="widget-content nopadding">
                                        <ul class="activity-list">
                                            <li><a href="#">
                                                <i class="icon-user"></i>
                                                <strong>Admin</strong> added <strong>1 user</strong> <span>2 hours ago</span>
                                            </a></li>
                                            <li><a href="#">
                                                <i class="icon-file"></i>
                                                <strong>Caroline Trin</strong> write a <strong>blog post</strong> <span>Yesterday</span>
                                            </a></li>
                                            <li><a href="#">
                                                <i class="icon-envelope"></i>
                                                <strong>John Doe</strong> sent a <strong>message</strong> <span>2 days ago</span>
                                            </a></li>
                                            <li><a href="#">
                                                <i class="icon-picture"></i>
                                                <strong>Matt Armon</strong> updated <strong>profile photo</strong> <span>2 days ago</span>
                                            </a></li>
                                            <li><a href="#">
                                                <i class="icon-user"></i>
                                                <strong>Admin</strong> bans <strong>3 users</strong> <span>week ago</span>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



</div>

<?php include 'template/footer.php' ?>

</div>

</body>
</html>