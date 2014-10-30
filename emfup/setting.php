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
		<h1>Settings</h1>
				
	</div>
			
	<div class="row">
		<div class="col-xs-12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon-pencil"></i>
					</span>
					<h5>User Setting</h5>
				</div>
	<div class="widget-content nopadding">
		<form id="form-wizard" class="form-horizontal" method="post">
			<div id="form-wizard-1" class="step">

				<div class="form-group">
					<label class="control-label">User name</label>
						<div class="controls">
                                                    <input class="form-control input-sm" id="user_name" type="text" name="user_name" />
						</div>
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
						<div class="controls">
							<input class="form-control input-sm" id="password" type="password" name="password" />
						</div>
				</div>
                                                                            
                                <div class="form-group">
                                    <label class="control-label">Confirm Password</label>
					<div class="controls">
                                        	<input class="form-control input-sm" id="confirm_password" type="password" name="Confirm Password" />
					</div>
				</div>

							



										
			</div>
				<div class="form-actions">
                                	<input id="next" class="btn btn-primary" type="submit" value="Update" name="update"/>
				</div>
				<div id="submitted"></div>
                        </form>
                    </div>
                </div>
            </div>
	</div>
    </div>

<?php include 'template/footer.php' ?>
	</body>
</html>
