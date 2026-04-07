

<?php $this->load->view('layouts/head.php'); ?>
<style>
    * {
	 box-sizing: border-box;
	 margin: 0;
	 padding: 0;
}
 #loading-screen {
	 background-color: #F7F8FA;
	 height: 100vh;
	 width: 100%;
	 position: fixed;
	 z-index: 1000;
}
 #loading-screen img {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%, -50%);
	 width: 250px;
     height: 150px;
}
body {
  margin: 0;
  padding: 0;

  background-size: cover;
  background-position: center;
  font-family: Arial, sans-serif;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.background-image {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: -1;
      object-fit: cover;
    }
</style>
<!-- <div id="loading-screen" >
  <img id="outline" src="<?php echo base_url(); ?>assets/img/loading.gif"/>
</div> -->
<body>
<img src="<?php echo base_url(
                                            ''
                                        ); ?>assets/img/bg.jpg" alt="Background" class="background-image">
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4" style="background-color:white">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="<?php echo Base_logo; ?>" style="width:120px;height:50px" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1"></span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
            <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible show fade" id="msgbox">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    </div>
<?php } ?>

<form action="<?php echo base_url('index.php/LoginController/authenticate'); ?>" method="post" id="mainForm">
    <div class="form-group">
        <label class="form-label" for="username">Username</label>
        <input type="text" id="cardNo" name="cardNo" required class="form-control" placeholder="Your unique Username to app">
    </div>
    <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input type="password" name="Password" required id="password" class="form-control" placeholder="Password">
        <span class="help-block">
            Your password
        </span>
    </div>
    <button type="submit" class="btn btn-dark float-right" style="background-color:#C09238">Secure login</button>
</form>
</div>
            <!-- <div class="blankpage-footer text-center">
                <a href="#"><strong>Recover Password</strong></a> | <a href="#"><strong>Register Account</strong></a>
            </div> -->
        </div>
       
            </body>
       <!--  <video id="bgvid" playsinline autoplay muted loop>
            <source src="<?php echo base_url(); ?>assets/media/video/cc.webm" type="video/webm"> 
            <source src="<?php echo base_url(); ?>assets/media/video/hospital.mp4" style="object-fit:cover;" type="video/mp4">
        </video>-->
        <?php $this->load->view('layouts/foot.php'); ?>
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
      <script>
       
        window.onload = function(e){
            let currentDate = new Date();
        $("#dateDisplay").text(currentDate);
        $("#loading-screen").css('display','block')
        setTimeout(() => {
            $("#loading-screen").css('display','none')
        }, 1500);
        }
  
      </script>
<?php $this->load->view('layouts/foot'); ?>
