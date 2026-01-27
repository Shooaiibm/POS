
<?php 
if ($this->session->has_userdata('user_id') and ($this->session->userdata('order') == 1)) {
    
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
      



<div class="modal fade" id="printdetailsModel">
    <div class="modal-dialog modal-xl" role="document"> <!-- Changed to modal-xl -->
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Print Invoice</h6>
                <div class="no-print text-center" style="margin-top:10px;">
        <button onclick="printInvoice()" class="btn btn-primary">Print Receipt</button>
    </div>
                <button aria-label="Close" class="btn btn-danger" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 30px;"> <!-- Extra padding for aesthetics -->
                <div id="printdetails"></div>
            </div>
            <div class="card-footer text-muted text-center">
                Stellar Business Solutions
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
               Orders generation
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
             
            </div>  
            </div>

            <div class="panel-container show">
    <div class="panel-content">
        <!-- Nav Tabs -->
      

        <!-- Tab Contents -->
        <div class="tab-content py-3">
            <!-- Inward Tab -->
            <div class="tab-pane fade show active" id="tab-inward" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>
                <br>

                <div class="row">
                    <!-- Hidden Order Number -->
                    <div class="col-md-2" hidden>
                        <div class="form-group">
                            <label class="form-label">Serial NO:</label>
                            <input type="text" id="Orderno" class="form-control" disabled required>
                        </div>
                    </div>

                    <!-- Category -->
                    <!-- <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select class="custom-select" id="CatID" required onchange="loadItems()"></select>
                        </div>
                    </div> -->

                    <!-- Product -->
                    <div class="col-md-2">
                        <div class="form-group" >
                            <label class="form-label">Date:</label>
                            <input type="date" id="odate" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Select Product:</label>
                            <select id="IID" class="form-control" onchange="loadItemsdetails()"></select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Bar Code *</label>
                            <input type="number" id="EIMICode"  class="form-control">
                        </div>
                    </div>

                    <!-- Add Button -->
        
                    <!-- Date -->
                  
                    <!-- Quantity -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Quantity *</label>
                            <input type="number" id="qty"  class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Color *</label>
                            <input type="text" id="ColorNameprd" class="form-control" readonly>
                            <input type="number" id="purchasePriceITEM" class="form-control" hidden>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Size *</label>
                            <input type="text" id="SizeNameprd" class="form-control" readonly>
                            <input type="number" id="purchasePriceITEM" class="form-control" hidden>
                        </div>
                    </div>

                    <!-- Prices -->
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">PPU *</label>
                            <input type="number" id="SalePriceiTEM" class="form-control" readonly>
                            <input type="number" id="purchasePriceITEM" class="form-control" hidden>
                        </div>
                    </div>

                     
                    <!-- Bar Code -->
                    <div class="col-md-2" hidden>
                        <div class="form-group">
                            <label class="form-label">Bar Code:</label>
                            <input type="text" id="barcode" class="form-control" required>
                        </div>
                    </div>

                    <!-- EIMI -->
                    <div class="col-md-2" hidden>
                        <div class="form-group">
                            <label class="form-label">IMEI NO:</label>
                            <input type="text" id="EIMI" class="form-control" required>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="col-md-2 d-flex align-items-end" >
                        <button class="btn btn-info" id="submit" >Save</button>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control"  onchange="loaddata()"  id="startDate">
                    </div>
                    <div class="col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" onchange="loaddata()" id="endDate">
                    </div>
                    </div>
                <!-- Inward Table -->
                <div class="col-md-12" id="tableData"></div>
            </div>

            <!-- Outward Tab -->
            <div class="tab-pane fade" id="tab-outward" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>
                

                <!-- <div class="row p-2">
                    <div class="col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" onchange="loadotwareddata()" id="startDate_out">
                    </div>
                    <div class="col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" onchange="loadotwareddata()" id="endDate_out">
                    </div>
</div> -->
                <div class="col-md-12" id="tableDataoutward"></div>
            </div>
            <div class="tab-pane fade" id="tab-outward-details" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>

            
               
            </div>
            <!-- Inward Details Tab -->
            <div class="tab-pane fade" id="tab-inward-details" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>

            

                
            </div>
        </div>
    </div>
</div>


<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script src="<?php echo base_url("/assets/js/JsBarcode.all.min.js")?>";></script>
<script>

function outward(){
        let orderNumber = $('#outbarcode').val();
        let CID = $('#CID').val();

        //let CID = $("#CID").val();
                    if(CID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Customer  is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
        $.ajax({
            url: 'Order/Ordercontroller/Scaning',
            type: 'POST',
            dataType: 'json', // ensure it's parsed
            data: {
                order_number: orderNumber,CID: CID
            },
            success: function(response) {
                // Defensive check
                if (!response || typeof response !== 'object') {
                    iziToast.error({
                        title: 'Error',
                        message: 'Invalid response from server.',
                        position: "topRight"
                    });
                    return;
                }

                if (response.status === 'error') {
                    iziToast.error({
                        title: 'Error',
                        message: response.message || 'Unknown error occurred.',
                        position: "topRight"
                    });
                } else {
                    iziToast.success({
                        title: 'Success',
                        message: response.message || 'Operation successful.',
                        position: "bottomRight"
                    });
                    // Optionally refresh UI
                    // loaddataoutward();
                }
                loadall();
                $('#outbarcode').val('');
            },
            error: function(xhr, status, error) {
                iziToast.error({
                    title: 'AJAX Error',
                    message: error || 'Server did not respond properly.',
                    position: "topRight"
                });
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

   

    let url = "<?php echo base_url('Order/Ordercontroller/AddOrder_headgeneration'); ?>";

    $.post(url, {

        'odate': odate,
        'purchasePrice': purchasePrice,
        'salesprice': salesprice,
        'IID': IID,
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
 let IID = $("#IID").val(); 
    let qty = $("#qty").val(); 
        // Reset fields
        
        $("#EIMI").val('');
    });
}

// Manual submit button
$("#submit").click(function (e) {
    e.preventDefault();
    submitOrder();
})
// Auto submit when EIMI reaches 14 characters
$("#EIMICode").on('keyup', function () {
    //alert("i am here");
    if ($(this).val().length === 13) {
      // / alert("i am here");
        loadItemsdetailsviacode();
    }
});
$("#outbarcode").on('keyup', function () {
    if ($(this).val().length === 14) {
       // alert("alert");
        outward();
    }
});

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
        <th style="width: 15%;">IN</th>
        <th style="width: 15%;">OUT</th>
        <th style="width: 15%;">Balance</th>
            
 
       
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
    let url = "<?php echo base_url("Order/Ordercontroller/view_ordersoutward")?>";

    $.post(url, function (data) {

        console.log("New outward data is:",data);
      
        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="tableDataGetoutward" style="width:100%;">
            <thead>
                <tr>    
                    <th>Date</th>     
                    
                    <th>Product Name</th> 
                    <th>Quantity</th>
                   
                    <th>EIMI NO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>`;
        
        data.forEach(element => {
            html += `<tr>
                <td>${formatDate(element.Date)}</td>
                
                <td> ${element.Name} ${element.prdname}</td>
                <td>${element.Quantity}</td>
                
                <td>${element.EMINO}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="sendrequestoutward(${element.id})">Undo</button>
                </td>
            </tr>`;
        });
        html += `
        <tr>
    <td colspan="5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary" onclick="generateInvoice(${data[0].CID})">Generate Invoice</button>
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
                    
                    <th>Customer</th>
                    <th>Phone No</th>
                    <th>Total Quantity</th> 
                    <th>No of Items</th>
                    <th>view Invoice</th>
                </tr>
            </thead>
            <tbody>`;
        
        data.forEach(element => {
            html += `<tr>
                <td>${element.Date}</td>
                <td>${element.INVNO}</td>
                     <td>${element.Name}</td>
                <td>${element.phoneno}</td>
                <td>${element.Quantity}</td>
                <td>${element.Noifitems}</td>
           
                <td>
                    <button class="btn btn-info btn-sm" onclick="invdetails(${element.INVNO})">view Invoice</button>
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
function formatDate(dateStr) {
    if (!dateStr) return '';
    const date = new Date(dateStr);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}

function invdetails(invno) {
    let url = "<?php echo base_url("Order/Ordercontroller/Getinvoiceinv"); ?>";
    $.post(url, { 'INVNO': invno }, function (data) {
        console.log("inv data is:", data);

        let htmlAdd = "";
let totalAmt = 0;
let quantity = 0;
let itemsCount = 0;
const clientName = data[0]?.cname || '';
const clientPhone = data[0]?.phoneno || '';
const clientEmail = data[0]?.email || '';
const INVNO = data[0]?.INVNO;
const VAT = data[0]?.City || '';
const invdate = data[0]?.Date || '';
const Year = data[0]?.Year || '';
const address = data[0]?.address || '';

htmlAdd += `
<style>
    #invoiceToPrint {
        background-color: #ffffff;
        font-family: 'sans-serif;
        color: #333;
        font-size: 14px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    #invoiceToPrint h3, #invoiceToPrint h2 {
        color:rgb(12, 14, 15);
        margin-bottom: 4px;
    }
    #invoiceToPrint h2 {
        font-size: 24px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 6px;
        overflow: hidden;
    }
    th {
        background-color:rgb(55, 71, 72);
        color: white;
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }
    td {
        padding: 10px;
        border: 1px solid #ddd;
    }
    tr:nth-child(even) {
        background-color:rgb(177, 176, 176);
    }
    .modal-body {
        padding: 0;
        margin: 0;
    }
    .summary {
        margin-top: 20px;
        font-size: 16px;
    }
    .terms {
        margin-top: 15px;
        padding 2px;
        font-size: 13px;
        color: #555;
    }
    background-color:rgb(61, 83, 85);
        border: none;
        padding: 10px 20px;
        font-weight: bold;
        border-radius: 5px;
        transition: background 0.3s ease;
    }
    .btn-primary:hover {
        background-color:rgb(60, 76, 77);
    }
</style>

<div class="modal-body">
    <div id="invoiceToPrint" style="max-width:800px; margin:auto; padding:30px;">
<div style="display:flex; justify-content:space-between; align-items:flex-start;">
<!-- Left: Logo + Company Info -->
<div style="display:flex; align-items:flex-start;">
<!-- Logo -->
<div style="margin-right:2px;">
                   <img src="<?php echo Base_logo; ?>" alt="logo" style="width:130px; height:130px; object-fit:contain;">
                </div>
<!-- Company Info -->
<div style="line-height:1.4;">

<div style="margin-right:2px;">
                   <img src="<?php echo base_url(); ?>/assets/img/btll.png" alt="logo" 
                   style="width:130px; height:30px; object-fit:contain;">
                </div>
    <p style="margin:0;">Rua Elias Garcia nº 362-D Centro Comercial Babilónia loja 63,</p>
    <p style="margin:0;">2700-337 Amadora, Portugal</p>
    <p style="margin:0;"><strong>E-Mail:</strong> <?php echo Base_CompanyEmail; ?></p>
    <p style="margin:0;"><strong>NIF:</strong> <?php echo Base_CompanyPhone; ?></p>
    <p style="margin:0;"><strong>Contacto:</strong> +351 920 369 816</p>
    <p style="margin:0;"><strong style="color:#fff;">Contacto:</strong>+351 920 392 548</p>
</div>
</div>

<!-- Right: Client Info -->
<div style="text-align:right;">
<h2>Proforma</h2>
                <p><strong>Proforma No:</strong> PF-${Year}/${INVNO}<br>
                <strong>Data de Vencimento:</strong> ${formatDate(invdate)}</p>
  
</div>
</div>
<div style="text-align:right;">

                <p><strong>Reparação</strong> 

</div>

        <hr style="margin:20px 0; border-color:#ddd;">

        <div style="margin-top:20px;">
         <strong> Cliente </strong><br>
         ${clientName}<br>
   Endereço: ${address}<br>
Email: ${clientEmail}<br>
Contacto: ${clientPhone}<br>
            
          
        </div>
                <table>
                  <thead>
    <tr>
     <th style="text-align:center;">Código</th>
       
      <th style="text-align:left;">Descrição</th>
       <th style="text-align:left;">IMEI</th>
         <th>Qtd. Uni.</th>
        <th>Preço Unit</th>
       
        <th>Valor</th>
    </tr>
</thead>
                    <tbody>`;

                    let serial=0;
data.forEach((row, index) => {
    serial+=1;
    htmlAdd += `
        <tr>
           
            <td style="text-align:center; width:15%;">${serial}</td>
                    <td style="text-align:left; width:30%;">${row.Catagory} ${row.Name} </td>
                     <td style="text-align:left; width:20%;">${row.EMINO}</td>
                      <td style="text-align:center; width:15%;">${row.Quantity}</td>
                    <td style="text-align:right; width:10%;">${parseFloat(row.SalesPrices).toFixed(0)}</td>
                   
                  
                    <td style="text-align:right; width:10%;">${parseFloat(row.SalesPrices).toFixed(0)} <?php echo BASE_SYMBOL; ?></td>
                </tr>`;
            quantity += parseInt(row.Quantity);
            totalAmt += parseFloat(row.SalesPrices);
            itemsCount++;
        });

        htmlAdd += `
                <tr style="font-weight:bold; background-color:rgb(226, 224, 224);;">
                    <td colspan="3" style="text-align:right;">Total  Valor </td>
                    <td style="text-align:center;">${quantity}</td>
                      <td style="text-align:center;"></td>
                    <td style="text-align:right;">${totalAmt.toFixed(0)}  <?php echo BASE_SYMBOL; ?></td>
                </tr>
              
                </tbody>
                </table>

               

               <div class="terms">
              <p><strong>Termos e Condições</strong></p>
    
           <p>1.Sem devoluções ou trocas após a entrega, exceto por defeitos de fabrico comprovados.<br>
2. Garantia anulada em caso de uso indevido, quedas, água ou manuseamento incorreto.<br>
3.A fatura é obrigatória para qualquer reclamação<br>
4.Não nos responsabilizamos pelos artigos após 60 Dias da sua entrega.</p>

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
            let url = "<?php echo base_url('Order/Ordercontroller/generateInvoice'); ?>";

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
    let url = "<?php echo base_url("Order/Ordercontroller/Getinvoice"); ?>";
//alert("i  am here");
    $.post(url, function(data) {
        console.log("inv data is:", data);

let htmlAdd = "";
let totalAmt = 0;
let quantity = 0;
let itemsCount = 0;
const clientName = data[0]?.cname || '';
const clientPhone = data[0]?.phoneno || '';
const clientEmail = data[0]?.email || '';
const INVNO = data[0]?.INVNO;
const VAT = data[0]?.City || '';
const invdate = data[0]?.Date || '';
const Year = data[0]?.Year || '';
const address = data[0]?.address || '';

htmlAdd += `
<style>
#invoiceToPrint {
background-color: #ffffff;
font-family: 'sans-serif;
color: #333;
font-size: 14px;
border-radius: 10px;
box-shadow: 0 0 15px rgba(0,0,0,0.1);
}
#invoiceToPrint h3, #invoiceToPrint h2 {
color:rgb(12, 14, 15);
margin-bottom: 4px;
}
#invoiceToPrint h2 {
font-size: 24px;
}
table {
width: 100%;
border-collapse: collapse;
margin-top: 20px;
border-radius: 6px;
overflow: hidden;
}
th {
background-color:rgb(55, 71, 72);
color: white;
padding: 10px;
border: 1px solid #ddd;
text-align: center;
}
td {
padding: 10px;
border: 1px solid #ddd;
}

.modal-body {
padding: 0;
margin: 0;
}
.summary {
margin-top: 20px;
font-size: 16px;
}
.terms {
margin-top: 15px;
padding 2px;
font-size: 13px;
color: #555;
}
background-color:rgb(61, 83, 85);
border: none;
padding: 10px 20px;
font-weight: bold;
border-radius: 5px;
transition: background 0.3s ease;
}
.btn-primary:hover {
background-color:rgb(60, 76, 77);
}
</style>

<div class="modal-body">
<div id="invoiceToPrint" style="max-width:800px; margin:auto; padding:30px;">
<div style="display:flex; justify-content:space-between; align-items:flex-start;">
<!-- Left: Logo + Company Info -->
<div style="display:flex; align-items:flex-start;">
<!-- Logo -->
<div style="margin-right:2px;">
           <img src="<?php echo Base_logo; ?>" alt="logo" style="width:130px; height:130px; object-fit:contain;">
        </div>
<!-- Company Info -->
<div style="line-height:1.4;">

<div style="margin-right:2px;">
           <img src="<?php echo base_url(); ?>/assets/img/btll.png" alt="logo" 
           style="width:130px; height:30px; object-fit:contain;">
        </div>
<p style="margin:0;">Rua Elias Garcia nº 362-D Centro Comercial Babilónia loja 63,</p>
<p style="margin:0;">2700-337 Amadora, Portugal</p>
<p style="margin:0;"><strong>E-Mail:</strong> <?php echo Base_CompanyEmail; ?></p>
<p style="margin:0;"><strong>NIF:</strong> <?php echo Base_CompanyPhone; ?></p>
<p style="margin:0;"><strong>Contacto:</strong> +351 920 369 816</p>
<p style="margin:0;"><strong style="color:#fff;">Contacto:</strong>+351 920 392 548</p>
</div>
</div>

<!-- Right: Client Info -->
<div style="text-align:right;">
<h2>Proforma</h2>
        <p><strong>Proforma No:</strong> PF-${Year}/${INVNO}<br>
        <strong>Data de Vencimento:</strong> ${formatDate(invdate)}</p>

</div>
</div>
<div style="text-align:right;">

        <p><strong>Reparação</strong> 

</div>

<hr style="margin:20px 0; border-color:#ddd;">

<div style="margin-top:20px;">
 <strong> Cliente </strong><br>
 ${clientName}<br>
Endereço: ${address}<br>
Email: ${clientEmail}<br>
Contacto: ${clientPhone}<br>
    
  
</div>
        <table>
          <thead>
<tr>
<th style="text-align:center;">Código</th>

<th style="text-align:left;">Descrição</th>
<th style="text-align:left;">IMEI</th>
 <th>Qtd. Uni.</th>
<th>Preço Unit</th>

<th>Valor</th>
</tr>
</thead>
            <tbody>`;

            let serial=0;
data.forEach((row, index) => {
serial+=1;
htmlAdd += `
<tr>
   
    <td style="text-align:center; width:15%;">${serial}</td>
            <td style="text-align:left; width:30%;">${row.Catagory} ${row.Name} </td>
             <td style="text-align:left; width:20%;">${row.EMINO}</td>
              <td style="text-align:center; width:15%;">${row.Quantity}</td>
            <td style="text-align:right; width:10%;">${parseFloat(row.SalesPrices).toFixed(0)}</td>
           
          
            <td style="text-align:right; width:10%;">${parseFloat(row.SalesPrices).toFixed(0)} <?php echo BASE_SYMBOL; ?></td>
        </tr>`;
    quantity += parseInt(row.Quantity);
    totalAmt += parseFloat(row.SalesPrices);
    itemsCount++;
});

htmlAdd += `
        <tr style="font-weight:bold; background-color:rgb(226, 224, 224);">
            <td colspan="3" style="text-align:right;">Total  Valor </td>
            <td style="text-align:center;">${quantity}</td>
              <td style="text-align:center;"></td>
            <td style="text-align:right;">${totalAmt.toFixed(0)}  <?php echo BASE_SYMBOL; ?></td>
        </tr>
      
        </tbody>
        </table>

       

       <div class="terms">
      <p><strong>Termos e Condições</strong></p>

   <p>1.Sem devoluções ou trocas após a entrega, exceto por defeitos de fabrico comprovados.<br>
2. Garantia anulada em caso de uso indevido, quedas, água ou manuseamento incorreto.<br>
3.A fatura é obrigatória para qualquer reclamação<br>
4.Não nos responsabilizamos pelos artigos após 60 Dias da sua entrega.</p>

</div>

  
</div>`;

$('#printdetails').html(htmlAdd);
$('#printdetailsModel').modal('show');
});
}


function printInvoice() {
    $('#invoiceToPrint').printThis({
        importCSS: false,
        importStyle: true,
        removeInline: false
    });
}

function loaddata(){


let startDate = $("#startDate").val(); 
let endDate = $("#endDate").val(); 

    let url = "<?php echo base_url("Order/Ordercontroller/view_ordersnew")?>";

$.post(url,{'startDate':startDate,'endDate':endDate},function(data){

    console.log("outward data is :",data);
    
    let  html = `
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    
            <th>Date</th>   
            <th>Product Name</th> 
            <th>Color</th>
            <th>Size</th>
              <th>Quantity</th>
                    
          
               <th>Action</th>
             </tr>
        </thead>
        <tbody>`;
       let totalCount =0;
        data.forEach(element => {
 totalCount +=element.Quantity;
html += ` <tr>
<td>${formatDate(element.Date)}</td>
<td>${element.Name}</td>

<td>${element.ColorName}</td>
<td>${element.SizeName}</td>

<td>${element.Quantity}</td>

<td>
  <button class="btn btn-danger btn-sm" onclick="sendrequestorer(${element.OID})">Undo</button>
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
                    className: 'btn-outline-primary btn-sm',
                    customize: function (win) {
                         var SDate = $('#startDate').val();
                        var EDate = $('#endDate').val();


                        function formatDate(input) {
                            let parts = input.split('-');
                            return parts[2] + '/' + parts[1] + '/' + parts[0];
                        }

                        let formattedFrom = formatDate(SDate);
                        let formattedTo = formatDate(EDate);

                        var currentDate = new Date();
                        var day = currentDate.getDate();
                        var month = currentDate.getMonth() + 1;
                        var year = currentDate.getFullYear();
                        var hours = currentDate.getHours();
                        var minutes = currentDate.getMinutes();
                        var ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12 || 12;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        var printedDate = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ' ' + ampm;

                        var companyName = '<?php echo Base_CompanyName; ?>';
                        var companyAddress = '<?php echo Base_CompanyAddress; ?>';
                        var companyPhone = '<?php echo Base_CompanyPhone; ?>';

                        $(win.document.head).append(`
                            <style>
                                @page { size: A4 portrait; margin: 1cm; }
                                body { font-family: Arial, sans-serif; font-size: 12px; }
                                table { border-collapse: collapse !important; width: 100% !important; margin-top: 10px; }
                                th, td { border: 1px solid black !important; padding: 8px !important; font-size: 12px; }
                                th { background-color: #f2f2f2 !important; text-align: center; font-weight: bold; }
                                h2 { font-size: 18px; margin: 0; }
                            </style>
                        `);

                        $(win.document.body).css({ "padding": "10px" });

                        $(win.document.body).prepend(`
                            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                <div>
                                    <img src='<?php echo Base_logo; ?>' width='100px' height='80px' style='margin-right: 20px;'>
                                </div>
                                <div>
                                    <h2>${companyName}</h2>
                                    <p style='margin: 2px 0;'>${companyAddress}</p>
                                    <p style='margin: 2px 0;'>${companyPhone}</p>
                                </div>
                            </div>
                            <div style='margin-bottom: 10px; font-size: 14px; font-weight: bold;'>
                                Order  Report From ${formattedFrom} TO ${formattedTo}
                            </div>
                            <div style='margin-bottom: 5px; font-size: 12px;'>
                                Printed Date: ${printedDate}
                            </div>
                            <div style='margin-bottom: 5px; font-size: 12px; font-weight: bold;'>
                                Total Records: ${totalCount}
                            </div>
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

function sendrequestorer(id){  
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
            let url = "<?php echo base_url('Order/Ordercontroller/undoprdorder'); ?>";
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
        html += `<option value="${element.ITID}"> ${element.Name} ${element.ColorName} ${element.SizeName}</option>`
    });
    $("#IID").html(html);
  
})
}

function loadItemsdetails(){
    let IID = $("#IID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemssDetails")?>";
$.post(url,{'IID':IID},function(data){
   // $("#IID").html('');
  console.log("Details if  is :",data);
  
    data.forEach(element => {
      
        $('#SalePriceiTEM').val(`${element.Salesprice}`);
        $('#ColorNameprd').val(`${element.ColorName}`);
      
        $('#SizeNameprd').val(`${element.SizeName}`);
       
       

        $('#purchasePriceITEM').val(`${element.PurchasePrice}`);
    });
    
  
})
}


function loadItemsdetailsviacode(){
    let IID = $("#EIMICode").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemssDetailsEIMI")?>";
$.post(url,{'IID':IID},function(data){
   // $("#IID").html('');
  console.log("Details if  is :",data);
  if(data){
    data.forEach(element => {
        $("#IID").val(`${data[0].ITID}`).trigger('change.select2');
      $('#SalePriceiTEM').val(`${element.Salesprice}`);
      $('#ColorNameprd').val(`${element.ColorName}`);
    
      $('#SizeNameprd').val(`${element.SizeName}`);
     
     

      $('#purchasePriceITEM').val(`${element.PurchasePrice}`);
  });
    $('#EIMI').val('');
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

   
})
</script>
<?php
  } else {
    redirect('');
}
?>


    