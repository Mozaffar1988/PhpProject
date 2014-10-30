<?php include 'db.php'; ?>
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
				<h1>Add User</h1>

			</div>
            <form class="form-horizontal" method="post" action="action/addUserAc.php" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>
								</span>
                                <h5>Input User Information</h5>
                            </div>

                            <div class="widget-content nopadding">
                                <div class="form-group">
                                        <label class="control-label">User Rule :</label>
                                    <div class="controls">
                                        <select name="user_role" id="user_role">
                                            <option>User</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
				                </div>

                                <div class="form-group">
                                    <label class="control-label">Section :</label>
                                    <div class="controls">
                                        <select name="section_id" id="section_id">
                                            <?php
                                                $sql = "SELECT * FROM section";
                                                $result = mysql_query($sql);

                                                while($row = mysql_fetch_array($result)){
                                            ?>
                                            <option><?php echo $row['section_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="control-label">Username :</label>
                                    <div class="controls">
                                        <input class="form-control input-sm" type="text" name="user_name" id="user_name" required>
                                    </div>
				                </div>

                                <div class="form-group">
                                    <label class="control-label">Password :</label>
                                    <div class="controls">
                                        <input class="form-control input-sm" type="password" name="password" id="password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Re-password :</label>
                                    <div class="controls">
                                        <input class="form-control input-sm" type="password" name="re_password" id="re_password" required>
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions">
                                <input value="Save" id="section_entry" class="btn btn-primary" type="button" name="save">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'template/footer.php' ?>

</div>
        <script>
            $(document).ready(function() {
                $("#section_entry").click(function(){
                    var user_role = $("#user_role").val();
                    var section_id = $("#section_id").val();
                    var user_name = $("#user_name").val();
                    var password = $("#password").val();
                    var re_password = $("#re_password").val();

                    if(user_role==""){
                        customAlert("User roll Name Missing");
                        return false;
                    }

                    if(section_id==""){
                        customAlert("Section Name Missing");
                        return false;
                    }

                    if(user_name==""){
                        customAlert("User Name Missing");
                        return false;
                    }

                    if(password==""){
                        customAlert("Password Missing");
                        return false;
                    }

                    if(re_password==""){
                        customAlert("Re-Password Missing");
                        return false;
                    }

                    if(re_password != password){
                        customAlert("Password not Match");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "action/addUserAc.php",
                        data:"user_role="+user_role+"&section_id="+section_id+"&user_name="+user_name+"&password="+password,
                        cache: false,
                        success: function(html){
                            alertify.success(html);

                            $("#user_role").val("");
                            $("#section_id").val("");
                            $("#user_name").val("");
                            $("#password").val("");
                            $("#re_password").val("");
                        }
                    });

                    function reset () {
                        $("#toggleCSS").attr("href", "css/alertify.default.css");
                        alertify.set({
                            labels : {
                                ok     : "OK",
                                cancel : "Cancel"
                            },
                            delay : 5000,
                            buttonReverse : false,
                            buttonFocus   : "ok"
                        });
                    }

                    function customAlert(val) {
                        reset();
                        alertify.alert(val);
                        return false;
                    }
                });
            });
        </script>
    </body>
    </html>