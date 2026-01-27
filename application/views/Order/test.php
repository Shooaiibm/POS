
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


        <!-- Model HTML -->
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
                                            
                                       
                                            <button
                                                class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
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
               Order Placement
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
             
            </div>  
            </div>

            <div class="panel-container show">
                <div class="panel-content">
                <h3 class="m-0">
                                <button class="btn btn-primary fw-500 l-h-n p-2" id="POCLear">
                                 <i class="fal fa-plus-circle"></i>  &nbsp; Generate New Order &nbsp;
                                </button>
                            </h3>
                            <br>
                <div class="row">
                    <?php $maxID = $this->session->userdata("ORID");
                                                             if ($getuserwisehead) {
                                                               
                                                      //  print_r($getuserwisehead);
                                                            foreach($getuserwisehead as $value){

                                                                $Orderno = $value['OID'];
                                                                $CID = $value['CID'];
                                                                $odate = $value['OrderDate'];
                                                                
                                                                $Origin = $value['Origin'];
                                                                
                                                                $Destination = $value['Destination'];
                                                                
                                                                $Shipper = $value['Shipper'];
                                                                
                                                                $barcode = $value['Barcode'];
                                                                $Remarks = $value['Description'];


                                                                }

                                                                ?>
                                                                
                <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Order NO:</label>
                                                             
                                                                <input type="text" readonly id="Orderno" name="Orderno" class="form-control" value="<?php echo $Orderno; ?>" required>
                                                            </div>
                                                            </div>
                                                                <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Select Client:</label>
                                                                <select class="custom-select" name='CID' id="CID" require="required"  value="<?php echo $CID; ?>" >
                  
                  
                  </select>
                                                            </div>
                                                            </div>
                                                            
                                                            <button class="btn btn-primary btn-sm" id="openModelclient">
                        <i class="fal fa-plus-circle"></i>  &nbsp; &nbsp;
                    </button>
                                                            
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Order Date:</label>
                                                             
                                                                <input type="Date" id="odate" name="odate" class="form-control" value="<?php echo $odate; ?>" required>
                                                            </div>
                                                            </div>
                                                                <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Origin:</label>
                                                             
                                                                <input type="text" id="Origin" name="Origin" class="form-control"  value="<?php echo $Origin; ?>"required>
                                                            </div>
                                                            </div><div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Destination:</label>
                                                             
                                                                <input type="text" id="Destination" name="Destination" class="form-control"  value="<?php echo $Destination; ?>" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Shipper:</label>
                                                                <input type="text" id="Shipper" name="Shipper" class="form-control" value="<?php echo $Shipper; ?>" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Bar Code :</label>
                                                                <input type="text" id="barcode" name="barcode" class="form-control" value="<?php echo $barcode; ?>" required>
                  
                  </div>  
                </div>
                <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Remarks:</label>
                                                                <input type="text" id="Remarks" name="Remarks" class="form-control" value="<?php echo $Remarks; ?>" required>
                  
                  </div>  
                </div>
                <div class="col-md-2">
                    <br>
                                                            <div class="form-group">
                                                            <label class="form-label" for="simpleinput" Style="color:white;">Select Required Date :</label>
                                                             
                                                             <button class="btn btn-primary" id='update'>update</button>
                  
                  </div>  
                </div>
                                                                <?php
                                                                } else{

                                                                   ?>

                <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Order NO:</label>
                                                             
                                                                <input type="text" id="Orderno" name="Orderno" class="form-control" required>
                                                            </div>
                                                            </div>
                                                                <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Select Client:</label>
                                                                <select class="custom-select" name='CID' id="CID" require="required"  >
                  
                  
                  </select>
                                                            </div>
                                                            </div> <button class="btn btn-primary btn-sm" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; &nbsp;
                    </button>
                                                            
                                                      
                                                            
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Order Date:</label>
                                                             
                                                                <input type="Date" id="odate" name="odate" class="form-control" required>
                                                            </div>
                                                            </div>
                                                                <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Origin:</label>
                                                             
                                                                <input type="text" id="Origin" name="Origin" class="form-control" required>
                                                            </div>
                                                            </div><div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Destination:</label>
                                                             
                                                                <input type="text" id="Destination" name="Destination" class="form-control" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Shipper:</label>
                                                                <input type="text" id="Shipper" name="Shipper" class="form-control" required>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Bar Code :</label>
                                                                <input type="text" id="barcode" name="barcode" class="form-control" required>
                  
                  </div>  
                </div>
                <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Remarks:</label>
                                                                <input type="text" id="Remarks" name="Remarks" class="form-control" required>
                  
                  </div>  
                </div>
                <div class="col-md-2">
                    <br>
                                                            <div class="form-group">
                                                            <label class="form-label" for="simpleinput" Style="color:white;">Select Required Date :</label>
                                                             
                                                             <button class="btn btn-info" id='submit'>Save</button>
                  
                  </div>  
                </div>
    <?php
    
                                                                }
                                                                ?>
