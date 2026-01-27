
<!DOCTYPE html>
  <!-- 
  Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
  Version: 4.0.2
  Author: Sunnyat Ahmmed
  Website: http://gootbootstrap.com
  Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
  License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
  -->
  <html lang="en">
  
  <head>
      <meta charset="utf-8">
      <title>
      <?Php echo Base_CompanyName; ?>
      </title>
      <meta name="description" content="Marketing Dashboard">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
      <!-- Call App Mode on ios devices -->
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <!-- Remove Tap Highlight on Windows Phone IE -->
      <meta name="msapplication-tap-highlight" content="no">
      <!-- base css -->
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/vendors.bundle.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/app.bundle.css">
      <!-- Place favicon.ico in the root directory -->
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Base_logo; ?>">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Base_logo; ?>">
      <link rel="mask-icon" href="<?php echo Base_logo; ?>" color="#5bbad5">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/datagrid/datatables/datatables.bundle.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/select2/dist/css/select2.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/jquery-selectric/selectric.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/Select/select2.min.css">
      <link rel="shortcut icon" href="<?php echo Base_logo; ?>" />
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/iziToast.min.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/notifications/toastr/toastr.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/theme-demo.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>assets/css/page-login.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
      <link rel="stylesheet" media="screen, print" href="<?php echo base_url(); ?>/assets/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
  <style>
      #footer {
     position:fixed;
     bottom:0;
     width:100%;
     height:30px;   /* Height of the footer */
     background:#6cf;
  }
  

</style>
  </head>
  <!-- BEGIN Page Wrapper -->
<div class="page-wrapper" style="background-color:dark blue-gray (#4a536b) #f4f7f9; min-height: 100vh; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="page-inner">

        <!-- Company Header -->
    

        <div class="page-content-wrapper">

            <div class="col-lg-12 p-5">
                <!-- Panel -->
                <div id="panel-1" class="panel shadow-sm border-0 rounded-lg" style="background-color: #ffffff;">
                    <div class="panel-hdr d-flex justify-content-between align-items-center p-3 border-bottom">
                        <h2 class="m-0" style="
                        background: linear-gradient(to right,rgb(170, 99, 224),rgb(47, 76, 171)); /* fresh green gradient */
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
                        
                        
                        "> JATBRO, UNIPESSOAL, LDA</h2>
                        <div class="panel-toolbar ml-2 mr-2">
                            <!-- Toolbar buttons if needed -->
                        </div>  
                    </div>

                    <div class="panel-container show">
                        <div class="panel-content p-4">

                            <!-- Nav Tabs -->
                            <ul class="nav nav-pills mb-3 flex-wrap" role="tablist" id="category-tabs" style="gap: 10px;">
                                <!-- Example tab -->
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link active elegant-tab" data-toggle="pill" href="#tab1">iPhone</a>
                                </li>
                                -->
                            </ul>

                            <!-- Tab Contents -->
                            <div class="tab-content" id="tab-contents">
                                <!-- Example tab content -->
                                <!--
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered w-100">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Model</th>
                                                    <th>Quantity</th>
                                                    <th>Warehouse</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>iPhone 13</td>
                                                    <td>128GB</td>
                                                    <td>45</td>
                                                    <td>Main Store</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Elegant CSS Styling -->
<style>
    .nav-pills .nav-link.elegant-tab {
        background: linear-gradient(to right, #d1e8ff, #f0f4f8);
        color: #2e3b4e;
        border-radius: 20px;
        padding: 8px 16px;
        font-weight: 500;
        border: 1px solid #d0dae3;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        transition: all 0.3s ease-in-out;
    }

    .nav-pills .nav-link.elegant-tab.active,
    .nav-pills .nav-link.elegant-tab:hover {
        background: linear-gradient(to right, #4a90e2, #6cb3f7);
        color: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background-color: #2e3b4e;
        color: white;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
    }

    .panel {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }
</style>


<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script src="<?php echo base_url("/assets/js/JsBarcode.all.min.js")?>";></script>
<script>
 function tbl_Catagory() {
    let url = "<?php echo base_url("Order/Ordercontroller/tbl_Catagory")?>";

    $.post(url, function(data) {
        let categories = typeof data === 'string' ? JSON.parse(data) : data;

        let navHtml = '';
        let tabContent = '';

        categories.forEach((cat, index) => {
            let isActive = index === 0 ? 'active show' : '';
            let tabId = `tab-cat-${cat.CatID}`;

            // Tab links
            navHtml += `
                <li class="nav-item">
                    <a class="nav-link ${isActive}" data-toggle="pill" href="#${tabId}" 
                        onclick="Stockbalance(${cat.CatID}, '${tabId}')">${cat.Name}</a>
                </li>
            `;

            // Tab content
            tabContent += `
                <div class="tab-pane fade ${isActive}" id="${tabId}" role="tabpanel">
                    
                    <div class="col-md-12" id="Stockbalance-${cat.CatID}"></div>
                </div>
            `;
        });

        $('#category-tabs').html(navHtml);
        $('#tab-contents').html(tabContent);

        // Load first tab’s content
        if (categories.length > 0) {
            Stockbalance(categories[0].CatID, `tab-cat-${categories[0].CatID}`);
        }
    });
}

// Call this on document ready

function Stockbalance(CatID, TablID) {
    let url = "<?php echo base_url('Order/Ordercontroller/Stockbalance') ?>";

    $.post(url, { 'CatID': CatID }, function(data) {
        let html = `
        <div style="width: 100%; overflow-x: auto;">
        <table class="table table-hover" id="Stockbalancetable-${CatID}" style="width: 100%; table-layout: fixed;">
            <thead class="bg-primary text-white">
                <tr>
                    <th style="width: 50%; word-wrap: break-word; text-align:left;">Product Name</th>
                    <th style="width: 35%; word-wrap: break-word;text-align:center;">Status</th>
                </tr>
            </thead>
            <tbody>
        `;

        data.forEach(element => {
            html += `
                <tr>
                    <td style="font-weight: 350; text-align:left;">${element.Name}</td>
                    <td style="text-align:center;">
                        ${
                            element.Balance > 0 
                            ? `<span class="badge badge-primary">Available</span>`
                            : `<span class="badge badge-danger">Out of stock</span>`
                        }
                    </td>
                </tr>
            `;
        });

        html += `</tbody></table></div>`;

        $(`#Stockbalance-${CatID}`).html(html);

        $(`#Stockbalancetable-${CatID}`).dataTable({
            responsive: false,
            lengthChange: false,
            dom:
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f>" +
                "<'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                }
            ]
        });
    });
}


$(document).ready(function(){

    tbl_Catagory();
    //$("#update").css(`display`,'none'); 
 
   
  

   
})
</script>



    