

<h2>Update User</h2>
<br> <br>
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">

        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name',$user['name']);?>">
        <?php echo form_error('name'); ?>
        </div>

        <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email"  value="<?php echo set_value('email',$user['email']);?>">
        <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
        <label>DOB</label>
        <input type="date" class="form-control" id="dob" name="dob" value="<?php echo set_value('dob',$user['dob']);?>">
        </div>
        
        <div class="form-group">
        <label>password</label>
        <input type="password" class="form-control" id="dob" name="pass" value="<?php echo set_value('pass',$user['password']);?>">
        </div>
        

        <div class="form-group">
        <button class="btn btn-success"> Update </button>   
        </div>


</form>