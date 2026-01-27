
<?php 
if ($this->session->has_userdata('user_id')) {
    
$this->load->view('layouts/head'); ?>

<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
<div class="page-inner">
<!-- BEGIN Left Aside -->
<?php $this->load->view('layouts/aside.php'); ?>
<!-- END Left Aside -->
<div class="page-content-wrapper">
<!-- BEGIN Page Header -->
<?php $this->load->view('layouts/topbar.php'); ?>
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
  .thermal-invoice {
    font-family: Arial, sans-serif;
    font-size: 11.5px;
    color: #000;
    padding: 6px;
    width: 100%;
    position: relative;
    line-height: 1.4;
}

.thermal-invoice img {
    display: block;
    margin: 0 auto 6px;
    width: 60px;
    height: 60px;
    object-fit: contain;
    filter: contrast(150%) brightness(1.3);
}

.thermal-invoice h2 {
    font-size: 14px;
    margin: 6px 0;
    text-align: center;
    font-weight: bold;
    color: #000;
}

.thermal-invoice p {
    margin: 2px 0;
    font-size: 11px;
    text-align: left;
    color: #000;
}

.invoice-header {
    text-align: center;
    margin-bottom: 10px;
}

.invoice-header p,
.invoice-header h2 {
    font-size: 13px;
    margin: 2px 0;
    text-align: center;
    color: #000;
    font-weight: bold;
}

.thermal-invoice table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    font-size: 11px;
    color: #000;
}

.thermal-invoice th,
.thermal-invoice td {
    padding: 4px 3px;
    border-bottom: 1px solid #000;
    font-size: 11px;
    text-align: left;
    color: #000;
    font-weight: 600;
}

.thermal-invoice th {
    background-color: #000;
    color: #fff;
    font-weight: bold;
}

.text-right {
    text-align: right;
}

.text-center {
    text-align: center;
}

.text-left {
    text-align: left;
}

.summary-row {
    font-weight: bold;
    background: #eaeaea;
    color: #000;
}

.invoice-tagline {
    text-align: center;
    font-size: 10px;
    margin-top: 12px;
    font-style: italic;
    color: #000;
}

.bottom-right-date {
    position: absolute;
    bottom: 5px;
    right: 5px;
    font-size: 10px;
    font-style: italic;
    color: #000;
    display: none;
}

@media print {
    body {
        margin: 0;
        padding: 0;
        background: #fff;
        color: #000;
    }

    #printButton {
        display: none;
    }

    #barcodeModal {
        display: block;
    }

    .bottom-right-date {
        display: block !important;
    }

    @page {
        size: 82mm 210mm;
        margin: 0;
    }

    img {
        filter: contrast(160%) brightness(1.4);
    }
}

</style>




      <div class="modal fade" id="printdetailsModel">
    <div class="modal-dialog" role="document" style="max-width: 360px;"> <!-- Smaller width for thermal print -->
        <div class="modal-content modal-content-demo">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h6 class="modal-title">Print Invoice</h6>
                <div class="no-print">
                    <button onclick="printInvoice()" class="btn btn-primary btn-sm">
                         Print Recript
                    </button>
                </div>
                <button class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-2">
               <div id="printdetails"></div>
            </div>
            <div class="card-footer text-muted text-center no-print" style="font-size: 12px;">
                
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
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Company Name:</label>
                                                            <input type="text" class="form-control" id="Namec"
                                                                placeholder="Enter Name" autocomplete="Namec">
                                                        </div>
  </div>
                                           
  <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">VAT NO:</label>
                                                            <input type="text" class="form-control" id="VAt"
                                                                placeholder="Enter VAT" autocomplete="Namec">
                                                        </div>
  </div>
            
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Address:</label>
                                                            <input type="text" class="form-control" id="City"
                                                                placeholder="Enter Address" autocomplete="Address">
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

    


    <div class="col-lg-12 p-5">

        <!-- Start here with columns -->
        
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
               Sales Transaction
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
             
            </div>  
            </div>

            <div class="panel-container show">
    <div class="panel-content">
        <!-- Nav Tabs -->
       

            <!-- Outward Tab -->
            
         <!-- Radio Buttons -->
<div class="row p-2">
    <div class="col-md-12">
        <label><strong>Select Input Method:</strong></label>
        <div>
            <label class="mr-3">
                <input type="radio" name="inputType" value="barcode" checked onchange="toggleInputType()"> Bar Code
            </label>
            <label>
                <input type="radio" name="inputType" value="product" onchange="toggleInputType()"> Product
            </label>
        </div>
    </div>
</div>

<!-- Customer & Input Fields -->
<div class="row p-2 align-items-end">

    <!-- Customer Dropdown -->
    <div class="col-md-3">
        <div class="form-group">
            <label class="form-label">Select Customer *</label>
            <select class="custom-select" id="CID"></select>
        </div>
    </div>

    <!-- Add Customer Button -->
    <div class="col-md-1">
        <button class="btn btn-primary btn-sm" id="openModelclientbtn">
            <i class="fal fa-plus-circle"></i>
        </button>
    </div>

    <!-- Bar Code Input -->
    <div class="col-md-3" id="barcodeSection">
        <label class="form-label">Bar Code</label>
        <input type="text" class="form-control" id="outbarcode">
    </div>

    <!-- Product Dropdown -->
    <div class="col-md-4" id="productSection" style="display: none;">
        <div class="form-group">
            <label class="form-label">Select Product:</label>
            <select id="IIDoutward" class="form-control" onchange="outwardviaitem()"></select>
        </div>
    </div>
