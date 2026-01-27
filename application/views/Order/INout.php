

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
      BIG PLANET TEL LDA
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
  .page-logo {
      height: 4.125rem;
      width: 16.875rem;
      -webkit-box-shadow: 0px 0px 28px 0px rgba(0, 0, 0, 0.13);
      box-shadow: 0px 0px 28px 0px rgba(0, 0, 0, 0.13);
      overflow: hidden;
      text-align: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: flex-start;
      -ms-flex-positive: 0;
      -webkit-box-flex: 0;
      flex-grow: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      min-height: 1px;
      padding: 0px;
  }

  thead {
        background: linear-gradient(to right, #a8e063, #56ab2f); /* fresh green gradient */
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
    }

    thead th {
        padding: 12px 10px;
        border-right: 1px solid rgba(255, 255, 255, 0.2);
    }

    thead th:last-child {
        border-right: none;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }
</style>
  </head>
  
  <body class="mod-bg-1 " style="background-color:light blue">
    
<div class="page-wrapper">
<div class="page-inner">
<!-- BEGIN Left Aside -->

<!-- END Left Aside -->
<div class="page-content-wrapper">
<!-- BEGIN Page Header -->

<main id="js-page-content" role="main" class="page-content" style="background-color: white;">

<div class="modal fade" id="dateModelPO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: purple;color:white">
                                            <h5 class="modal-title" id="exampleModalLabel"><b> Order details information</b></h5>
                                            <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card" id="printCard">
                                                <div class="card-body" style="border: 3px solid black;">
                                                   
                                                   
                                                   <div class="col-md-12" id='approvedDtPO'>

</div>
                                        </div>
                                        <div class="modal-footer">
                                        
                                        </div>
                                        </div>
                                            </div>
                                        <div class="card-footer text-muted">
                                            Stellar Business Solutions
                                        </div>
                                    </div>
                                </div>
                            </div>
        <!-- Model HTML -->

      <!-- Add in your page <head> -->
      <style>
@media print {
    body * {
        visibility: hidden;
    }

    #invoiceToPrint, #invoiceToPrint * {
        visibility: visible;
    }

    #invoiceToPrint {
        position: absolute;
        left: 0;
        top: 0;
        width: 80mm;
        padding: 5px;
        font-size: 12px;
        font-family: monospace;
        line-height: 1.3;
        word-wrap: break-word;
    }

    .no-print {
        display: none !important;
    }

    .text-center {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        text-align: left;
        padding: 2px 0;
        word-break: break-word;
    }

    h3, h4, h6 {
        margin: 2px 0;
        font-weight: bold;
        text-align: center;
    }

    .border-top {
        border-top: 1px solid black;
        margin-top: 10px;
        padding-top: 5px;
    }
}

    .panel-hdr {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(to right,rgb(117, 89, 202),rgb(88, 19, 152)); /* professional blue gradient */
        color: white;
        padding: 15px 20px;
        border-radius: 8px 8px 0 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .panel-hdr h2 {
        margin: 0;
        font-size: 1.4rem;
        font-weight: 600;
    }

    .panel-toolbar {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .ml-2 {
        margin-left: 0.5rem;
    }

    .mr-2 {
        margin-right: 0.5rem;
    }
</style>



<div class="modal fade" id="printdetailsModel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Print invoice</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                        <div id="printdetails"></div>
                                      
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>
                            </div>
        <div class="modal fade" id="modaldemo8c">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Clients</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Name:</label>
                                                            <input type="text" class="form-control" id="Namec"
                                                                placeholder="Enter Name" autocomplete="Namec">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">City:</label>
                                                            <input type="text" class="form-control" id="City"
                                                                placeholder="Enter City" autocomplete="City">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Phone No:</label>
                                                            <input type="text" class="form-control" id="phoneno"
                                                                placeholder="Enter phoneno" autocomplete="phoneno">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Email:</label>
                                                            <input type="text" class="form-control" id="email"
                                                                placeholder="Enter email" autocomplete="email">
                                                        </div>
  </div>
            
  <div class="col-md-12 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="status" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="status">Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>
            
                                                    
                                                </div>
                                                <input type="hidden" class="form-control" id="chidden" >
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="submitc">Save changes</button> 
                                            
                                       
                                            
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>

        <div class="modal fade" id="modaldemo8">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Items</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Item Code:</label>
                                                            <input type="text" class="form-control" id="Code"
                                                                placeholder="Enter Code" autocomplete="Code" disabled>
                                                        </div>
  </div>
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Category:</label>
                                                            <select class="form-control" id="CatIDnew"></select>
                                                        </div>
  </div>
            
     
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Name:</label>
                                                            <input type="text" class="form-control" id="Name"
                                                                placeholder="Enter Name" autocomplete="Name">
                                                        </div>
  </div>

  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Purchase Price:</label>
                                                            <input type="number" class="form-control" id="purchasePrice"
                                                                placeholder="Enter Purchase Price" autocomplete="purchasePrice">
                                                        </div>
  </div>
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Sale Price:</label>
                                                            <input type="number" class="form-control" id="SalePrice"
                                                                placeholder="Enter Sale Price" autocomplete="SalePrice">
                                                        </div>
  </div>
        
            
      

   
            
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="status" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="status">Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>  
           
</div>
</div>
<div class="col-md-3">
                        <div class="col-md-12">
                        <div class="modal-inside">
                                    <img src="<?php echo base_url() ?>assets/img/upload.png" id="picUserShow"   alt="picture" style="border-radius:50%" height="100px" width="100px">
                                    
                                    <div class="form-group">
                                <label>File</label>

                                <input type="file" onchange="loadFile(event)" id="image" class="form-control">
                                <input type="hidden" id="previmage">
                            </div>
                    </div>
  </div>
                        </div>   
                                               
                                                    
                                                </div>
                                                <input type="hidden" class="form-control" id="chidden" >
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="itemsavedsubmit">Save changes</button> 
                                            
                                           
                                          
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>

    

                            
                            <div class="modal fade" id="modaldemo8barcode">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Add Bar code</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                <div class="col-md-9">
                                                <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Order NO:</label>
                                                            <input type="text" class="form-control" id="orderCode"
                                                                placeholder="Enter Code" autocomplete="orderCode" disabled>
                                                        </div>
  </div>
     
  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Enter Bar Code:</label>
                                                            <input type="text" class="form-control" id="newbarcode"
                                                                placeholder="Enter Code" autocomplete="barcode" >
                                                        </div>
  </div>
     
       
 
    
      

   

 
           
</div>
</div>
 
                                               
                                                    
                                                </div>
                                             
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="AddnewBarcode">Save Bar Code</button> 
                                            
                                           
                                            <button
                                                class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>

    

<div class="row">
    <div class="col-lg-7 p-5">

        <!-- Start here with columns -->
        
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
               Inward /Outward Transaction
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
             
            </div>  
            </div>
            <div class="row p-2 align-items-end">
            <div class="col-md-3">
        <div class="form-group">
            <label class="form-label">Select Customer *</label>
            <select class="custom-select" id="CID"></select>
        </div>
    </div>

    <div class="col-md-1">
        <button class="btn btn-primary btn-sm" id="openModelclientbtn">
            <i class="fal fa-plus-circle"></i>
        </button>
    </div>
    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Date:</label>
                            <input type="date" id="odate" class="form-control" required>
                        </div>
                    </div>
    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Item Name *</label>
                            <input type="text" id="Nameprd"  class="form-control">
                        </div>
                    </div>

    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Quantity *</label>
                            <input type="number" id="qty"  class="form-control">
                        </div>
                    </div>

                    <!-- Prices -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">PPU *</label>
                            <input type="number" id="PPU" class="form-control" >
                           
                        </div>
                    </div>

                    <!-- Bar Code -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label">Bar Code:</label>
                            <input type="text" id="barcode" class="form-control" required>
                        </div>
                    </div>

                    <!-- EIMI -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label">IMEI NO:</label>
                            <input type="text" id="EIMI" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button class="btn btn-info" id="submit">Add Items</button>
                    </div>

                    
    </div>
    <div id="tableDataoutward"><div>
</div>

          
</div>

</div>
</div>
<div class="col-lg-5 pt-5">
     <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
              Transaction
                </h2>
</div>
<div class="row p-2">
                    <div class="col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control"  onchange="view_inv_Details()"  id="startDate_out">
                    </div>
                    <div class="col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" onchange="view_inv_Details()" id="endDate_out">
                    </div>
                    </div>
                <div class="col-md-12" id="outwarddetails"></div>
</div>
</div></div>
<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script src="<?php echo base_url("/assets/js/JsBarcode.all.min.js")?>";></script>
<script>



$( "#submitc").click(function(e){
e.preventDefault()

let Name = $("#Namec").val();
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let City = $("#City").val();
                    if(City =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    City is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let phoneno = $("#phoneno").val();
                    if(phoneno =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    phoneno is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let email = $("#email").val();
                    if(email =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    email is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;;
                    

let url = "<?php echo base_url("Clients/ClientsController/AddClients")?>";
$.post(url,
{ "Name":Name, "City":City, "phoneno":phoneno, "email":email, "status":status,},function(data)
{
    iziToast.success({title:'Success',message: `
 Clients inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadclients();$("#NameC").val('');$("#City").val('');$("#phoneno").val('');$("#email").val('');$("#status").prop('checked',true);
    $("#modaldemo8c").modal('toggle');
});
});

    $("#openModelclient").click(function(){
        ;$("#Code").val('');$("#Name").val('');$("#SalePrice").val('0');
        $("#purchasePrice").val('0');$("#image").val(null);$("#status").prop('checked',true);
    var image = document.getElementById('picUserShow');
    image.src = '<?php echo base_url(); ?>assets/img/upload.png';
    getMaxItemNo();

    $("#modaldemo8").modal('toggle');
    }) 
    
    $("#openModelclientbtn").click(function(){$("#Namec").val('');$("#City").val('');$("#phoneno").val('');$("#email").val('');$("#status").prop('checked',true);
  // alert("here");
    $("#modaldemo8c").modal('toggle');
    })   
  
    $("#POCLear").click(function(){
   //alert("Called");
    let url = "<?php echo base_url("Order/Ordercontroller/clearSession")?>";
      $.post(url,{},function(data){ 
       //alert("inner");
        iziToast.success({title:'Success',message: "Production head load Successfully",position:"topRight",balloon: true});
        location.reload();
      });
});



$( "#submit").click(function(e){
    e.preventDefault()
   
let Name = $("#Nameprd").val(); 
let CID = $("#CID").val(); 
let qty = $("#qty").val(); 
let barcode = $("#barcode").val(); 
let PPU = $("#PPU").val();
let EIMI = $("#EIMI").val(); 

let odate = $("#odate").val(); 


if(CID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Customer is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Product is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(odate =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                   Date is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }

                     
                    if(qty =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Quantity is Requred!`,position:"topRight",balloon: true});
                    return;
                    }
                    if(PPU =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    PPU is  is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(barcode =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    barcode is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(EIMI =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    EIMI is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                 
                  
                   
let url = "<?php echo base_url("Order/Ordercontroller/AddOUT")?>";


$.post(url, {
    'EIMI': EIMI,
    'odate': odate,
    'PPU': PPU,
   
    'CID': CID,
    'Name': Name,
    'barcode': barcode,
    'qty': qty
}, function(data) {

    if (data.status === 'error') {
        iziToast.error({
            title: 'Error',
            message: data.message,
            position: "topRight",
            balloon: true
        });
        return;
    }

    iziToast.success({
        title: 'Success',
        message: data.message,
        position: "topRight",
        balloon: true
    });

    loadotwareddata();
    view_inv_Details();
    
     $("#Nameprd").val('');
    $("#barcode").val('');
    $("#PPU").val('');
    $("#EIMI").val('');
    $("#qty").val('');
});
    
});

      
function loadall(){
    loadotwareddata();

}





    // Replace with your actual dynamic barcode value

    
    function Stockbalance(){







let url = "<?php echo base_url("Order/Ordercontroller/Stockbalance")?>";

$.post(url,function(data){
let  html = `
<table class="table table-responsive w-100 d-block table-hover" id="Stockbalancetable" style="width:100%;">
<thead >
    <tr>        <th>Catgory</th> 
    <th>Product Name</th> 
      <th>IN</th>
        <th>OUT</th>
          <th>Balance</th>
            
 
       
     </tr>
</thead>
<tbody>`;
data.forEach(element => {

html += ` <tr>
<td>${element.CATNAme}</td>
<td>${element.Name}</td>
<td>${element.Quantity}</td>
<td>${element.out}</td>
<td>${element.Balance}</td>

</tr> `
});
    
html +=` </tbody>
</table>`
$('#Stockbalance').html(html);
$('#Stockbalancetable').dataTable({
responsive: false,
lengthChange: false,
dom:
    /*	--- Layout Structure 
        --- Options
        l	-	length changing input control
        f	-	filtering input
        t	-	The table!
        i	-	Table information summary
        p	-	pagination control
        r	-	processing display element
        B	-	buttons
        R	-	ColReorder
        S	-	Select

        --- Markup
        < and >				- div element
        <"class" and >		- div with a class
        <"#id" and >		- div with an ID
        <"#id.class" and >	- div with an ID and a class

        --- Further reading
        https://datatables.net/reference/option/dom
        --------------------------------------
        */
    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
    "<'row'<'col-sm-12'tr>>" +
    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    buttons: [
/*{
    extend:    'colvis',
    text:      'Column Visibility',
    titleAttr: 'Col visibility',
    className: 'mr-sm-3'
},*/
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
},
{
    extend: 'csvHtml5',
    text: 'CSV',
    titleAttr: 'Generate CSV',
    className: 'btn-outline-primary btn-sm mr-1'
},
{
    extend: 'copyHtml5',
    text: 'Copy',
    titleAttr: 'Copy to clipboard',
    className: 'btn-outline-primary btn-sm mr-1'
},
{
    extend: 'print',
    text: 'Print',
    titleAttr: 'Print Table',
    className: 'btn-outline-primary btn-sm'
}
]
});
});
}

function loadotwareddata() {
    // let startDate = $("#startDate_out").val(); 
    // let endDate = $("#endDate_out").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/Store_outwardtransaction_manual")?>";

    $.post(url, function (data) {

        console.log("New outward data is:",data);
      
        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="tableDataGetoutward" style="width:100%;">
            <thead>
                <tr>    
                    <th>Date</th>     
                     
                    <th>Product Name</th> 
                    <th>Quantity</th>
                    <th>PPU</th>
                    <th>barcode</th>
                    <th>EIMI NO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>`;
        
        data.forEach(element => {
            html += `<tr>
                <td>${element.Date}</td>
               
                <td>${element.Name}</td>
                <td>${element.Quantity}</td>
                  <td>${element.PPU}</td>
                <td>${element.barcode}</td>
                <td>${element.EMINO}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="sendrequestoutward(${element.id})">Undo</button>
                </td>
            </tr>`;
        });
        html += `
<tr>
    <td colspan="7"></td> <!-- Empty cells to push button right -->
    <td colspan="3" class="text-end">
        <button class="btn btn-primary" onclick="generateInvoice(${data[0].CID})">Generate Invoice</button>
    </td>
</tr>
</tbody>
</table>`;
       

        $('#tableDataoutward').html(html);

        $('#tableDataGetoutward').dataTable({
            responsive: false,
            lengthChange: false,
            dom:
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
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
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });
    });
}


function view_inv_Details() {
    let startDate = $("#startDate_out").val(); 
    let endDate = $("#endDate_out").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/view_inv_Detailsout")?>";
    $.post(url,{'startDate':startDate,'endDate':endDate},function(data){

        console.log("New outward data is:",data);
      
        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="outwarddetailstable" style="width:100%;">
            <thead>
                <tr>    
                    <th>Date</th>     
                    <th>invoice</th> 
                    
                    <th>Customer</th>
                   
                    <th>Total Quantity</th> 
                
                    <th>view Invoice</th>
                </tr>
            </thead>
            <tbody>`;
        
        data.forEach(element => {
            html += `<tr>
                <td>${element.Date}</td>
                <td>${element.INVNO}</td>
                     <td>${element.cname}</td>
                
                <td>${element.Quantity}</td>
            
           
                <td>
                    <button class="btn btn-success btn-sm" onclick="invdetails(${element.INVNO})">view Invoice</button>
                </td>
            </tr>`;
        });
        html += `

</tbody>
</table>`;
       

        $('#outwarddetails').html(html);

        $('#outwarddetailstable').dataTable({
            responsive: false,
            lengthChange: false,
            dom:
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
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
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });
    });
}
function invdetails(INVNO){
    //alert(INVNO);
    let url = "<?php echo base_url("Order/Ordercontroller/Getinvoiceinvout"); ?>";

    $.post(url, {'INVNO':INVNO},function(data) {
        let quantity = 0, totalAmt = 0, itemsCount = 0;
        $('#printdetails').html('');

        let clientName = "", clientPhone = "", clientEmail = "",INVNO="",invdate="";
        let currentDate = new Date().toLocaleString();

        let htmlAdd = `
            <div class="modal-body" style="background-color:white">
                <div id="invoiceToPrint">
                    <div class="text-center">
                        <img src="<?php echo Base_logo; ?>" alt="logo" style="height:80px; width:auto;"><br>
                         <h3>BIG PLANET TEL LDA</h3>
                    </div>
                    `;

        if (data.length > 0) {
            clientName = data[0].cname;
            clientPhone = data[0].phoneno;
            clientEmail = data[0].email;
            INVNO = data[0].INVNO;
            invdate=data[0].Date;
            htmlAdd += `
            <h4 style="margin:10px 0;">Invoice # ${INVNO}<strong>Date/Time:</strong> ${currentDate}</h4>
            <h5 style="margin:10px 0;">Invoice Date : ${invdate}</h5>
                    <div class="border-top">
                        <p><strong>Customer:</strong> ${clientName}</p>
                      
                       
                        
                    </div>

                    <table>
                        <thead>
                            <tr style="border:1px solid black">
                               
                                <th style="border:1px solid black;text-align:left;">Item Name</th>
                                 <th style="border:1px solid black ;text-align:center;"> IMEI </th>
                                <th style="border:1px solid black;text-align:center;">Quantity</th>
                                <th style="border:1px solid black;text-align:right;">Amount</th>
                            </tr>
                        </thead>
                        <tbody>`;

            data.forEach(row => {
                htmlAdd += `
                            <tr  style="border:1px solid black"> 
                               
                                <td style="border:1px solid black; text-align:left;" >${row.Name}</td>
                                 <td style="border:1px solid black;text-align:center;">${row.EMINO}</td>
                                <td style="border:1px solid black;text-align:center;">${row.Quantity}</td>
                                <td style="border:1px solid black;text-align:right;">${row.PPU}</td>
                            </tr>`;
                quantity += parseInt(row.Quantity);
                totalAmt += parseFloat(row.PPU);
                itemsCount++;
            });

            htmlAdd += `
                            <tr style="font-weight:bold;">
                                <td >Total:</td>
                                <td style="text-align:center;">${quantity}</td>
                                <td style="text-align:right;">${totalAmt.toFixed(0)}</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="border-top"><strong>Total Items:</strong> ${itemsCount}</p>`;
        } else {
            htmlAdd += `<p style="text-align:center;">No invoice data found</p>`;
        }

        htmlAdd += `
                </div>
                <div class="no-print text-center" style="margin-top:10px;">
                    <button onclick="printInvoice()" class="btn btn-primary">Print Receipt</button>
                </div>
            </div>`;

        $('#printdetails').html(htmlAdd);
        $('#printdetailsModel').modal('show');
    });
}
function generateInvoice(CID) {
  
    swal({
        title: "Are you sure?",
        text: "This will generate an invoice and lock the items for this client and date.",
        icon: "warning",
        buttons: [
            'No, cancel it!',
            'Yes, generate it!'
        ],
        dangerMode: true,
    }).then(function (isConfirm) {
        if (isConfirm) {
            let url = "<?php echo base_url('Order/Ordercontroller/generateInvoiceout'); ?>";

            $.post(url, { cid: CID }, function (response) {
               
                try {
                    let data = JSON.parse(response);
                    printDetail();
                    if (data.status) {
                        iziToast.success({
                            title: 'Success',
                            message: data.message,
                            position: "topRight",
                            balloon: true
                        });
                       // loadall();
                        // or reload table/list
                    } else {
                        iziToast.error({
                            title: 'Error',
                            message: data.message,
                            position: "topRight",
                            balloon: true
                        });
                    }
                } catch (e) {
                    iziToast.error({
                        title: 'Error',
                        message: 'Unexpected server response.',
                        position: "topRight",
                        balloon: true
                    });
                }
            });
           
        } else {
            swal("Cancelled", "Invoice generation cancelled.", "error");
        }
    });
}
function printDetail() {
   
   
    
    $('#tableDataoutward').html('');
    $('#printdetails').html('');
    let url = "<?php echo base_url("Order/Ordercontroller/Getinvoiceout"); ?>";

    $.post(url, function(data) {
        let quantity = 0, totalAmt = 0, itemsCount = 0;
        $('#printdetails').html('');

        let clientName = "", clientPhone = "", clientEmail = "",INVNO="",invdate="";
        let currentDate = new Date().toLocaleString();

        let htmlAdd = `
            <div class="modal-body" style="background-color:white">
                <div id="invoiceToPrint">
                    <div class="text-center">
                        <img src="<?php echo Base_logo; ?>" alt="logo" style="height:80px; width:auto;"><br>
                        <h3>BIG PLANET TEL LDA</h3>
                        
                    </div>
                    `;

        if (data.length > 0) {
            clientName = data[0].cname;
            clientPhone = data[0].phoneno;
            clientEmail = data[0].email;
            invdate=data[0].Date;
            htmlAdd += `
            <h4 style="margin:10px 0;">Invoice # ${INVNO}<strong>Date/Time:</strong> ${currentDate}</h4>
            <h5 style="margin:10px 0;">Invoice Date : ${invdate}</h5>
                    <div class="border-top">
                        <p><strong>Customer:</strong> ${clientName} </p>
                      
                        <p><strong>Email:</strong> ${clientEmail}</p>
                        
                    </div>

                    <table>
                        <thead>
                            <tr style="border:1px solid black">
                                
                                <th style="border:1px solid black;text-align:left;">Item Name</th>
                                 <th style="border:1px solid black ;text-align:center;"> IMEI </th>
                                <th style="border:1px solid black;text-align:center;">Quantity</th>
                                <th style="border:1px solid black;text-align:right;">Amount</th>
                            </tr>
                        </thead>
                        <tbody>`;

            data.forEach(row => {
                htmlAdd += `
                            <tr  style="border:1px solid black"> 
                                <td style="border:1px solid black; text-align:left;" >${row.Name}</td>
                                 <td style="border:1px solid black;text-align:center;">${row.EMINO}</td>
                                <td style="border:1px solid black;text-align:center;">${row.Quantity}</td>
                                <td style="border:1px solid black;text-align:right;">${row.PPU}</td>
                            </tr>`;
                quantity += parseInt(row.Quantity);
                totalAmt += parseFloat(row.PPU);
                itemsCount++;
            });

            htmlAdd += `
                            <tr style="font-weight:bold;">
                                <td >Total:</td>
                                <td style="text-align:center;">${quantity}</td>
                                <td style="text-align:right;">${totalAmt.toFixed(0)}</td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="border-top"><strong>Total Items:</strong> ${itemsCount}</p>`;
        } else {
            htmlAdd += `<p style="text-align:center;">No invoice data found</p>`;
        }

        htmlAdd += `
                </div>
                <div class="no-print text-center" style="margin-top:10px;">
                    <button onclick="printInvoice()" class="btn btn-primary">Print Receipt</button>
                </div>
            </div>`;

        $('#printdetails').html(htmlAdd);
        $('#printdetailsModel').modal('show');
        loadotwareddata();
    view_inv_Details();
    });
}

function printInvoice() {
    window.print();
}


function loaddata(){


let startDate = $("#startDate").val(); 
let endDate = $("#endDate").val(); 

    let url = "<?php echo base_url("Order/Ordercontroller/view_orders")?>";

$.post(url,{'startDate':startDate,'endDate':endDate},function(data){

    console.log("outward data is :",data);
    
    let  html = `
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Date</th>    <th>Catgory</th> 
            <th>Product Name</th> 
              <th>Quantity</th>
                <th>barcode</th>
                  <th>EIMI NO</th>
                    
         
               <th>Action</th>
             </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.Date}</td>
<td>${element.Name}</td>
<td>${element.prdname}</td>
<td>${element.Quantity}</td>
<td>${element.BarCode}</td>
<td>${element.EMINO}</td>
<td>
  <button class="btn btn-danger btn-sm" onclick="sendrequest(${element.id})">Undo</button>'
</td>
</tr> `
});
            
        html +=` </tbody>
        </table>`
        $('#tableData').html(html);
        $('#tableDataGet').dataTable({
        responsive: false,
        lengthChange: false,
        dom:
            /*	--- Layout Structure 
                --- Options
                l	-	length changing input control
                f	-	filtering input
                t	-	The table!
                i	-	Table information summary
                p	-	pagination control
                r	-	processing display element
                B	-	buttons
                R	-	ColReorder
                S	-	Select

                --- Markup
                < and >				- div element
                <"class" and >		- div with a class
                <"#id" and >		- div with an ID
                <"#id.class" and >	- div with an ID and a class

                --- Further reading
                https://datatables.net/reference/option/dom
                --------------------------------------
                */
            "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
        /*{
            extend:    'colvis',
            text:      'Column Visibility',
            titleAttr: 'Col visibility',
            className: 'mr-sm-3'
        },*/
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
        },
        {
            extend: 'csvHtml5',
            text: 'CSV',
            titleAttr: 'Generate CSV',
            className: 'btn-outline-primary btn-sm mr-1'
        },
        {
            extend: 'copyHtml5',
            text: 'Copy',
            titleAttr: 'Copy to clipboard',
            className: 'btn-outline-primary btn-sm mr-1'
        },
        {
            extend: 'print',
            text: 'Print',
            titleAttr: 'Print Table',
            className: 'btn-outline-primary btn-sm'
        }
    ]
    });
});
}



function loadDatatow(){


let stardate = $("#startDate").val(); 
let enddate = $("#endDate").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/OrderHeads")?>";

$.post(url,{'stardate':stardate,'enddate':enddate},function(data){
    console.log("head data is :",data);
    
    let  html = `
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGetq" style="width:100%;">
        <thead >
            <tr>    <th>Order No</th>  
              <th>Order Date</th>
       <th>Barcode</th> 
            <th>Client</th>
                   <th>Origin</th> 
                   <th>Destination</th>  
             
              <th>Shipper</th> 
          
            
           

               <th>Details</th>
                   <th>Action</th>
             </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.OrderNO}</td>
<td>${element.OrderDate}</td>
<td>${element.Barcode}</td>
<td>${element.Name}</td>
<td>${element.Origin}</td>
<td>${element.Destination}</td>
<td>${element.Shipper}</td>





 <td>
                
                
                  
                  <button class="btn btn-primary" onclick="viewapproveddataPO(${element.OID})">view Details</button>
                </td>
                
                <td>
                ${element.DeliverStatus == 1 
                    ? '<button class="btn btn-success btn-sm">Order Delivered</button>' 
                    : ` <button class="btn btn-danger" onclick="undo(${element.OID})">Deleted</button>`}
            </td>
                
                  
                 
                
</tr> `
});
            
        html +=` </tbody>
        </table>`
        $('#tableData2').html(html);
        $('#tableDataGetq').dataTable({
        responsive: false,
        lengthChange: false,
        dom:
            /*	--- Layout Structure 
                --- Options
                l	-	length changing input control
                f	-	filtering input
                t	-	The table!
                i	-	Table information summary
                p	-	pagination control
                r	-	processing display element
                B	-	buttons
                R	-	ColReorder
                S	-	Select

                --- Markup
                < and >				- div element
                <"class" and >		- div with a class
                <"#id" and >		- div with an ID
                <"#id.class" and >	- div with an ID and a class

                --- Further reading
                https://datatables.net/reference/option/dom
                --------------------------------------
                */
            "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
        /*{
            extend:    'colvis',
            text:      'Column Visibility',
            titleAttr: 'Col visibility',
            className: 'mr-sm-3'
        },*/
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
        },
        {
            extend: 'csvHtml5',
            text: 'CSV',
            titleAttr: 'Generate CSV',
            className: 'btn-outline-primary btn-sm mr-1'
        },
        {
            extend: 'copyHtml5',
            text: 'Copy',
            titleAttr: 'Copy to clipboard',
            className: 'btn-outline-primary btn-sm mr-1'
        },
        {
            extend: 'print',
            text: 'Print',
            titleAttr: 'Print Table',
            className: 'btn-outline-primary btn-sm'
        }
    ]
    });
});
}


