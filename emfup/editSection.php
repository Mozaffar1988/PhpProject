
<?php include 'db.php'; 
    $id = $_GET['id'];
    $sql = "SELECT * FROM section WHERE id = $id";
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
				<h1>Edit Section</h1>

			</div>
                    <form class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							
			<div class="widget-content nopadding">
                <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>
								</span>
                    <h5>Section</h5>

                </div>


                <div class="form-group">
                                        <label class="control-label">Section Code :</label>
                                    <div class="controls">
                                        <input type="hidden" id="section_id" value="<?php echo $row['id']; ?>">
                                        <input class="form-control input-sm" type="text" name="section_code" id="section_code" style="width: 30%;" value="<?php echo $row['section_code']; ?>">
                                    </div>
			                </div>
                <div class="form-group">
                    <label class="control-label">Section name :</label>
                    <div class="controls">
                        <input class="form-control input-sm" type="text" name="section_name" id="section_name" style="width: 30%;" value="<?php echo $row['section_name']; ?>">
                    </div>
                </div>

            </div>
						</div>			
					</div>
				</div>

                <div class="form-actions">
                    <input value="Save" id="prev" class="btn btn-primary" type="submit" name="save">

                </div>
            </form>

        </div>

        <?php include 'template/footer.php' ?>

</div>

        <script>
            $(document).ready(function() {
                $("#section_entry").click(function(){
                    var section_id = $("#section_id").val();
                    var user_role = $("#user_role").val();
                    var section_name = $("#section_name").val();
                    var user_name = $("#user_name").val();
                    var password = $("#password").val();
                    var re_password = $("#re_password").val();

                    if(user_role==""){
                        customAlert("User roll Name Missing");
                        return false;
                    }

                    if(section_name==""){
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
                        url: "action/editUserAc.php?id="+section_id,
                        data:"user_role="+user_role+"&section_name="+section_name+"&user_name="+user_name+"&password="+password,
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