</div>

<!-- Toggle Script -->
<script>
    function toggleInputType() {
        const selected = document.querySelector('input[name="inputType"]:checked').value;
        if (selected === 'barcode') {
            document.getElementById('barcodeSection').style.display = 'block';
            document.getElementById('productSection').style.display = 'none';
        } else {
            document.getElementById('barcodeSection').style.display = 'none';
            document.getElementById('productSection').style.display = 'block';
        }
    }
</script>

                <div class="col-md-12" id="tableDataoutward"></div>
            
    </div>
</div>


<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script src="<?php echo base_url("/assets/js/JsBarcode.all.min.js")?>";></script>
<script>
let isScanning = false; // Flag to prevent double trigger

$("#outbarcode").on('keyup', function () {
    const val = $(this).val();
    if (val.length === 13 && !isScanning) {
        isScanning = true;
        outwardviaitem(); // Call scanning function
    }
});

function outwardviaitem() {
    let IIDoutward = $('#IIDoutward').val().trim();
    let CID = $('#CID').val();

    if (CID === '') {
        iziToast.error({
            title: 'Error',
            message: 'Customer is required!',
            position: "bottomRight",
            balloon: true
        });
        isScanning = false;
        return;
    }

    $.ajax({
        url: 'Order/Ordercontroller/Scaning',
        type: 'POST',
        dataType: 'json',
        data: {
            order_number: IIDoutward,
            CID: CID
        },
        success: function (response) {
            if (response.status === 'success') {
                iziToast.success({
                    title: 'Success',
                    message: response.message,
                    position: "bottomRight"
                });
                loadall();
                $('#outbarcode').val('');
            } else {
                iziToast.error({
                    title: 'Error',
                    message: response.message,
                    position: "topRight"
                });
            }
            isScanning = false;
        },
        error: function (xhr, status, error) {
            iziToast.error({
                title: 'AJAX Error',
                message: error || 'Server error occurred.',
                position: "topRight"
            });
            isScanning = false;
        }
    });
}

function outward() {
    let orderNumber = $('#outbarcode').val().trim();
    let CID = $('#CID').val();

    if (CID === '') {
        iziToast.error({
            title: 'Error',
            message: 'Customer is required!',
            position: "bottomRight",
            balloon: true
        });
        isScanning = false;
        return;
    }

    $.ajax({
        url: 'Order/Ordercontroller/Scaning',
        type: 'POST',
        dataType: 'json',
        data: {
            order_number: orderNumber,
            CID: CID
        },
        success: function (response) {
            if (!response || typeof response !== 'object') {
                iziToast.error({
                    title: 'Error',
                    message: 'Invalid server response.',
                    position: "topRight"
                });
                return;
            }

            if (response.status === 'error') {
                iziToast.error({
                    title: 'Error',
                    message: response.message,
                    position: "topRight"
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: response.message,
                    position: "bottomRight"
                });
                // Optionally refresh UI
                loadall();
            }

            $('#outbarcode').val('');
            isScanning = false;
        },
        error: function (xhr, status, error) {
            iziToast.error({
                title: 'AJAX Error',
                message: error || 'Server error occurred.',
                position: "topRight"
            });
            isScanning = false;
        }
    });
}

