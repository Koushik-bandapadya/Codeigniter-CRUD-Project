<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>


<body>
    <div class="container" style="padding-top :10px;">
        <h3>Create User</h3>
        <hr>
        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/admin/user/create'; ?>">
            <div class="row">
            
                <div class="col-md-6">

                <!-- <div class="form-group">
                        <label>ID</label>
                        <input type="number" name="priorityid" value="" class="form-control">
                        
                    </div> -->


                    <div class="form-group">
                        <label>Priority Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name')?>" class="form-control">
                        <?php echo form_error('name'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Notification Time</label>
                        <input type="number" name="NotificationTIme" value="<?php echo set_value('NotificationTIme')?>" class="form-control">
                        <?php echo form_error('NotificationTIme'); ?>
                    </div>

                    <div class="form-group">
                        <label>Escalation Time</label>
                        <input type="number" name="EscalationTime" value="<?php echo set_value('EscalationTime')?>" class="form-control">
                        <?php echo form_error('EscalationTime'); ?>
                    </div>

                    <div class="form-group">
                        <label>Escalation Level</label>
                        <input type="number" name="escalationLevel" value="<?php echo set_value('escalationLevel')?>" class="form-control">
                        <?php echo form_error('escalationLevel'); ?>
                    </div>

                    <!-- <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="" class="form-control">
                    </div> -->




                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="" class="btn-secondary btn">Cancel </a>


                    </div>

                </div>

            </div>
        </form>

    </div>
</body>



</html>