function Addbarcode(id) {
    // Set values
    $("#orderCode").val(id);
    
    $('#newbarcode').val('');
    // Show modal
    $("#modaldemo8barcode").modal('toggle');
   
    // Focus the input with ID 'barcode' after the modal is shown
    $('#modaldemo8barcode').on('shown.bs.modal', function () {
        $('#newbarcode').focus();
    });
}

 


                
$("#AddnewBarcode").click(function(e) {
    e.preventDefault();

    let OID = $("#orderCode").val(); 
    let newbarcode = $("#newbarcode").val(); 
    if(newbarcode==''){
    iziToast.error({
                        title:'danger',message: `
                    Barcode is Missing`,position:"topRight",balloon: true});
                    return;
}
//    if(newbarcode.length<18){
//     iziToast.error({
//                         title:'danger',message: `
//                     Barcode Minimum Length is 18!`,position:"topRight",balloon: true});
//                     return;
// }
    let url = "<?php echo base_url('Order/Ordercontroller/updatebarcode') ?>";

    $.post(url, {
        'OID': OID,
        'newbarcode': newbarcode,
        
    }, function(data) {
        iziToast.success({
            title: 'Success',
            message: "Bar Code Added Successfully",
            position: "topRight",
            balloon: true
        });

       // location.reload();
       loadDatatow();
  
    });
});

