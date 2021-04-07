

<h2>User Registration</h2>
<br> <br>
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">

        <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
        <?php echo form_error('name'); ?>
        </div>

        <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email"  placeholder="Enter Email">
        <?php echo form_error('email'); ?>
        </div>

        <div class="form-group">
        <label>DOB</label>
        <input type="date" class="form-control" id="dob" name="dob">
        </div>
        
        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="pass" name="pass"  placeholder="Enter password">
        </div>

        <div class="form-group">
        <button class="btn btn-success"> Create </button>   
        </div>

        


</form>