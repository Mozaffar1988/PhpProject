<div id="header">
    <h1><a href="./dashboard.php"><img src="img/logo_wfp.gif"></a> ADMIN</h1>
    <a id="menu-trigger" href="#"><i class="icon-list"></i></a>
</div>
<?php
include 'action/lock.php';
?>
<div id="search">
    <input placeholder="Search here..." type="text"><button data-original-title="Search" type="submit" class="tip-right" title=""><i class="icon-search"></i></button>
</div>
<div id="user-nav">
    <ul style="width: auto; margin: 0px;" class="btn-group">
                <li class="btn"><a title="" href="setting.php"><i class="icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class="btn"><a title="" href="action/logoutAc.php"><i class="icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>