</div>
<div class="row">
<div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Catagory *</label>
                                                                <select class="custom-select" name='CatID' id="CatID" require="required"  onchange="loadItems()">
                  
                                                                
                  </select>
                  
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Select Product:</label>
                                                                <select name="IID" id="IID" class="form-control" onchange="loadItemsdetails()" ></select>
                                                            </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-sm" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; &nbsp;
                    </button>

                 
                                                            <div class="col-md-2">

                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Quantity *</label>
                                                               
                                                                <input  type="number" name="qty" id="qty" class="form-control"  > </input>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">PPU *</label>
                                                               
                                                                <input  type="number" name="PPU" id="PPU" class="form-control"  readonly > </input>
                                                                <input  type="number" name="purchasePrice" id="purchasePrice" class="form-control"  hidden > </input>
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Amount *</label>
                                                               
                                                                <input  type="number" name="Amount" id="Amount" class="form-control"  readonly > </input>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Dimensions *</label>
                                                               
                                                                <input  type="text" name="Dimensions" id="Dimensions" class="form-control"   > </input>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="simpleinput">Remarks:</label>
                                                                <input type="text" id="Remarks" name="Remarks" class="form-control" required>
                  
                  </div>  
                </div>
                <div class="col-md-2">
                                                                <br>
                                                             
                                                                <div class="form-group" style="text-align: right;">

    <button class="btn btn-info" id="submit4">Add Items</button>

</div>

</div>    

<div class="col-md-12" id='tableData'>

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

    $("#openModel").click(function(){;$("#Code").val('');$("#Name").val('');$("#SalePrice").val('0');$("#purchasePrice").val('0');$("#image").val(null);$("#status").prop('checked',true);
    var image = document.getElementById('picUserShow');
    image.src = '<?php echo base_url(); ?>assets/img/upload.png';
    getMaxItemNo();
    $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    }) 
    
    $("#openModelclient").click(function(){$("#Namec").val('');$("#City").val('');$("#phoneno").val('');$("#email").val('');$("#status").prop('checked',true);
      $("#update").css(`display`,'none');
    $("#submitc").css(`display`,'block'); 
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

$( "#submit").click(function(e){
    e.preventDefault()
let CID = $("#CID").val(); 
let odate = $("#odate").val(); 
    
let Origin = $("#Origin").val(); 
let Destination = $("#Destination").val(); 
let Shipper = $("#Shipper").val(); 
let barcode = $("#barcode").val(); 
if(barcode.length<18){
    iziToast.error({
                        title:'danger',message: `
                    Barcode Minimum Length is 18!`,position:"bottomRight",balloon: true});
                    return;
}
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
let url = "<?php echo base_url("Order/Ordercontroller/AddOrder_head")?>";

    $.post(url,{'CID':CID,'odate':odate,'Origin':Origin,'Destination':Destination,
        'Shipper':Shipper,'barcode':barcode,'Remarks':Remarks},function(data){ 
       // console.log("Data is",data)
        iziToast.success({title:'Success',message: "Order head generated Successfully",position:"topRight",balloon: true});
        location.reload();
      
        loaddata();
    });
    
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
        iziToast.success({title:'Success',message: "Order head generated Successfully",position:"topRight",balloon: true});
        location.reload();
      
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
    let CatID = $("#CatID").val(); 
    let IID = $("#IID").val(); 
    let qty = $("#qty").val(); 
    let PPU = $("#PPU").val(); 
    let purchasePrice = $("#purchasePrice").val(); 
    let Amount = $("#Amount").val(); 
    let Dimensions = $("#Dimensions").val(); 
    let Remarks = $("#Remarks").val(); 
    if(CatID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Category is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(IID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Product is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(qty =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Quantity is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(PPU =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    PPU is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
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
       $("#CatID").val(''); 
     $("#IID").val('');  
   $("#qty").val('');  
    $("#PPU").val('');  
   $("#purchasePrice").val('');  
     $("#Amount").val('');  
     $("#Dimensions").val('');  
   $("#Remarks").val('');  
    });
});




function loaddata(){


let id = $("#Orderno").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/view_orders")?>";

$.post(url,{'OID':id},function(data){
    let  html = `
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Order No</th>    <th>Order Date</th><th>Client</th> 
            <th>Catagory</th><th>Product</th><th>Quantity</th><th>PPU</th>
            <th>Amount</th>
               <th>Action</th>
             </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.OrderNO}</td>
<td>${element.OrderDate}</td>
<td>${element.Name}</td>
<td>${element.Catagory}</td>
<td>${element.ItemName}</td>
<td>${element.Quantity}</td>
<td>${element.SalesPrice}</td>
<td>${element.Amount}</td>
 <td>
                
                
                  
                  <button class="btn btn-danger btn-sm" onclick="sendrequest(${element.DID})">undo</button>
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



function sendrequest(id){  
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
        
        let url = "<?php echo base_url("Order/Ordercontroller/undoprd")?>";
          $.post(url,{"id":id,},function(data){ 
           
         
              iziToast.error({title:'Danger',message: "Data Deleted Successfully!",position:"topRight",balloon: true});
           loaddata();
       
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
        html += `<option value="${element.CID}">${element.Name}</option>`
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
      
        $('#PPU').val(`${element.SalePrice}`);
        $('#purchasePrice').val(`${element.purchasePrice}`);
    });
    
  
})
}
$(document).ready(function(){
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const formattedDateTime = `${year}-${month}-${day}`;

    $('#odate').val(formattedDateTime);
  loaddata();
  loadCategory();
    loadclients();
  
    //$("#update").css(`display`,'none'); 
    $("#CID").select2({ width: '100%' })
    $("#CatID").select2({ width: '100%' })
   
    $("#CatIDnew").select2({ width: '100%',dropdownParent: $("#modaldemo8") })
    $("#IID").select2({ width: '100%' })
})
</script>
<?php
  } else {
    redirect('');
}
?>


    