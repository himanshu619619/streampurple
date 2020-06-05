
<div class="container" style=" ">
  <div class="row">

  
    <div class="col-md-8 " style="  margin:50px 0px;">
      <img src="<?php echo base_url('assets/theme');?>/images/<?php echo $banner->banner_name; ?>" class="img-responsive" style="filter: drop-shadow(2px 4px 6px black)">

    </div>
 <div class="col-md-4">
<br>
<button class="btn" onclick="registers()"> Register  </button>
<button class="btn"  onclick="logins()"> Login </button>


  <?php if ($flashdata = $this->session->flashdata('error')){  ?>
                          <div class="alert alert-danger">
                           <?php echo $flashdata;  ?>
                          </div>
                        <?php } ?>
      <section  class="login-registers" >
  <div class="login-box login-sidebar" id="registerss">
    <div class="white-box">
     
        <?php echo form_open($form_action, 'class="form-horizontal form-material" id="loginform" '); ?>
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3>
        


        <div class="form-group m-t-20">
          <div class="col-xs-12">
          <input type="text" class="form-control " value="<?php echo set_value('username');?>" placeholder="username" name="username" >
                <?php echo form_error('username'); ?>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
           <input type="email" class="form-control form-first-name" value="<?php echo set_value('email');?>" placeholder="email" name="email" >
                <?php echo form_error('email'); ?>
        </div>
</div>

         <div class="form-group ">
          <div class="col-xs-12">
             <input type="text" class="form-control form-email" value="<?php echo set_value('mobile');?>" placeholder="mobile" name="mobile">
                <?php echo form_error('mobile'); ?>
        </div>
        </div>
      <div class="form-group ">
          <div class="col-xs-12">
           <input type="password" class="form-control form-email" value="<?php echo set_value('cpassword');?>" name="cpassword" id="login-form-password-retype" placeholder="Password">
                 <?php echo form_error('cpassword'); ?>
        </div>
        </div> 
        <div class="form-group ">
          <div class="col-xs-12">
          <input type="password" class="form-control form-email" placeholder="Password" value="<?php echo set_value('password');?>" name="password" id="login-form-password">
                <?php echo form_error('password'); ?>
          </div>
        </div>
        </div>
      
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
       
      </form>
    </div>

<div  id="loginss"  style="display:none;">
<h3>Login </h3>
  <?php echo form_open($form_action_login);?>
            <div class="form-group">
               
                <input type="text" class="form-control" name="username" id="login-form-email" placeholder="Username/ Email" required="required">
                <div class="error">
                <?php echo form_error('username');?>
            </div>
            </div>
            <div class="form-group">
              
                <input type="password" class="form-control" name="password" placeholder="Password"id="login-form-password" required="required">
                <div class="error">
                <?php echo form_error('password');?>
            </div>
            </div>

          <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">login </button>
          
        
            <br/>
            <br/><br/>   
        </form>

</div>



  </div>


</section>



      
    </div>



  </div>
</div>


<script type="text/javascript">

  var x = document.getElementById("loginss");
var z = document.getElementById("registerss");

 function logins() {

 
z.style.display = "none";
x.style.display = "block";

}

 function registers() {


z.style.display ="block";
x.style.display = "none";
}

</script>