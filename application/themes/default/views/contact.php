

        <!-- Page Header Section Start -->
        <div class="page-header--section text-center">
            <!-- Page Title Start -->
            <div class="page--title pd--130-0" ata-bg-img="" style="background:#077407;">
                <div class="container">
                    <h1 class="h1">Contact</h1>
                </div>
            </div>
            <!-- Page Title End -->

            <!-- Page Breadcrumb Start -->
            <div class="page--breadcrumb font--secondary">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span>Contact</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
        <!-- Page Header Section End -->

        <!-- Contact Section Start -->
        <div class="contact--section pd--100-0-40">
            <div class="container">
                <div class="row">
                    <!-- Contact Content Start -->
                    <div class="contact--content col-md-8 pb--60">
                    <img src="<?php echo base_url('assets/theme'); ?>/img/contactus.jpg" alt="" style="width: 150px;
    border-radius: 10px;
    box-shadow: 3px 2px 2px darkslategrey;">
                                <p style="    padding-left: 15px;"><strong>Dr. Javid A Parray <br>
General Secretary
</strong></p>
                        <h2 class="contact--title h4">Contact Information</h2>

                        <div class="row">
                         

                            <div class="col-sm-12">
                            
                                <ul>
                                    <li class="fa-home">
                                        <p>B.O : Rainawari Chowk, Near JLNM Hospital Srinagar- J&K – India 190003</p>
                                    </li>
                                    <li class="fa-envelope">
                                        <p><a href="mailto:Javid06@gmail.com">Javid06@gmail.com</a></p>
                                    </li>
                                    <li class="fa-phone-square">
                                        <p><a href="tel:+91-7051504187 ">+91-7051504187 
</a></p>
                                    </li>
                                    <li class="fa-clock-o">
                                        <p>Monday - Satarday (09 am to 08 pm)<span>(Sunday Closed)</span></p>
                                    </li>
                                </ul>
                            </div>

                               <div class="col-sm-12"><br><br>
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3303.874362266181!2d74.81999996496843!3d34.09835887274635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRainawari%20Chowk%2C%20Near%20JLNM%20Hospital%20Srinagar-%20J%26K%20%E2%80%93%20India%20190003!5e0!3m2!1sen!2sin!4v1593212089048!5m2!1sen!2sin" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                            </div>
                        </div>

                    
                    </div>
                    <!-- Contact Content End -->

                    <!-- Contact Form Start -->
                    <div class="contact--form col-md-4 pb--60" data-form="ajax">
                        <h2 class="contact--title h4">Get In Touch</h2>

                        <?php echo form_open($form_action);?>
                         
                                
                                  <?php if ($flashdata = $this->session->flashdata('email_sent')){  ?>
                          <div class="alert alert-success">
                           <?php echo $flashdata;  ?>
                          </div>
                        <?php } ?>
                          

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="E-mail Address" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>

                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Write Message" required></textarea>
                            </div>

                          

                            <button type="submit" class="btn btn-default">Send Message</button>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script type="text/javascript">
 $('.nav li.active').removeClass('active');
$('.contact').addClass('active');
</script>