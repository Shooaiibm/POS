

<?php

if ($this->session->has_userdata('user_id')) {
    
$this->load->view('layouts/head'); ?>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:700');

body {
  font-family:'Roboto';
  background-color: #131417;  
}
p {
color: black;
font-weight: bold;
font-size: x-large;
}
.container {
  color: #e5e5e5;
  font-size: 2.26rem;
  text-transform: uppercase;
  height: 100vh;
  display: flex;
  
  align-items: flex-start;
  margin-top: 7%;
  justify-content: center;
}

.animation {
  height:50px;
  overflow:hidden;
  margin-left: 1rem;
}

.animation > div > div {
  padding: 0.25rem 0.75rem;
  height:2.81rem;
  margin-bottom: 2.81rem;
  display:inline-block;
}

.animation div:first-child {
  animation: text-animation 8s infinite;
}

.first div {
  background-color:#20a7d8;
}
.second div {
  background-color:#CD921E;
}
.third div {
  background-color:#c10528;
}

@keyframes text-animation {
  0% {margin-top: 0;}
  10% {margin-top: 0;}
  20% {margin-top: -5.62rem;}
  30% {margin-top: -5.62rem;}
  40% {margin-top: -11.24rem;}
  60% {margin-top: -11.24rem;}
  70% {margin-top: -5.62rem;}
  80% {margin-top: -5.62rem;}
  90% {margin-top: 0;}
  100% {margin-top: 0;}
}

    </style>
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper mt-20">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->

            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <?php $this->load->view('layouts/topbar.php'); ?>
                <main id="js-page-content" role="main" class="page-content" style="background-color: white;">
                <div class="container">
     <div class="col-lg-12 mt-1">

                        <!-- Start here with columns -->
                    <div class="row" style="margin-top:-180px">
                 
                        <div class="col-md-12">
                       
                       <div id="panel-1" class="panel">
                           <div class="panel-hdr">
                               <h2>
                               Modules Selection
                               </h2>
                            
                           </div>

                           <div class="panel-container show pt-5">
                               <div class="panel-content">
                                <div class="row">
                            
                              <!-- ✅ Styles (place in your header or stylesheet) -->
<style>
  body {
    background-color: #f5f7fa; /* Light, modern background */
  }

  .selection-tile {
    display: flex;
    align-items: center;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 16px;
    background-color: #ffffff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, background-color 0.3s, box-shadow 0.3s;
    text-decoration: none;
    height: 100%;
    position: relative;
  }

  .selection-tile:hover {
    background-color: #eef5ff;
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.1);
    border-color: #cce0ff;
  }

  .selection-img {
    height: 60px;
    width: 60px;
    object-fit: contain;
    margin-right: 15px;
  }

  .selection-text {
    font-size: 17px;
    font-weight: 600;
    color: #2c3e50;
  }

  .shake {
    animation: shakeAnim 0.4s;
  }

  @keyframes shakeAnim {
    0% { transform: translateX(0px); }
    25% { transform: translateX(-4px); }
    50% { transform: translateX(4px); }
    75% { transform: translateX(-4px); }
    100% { transform: translateX(0px); }
  }

  @media (max-width: 768px) {
    .selection-tile {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .selection-img {
      margin-right: 0;
      margin-bottom: 10px;
    }
  }
</style>

<!-- ✅ JavaScript for shake animation -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const tiles = document.querySelectorAll(".selection-tile");
    tiles.forEach(tile => {
      tile.addEventListener("mouseenter", () => {
        tile.classList.add("shake");
      });
      tile.addEventListener("animationend", () => {
        tile.classList.remove("shake");
      });
    });
  });
</script>

<!-- ✅ Dashboard Tiles -->
<div class="row mt-3">

   <?php if ($this->session->userdata('dashboard') == 1) { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Dashboard'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/Das.png" alt="Dashboard" class="selection-img">
        <span class="selection-text">Dashboard</span>
      </a>
    </div>
  <?php } ?> 

  <?php if ($this->session->userdata('client') == 1) { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Clients'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/storeLogo.jpg" alt="Clients" class="selection-img">
        <span class="selection-text">Clients</span>
      </a>
    </div>
  <?php } ?>

  <?php if ($this->session->userdata('category') == 1) { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Category'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/financialsLogo.png" alt="Category" class="selection-img">
        <span class="selection-text">Category</span>
      </a>
    </div>
  <?php } ?>

  <?php if ($this->session->userdata('item') == 1) { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Items'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/items.png" alt="Items" class="selection-img">
        <span class="selection-text">Items</span>
      </a>
    </div>
  <?php } ?>


    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('INOUT'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/order.png" alt="IN/OUT" class="selection-img">
        <span class="selection-text">IN / OUT</span>
      </a>
    </div>

<?php if ($this->session->userdata('username') == 'Admin') { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Reports'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/reports.png" alt="Inventory" class="selection-img">
        <span class="selection-text">Reports</span>
      </a>
    </div>
     <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Staff'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/storeLogo.jpg" alt="IN/OUT" class="selection-img">
        <span class="selection-text">Staff</span>
      </a>
    </div>
    <?php
}
    ?>
    <?php if ($this->session->userdata('username') == 'Admin') { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Expense'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/exp.png" alt="Inventory" class="selection-img">
        <span class="selection-text">Expense</span>
      </a>
    </div>
    <?php
}
    ?>
 <!--
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('OUT'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/out.png" alt="OUT" class="selection-img">
        <span class="selection-text">OUT</span>
      </a>
    </div> -->
 
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Staff'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/order.png" alt="IN/OUT" class="selection-img">
        <span class="selection-text">Staff</span>
      </a>
    </div>

  <?php if ($this->session->userdata('username') == 'Admin') { ?>
    <div class="col-md-3 col-sm-6 mb-3">
      <a href="<?php echo base_url('Users'); ?>" class="selection-tile">
        <img src="<?php echo base_url(); ?>assets/img/UserManagement.jpg" alt="Users" class="selection-img">
        <span class="selection-text">Users</span>
      </a>
    </div>
  <?php } ?>

</div>

                        
                       </div>
                   </div>
                    </div>
  
                    </div>
                </div>
           
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php $this->load->view('layouts/foot.php'); ?>

        <script>

        </script>
       
        </body>

        </html>

        <?php
  } else {
    redirect('');
}
?>