function sendrequest(id){  
    swal({
        title: "Are you sure to Undo selected record?",
        text: "You will not be able to recover this record!",
        icon: "warning",
        buttons: [
            'No, cancel it!',
            'Yes, I am sure!'
        ],
        dangerMode: true,
    }).then(function(isConfirm) {
        if (isConfirm) {
            let url = "<?php echo base_url('Order/Ordercontroller/undoprd'); ?>";
            $.post(url, { id: id }, function(response) {
                // Expecting response as JSON: {status: true/false, message: "..."}
                try {
                    let data = JSON.parse(response);

                    if (data.status) {
                        iziToast.success({
                            title: 'Success',
                            message: data.message,
                            position: "topRight",
                            balloon: true
                        });
                        loadall(); // Refresh the list
                    } else {
                        iziToast.error({
                            title: 'Error',
                            message: data.message,
                            position: "topRight",
                            balloon: true
                        });
                    }
                } catch (e) {
                    iziToast.error({
                        title: 'Error',
                        message: 'Unexpected server response.',
                        position: "topRight",
                        balloon: true
                    });
                }
            });
        } else {
            swal("Cancelled", "Your request is cancelled :)", "error");
        }
    });
}


 
function sendrequestoutward(id){  
//alert(PODID);

        swal({
      title: "Are you sure to Undo selected record?",
      text: "You will not be able to recover this record!",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        
        let url = "<?php echo base_url("Order/Ordercontroller/undoprdoutwardout")?>";
          $.post(url,{"id":id,},function(data){ 
           
         
              iziToast.error({title:'Danger',message: "Data Deleted Successfully!",position:"topRight",balloon: true});
              loadall();
       
       $//("#amount").Val('');
       //D//eptBalancesize();
///$("#dateModel").modal('toggle');
             
           });
      } else {
        swal("Cancelled", "Your Requisation is Canclled :)", "error");
      }
    })
 }


 
