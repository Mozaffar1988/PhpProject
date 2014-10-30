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
				<h1>Upload Application</h1>

			</div>
            <form class="form-horizontal" method="post" action="action/upload_letter_action.php" name="basic_validate" id="basic_validate" novalidate="novalidate">




                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget-box">
                            <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>
								</span>
                                <h5>Upload your Application </h5>

                            </div>
                            <div class="widget-content nopadding">

                                <div class="form-group">
                                    <label class="control-label">Date :
                                    </label>
                                    <div class="controls">
                                        <input type="text" data-date="12-02-2012" data-date-format="dd-mm-yyyy" value="12-02-2012" class="datepicker form-control input-sm" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Issue Number :
                                    </label>
                                    <div class="controls">
                                        <input class="form-control input-sm" name="issue_number" id="issue_number" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Section :
                                    </label>
                                    <div class="controls">
                                        <select name="section_name" id="section_name">
                                            <option></option>
                                            <option >Section1</option>
                                            <option>Section2</option>
                                            <option>Section3</option>
                                            <option >Section4</option>
                                            <option >Section5</option>
                                            <option>Section6</option>
                                            <option >Section7</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Subject :
                                    </label>
                                    <div class="controls">
                                        <textarea class="form-control input-sm" name="subject" id="subject" type="text" style="width: 100%; min-width:100%; max-width:100%; height:70px; min-height:70px; max-height:70px;"></textarea>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="control-label">File :
                                    </label>
                                    <div class="controls">
                                        <input name="file_name" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <input value="Save!" id="submit" class="btn btn-primary" type="submit" name="save">
                </div>
            </form>



        </div>

        <?php include 'template/footer.php' ?>

</div>

    </body>
    </html>