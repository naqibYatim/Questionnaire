<?php 
	include ('./header_admin.php');
        include ('./backend/manage_report.php');
?>
<body>
    <?php 
        if(isset($_SESSION['username'])){
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
            <div class="panel-heading">               
                <center><h3 class="panel-title">RESPONDENTS</h3></center>
            </div>
    <div class="panel-body">
        <table class="table table-bordered table-condensed text-center">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Submission Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
<!--            <pre>
                 <?php print_r($respondent_list); ?>
            </pre>-->
                <?php $no=1;  foreach($respondent_list as $value){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $value['created_date']; ?></td>
                    <td><a href="manage_report2.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">View</a></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>
</div>  
    <?php   
	}
    ?>
</body>