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
				<h1>Add Section</h1>

			</div>
            <form class="form-horizontal" method="post" action="action/addSectionAc.php" name="basic_validate" id="basic_validate" novalidate="novalidate">
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
                                        <input class="form-control input-sm" type="text" name="section_code" id="section_code" style="width: 30%;" maxlength="3" required >
                                    </div>
			                </div>

                <div class="form-group">
                    <label class="control-label">Section name :</label>
                    <div class="controls">
                        <input class="form-control input-sm" type="text" name="section_name" id="section_name" style="width: 30%;" required >
                    </div>
                </div>

                         </div>
						</div>			
					</div>
				</div>

                <div class="form-actions">
                    <input value="Save" id="section_entry" class="btn btn-primary" type="button" name="save">
                    
                </div>
            </form>

        </div>

        <?php include 'template/footer.php' ?>

</div>

        <script>
            $(document).ready(function() {
                $("#section_entry").click(function(){
                    var section_name = $("#section_name").val();
                    var section_code = $("#section_code").val();

                    if(section_name==""){
                        customAlert("Section Name Missing");
                        return false;
                    }

                    if(section_code==""){
                        customAlert("Section Name Missing");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "action/addSectionAc.php",
                        data:"section_name="+section_name+"&section_code="+section_code,
                        cache: false,
                        success: function(html){
                            alertify.success(html);

                            $("#section_name").val("");
                            $("#section_code").val("");
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