<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lists</title>
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>


<body>
    <div class="container" style="padding-top :10px;">
    <div class="row">
        <div class="col-md-12">
            <?php 
            $success= $this->session ->userdata('success');
            if ($success!="") {
               
            ?>
            <div class="alert alert-success"><?php echo $success;?></div>
            <?php   
         } 
         ?>

        <?php 
            $failure= $this->session ->userdata('failure');
            if ($failure!="") {
               
            ?>
            <div class="alert alert-success"><?php echo $failure;?></div>
            <?php 
         } 
         ?>


        </div>


    </div>

    <div class="row">
        <div class="col-md-10">
            <div class="row">
            <div class="col-6"><h3>View Priority</h3></div>
    <div class="col-6 text-right" >
        <a href="<?php echo base_url() . 'index.php/admin/user/create/';?>" class="btn btn-primary">Create</a>
    </div>

            </div>
            <hr>

        </div>
    


    </div>
        
        
        <div class="row">

            <div class="col-md-10">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Notification Time</th>
                        <th>EscalationvTime</th>
                        <th>Escalation Level</th>
                        <th width="100">Edit</th>
                        <th width="100">Delete</th>


                    </tr>


                <?php if(!empty($tblpriorities)) { foreach($tblpriorities as $tblpriorities) {?>
                    <tr>
                        <td><?php echo $tblpriorities['priorityid']?></td>
                        <td><?php echo $tblpriorities['name']?></td>
                        <td><?php echo $tblpriorities['NotificationTIme']?></td>
                        <td><?php echo $tblpriorities['EscalationTime']?></td>
                        <td><?php echo $tblpriorities['escalationLevel']?></td>

                        <td>
                            <a href="<?php echo base_url().'index.php/admin/user/edit/'.$tblpriorities['priorityid']?>" class="btn btn-primary">Edit<a>
                        </td>

                        <td>
                            <a href="<?php echo base_url().'index.php/admin/user/delete/'.$tblpriorities['priorityid']?>" class="btn btn-danger">Delete</a>
                        </td>


                    </tr>
                    <?php } } else {?>
                    <tr>
                        <td colspan="5">Records not found </td>
                    </tr>
                    <?php } ?>




                </table>





            </div>




        </div>

        



    </div>
</body>



</html>