function undo(id){  
//alert(PODID);

        swal({
      title: "Are you sure to Undo selected record?",
      text: "You will not be able to recover this record!",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        
        let url = "<?php echo base_url("Order/Ordercontroller/undoprdhead")?>";
          $.post(url,{"id":id,},function(data){ 
           
         
              iziToast.error({title:'Danger',message: "Data Deleted Successfully!",position:"topRight",balloon: true});
           loadDatatow();
       
       $//("#amount").Val('');
       //D//eptBalancesize();
///$("#dateModel").modal('toggle');
             
           });
      } else {
        swal("Cancelled", "Your Requisation is Canclled :)", "error");
      }
    })
 }

function loadclients()
{
    let url = "<?php echo base_url("Clients/ClientsController/loadClientsactive")?>";
$.post(url,function(data){
    $("#CID").html('');
    let html = `<option value="">Select Client</option>`
    data.forEach(element => {
        html += `<option value="${element.CID}">${element.Name} (${element.phoneno})</option>`
    });
    $("#CID").html(html);
  
})
}

function loadCategory()
{
    //alert("I am here");
    let url = "<?php echo base_url("Category/CategoryController/loadActiveCategory")?>";
$.post(url,function(data){
    console.log("Catagpry data is :",data);
    
    $("#CatID").html('');
    let html = `<option value="">Select Category</option>`
    data.forEach(element => {
        html += `<option value="${element.CatID}">${element.Name}</option>`
    });
    $("#CatID").html(html);
    $("#CatIDnew").html(html);
    
})
}
   

