
<?php 
if ($this->session->has_userdata('user_id') and ($this->session->userdata('item') == 1)) {
    
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



<div class="modal fade" id="barcodeModal" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Barcode Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
    
      </div>
      <style>
        body {
            font-family: Arial, sans-serif;
            padding: 10px;
        }

        #barcodeModal {
            display: none; /* Hidden by default, shown by JS */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 4px;
            text-align: center;
        }

      

        /* Print settings for thermal printer */
      body {
            font-family: sans-serif;
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
        }

        
        </style>
      <div class="modal-body">
      <button onclick="printInvoice()" class="btn btn-primary btn-sm">
                         Print label
                    </button>
      <div id="printlabe">
        <table id="barcode">
        
          <tbody id="barcodeBody">
            <!-- Appended data goes here -->
          </tbody>
        </table>
</div>
      </div>
    </div>
  </div>
</div>
        <!-- Model HTML -->

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
                                                            <select class="form-control" id="CatID"></select>
                                                        </div>
  </div>
            
     
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Name:</label>
                                                            <input type="text" class="form-control" id="Name"
                                                                placeholder="Enter Name" autocomplete="Name">
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

                                               
                                                    
                                                </div>
                                                <input type="hidden" class="form-control" id="chidden" >
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="submit">Save changes</button> 
                                            
                                            <button class="btn btn-info" type="button" id="update">Update</button> 
                                           
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal fade" id="modaldemo8item">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Items</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                             
                                                <div class="row">
                            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select product:</label>
                                                            <select class="form-control" id="IIDItem" onchange="callcolor()"></select>
                                                        </div>
  </div>
  
  
  <div class="col-md-6" hidden>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select Color:</label>
                                                            <select class="form-control" id="ColorID"></select>
                                                        </div>
  </div>
            
  <div class="col-md-6" hidden>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select Size:</label>
                                                            <select class="form-control" id="SizeID"></select>
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
  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Discount:(%)</label>
                                                            <input type="number" class="form-control"  id="Discount"
                                                                placeholder="Enter Sale Price" autocomplete="SalePrice">
                                                        </div>
  </div>
  
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="statusprd" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="statusprd">Status</label>
                                                            </div>
                                                        </div>
                                                        
  </div>  

</div>
</div>

                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="submitprd">Save changes</button> 
                                           
                                            
                                            
                                           
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="modaldemo8itemedit">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title"> Edit Items</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                             
                                                <div class="row">
                            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select product:</label>
                                                            <select class="form-control" id="IIDItemedit" onchange="callcoloredit()"></select>
                                                        </div>
  </div>
  
  
  <div class="col-md-6" hidden>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select Color:</label>
                                                            <select class="form-control" id="ColorIDedit"></select>
                                                        </div>
  </div>
            
  <div class="col-md-6" hidden>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select Size:</label>
                                                            <select class="form-control" id="SizeIDedit"></select>
                                                        </div>
  </div>
            
  
            
  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Purchase Price:</label>
                                                            <input type="number" class="form-control" id="purchasePriceedit"
                                                                placeholder="Enter Purchase Price" autocomplete="purchasePrice">
                                                        </div>
  </div>
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-labeledit" style="text-align: left;">Sale Price:</label>
                                                            <input type="number" class="form-control" id="SalePriceedit"
                                                                placeholder="Enter Sale Price" autocomplete="SalePrice">
                                                        </div>
  </div>
  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Discount(%) :</label>
                                                            <input type="number" class="form-control"  id="Discountedit"
                                                                placeholder="Enter Sale Price" autocomplete="SalePrice">
                                                        </div>
  </div>
  
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="statusprdedit" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="statusprdedit">Status</label>
                                                            </div>
                                                        </div>
                                                        
  </div>  

  <input type="hidden" class="form-control" id="chiddenITID"
                                                               >
</div>
</div>

                                        <div class="modal-footer">
                                          
                                            <button class="btn btn-info" type="button" id="updateprd">Update </button> 
                                            
                                            
                                           
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>



                            <div class="modal fade" id="modaldemo8color">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Items</h6>
                <button aria-label="Close" class="btn btn-danger" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Item Code -->
                            <div class="col-md-12">
                           
                        <div class="form-group">
                            <label class="form-label">Select Product:</label>
                            <select id="IID" class="form-control" ></select>
                       
                    </div>
                            </div>
</div>
<div class="row">
                            <!-- Color Input -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Color:</label>
                                    <input type="text" class="form-control" id="Color" placeholder="Enter Color" autocomplete="off">
                                </div>
                            </div>

                            <!-- Add Color Button -->
                          
                        </div>
                    </div>
                </div>

                <!-- Hidden Field -->
                <input type="hidden" class="form-control" id="chidden">
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="AddColor">Add Color</button>
                
            </div>

            <div class="card-footer text-muted text-center">
                Stellar Business Solutions
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldemo8size">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Items</h6>
                <button aria-label="Close" class="btn btn-danger" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- Item Code -->
                            <div class="col-md-12">
                           
                        <div class="form-group">
                            <label class="form-label">Select Product:</label>
                            <select id="IIDsize" class="form-control" ></select>
                       
                    </div>
                            </div>
