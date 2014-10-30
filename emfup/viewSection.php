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
    <h1>View section</h1>

</div>

<div class="row">
     <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-box">
                    <div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
                        <h5>Dynamic table</h5>
                    </div>
                    <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped table-hover data-table">
                    <thead>
                    <tr>
                        <th>Section Code</th>
                        <th>Section Name</th>
                        <th>Edit / Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM section";
                            $result = mysql_query($sql);
                            
                            while($row = mysql_fetch_array($result)){ 
                        ?>
                    <tr class="gradeX even<?php echo $row['id']; ?>">
                        <td><?php echo $row['section_code']; ?></td>
                        <td><?php echo $row['section_name']; ?></td>
                        <td class="taskOptions">
                            <a href="editSection.php?id=<?php echo $row['id'];?>" class="tip-top" data-original-title="Update">
                                <i class="icon-ok"></i></a>
                            <a href="#" class="tip-top delete_update" data-original-title="Delete" id="<?php echo $row['id'];?>">
                                <i class="icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                </div>
            </div>
</div>


</div>

<?php include 'template/footer.php' ?>

</div>
<script>

    $(document).ready(function() {
        $('.delete_update').click(function()
        {
            var ID = $(this).attr("id");
            var dataString = 'id='+ ID;
            reset();
            alertify.confirm("r u sure???", function (e) {
                if (e) {
                    $.ajax({
                        type: "POST",
                        url: "action/sectionDeleteAc.php",
                        data: dataString,
                        cache: false,
                        success: function(html){
                            $(".even"+ID).slideUp('slow', function() {$(this).remove();});
                        }
                    });
                    alertify.success("Delete success!!");
                } else {
                    alertify.error("delete Cancel");
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