function loadItems(){
    let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemss")?>";
$.post(url,{'CatID':CatID},function(data){
    $("#IID").html('');
    let html = `<option value="">Select Items</option>`
    data.forEach(element => {
        html += `<option value="${element.ItemID}">${element.Name}</option>`
    });
    $("#IID").html(html);
  
})
}
function loadItemsdetails(){
    let IID = $("#IID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemssDetails")?>";
$.post(url,{'IID':IID},function(data){
   // $("#IID").html('');
  console.log("Details if iewms is :",data);
  
    data.forEach(element => {
      
        $('#SalePriceiTEM').val(`${element.SalePrice}`);
       
       

        $('#purchasePriceITEM').val(`${element.purchasePrice}`);
    });
    
  
})
}

// function getMaxOrderNo(){
//     let url = "<?php echo base_url("Order/Ordercontroller/getMaxOrderNo")?>";
//     $.post(url,
// {},function(data)
// {
//     $("#Orderno").val(data)
// });
// }

$(document).ready(function(){
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const formattedDateTime = `${year}-${month}-${day}`;

    $('#odate').val(formattedDateTime);
     
    $('#startDate').val(formattedDateTime);
    $('#endDate').val(formattedDateTime);

    $('#startDate_out').val(formattedDateTime);
    $('#endDate_out').val(formattedDateTime);
  //  getMaxOrderNo()
loadclients();
    loadotwareddata();

    view_inv_Details();
    //$("#update").css(`display`,'none'); 
 
   
    $("#CatIDnew").select2({ width: '100%',dropdownParent: $("#modaldemo8") })
    $("#IID").select2({ width: '100%' })
    $("#CID").select2({ width: '100%' })

   
})
</script>


    