</div>
<div class="row">
                            <!-- Color Input -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Size:</label>
                                    <input type="text" class="form-control" id="size" placeholder="Enter Size" autocomplete="off">
                                   
                                </div>
                            </div>

                            <!-- Add Color Button -->
                          
                        </div>
                    </div>
                </div>

                <!-- Hidden Field -->
                <input type="hidden" class="form-control" id="chidden">
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary" type="button" id="Addsize">Add Size</button>
                
            </div>

            <div class="card-footer text-muted text-center">
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
       Product Details
        </h2>
        <div class="panel-toolbar ml-2 mr-2">
     
    </div>  
    </div>

   <div class="panel-container show">
<div class="panel-content">
<!-- Nav Tabs -->
<ul class="nav nav-pills" role="tablist">
     <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#tab-inward">Item</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#tab-inward-details">Product</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#tab-inward-details_log">Product Rates Log Report</a>
    </li>
</ul>

<!-- Tab Contents -->
<div class="tab-content py-3">
     <div class="tab-pane fade show active" id="tab-inward" role="tabpanel">
        <div class="panel-toolbar ml-2 mr-2"></div>
        <button class="btn btn-primary fw-bold p-2 mt-2" id="openModel">
          <i class="fal fa-plus-circle"></i> &nbsp; Create Items &nbsp;
        </button>
        <div class="mt-3" id="tableData">
          <!-- Table for Create Items -->
        </div>

    </div>
    <!-- Product Tab -->
    <div class="tab-pane fade " id="tab-inward-details" role="tabpanel">
        <div class="panel-toolbar ml-2 mr-2"></div>

        <button class="btn btn-warning fw-bold p-2 mt-2" id="openModelitem">
          <i class="fal fa-plus-circle"></i> &nbsp; Add Product &nbsp;
        </button>
         <button class="btn btn-primary fw-bold p-2 mt-2" id="generateAllBarcodesBtn">
          <i class="fal fa-plus-barcode"></i> &nbsp; Generate Bar Code &nbsp;
        </button>
        <div class="mt-3 col-md-12" id="tableData3">
          <!-- Table for Add Product -->
        </div>
    </div>
    
    <!-- Product Rates Log Report Tab -->
    <div class="tab-pane fade" id="tab-inward-details_log" role="tabpanel">
        <div class="panel-toolbar ml-2 mr-2"></div>
        <div class="mt-3 col-md-12" id="tableData3log">
          <!-- Table for Product Rates Log Report -->
        </div>
    </div>
</div>
</div>
</div>

<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script>