$( "#itemsavedsubmit").click(function(e){
e.preventDefault()

let CatID = $("#CatIDnew").val();
                    if(CatID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Category is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Code = $("#Code").val();
                    if(Code.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Code is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Name = $("#Name").val();
                    if(Name.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let SalePrice = $("#SalePrice").val();
                    if(SalePrice.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Sale Price is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let purchasePrice = $("#purchasePrice").val();
                    if(purchasePrice.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Purchase Price is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    let status = $("#status").is(":checked")?1:0;
     
                    let fd = new FormData();

fd.append('CatID', CatID);
fd.append('Code', Code);
fd.append('Name', Name);
fd.append('SalePrice', SalePrice);
fd.append('purchasePrice', purchasePrice);
fd.append('image',  $("#image")[0].files[0]); // Make sure this is a File/Blob object if it's an image
fd.append('status', status);


let url = "<?php echo base_url("Items/ItemsController/AddItems")?>";
$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
 Item inserted Successfully!`,position:"bottomRight",balloon: true
});
loadItems();
$("#modaldemo8").modal('toggle');
getMaxItemNo();
},
    error: function (xhr, status, error) {
        iziToast.error({
            title: 'Error',
            message: "Something went wrong!",
            position: "bottomRight",
            balloon: true
        });
    }
            });

// $.post(url,
// { "CatID":CatID, "Code":Code, "Name":Name, "SalePrice":SalePrice, "purchasePrice":purchasePrice, "image":image, "status":status,},function(data)
// {
//     iziToast.success({title:'Success',message: `
//  Items inserted Successfully!`,position:"bottomRight",balloon: true
// });
//     loadData();$("#CatID").val('').trigger('change.select2');;$("#Code").val('');$("#Name").val('');$("#SalePrice").val('0');$("#purchasePrice").val('0');$("#image").val(null);$("#status").prop('checked',true);
//     var image = document.getElementById('picUserShow');
//     image.src = '<?php echo base_url(); ?>assets/img/upload.png';
//     getMaxItemNo()
// });
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
$('#qty').on('input blur change', function () {
            var qty = parseFloat($('#qty').val()) || 0;
            var ppu = parseFloat($('#PPU').val()) || 0;
            var amount = qty * ppu;

            $('#Amount').val(amount.toFixed(2));
        });
        function submitOrder() {
    let odate = $("#odate").val(); 
    let IID = $("#IID").val(); 
    let qty = $("#qty").val(); 
    let purchasePrice = $("#purchasePriceITEM").val(); 
    let barcode = $("#barcode").val(); 
    let salesprice = $("#SalePriceiTEM").val(); 
    let EIMI = $("#EIMI").val(); 
    let Balance = $("#Balance").val(); 

    let inQty = parseFloat($("#qty").val()) || 0;
let balanceorde = parseFloat($("#Balance").val()) || 0;

if (inQty > balanceorde) {
    iziToast.error({
        title: 'Error',
        message: 'Quantity is greater than balance',
        position: 'bottomRight',
        balloon: true
    });
    return; // Stop further execution
}
    if (salesprice == '') {
        iziToast.error({
            title: 'Error', message: 'Sale Price is Required!', position: "bottomRight", balloon: true
        });
        return;
    }

    if (IID == '') {
        iziToast.error({
            title: 'Error', message: 'Product is Required!', position: "bottomRight", balloon: true
        });
        return;
    }

    if (odate == '') {
        iziToast.error({
            title: 'Error', message: 'Date is Required!', position: "bottomRight", balloon: true
        });
        return;
    }

    if (qty == '') {
        iziToast.error({
            title: 'Error', message: 'Quantity is Required!', position: "topRight", balloon: true
        });
        return;
    }

    if (purchasePrice == '') {
        iziToast.error({
            title: 'Error', message: 'Purchase Price is Required!', position: "bottomRight", balloon: true
        });
        return;
    }

    if (EIMI == '') {
        iziToast.error({
            title: 'Error', message: 'EIMI is Required!', position: "bottomRight", balloon: true
        });
        return;
    }

    let url = "<?php echo base_url('Order/Ordercontroller/AddOrder_head'); ?>";

    $.post(url, {
        'EIMI': EIMI,
        'odate': odate,
        'purchasePrice': purchasePrice,
        'salesprice': salesprice,
        'IID': IID,
        'barcode': barcode,
        'qty': qty
    }, function (data) {
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

        loadall();
        $("#salesprice").val('');
        $("#IID").val('');
        $("#qty").val('');
        // Reset fields
        
        $("#EIMI").val('');
    });
}

// Manual submit button
$("#submit").click(function (e) {
   
    submitOrder();
});

// Auto submit when EIMI reaches 14 characters
// $("#EIMI").on('keyup', function () {
//     if ($(this).val().length === 13) {
//         submitOrder();
//     }
// });


$( "#update").click(function(e){
    e.preventDefault()
let CID = $("#CID").val(); 
let OID = $("#Orderno").val(); 
let odate = $("#odate").val(); 
    
let Origin = $("#Origin").val(); 
let Destination = $("#Destination").val(); 
let Shipper = $("#Shipper").val(); 
let barcode = $("#barcode").val(); 
let Remarks = $("#Remarks").val(); 
if(CID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Client is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(barcode =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Bar Code is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
let url = "<?php echo base_url("Order/Ordercontroller/updated")?>";

    $.post(url,{'CID':CID,'odate':odate,'Origin':Origin,'Destination':Destination,
        'Shipper':Shipper,'barcode':barcode,'Remarks':Remarks,'OID':OID},function(data){ 
       // console.log("Data is",data)
        iziToast.success({title:'Success',message: "Order head updated Successfully",position:"topRight",balloon: true});
       // location.reload();
      
        loaddata();
    });
    
});
function getMaxItemNo(){
    let url = "<?php echo base_url("Items/ItemsController/getMaxItemNo")?>";
    $.post(url,
{},function(data)
{
    $("#Code").val(data)
});
}
                    
$("#submit4").click(function(e) {
    e.preventDefault();

    let OID = $("#Orderno").val(); 
    let CatID = 0; 
    let IID = 0; 
    let qty = $("#qty").val(); 
    let PPU = $("#PPU").val(); 
    let purchasePrice = $("#PPU").val(); 
    let Amount = 0; 
    let Dimensions = ''; 
    let Remarks = $("#Description").val(); 
   
    let url = "<?php echo base_url('Order/Ordercontroller/AddOrder_Details') ?>";

    $.post(url, {
        'OID': OID,
        'CatID': CatID,
        'IID': IID,
        'qty': qty,
        'PPU': PPU,
        'purchasePrice': purchasePrice,
        'Amount': Amount,
        'Dimensions': Dimensions,
        'Remarks': Remarks
    }, function(data) {
        iziToast.success({
            title: 'Success',
            message: "Order Details generated Successfully",
            position: "topRight",
            balloon: true
        });

       // location.reload();
       loaddata();
       loadDatatow();
       $("#CatID").val(''); 
     $("#IID").val('');  
   $("#qty").val('');  
    $("#PPU").val('');  
   $("#purchasePrice").val('');  
     $("#Amount").val('');  
     $("#Dimensions").val('');  
   $("#Description").val('');  
    });
});

function loadall(){
    loadotwareddata();
loaddata();
Stockbalance();
view_inv_Details();
}
function printOrderDetails(printDiv) {
    
    $(`#${printDiv}`).printThis({
        importCSS: false,
        importStyle: true,
        removeInline: false,
    
    });
}

function viewapproveddataPO(id) {
    let url = "<?php echo base_url("Order/Ordercontroller/OrderHeadsdetails");?>";
    $.post(url, { "OID": id },async function (data) {
        if (data) {
            let barcodeGet =data[0]['Barcode'] 
            let barcodeId1 = `barcode-${barcodeGet}-1`;
            var canvas = await document.createElement("canvas");

// Generate barcode on canvas
await JsBarcode(canvas, barcodeGet, {
    format: "CODE128",
    lineColor: "#000",
    width: 2,
    height: 50,
    displayValue: true // Hide text, since it's already below the barcode
});

            let totalQty = 0;
            let grandTotal = 0;
            let counter = 0;

            let html = `
                <div class='row mb-3'>
                    <div class='col-md-9'></div>
                    <div class='col-md-3'>
                        <button class='btn btn-warning w-100' onclick='printOrderDetails("printOrder")'>Print</button>
                    </div>
                </div>
                <div id='printOrder' style="border: 1px solid black; padding: 20px;">
                    <table class="table table-bordered table-hover table-responsive w-100 d-block d-md-table">
                        <thead>
                            <tr>
                                <th colspan="10" style="text-align:center; font-weight:bold; font-size:36px; color:white; background-color:#62478A;">ORDER</th>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Logo" height='100px' width='100px' style='border-radius:50%' />
                                    <b style="font-size:20px;">Waleed Quilts (Razaian)</b>
                                    <p>Gurr Mandi Bazar, Sialkot, 51310, TEL: +92 333 7252925</p>
                                </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td colspan="4" style="font-weight:bold; font-size:15px;">
                                    <b>Client Name:</b> <span id="suppliername"></span><br>
                                    <b>Address:</b> <span id="address"></span><br>
                                    <b>Phone No:</b> <span id="phoneno"></span><br>
                                  
                                </td>
                                <td colspan="4" style="font-weight:bold; font-size:15px;">
                                    <b>Order Date:</b> <span id="date"></span><br>
                                      <b>Order #:</b> <span id="email"></span><br>
                                          <img src="${canvas.toDataURL("image/png")}" id="${barcodeId1}" alt="barcode1">
              <br>
                                    
                                </td>
                            </tr>
                            <tr style="background-color:#62478A; color:white;">
                                <th style="border:1px solid black;">Serial No</th>
                                <th colspan="3" style="border:1px solid black;">Product Name</th>
                           
                                <th style="text-align:center; border:1px solid black;">Quantity</th>
                                     <th style="text-align:center; border:1px solid black;">COD</th>
                            
                            </tr>
                        </thead>
                        <tbody>`;

            data.forEach((item, index) => {
                let amount = parseFloat(item.Amount) || 0;
                let price = parseFloat(item.SalesPrice) || 0;
                let qty = parseFloat(item.Quantity) || 0;

                totalQty += qty;
                grandTotal += price;
                counter++;

                html += `
                    <tr>
                        <td style="text-align:center; border:1px solid black;">${counter}</td>
                        <td colspan="3" style="border:1px solid black;">${item.ItemName}</td>
                        
                        <td style="text-align:center; border:1px solid black;">${qty}</td>
                        <td style="text-align:right; border:1px solid black;">${price.toFixed(2)}</td>
                      
                    </tr>`;
            });

            html += `
                    <tr>
                        <td></td>
                        <td ><b>Total Items: ${counter}</b></td>
                        <td></td>
                      
                        <td style="text-align:right; border:1px solid black;"><b>Total:</b></td>
                          <td style="text-align:center; border:1px solid black;">${totalQty}</td>
                        <td style="text-align:right; border:1px solid black;"><b>${grandTotal.toFixed(2)}</b></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>`;

            // Inject HTML
            $('#approvedDtPO').html(html);

            // Populate fields
            $('#suppliername').html(data[0]['Name']);
            $('#address').html(data[0]['City']);
            $('#phoneno').html(data[0]['phoneno']);
            $('#email').html(data[0]['Description']);
            $('#date').html(data[0]['OrderDate']);
            $('#pono').html(data[0]['OID']);
            $('#pono').html(data[0]['OID']);
            $('#Barcode').html(data[0]['Barcode']);

            // Show modal
            $("#dateModelPO").modal('toggle');
        }
    });
}



    // Replace with your actual dynamic barcode value

    
    function Stockbalance(){







let url = "<?php echo base_url("Order/Ordercontroller/invtnrotyBalance")?>";

$.post(url,function(data){
let  html = `
<table class="table table-responsive w-100 d-block table-hover" id="Stockbalancetable" style="width:100%;">
<thead >
    <tr>     <th style="width: 15%;">Category</th>
        <th style="width: 15%;">Product Name</th>
        <th style="width: 15%;">Color</th>
        <th style="width: 15%;">Size</th>
        <th style="width: 15%;">IN</th>
        <th style="width: 15%;">OUT</th>
        <th style="width: 15%;">Balance</th>
            
 
       
     </tr>
</thead>
<tbody>`;
data.forEach(element => {

html += ` <tr>
<td>${element.CatName}</td>
<td>${element.Name}</td>
<td>${element.ColorName}</td>
<td>${element.SizeName}</td>
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
    let url = "<?php echo base_url("Order/Ordercontroller/view_ordersoutward")?>";

    $.post(url, function (data) {
        console.log("New outward data is:", data);

        let totalAmount = 0;

        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="tableDataGetoutward" style="width:100%;">
            <thead>
                <tr>    
                    <th>Date</th>     
                    <th>Product Name</th> 
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Discount</th>
                    <th>Amount</th>
                    <th>updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>`;

            data.forEach((element, index) => {
    totalAmount += parseFloat(element.Amount);
    html += `<tr>
        <td>${formatDate(element.Date)}</td>
        <td>${element.Name} ${element.ColorName} ${element.SizeName}</td>
        <td>
            <input type="number" id="qty-${index}" class="form-control form-control-sm" value="${element.Quantity}" style="width: 80px; display: inline-block;" />
            <input type="hidden" id="SalesPrices-${index}" class="form-control form-control-sm" value="${element.SalesPrices}" style="width: 80px; display: inline-block;" />
            
        </td>
        <td>${element.SalesPrices}</td>
        <td>${element.Discount}</td>
        <td>${element.Amount}</td>
        <td>
            <button class="btn btn-success btn-sm" onclick="updateQuantity(${element.id},${element.ITID},${index})">updated</button>
        </td>
        <td>
            <button class="btn btn-danger btn-sm" onclick="sendrequestoutward(${element.id})">Delete</button>
        </td>
    </tr>`;
});


        html += `
            <tr>
                <td colspan="" class="text-end fw-bold"></td>
                <td colspan="2" class="fw-bold">Total: Rs. ${totalAmount.toFixed(2)}</td>
                <td colspan="2" class="fw-bold" id="damount">Dis Amount Rs.: </td>
                <td colspan="2" class="fw-bold" id="totalAmount">Grand Total Rs. ${totalAmount.toFixed(2)}</td>
               
            </tr>
            <tr>
                <td colspan="3">
                    <input type="number" id="discount_percent" class="form-control" placeholder="Discount %" oninput="applyDiscount(${totalAmount})">
                </td>
                <td colspan="3">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary" onclick="generateInvoice(${data[0].CLLID})">Generate Invoice</button>
                    </div>
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
function updateQuantity(tid, itid, index) {
    let quantity = $(`#qty-${index}`).val();
    let SalesPrices = $(`#SalesPrices-${index}`).val();
    if (quantity <= 0) {
       
        iziToast.success({title:'error',message: "Quantity must be greater than 0.",position:"topRight",balloon: true});
        return;
    }

    $.ajax({
        url: "<?php echo base_url('Order/Ordercontroller/updateOutwardQuantity'); ?>",
        method: "POST",
        data: {
            TID: tid,
            ITID: itid,
            Quantity: quantity,
            SalesPrices:SalesPrices
        },
        success: function(response) {
            if (response.status === 'success') {
              
                // Optionally reload table here
                iziToast.success({title:'success',message: "Quantity updated successfully!",position:"topRight",balloon: true});
                loadotwareddata();
            } else {
                //alert("Failed: " + response.message);
                iziToast.success({title:'error',message: response.message ,position:"topRight",balloon: true});
            }
        },
        error: function() {
            alert("AJAX error occurred.");
        }
    });
}

function applyDiscount(originalTotal) {
    let discountPercent = parseFloat($("#discount_percent").val()) || 0;
    let damount=originalTotal * discountPercent / 100;
    let discountedAmount = originalTotal - (originalTotal * discountPercent / 100);
    $("#totalAmount").text(`Rs. ${discountedAmount.toFixed(2)}`);
    $("#damount").text(`Rs. ${damount.toFixed(2)}`);
}


function view_inv_Details() {
    let startDate = $("#startDate_out").val(); 
    let endDate = $("#endDate_out").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/view_inv_Details")?>";
    $.post(url,{'startDate':startDate,'endDate':endDate},function(data){

        console.log("New outward data is:",data);
      
        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="outwarddetailstable" style="width:100%;">
            <thead>
                <tr>    
                    <th>Date</th>     
                    <th>invoice</th> 
                    
                    <th>Total Quantity</th> 
                    <th>Grand Total</th>
                    <th>view Invoice</th>
                </tr>
            </thead>
            <tbody>`;
        let totalQuantity=0;
        let totalamount=0;
        data.forEach(element => {
            totalQuantity+=parseInt(element.Quantity);
            totalamount+=parseInt(element.Grandtotal);
            html += `<tr>
                <td>${formatDate(element.Date)}</td>
                <td>MUN-${element.INVNO}</td>
                <td>${element.Quantity}</td>
                <td>${element.Grandtotal}</td>
           
                <td>
                    <button class="btn btn-info btn-sm" onclick="invdetails(${element.INVNO})">Print Invoice</button>
                </td>
            </tr>`;
        });
        html += `

</tbody>
<tr>
                <td></td>
              
                     <td>Total Quantity</td>
                <td>${totalQuantity}</td>
                <td>Total Amount:</td>
                <td>${totalamount}</td>
           
                
            </tr>
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
                    className: 'btn-outline-primary btn-sm',
                    customize: function (win) {
    // Get current date and time
    var currentDate = new Date();
    var day = currentDate.getDate();
    var month = currentDate.getMonth() + 1;
    var year = currentDate.getFullYear();
    var hours = currentDate.getHours();
    var minutes = currentDate.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // 12-hour clock
    minutes = minutes < 10 ? '0' + minutes : minutes;
    var printedDate = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ' ' + ampm;

    // Get company information

    // Prepend the company information to the table header
    $(win.document.body).find('thead').prepend(
        "<tr class='header-print'>" + 
            "<th colspan='3' style='text-align: left;'>" + 
                "<img src='http://localhost:/Muntaha/assets/img/logo.jpg' style='position:relative; top:0; left:0;' width='250px' height='150px' />" + 
            "</th>" + 
            "<th colspan='6' style='text-align: left;'>" + 
                "<h4>" + companyName + "</h4>" + 
                "<h4>" + companyAddress + "</h4>" + 
                "<h4>" + companyPhone + "</h4>" + 
            "</th>" + 
        "</tr>" +
        "<tr class='header-print'>" + 
            "<th colspan='12'><div style='text-align: right;'>Printed Date: " + printedDate + "</div></th>" + 
        "</tr>"
    );
}

                
            }

            ]
        });
    });
}
function formatDate(dateStr) {
    if (!dateStr) return '';
    const date = new Date(dateStr);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}
function invdetails(invno) {
  let url = "<?php echo base_url('Order/Ordercontroller/Getinvoiceinv'); ?>";
  $.post(url, { INVNO: invno }, function (data) {
    const header = data[0] || {};
    const Year = header.Year || '';
    const INVNO_val = header.INVNO || '';
    const invdate = header.Date || '';

    // Current Date & Time for Print
    const now = new Date();
    const printDate = now.toLocaleDateString();
    const printTime = now.toLocaleTimeString();

    let html = `

</style>

<div class="thermal-invoice" id="invoiceToPrint">
  <div class="invoice-header">
    <img src="<?php echo Base_logo; ?>" alt="Logo">
    <p><?php echo Base_CompanyName; ?></p>
    <p>TEL# <?php echo Base_CompanyPhone; ?></p>
    <p><?php echo Base_CompanyURL; ?></p>
    <h2>INVOICE</h2>
  </div>

  <p>Invoice No: MUN-${Year}/${INVNO_val}</p>
  <p>Date: ${formatDate(invdate)}</p>

  <table>
    <thead>
      <tr>
        <th class="text-left">Item</th>
        <th class="text-center">Size</th>
        <th class="text-center">Qty</th>
        <th class="text-right">Rate</th>
        <th class="text-right">Amt</th>
      </tr>
    </thead>
    <tbody>`;

    let totalQty = 0, totalAmt = 0, serial = 0;

    data.forEach(row => {
      serial++;
      const qty = parseInt(row.Quantity, 10);
      const rate = parseFloat(row.SalesPrices);
      const discount = parseFloat(row.Discount);
      const amount = rate - discount;
      totalQty += qty;
      totalAmt += amount;

      html += `
      <tr>
        <td class="text-left">
        ${row.EMINO}<br>
        ${row.Name} ${row.ColorName} </td>
        
        <td class="text-center">${row.SizeName}</td>
        <td class="text-center">${qty}</td>
        <td class="text-right">${amount.toFixed(0)}</td>
        <td class="text-right">${amount.toFixed(0)}</td>
      </tr>`;
    });

    // Show Total Items column only if there are items
    let totalItemsTd = '';
    if (serial > 0) {
      totalItemsTd = `<td class="text-right">Total Items: ${serial}</td>`;
    } else {
      totalItemsTd = `<td class="text-right" colspan="1"></td>`;
    }

    html += `
      <tr class="summary-row">
        ${totalItemsTd}
       
        <td colspan="3" class="text-right">Subtotal:</td>
        <td class="text-right">${data[0].Amount}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="3" class="text-right">Discount (${data[0].DiscountPercent}%):</td>
        <td colspan="2" class="text-right">-${data[0].DiscountAmount}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="3" class="text-right">Grand Total:</td>
        <td colspan="2" class="text-right">${data[0].Grandtotal}</td>
      </tr>
    </tbody>
  </table>

<div class="invoice-tagline">
Thank you for Shopping  At Muntaha Collection <br>Have wonderful Day ;)<br>
    Powered by Stellar Business Solutions<br>
    <small>Printed on: ${printDate} ${printTime}</small>
    <br>
    </div>
</div>`;

    $('#printdetails').html(html);
    $('#printdetailsModel').modal('show');
  });
}



function generateInvoice(CID) {
    let discount = $('#discount_percent').val(); // Correct jQuery usage

    if (!discount) {
        iziToast.warning({
            title: 'Warning',
            message: 'Please enter discount percent before generating invoice.',
            position: "topRight",
            balloon: true
        });
        return;
    }

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
            let url = "<?php echo base_url('Order/Ordercontroller/generateInvoice')?>";

            $.post(url, { cid: CID, discount_percent: discount }, function (response) {
                printDetail();
                try {
                    let data = typeof response === 'string' ? JSON.parse(response) : response;

                    if (data.status) {
                        iziToast.success({
                            title: 'Success',
                            message: data.message,
                            position: "topRight",
                            balloon: true
                        });

                       
                        loadall(); // optionally reload table or data
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
        printDetail();
    });
}


function printDetail() {
    $('#tableDataoutward').html('');
    let url = "<?php echo base_url('Order/Ordercontroller/Getinvoice'); ?>";

    $.post(url, function(data) {
        const header = data[0] || {};
    const Year = header.Year || '';
    const INVNO_val = header.INVNO || '';
    const invdate = header.Date || '';

    // Current Date & Time for Print
    const now = new Date();
    const printDate = now.toLocaleDateString();
    const printTime = now.toLocaleTimeString();

    let html = `

</style>

<div class="thermal-invoice" id="invoiceToPrint">
  <div class="invoice-header">
    <img src="<?php echo Base_logo; ?>" alt="Logo">
    <p><?php echo Base_CompanyName; ?></p>
    <p>TEL# <?php echo Base_CompanyPhone; ?></p>
    <p><?php echo Base_CompanyURL; ?></p>
    <h2>INVOICE</h2>
  </div>

  <p>Invoice No: MUN-${Year}/${INVNO_val}</p>
  <p>Date: ${formatDate(invdate)}</p>

  <table>
    <thead>
      <tr>
        <th class="text-left">Item</th>
        <th class="text-center">Size</th>
        <th class="text-center">Qty</th>
        <th class="text-right">Rate</th>
        <th class="text-right">Amt</th>
      </tr>
    </thead>
    <tbody>`;

    let totalQty = 0, totalAmt = 0, serial = 0;

    data.forEach(row => {
      serial++;
      const qty = parseInt(row.Quantity, 10);
      const rate = parseFloat(row.SalesPrices);
      const discount = parseFloat(row.Discount);
      const amount = rate - discount;
      totalQty += qty;
      totalAmt += amount;

      html += `
      <tr>
        <td class="text-left">
        ${row.EMINO}<br>
        ${row.Name} ${row.ColorName} </td>
        
        <td class="text-center">${row.SizeName}</td>
        <td class="text-center">${qty}</td>
        <td class="text-right">${amount.toFixed(0)}</td>
        <td class="text-right">${amount.toFixed(0)}</td>
      </tr>`;
    });

    // Show Total Items column only if there are items
    let totalItemsTd = '';
    if (serial > 0) {
      totalItemsTd = `<td class="text-right">Total Items: ${serial}</td>`;
    } else {
      totalItemsTd = `<td class="text-right" colspan="1"></td>`;
    }

    html += `
      <tr class="summary-row">
        ${totalItemsTd}
       
        <td colspan="3" class="text-right">Subtotal:</td>
        <td class="text-right">${data[0].Amount}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="3" class="text-right">Discount (${data[0].DiscountPercent}%):</td>
        <td colspan="2" class="text-right">-${data[0].DiscountAmount}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="3" class="text-right">Grand Total:</td>
        <td colspan="2" class="text-right">${data[0].Grandtotal}</td>
      </tr>
    </tbody>
  </table>

<div class="invoice-tagline">
Thank you for Shopping  At Muntaha Collection <br>Have wonderful Day ;)<br>
    Powered by Stellar Business Solutions<br>
    <small>Printed on: ${printDate} ${printTime}</small>
    <br>
    </div>
</div>`;

    $('#printdetails').html(html);
    $('#printdetailsModel').modal('show');
  });
}
function printInvoice() {
  $('#invoiceToPrint').printThis({
    importCSS: false,
    importStyle: true,
    loadCSS: "", // leave empty if CSS is already in global file
    removeInline: false,
    printDelay: 500,
    pageTitle: "Invoice",
  });
}
function loaddata() {
    let startDate = $("#startDate").val();
    let endDate = $("#endDate").val();

    let url = "<?php echo base_url('Order/Ordercontroller/view_orders') ?>";

    $.post(url, { 'startDate': startDate, 'endDate': endDate }, function (data) {
        console.log("outward data is:", data);

        let html = `
        <table class="table table-bordered table-hover" id="tableDataGet" style="width:100%;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>`;

        let totalQty = 0;
        let totalamount = 0;

        data.forEach(element => {
            let amount = element.Quantity * element.SalesPrices;
            totalQty += parseInt(element.Quantity);
            totalamount += amount;

            html += `
                <tr>
                    <td>${formatDate(element.Date)}</td>
                    <td>${element.Name}</td>
                    <td>${element.Quantity}</td>
                    <td>${amount}</td>
                    <td><button class="btn btn-danger btn-sm" onclick="sendrequest(${element.id})">Undo</button></td>
                </tr>`;
        });

        html += `
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td><strong>Total Quantity:</strong></td>
                    <td><strong>${totalQty}</strong></td>
                    <td><strong>Total Amount:</strong></td>
                    <td><strong>${totalamount}</strong></td>
                </tr>
            </tfoot>
        </table>`;

        $('#tableData').html(html);

        let companyName = "Muntaha Collection";
        let companyAddress = "Mall of Sialkot, Pakistan";
        let companyPhone = "+92-300-1234567";
        let companyLogoUrl = "http://localhost/Muntaha/assets/img/logo.jpg"; // Make sure this path is valid

        $('#tableDataGet').DataTable({
            destroy: true, // important to reinitialize on every reload
            responsive: true,
            lengthChange: false,
            dom:
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
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
                   
                    customize: function (win) {
                        // Add custom header before table
                        $(win.document.body).prepend(`
                            <div style="text-align: center; margin-bottom: 20px;">
                                <img src="${companyLogoUrl}" width="200px" style="margin-bottom: 10px;" />
                                <h2>${companyName}</h2>
                                <p>${companyAddress}</p>
                                <p>${companyPhone}</p>
                                <hr>
                            </div>
                        `);

                        // Add basic styles
                        $(win.document.head).append(`
                            <style>
                                body { font-family: Arial, sans-serif; font-size: 12px; }
                                table { width: 100%; border-collapse: collapse; }
                                table, th, td { border: 1px solid #000; padding: 4px; }
                                th { background-color: #f2f2f2; }
                            </style>
                        `);
                    }
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
        
        let url = "<?php echo base_url("Order/Ordercontroller/undoprdoutward")?>";
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
    //let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemss")?>";
$.post(url,function(data){
    $("#IID").html('');
    let html = `<option value="">Select Items</option>`
    data.forEach(element => {
        html += `<option value="${element.ITID}">${element.Name} ${element.ColorName} ${element.SizeName}</option>`
    });
    $("#IID").html(html);
    
    $("#IIDoutward").html(html);
    
})
}

function loadItemsdetails(){
    let IID = $("#IID").val(); 
    //alert(IID);
    let url = "<?php echo base_url("Category/CategoryController/loaditemssDetails")?>";
$.post(url,{'IID':IID},function(data){
   // $("#IID").html('');
  console.log("Details if  is :",data);
  
    data.forEach(element => {
      
        $('#SalePriceiTEM').val(`${element.Salesprice}`);
        $('#ColorNameprd').val(`${element.ColorName}`);
      
        $('#SizeNameprd').val(`${element.SizeName}`);
        $('#Balance').val(`${element.Balance}`);
        
        $('#EIMI').val(`${element.BarCode}`);

        $('#purchasePriceITEM').val(`${element.PurchasePrice}`);
    });
    
  
})
}
$("#EIMI").on('keyup', function () {
    //alert("i am here");
    if ($(this).val().length === 13) {
      // / alert("i am here");
      loadItemsdetailviabarcode();
    }
});
function loadItemsdetailviabarcode(){
    let IID = $("#EIMI").val(); 
    //alert(IID);
    let url = "<?php echo base_url("Category/CategoryController/loaditemssDetailsbarcode")?>";
$.post(url,{'IEMINo':IID},function(data){
   // $("#IID").html('');
  console.log("Details if  is :",data);
  if(data){
    data.forEach(element => {
        $("#IID").val(`${data[0].ITID}`).trigger('change.select2');
        $('#SalePriceiTEM').val(`${element.Salesprice}`);
        $('#ColorNameprd').val(`${element.ColorName}`);
      
        $('#SizeNameprd').val(`${element.SizeName}`);
        $('#Balance').val(`${element.Balance}`);
        
        $('#EIMI').val(`${element.BarCode}`);

        $('#purchasePriceITEM').val(`${element.PurchasePrice}`);
    });
}else{
    iziToast.error({title:'Danger',message: "Data Not Found",position:"topRight",balloon: true});
    $('#EIMI').val('');
}
  
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
  loaddata();
  loadItems();
  loadclients();
    loadotwareddata();
    Stockbalance();
    view_inv_Details();
    //$("#update").css(`display`,'none'); 
 
   
    $("#CatIDnew").select2({ width: '100%',dropdownParent: $("#modaldemo8") })
    $("#IID").select2({ width: '100%' })
    $("#CID").select2({ width: '100%' })
    $("#IIDoutward").select2({ width: '100%' })
    
})
</script>
<?php
  } else {
    redirect('');
}
?>


    