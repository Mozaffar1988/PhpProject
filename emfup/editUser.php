<?php
    require_once'db.php';
    $id =   $_GET['id'];
    $sql = "SELECT * FROM user WHERE id =$id ";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
?>
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
				<h1>Edit User Information</h1>

			</div>
            <form class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>
								</span>
                                <h5>Update your Information</h5>
                            </div>

                            <div class="widget-content nopadding">
                                <div class="form-group">
                                    <label class="control-label">User Rule :</label>
                                    <div class="controls">
                                        <select name="user_role" id="user_role">
                                            <option>Admin</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Section :</label>
                                    <div class="controls">
                                        <select name="section_id" id="section_id">
                                            <?php
                                            $sql1 = "SELECT * FROM section";
                                            $result1 = mysql_query($sql1);

                                            while($row1 = mysql_fetch_array($result1)){
                                                ?>
                                                <option><?php echo $row1['section_name']; ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Username :</label>
                                    <div class="controls">
                                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $row['id']; ?>">
                                        <input class="form-control input-sm" type="text" name="user_name" id="user_name" value="<?php echo $row['user_name']; ?>" required  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Password :</label>
                                    <div class="controls">
                                        <input class="form-control input-sm" type="password" name="password" id="password"  required >
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
                    var user_id = $("#user_id").val;
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
                        url: "action/editUserAc.php?id="+user_id,
                        data:"user_role="+user_role+"&section_id="+section_id+"&user_name="+user_name+"&password="+password,
                        cache: false,
                        success: function(html){
                            alertify.success(html);
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
                });
            });


        </script>
    </body>
    </html>