function printInvoice() {
  $('#printlabe').printThis({
    importCSS: false,
    importStyle: true,
    loadCSS: "", // leave empty if CSS is already in global file
    removeInline: false,
    printDelay: 500,
    pageTitle: "Invoice",
  });
}
    function editDetailprd(id,CID,Sizename){
      

    let url = "<?php echo base_url("Items/ItemsController/editItemsprd");?>";
    $.post(url,{'id':id},function(data)
    { 
       
        console.log("Data is ",data);
    if(data){
       // alert(data[0].CID);
      // let ITEMID=data[0].ITEMID;
      // alert(ITEMID);

    $("#IIDItemedit").val(`${data[0].ITEMID}`).trigger('change.select2');

      // alert(id)
                // callcoloredit(id,CID);
                //  //alert(CID)
                //  $("#ColorIDedit").val(`${CID}`).trigger('change.select2');
        editsizedetails(Sizename);
       // alert(data[0].SID);
    // $("#SizeIDedit").val(`${data[0].SID}`).trigger('change.select2');
    // callcoloreditall();
    $("#purchasePriceedit").val(`${data[0].PurchasePrice}`);
    $("#SalePriceedit").val(`${data[0].Salesprice}`);
    $("#Discountedit").val(`${data[0].Discount}`);
    $("#statusprdedit").prop('checked',data[0].status?true:false);
    $("#updateprd").css(`display`,'block');
    $('#chiddenITID').val(`${data[0]['ITID']}`);
    $("#modaldemo8itemedit").modal('toggle');
    }
    });
    
    }


    $( "#updateprd").click(function(e){
    e.preventDefault()

    let Discount = $("#Discountedit").val();
    let Code = $("#IIDItemedit").val();
    let ID = $("#chiddenITID").val();
    
    if(Code == '') {
        iziToast.error({
            title: 'Error',
            message: 'Code is Required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }
    
    let SalePrice = $("#SalePriceedit").val();
    if(SalePrice == '') {
        iziToast.error({
            title: 'Error',
            message: 'Sale Price is Required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }
    
    let purchasePrice = $("#purchasePriceedit").val();
    if(purchasePrice == '') {
        iziToast.error({
            title: 'Error',
            message: 'Purchase Price is Required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }
    
    let status = $("#statusprdedit").is(":checked") ? 1 : 0;
    
    let fd = new FormData();
    fd.append('Code', Code);
    fd.append('SalePrice', SalePrice);
    fd.append('purchasePrice', purchasePrice);
    fd.append('status', status);
    fd.append('Discount', Discount);
    fd.append('ID', ID);
    // Removed color and Memory parameters

    let url = "<?php echo base_url('Items/ItemsController/updtedItemsprd') ?>";
    
    $.ajax({
        url: url,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({
                title: 'Success',
                message: 'Item updated Successfully!',
                position: "bottomRight",
                balloon: true
            });
            loadData();
            $("#modaldemo8itemedit").modal('toggle');
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
});
  $("#submitprd").click(function(e){
    e.preventDefault();
    
    let Discount = $("#Discount").val();
    let Code = $("#IIDItem").val();
    
    if(Code == '') {
        iziToast.error({
            title:'Error',
            message: 'Code is Required!',
            position:"bottomRight",
            balloon: true
        });
        return;
    }
    
    let SalePrice = $("#SalePrice").val();
    if(SalePrice == '') {
        iziToast.error({
            title:'Error',
            message: 'Sale Price is Required!',
            position:"bottomRight",
            balloon: true
        });
        return;
    }
    
    let purchasePrice = $("#purchasePrice").val();
    if(purchasePrice == '') {
        iziToast.error({
            title:'Error',
            message: 'Purchase Price is Required!',
            position:"bottomRight",
            balloon: true
        });
        return;
    }
    
    let status = $("#statusprd").is(":checked") ? 1 : 0;
    
    let fd = new FormData();
    fd.append('Code', Code);
    fd.append('SalePrice', SalePrice);
    fd.append('purchasePrice', purchasePrice);
    fd.append('status', status);
    fd.append('Discount', Discount);
    
    let url = "<?php echo base_url('Items/ItemsController/addItemsprd') ?>";
    
    $.ajax({
        url: url,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                iziToast.success({
                    title: 'Success',
                    message: response.message + (response.barcode ? ' Barcode: ' + response.barcode : ''),
                    position: "bottomRight",
                    balloon: true
                });
                loadData();
            } else {
                iziToast.error({
                    title: 'Error',
                    message: response.message,
                    position: "bottomRight",
                    balloon: true
                });
            }
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
});
function callcolor() {
    let IIDitem = $("#IIDItem").val();  // ✅ Use "IIDItem" with capital "I"

  // alert(IIDitem);  // Now this will show the correct value

    let url = "<?php echo base_url('Category/CategoryController/loaditemssDetailscolorall') ?>";
    $.post(url, { IID: IIDitem }, function (data) {
        let html = `<option value="">Select Color</option>`;
        data.forEach(el => {
            html += `<option value="${el.CID}">${el.ColorName}</option>`;
        });
        $("#ColorID").html(html);
    }).fail(function(xhr, status, err) {
        // iziToast.error({
        //     title: 'Error',
        //     message: 'Could not load colors. Please try again.',
        //     position: "bottomRight",
        //     balloon: true
        // });
    });

    



    let url2 = "<?php echo base_url('Category/CategoryController/loaditemssDetailssize') ?>";
    $.post(url2, { IID: IIDitem }, function (data) {
        let html = `<option value="">Select Size</option>`;
        data.forEach(el => {
            html += `<option value="${el.SID}">${el.SizeName}</option>`;
        });
        $("#SizeID").html(html);
    }).fail(function(xhr, status, err) {
        iziToast.error({
            title: 'Error',
            message: 'Could not load Size. Please try again.',
            position: "bottomRight",
            balloon: true
        });
    });
    
}
function callcoloreditall() {
    let IIDitem = $("#IIDItemedit").val();  // ✅ Use "IIDItem" with capital "I"

  // alert(IIDitem);  // Now this will show the correct value

    let url = "<?php echo base_url('Category/CategoryController/loaditemssDetailscolorall') ?>";
    $.post(url, { IID: IIDitem }, function (data) {
        let html = `<option value="">Select Color</option>`;
        data.forEach(el => {
            html += `<option value="${el.CID}">${el.ColorName}</option>`;
        });
        $("#ColorID").html(html);
    }).fail(function(xhr, status, err) {
        // iziToast.error({
        //     title: 'Error',
        //     message: 'Could not load colors. Please try again.',
        //     position: "bottomRight",
        //     balloon: true
        // });
    });

    



    let url2 = "<?php echo base_url('Category/CategoryController/loaditemssDetailssize') ?>";
    $.post(url2, { IID: IIDitem }, function (data) {
        let html = `<option value="">Select Size</option>`;
        data.forEach(el => {
            html += `<option value="${el.SID}">${el.SizeName}</option>`;
        });
        $("#SizeID").html(html);
    }).fail(function(xhr, status, err) {
        iziToast.error({
            title: 'Error',
            message: 'Could not load SIze. Please try again.',
            position: "bottomRight",
            balloon: true
        });
    });
    
}

// Bind after DOM ready (in case you had inline onchange)
// You can remove inline `onchange=` and rely on this.

    var loadFile = function(event) {
    var image = document.getElementById('picUserShow');
    image.src = URL.createObjectURL(event.target.files[0]);
};

function callcoloredit(ITEMID,cid) {
    let IIDitem = $("#IIDItemedit").val();  // ✅ Use "IIDItem" with capital "I"
  
  //alert(IIDitem);  // Now this will show the correct value

    let url = "<?php echo base_url('Category/CategoryController/loaditemssDetailscolor') ?>";
    $.post(url, { IID: IIDitem ,cid:cid}, function (data) {
        console.log("edit color data is :",data);
        let html = ``;
        data.forEach(el => {
            html += `<option value="${el.CID}">${el.ColorName}</option>`;
        });
        $("#ColorIDedit").html(html);
    });
    
}
function editsizedetails(sizename){
    let IIDitem = $("#IIDItemedit").val();  
    //alert(IIDitem);
    let url2 = "<?php echo base_url('Category/CategoryController/loaditemssDetailssizeall') ?>";
    $.post(url2, { IID: IIDitem ,sizename:sizename}, function (data) {
       // console.log("Size data is:",data)
        let html = ``;
        data.forEach(el => {
            html += `<option value="${el.SID}">${el.SizeName}</option>`;
        });
        $("#SizeIDedit").html(html);
    });
}
$("#openModel").click(function(){
    $("#CatID").val('').trigger('change.select2');
    $("#Code").val('');$("#Name").val('');
   
    $("#status").prop('checked',true);
  
    $("#Color").val('');
    $("#Memory").val('');
    getMaxItemNo() 
    $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    })   
    $("#openModelitem").click(function(){
        loadItemsall();
        $("#updateprd").css(`display`,'none');
         
        $("#SalePrice").val(0);
        $("#purchasePrice").val(0);
        $("#Discount").val(0);
    $("#submitprd").css(`display`,'block');
    $("#modaldemo8item").modal('toggle');
    })    
    $("#openModelcolor").click(function(){
        loadItems();
    $("#modaldemo8color").modal('toggle');
    })  
    $("#openModelsize").click(function(){
        loadItems();
    $("#modaldemo8size").modal('toggle');
    })  
function loadData()
{



    let url = "<?php echo base_url("Items/ItemsController/loadItems")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>       <th>Code</th>  <th>Category</th>   <th>Name</th>    
              <th>Status</th>  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>

<td>${element.Code}</td><td>${element.CatName}</td><td>${element.Name}</td>
${element.status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

<td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.ItemID})"><i class="fal fa-edit"></i></buttton>
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

let url3 = "<?php echo base_url("Items/ItemsController/loadprd") ?>";

$.post(url3, function (data) {
    let allProductData = data;
    let html = `
    <div class="mb-2">
       
    </div>
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet3" style="width:100%;">
      </thead>
        <thead>
            <tr>
                <th>Item Code</th>
                <th>Category</th>
                <th>Name</th>
              
                <th>Sales Price</th>
                <th>Purchase Price</th>
                <th>Discount</th>
                  <th>Discount Amount</th>
                    <th>Sales Amount</th>
                <th>Status</th>
                <th>Generate BR Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>`;

    data.forEach(element => {
         const originalPrice = parseFloat(element.Salesprice);
        const discountPercent = parseFloat(element.Discount);
        const discountAmount = (originalPrice * discountPercent) / 100;
        const finalPrice = originalPrice - discountAmount;
         //const Saleamount = originalPrice - discountAmount;
        html += `<tr>
            <td>${element.BarCode}</td>
            <td>${element.CatName}</td>
            <td>${element.Name}</td>
           
            <td>${Math.round(element.Salesprice)}</td>
            <td>${Math.round(element.PurchasePrice)}</td>
            <td>${element.Discount} % </td>
            
            <td>${Math.round(discountAmount)} </td>
             <td>${Math.round(finalPrice)} </td>
            ${element.status==1 
                ? `<td><span class='badge badge-primary'>Active</span></td>`
                : `<td><span class='badge badge-danger'>In-Active</span></td>`
            }
            <td>  <button class="btn btn-warning btn-sm ml-1" onclick="showBarcodeDetails('${element.BarCode}','${element.Salesprice}','${element.Name}','${element.ColorName}','${element.SizeName}','${element.BarCode}')">
                    <i class="fal fa-barcode"></i>
                </button></td>
            <td>
                <button class="btn btn-info btn-sm" onclick="editDetailprd(${element.ITID}, ${element.CID},'${element.SizeName}')">
                    <i class="fal fa-edit"></i>
                </button>
              
            </td>
           
        </tr>`;
    });

    html += `</tbody></table>`;
    $('#tableData3').html(html);

    $('#tableDataGet3').dataTable({
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
                        var currentDate = new Date();
                        var day = currentDate.getDate();
                        var month = currentDate.getMonth() + 1;
                        var year = currentDate.getFullYear();
                        var hours = currentDate.getHours();
                        var minutes = currentDate.getMinutes();
                        var ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12;
                        hours = hours ? hours : 12;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        var printedDate = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ' ' + ampm;

                        var companyName = "Muntaha COllections";
                        var companyAddress = "2nd Floor Oposite Food Cort Brand Village Sialkot";
                        var companyPhone = "+92 308 9113837";

                        $(win.document.body).find('thead').prepend(
                            "<tr class='header-print'>" + 
                                "<th colspan='3' style='text-align: left;'>" + 
                                    "<img src='<?php echo base_url(); ?>/assets/img/logo.jpg' style='position:relative; top:0; left:0;' width='250px' height='150px' />" + 
                                "</th>" + 
                                "<th colspan='8' style='text-align: left;'>" + 
                                    "<h4>" + companyName + "</h4>" + 
                                    "<h4>" + companyAddress + "</h4>" + 
                                    "<h4>" + companyPhone + "</h4>" + 
                                "</th>" + 
                            "</tr>" +
                            
                            "<tr class='header-print'>" + 
                                "<th colspan='11'><div style='text-align: right;'>Printed Date: " + printedDate + "</div></th>" + 
                            "</tr>"
                        );
                    }
                }
        ]
    });
});
function printSingleRowBarcode(row, barcodeValue, type) {
    const qty = parseInt(row.Qty) || 1;
    let html = '';
    const barcodeType = type === 'company' ? row.PerformaInvoiceNo : row.PerformaInvoiceNo;
    const barcodeColor = type === 'company' ? '#2a5c8a' : '#6b4e71';
    
    // Get ItemName with null check
    const itemName = row.ItemName || '';
    
    for (let i = 0; i < qty; i++) {
        let currentBarcode = type === 'company' 
            ? `${barcodeValue}-${i + 1}` 
            : barcodeValue;

        // Create canvas for barcode generation
        const canvas = document.createElement("canvas");
        canvas.width = 300;
        canvas.height = 80; // Reduced height
        
        JsBarcode(canvas, currentBarcode, {
            format: "CODE128",
            lineColor: barcodeColor,
            width: 2,
            height: 30, // Reduced height
            fontSize: 10, // Smaller font
            margin: 0,
            displayValue: false // Hide text value on barcode to save space
        });
        
        const barcodeImage = canvas.toDataURL("image/png");

        html += `
            <div class="print-page">
                <div class="barcode-box">
                    <div class="barcode-single-line small-text">${barcodeType}</div>
                    <img src="${barcodeImage}" alt="barcode" class="barcode-image">
                    <div class="barcode-single-line small-text">${itemName}</div>
                    <div class="barcode-single-line small-text">(${row.ItemColor || ''}) (${row.ItemSize || ''})</div>
                </div>
            </div>
        `;
    }

    // Inject print styles if not already present
    if (!document.getElementById("barcodePrintStyle")) {
        const style = document.createElement("style");
        style.id = "barcodePrintStyle";
        style.innerHTML = `
            @media print {
                @page {
                    size: auto;
                    margin: 0 !important;
                }

                html, body {
                    margin: 0 !important;
                    padding: 0 !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: flex-start !important;
                }

                * {
                    box-sizing: border-box !important;
                }

                button, .no-print {
                    display: none !important;
                }

                .print-page {
                    display: flex !important;
                    flex-direction: row !important;
                    justify-content: center !important;
                    align-items: center !important;
                    gap: 0.5cm !important;
                    page-break-inside: avoid !important;
                    flex-wrap: wrap !important;
                }

                .barcode-box {
                    width: 6.98cm !important;
                    min-height:5.2cm !important; /* Increased from fixed height to min-height */
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: flex-start !important;
                    padding: 3px !important;
                    background-color: white !important;
                    color: #000 !important;
                    margin: 2px !important;
                    border: 1px solid #ccc !important;
                }

                .barcode-box img {
                    width: 100% !important;
                    height: 0.8cm !important; /* Reduced height */
                    object-fit: contain !important;
                    margin: 2px 0 !important;
                }

                .barcode-single-line {
                    font-size: 7px !important; /* Smaller font */
                    font-weight: bold !important;
                    text-align: center !important;
                    line-height: 1.2 !important;
                    color: #000 !important;
                    width: 100% !important;
                    overflow: hidden !important;
                    text-overflow: ellipsis !important;
                    white-space: nowrap !important;
                    padding: 1px 2px !important;
                }

                .small-text {
                    font-size: 6px !important;
                }
            }

            /* Screen styles */
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
            }

            .print-page {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 0.5cm;
                flex-wrap: wrap;
            }

            .barcode-box {
                width: 6.98cm;
                min-height: 2.2cm;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding: 3px;
                background-color: white;
                color: #000;
                margin: 2px;
                border: 1px solid #ddd;
                border-radius: 2px;
            }

            .barcode-box img {
                width: 100%;
                height: 0.8cm;
                object-fit: contain;
                margin: 2px 0;
            }

            .barcode-single-line {
                font-size: 7px;
                font-weight: bold;
                text-align: center;
                line-height: 1.2;
                color: #000;
                width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                padding: 1px 2px;
            }

            .small-text {
                font-size: 6px;
            }
        `;
        document.head.appendChild(style);
    }

    $('#barcodePrintArea').html(html);
    $('#barcodePrintModal').modal('show');
}


let url33 = "<?php echo base_url("Items/ItemsController/tbl_stock_price_log") ?>";

$.post(url33, function (data) {
    let html = `
    
    
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet3log" style="width:100%;">
    <thead>
    <tr>
        <th style="width: 100px;">Item Code</th>
        <th style="width: 120px;">Category</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 120px;">Sales Price OLD</th>
        <th style="width: 120px;">Sales Price New</th>
        <th style="width: 130px;">Purchase Price OLD</th>
        <th style="width: 130px;">Purchase Price New</th>
        <th style="width: 100px;">Discount % OLD</th>
        <th style="width: 100px;">Discount % New</th>
        <th style="width: 120px;">Changed By</th>
        <th style="width: 160px;">Date</th>
    </tr>
</thead>
        <tbody>`;

    data.forEach(element => {
       const changeDate = new Date(element.ChangeDate);

// Extract parts
const day = changeDate.getDate().toString().padStart(2, '0');
const month = (changeDate.getMonth() + 1).toString().padStart(2, '0');
const year = changeDate.getFullYear();

let hours = changeDate.getHours();
const minutes = changeDate.getMinutes().toString().padStart(2, '0');
const seconds = changeDate.getSeconds().toString().padStart(2, '0');
const ampm = hours >= 12 ? 'PM' : 'AM';

hours = hours % 12;
hours = hours ? hours : 12; // 0 becomes 12
const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes}:${seconds} ${ampm}`;

// Final formatted date
const formattedDate = `${day}/${month}/${year} ${formattedTime}`;
        html += `<tr>
            <td>${element.BarCode}</td>
            <td>${element.CatName}</td>
            <td>${element.Name} ${element.ColorName} ${element.SizeName}</td>
          
            <td>${element.OldSalesPrice}</td>
            <td>${element.NewSalesPrice}</td>
            <td>${element.OldPurchasePrice} </td>
             <td>${element.NewPurchasePrice}</td>
            <td>${element.OldDiscount} %</td>
            <td>${element.NewDiscount} % </td>
             <td>${element.Username}</td>
              <td>${formattedDate}  </td>
            
           
            
           
        </tr>`;
    });

    html += `</tbody></table>`;
    $('#tableData3log').html(html);

    $('#tableDataGet3log').dataTable({
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
                        var currentDate = new Date();
                        var day = currentDate.getDate();
                        var month = currentDate.getMonth() + 1;
                        var year = currentDate.getFullYear();
                        var hours = currentDate.getHours();
                        var minutes = currentDate.getMinutes();
                        var ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12;
                        hours = hours ? hours : 12;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        var printedDate = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ' ' + ampm;

                        var companyName = "Muntaha COllections";
                        var companyAddress = "2nd Floor Oposite Food Cort Brand Village Sialkot";
                        var companyPhone = "+92 308 9113837";

                        $(win.document.body).find('thead').prepend(
                            "<tr class='header-print'>" + 
                                "<th colspan='3' style='text-align: left;'>" + 
                                    "<img src='<?php echo base_url(); ?>/assets/img/logo.jpg' style='position:relative; top:0; left:0;' width='250px' height='150px' />" + 
                                "</th>" + 
                                "<th colspan='8' style='text-align: left;'>" + 
                                    "<h4>" + companyName + "</h4>" + 
                                    "<h4>" + companyAddress + "</h4>" + 
                                    "<h4>" + companyPhone + "</h4>" + 
                                "</th>" + 
                            "</tr>" +
                            
                            "<tr class='header-print'>" + 
                                "<th colspan='11'><div style='text-align: right;'>Printed Date: " + printedDate + "</div></th>" + 
                            "</tr>"
                        );
                    }
                }
        ]
    });
});




let url1 = "<?php echo base_url("Items/ItemsController/loadItemscolor")?>";
$.post(url1,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet1" style="width:100%;">
        <thead >
            <tr>         <th>Name</th>    <th>Color</th>
            </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>

<td>${element.ItemName}</td>
<td>${element.ColorName}</td>

</tr> `
});
            
        html +=` </tbody>
        </table>`
        $('#tableData1').html(html);
        $('#tableDataGet1').dataTable({
        responsive: false,
        lengthChange: false,
        dom:
            
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


let url2 = "<?php echo base_url("Items/ItemsController/loaditemsize")?>";
$.post(url2,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet2" style="width:100%;">
        <thead >
            <tr>         <th>Name</th>    <th>Size</th>
              </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>

<td>${element.ItemeName}</td>
<td>${element.SizeName}</td>

</tr> `
});
            
        html +=` </tbody>
        </table>`
        $('#tableData2').html(html);
        $('#tableDataGet2').dataTable({
        responsive: false,
        lengthChange: false,
        dom:
            
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
</script>
<script src="<?php echo base_url(); ?>/assets/js/JsBarcode.all.min.js"></script>
<script>

function showBarcodeDetailsALL(qty,barcode, salesprice, Name, Color, Size) {
 

    // Inject CSS only once
    if (!document.getElementById("barcodePrintStyle")) {
        const style = document.createElement("style");
        style.id = "barcodePrintStyle";
        style.innerHTML = `
            @media print {
                @page {
                    size: auto;
                    margin: 0 !important;
                }

                html, body {
                    margin: 0 !important;
                    padding: 0 !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: flex-start !important;
                }

                * {
                    box-sizing: border-box !important;
                }

                button, .no-print {
                    display: none !important;
                }

                .print-page {
                    display: flex !important;
                    flex-direction: row !important;
                    justify-content: center !important;
                    align-items: center !important;
                    gap: 1cm !important;
                    page-break-inside: avoid !important;
                }

                .barcode-box {
                    width: 6.98cm !important;
                    height: 1.68cm !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: center !important;
                    padding: 2px !important;
                    background-color: white !important;
                    color: #000 !important;
                    margin-top: 5px!important;
                }

                .barcode-box img {
                    width: 100% !important;
                    height: 0.98cm !important;
                    object-fit: contain !important;
                    margin-top: 2px !important;
                }

                .barcode-single-line {
                    font-size: 10px !important;
                    font-weight: bold !important;
                    text-align: center !important;
                    margin-top: 2px !important;
                    line-height: 1 !important;
                    color: #000 !important;
                }
            }

            /* Screen styles */
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
            }

            .print-page {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 1cm;
            }

            .barcode-box {
                width: 6.98cm;
               height: 1.68cm;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 1px;
                background-color: white;
                color: #000;
                 margin-top: 5px;
            }

            .barcode-box img {
                width: 100%;
                height: 0.98cm;
                object-fit: contain;
                margin-top: 2px;
            }

            .barcode-single-line {
                font-size: 8px;
                font-weight: bold;
                text-align: center;
                margin-top: 2px;
                line-height: 1;
                color: #000;
            }
        `;
        document.head.appendChild(style);
    }

    let content = '';

    for (let i = 0; i < qty; i++) {
        const barcodeId = `barcode-${barcode}-${i + 1}`;
        const canvas = document.createElement("canvas");

        canvas.width = 300;
        canvas.height = 100;

        JsBarcode(canvas, barcode, {
            format: "CODE128",
            lineColor: "#000",
            width: 3,
            height: 60,
            fontSize: 12,
            margin: 0,
            displayValue: true
        });

        const barcodeImage = canvas.toDataURL("image/png");
        const originalPrice = parseFloat(salesprice);

        content += `
        <div class="print-page">
            <div class="barcode-box">
            <div class="barcode-single-line">${Name} ${Color} ${Size}</div>
                <img src="${barcodeImage}" id="${barcodeId}" alt="barcode">
                
                <div class="barcode-single-line">Price: ${originalPrice.toFixed(0)}</div>
            </div>
        </div>
        `;
    }

    $('#barcodeBody').html(content);
    $('#barcodeModal').modal('show');
}


function showBarcodeDetails(barcode, salesprice, Name, Color, Size) {
    const qty = prompt("Enter quantity to fetch:");
    if (!qty || isNaN(qty) || qty <= 0) {
        alert("Please enter a valid quantity.");
        return;
    }

    // Inject CSS only once
    if (!document.getElementById("barcodePrintStyle")) {
        const style = document.createElement("style");
        style.id = "barcodePrintStyle";
        style.innerHTML = `
            @media print {
                @page {
                    size: auto;
                    margin: 0 !important;
                }

                html, body {
                    margin: 0 !important;
                    padding: 0 !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: flex-start !important;
                }

                * {
                    box-sizing: border-box !important;
                }

                button, .no-print {
                    display: none !important;
                }

                .print-page {
                    display: flex !important;
                    flex-direction: row !important;
                    justify-content: center !important;
                    align-items: center !important;
                    gap: 1cm !important;
                    page-break-inside: avoid !important;
                }

                .barcode-box {
                    width: 6.98cm !important;
                    height: 1.68cm !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: center !important;
                    justify-content: center !important;
                    padding: 2px !important;
                    background-color: white !important;
                    color: #000 !important;
                    margin-top: 5px!important;
                }

                .barcode-box img {
                    width: 100% !important;
                    height: 0.98cm !important;
                    object-fit: contain !important;
                    margin-top: 2px !important;
                }

                .barcode-single-line {
                    font-size: 10px !important;
                    font-weight: bold !important;
                    text-align: center !important;
                    margin-top: 2px !important;
                    line-height: 1 !important;
                    color: #000 !important;
                }
            }

            /* Screen styles */
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
            }

            .print-page {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 1cm;
            }

            .barcode-box {
                width: 6.98cm;
               height: 1.68cm;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 1px;
                background-color: white;
                color: #000;
                 margin-top: 5px;
            }

            .barcode-box img {
                width: 100%;
                height: 0.98cm;
                object-fit: contain;
                margin-top: 2px;
            }

            .barcode-single-line {
                font-size: 8px;
                font-weight: bold;
                text-align: center;
                margin-top: 2px;
                line-height: 1;
                color: #000;
            }
        `;
        document.head.appendChild(style);
    }

    let content = '';

    for (let i = 0; i < qty; i++) {
        const barcodeId = `barcode-${barcode}-${i + 1}`;
        const canvas = document.createElement("canvas");

        canvas.width = 300;
        canvas.height = 100;

        JsBarcode(canvas, barcode, {
            format: "CODE128",
            lineColor: "#000",
            width: 3,
            height: 60,
            fontSize: 12,
            margin: 0,
            displayValue: true
        });

        const barcodeImage = canvas.toDataURL("image/png");
        const originalPrice = parseFloat(salesprice);

        content += `
        <div class="print-page">
            <div class="barcode-box">
            <div class="barcode-single-line">${Name} ${Color} ${Size}</div>
                <img src="${barcodeImage}" id="${barcodeId}" alt="barcode">
                
                <div class="barcode-single-line">Price: ${originalPrice.toFixed(0)}</div>
            </div>
        </div>
        `;
    }

    $('#barcodeBody').html(content);
    $('#barcodeModal').modal('show');
}



function loadItems(){
    //let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemssall")?>";
$.post(url,function(data){
    $("#IID").html('');
    let html = `<option value="">Select Items</option>`
    data.forEach(element => {
        html += `<option value="${element.ItemID},${element.Name}">${element.Name}</option>`
    });
    $("#IID").html(html);
    $("#IIDsize").html(html);
   // $("#IIDItem").html(html);
})
}
function loadItemsall(){
    //let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemssall")?>";
$.post(url,function(data){
    $("#IIDItem").html('');
    let html = `<option value="">Select Items</option>`
    data.forEach(element => {
        html += `<option value="${element.ItemID}">${element.Name} (${element.CategoryName})</option>`
    });
    
    $("#IIDItem").html(html);
    
    $("#IIDItemedit").html(html);
})
}
$("#AddColor").click(function (e) {
    e.preventDefault();

    // Get selected value (format: "ItemID,Name")
    let selectedVal = $("#IID").val();



    let parts = selectedVal.split(",");
    let Code = parts[0]; // ItemID
    let Name = parts[1]; // Name

    if (Code === '') {
        iziToast.error({
            title: 'Error',
            message: 'Code is required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }

    if (Name === '') {
        iziToast.error({
            title: 'Error',
            message: 'Name is required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }

    let color = $("#Color").val().trim();
    if (color === '') {
        iziToast.error({
            title: 'Error',
            message: 'Color is required!',
            position: "bottomRight",
            balloon: true
        });
        return;
    }

    let fd = new FormData();
    fd.append('Code', Code);
    fd.append('Name', Name);
    fd.append('color', color);

    let url = "<?php echo base_url("Items/ItemsController/AddItemscolors")?>";
    
    $.ajax({
        url: url,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({
                title: 'Success',
                message: 'Color inserted successfully!',
                position: "bottomRight",
                balloon: true
            });
            loadData();         // reload table or list
            getMaxItemNo();     // update something based on latest ID
            $("#Color").val(''); // clear input after successful insert
        },
        error: function () {
            iziToast.error({
                title: 'Error',
                message: "Something went wrong!",
                position: "bottomRight",
                balloon: true
            });
        }
    });
});




$("#Addsize").click(function(e){
e.preventDefault()
let selectedVal = $("#IIDsize").val();



let parts = selectedVal.split(",");
let Code = parts[0]; // ItemID
let Name = parts[1]; // Name

                    if(Code =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Code is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    let color = $("#size").val();
                    if(color.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                        Size Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
     
                    let fd = new FormData();


fd.append('Code', Code);
fd.append('Name', Name);
fd.append('color', color);

let url = "<?php echo base_url("Items/ItemsController/AddItemssize")?>";
$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
 Size inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();
    getMaxItemNo()
     $("#size").val('');
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


});


$( "#submit").click(function(e){
e.preventDefault()

let CatID = $("#CatID").val();
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
                    }
                    let status = $("#status").is(":checked")?1:0;
     
                    let fd = new FormData();

fd.append('CatID', CatID);
fd.append('Code', Code);
fd.append('Name', Name); // Make sure this is a File/Blob object if it's an image
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
    loadData();$("#CatID").val('').trigger('change.select2');;$("#Code").val('');
    $("#Name").val('');$("#status").prop('checked',true);
 
    getMaxItemNo()
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

function editDetail(id){
    
    let url = "<?php echo base_url("Items/ItemsController/editItems");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){$("#CatID").val(`${data[0].CatID}`).trigger('change.select2');;$("#Code").val(`${data[0].Code}`);
        $("#Name").val(`${data[0].Name}`);
       
       
        $("#status").prop('checked',data[0].status?true:false);
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['ItemID']}`);
    $("#modaldemo8").modal('toggle');
    }
    });
    
    }



    $( "#update").click(function(e){
e.preventDefault()


let CatID = $("#CatID").val();
                    if(CatID =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Category is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    
                    let Code = $("#Code").val();
                    if(Code =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Code is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Name = $("#Name").val();
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;
               
                   
let chidden = $("#chidden").val();

let fd = new FormData();

fd.append('CatID', CatID);
fd.append('Code', Code);
fd.append('Name', Name);
// Make sure this is a File/Blob object if it's an image
fd.append('status', status);
fd.append('id', chidden);
let url = "<?php echo base_url("Items/ItemsController/updateItems")?>";
$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
Item updated Successfully!`,position:"bottomRight",balloon: true});
    loadData();
    $("#modaldemo8").modal('toggle');   
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
// { "CatID":CatID, "Code":Code, "Name":Name, "SalePrice":SalePrice, "purchasePrice":purchasePrice, "image":image, "status":status, "id":chidden},function(data)
// {
//     iziToast.success({title:'Success',message: `
// Items updated Successfully!`,position:"bottomRight",balloon: true});
//     loadData();
// });
// $("#modaldemo8").modal('toggle');
});

function getMaxItemNo(){
    let url = "<?php echo base_url("Items/ItemsController/getMaxItemNo")?>";
    $.post(url,
{},function(data)
{
    $("#Code").val(data)
});
}

function loadCategory()
{
    let url = "<?php echo base_url("Category/CategoryController/loadActiveCategory")?>";
$.post(url,function(data){
    $("#CatID").html('');
    let html = `<option value="">Select Category</option>`
    data.forEach(element => {
        html += `<option value="${element.CatID}">${element.Name}</option>`
    });
    $("#CatID").html(html);
    $("#CatID").select2({ width: '100%',dropdownParent: $("#modaldemo8") })
})
}
    
$(document).ready(function(){
    loadData();
    loadItemsall();
    loadCategory();
    $("#IIDItem").select2({ width: '100%',dropdownParent: $("#modaldemo8item") })
      $("#IID").select2({ width: '100%',dropdownParent: $("#modaldemo8color") })
        $("#IIDsize").select2({ width: '100%',dropdownParent: $("#modaldemo8size") })
    $("#update").css(`display`,'none'); 
})
</script>
<?php
  } else {
    redirect('');
}
?>


    