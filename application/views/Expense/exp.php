
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

        img {
            max-width: 100%;
            height: auto;
        }

        /* Print settings for thermal printer */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            #printButton {
                display: none; /* Hide print button */
            }

            @page {
                size: 82mm 210mm; /* Set paper size */
                margin: 0;         /* Remove default margins */
            }

            #barcodeModal {
                display: block;
            }
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
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Expense Catagory</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                <div class="col-md-9">
                                                <div class="row">
           
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Catagory Name:</label>
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
                                            <h6 class="modal-title">Expense Transaction</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                             
                                                <div class="row">
                            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Select Catagory:</label>
                                                            <select class="form-control" id="EXCID" ></select>
                                                        </div>
  </div>
  

            
  <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Date:</label>
                                                            <input type="date" class="form-control" id="Date"
                                                                placeholder="Enter Purchase Price" autocomplete="purchasePrice">
                                                        </div>
  </div>
            
        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Amount:</label>
                                                            <input type="number" class="form-control" id="Amount"
                                                                placeholder="Enter Amount" autocomplete="TID ">
                                                                <input type="hidden" class="form-control" id="TID" autocomplete="TID ">
                                                        </div>
  </div>
 

</div>
</div>

                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="submitprd">Add Expense</button> 
                                           
                                             <button class="btn btn-primary" type="button" id="updateprd">Update Expense</button> 
                                           
                                            
                                            
                                           
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
                                    <input type="text" class="form-control" id="size" placeholder="Enter Color" autocomplete="off">
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
     Expense Details
        </h2>
        <div class="panel-toolbar ml-2 mr-2">
     
    </div>  
    </div>

    <div class="panel-container show">
<div class="panel-content">
<!-- Nav Tabs -->
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#tab-inward">Expense Catagory</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#tab-outward">Expense Transaction</a>
    </li>
    
</ul>

<!-- Tab Contents -->
<div class="tab-content py-3">
    <!-- Inward Tab -->
    <div class="tab-pane fade show active" id="tab-inward" role="tabpanel">
        <div class="panel-toolbar ml-2 mr-2"></div>
        <button class="btn btn-primary fw-bold p-2 mt-2" id="openModel">
          <i class="fal fa-plus-circle"></i> &nbsp; Create Expense Catagory &nbsp;
        </button>
        <div class="mt-3" id="tableData">
          <!-- Table for Create Items -->
        </div>

    </div>

    <!-- Outward Tab -->
    <div class="tab-pane fade" id="tab-outward" role="tabpanel">
        <div class="panel-toolbar ml-2 mr-2"></div>
        <button class="btn btn-info fw-bold p-2 mt-2" id="openModelcolor">
          <i class="fal fa-plus-circle"></i> &nbsp; Add  Expense &nbsp;
        </button>
          <div class="row p-2">
                    <div class="col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control"  onchange="loadData()"  id="startDate">
                    </div>
                    <div class="col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" onchange="loadData()" id="endDate">
                    </div>
                    </div>
                    <button onclick="printInvoice()" class="btn btn-primary btn-sm">
                         Print Report
                    </button>
                    <div class="row">
        <div class="mt-3 col-md-12" id="tableData3">
          <!-- Table for Create Color -->
        </div>
        </div>

    </div>
   
    
</div>
</div>
</div>

<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script>

function printInvoice() {
  $('#printexp').printThis({
    importCSS: true,
    importStyle: true,
    loadCSS: "", // leave empty if CSS is already in global file
    removeInline: false,
    printDelay: 500,
    pageTitle: "Invoice",
  });
}
    function editDetailprd(id){
      

    let url = "<?php echo base_url("Order/Ordercontroller/Editexpense");?>";
    $.post(url,{'id':id},function(data)
    { 
      
        console.log("Data is ",data);
    if(data){
      $("#EXCID").val(`${data[0].EXCID}`).trigger('change.select2');
    $("#Date").val(`${data[0].Date}`);
    $("#Amount").val(`${data[0].Amount}`);
    $("#updateprd").css(`display`,'block');
        $("#submitprd").css(`display`,'none');
    $('#TID').val(`${data[0]['TID']}`);
    $("#modaldemo8item").modal('toggle');
    }
    });
    
    }


    
   
$("#submitprd").click(function (e) {
    e.preventDefault();

    let EXCID = $("#EXCID").val();
    let Amount = $("#Amount").val();
    let Date = $("#Date").val();

    if (EXCID === '') {
        iziToast.error({ title: 'danger', message: `Exp Category is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    if (Date === '') {
        iziToast.error({ title: 'danger', message: `Date is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    if (Amount === '') {
        iziToast.error({ title: 'danger', message: `Amount is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    let fd = new FormData();
    fd.append('EXCID', EXCID);
    fd.append('Amount', Amount);
    fd.append('Date', Date);

    let url = "<?php echo base_url('Order/Ordercontroller/insertExpenseValue')?>";
    $.ajax({
        url: url,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({ title: 'Success', message: `Expense inserted Successfully!`, position: "bottomRight", balloon: true });
            loadData();
            $("#modaldemo8item").modal('toggle');
        },
        error: function (xhr, status, error) {
            iziToast.error({ title: 'Error', message: "Something went wrong!", position: "bottomRight", balloon: true });
        }
    });
});
   $("#updateprd").click(function (e) {
    e.preventDefault();

    let TID = $("#TID").val();
    let EXCID = $("#EXCID").val();
    let Amount = $("#Amount").val();
    let Date = $("#Date").val();

    if (EXCID === '') {
        iziToast.error({ title: 'danger', message: `Exp Category is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    if (Date === '') {
        iziToast.error({ title: 'danger', message: `Date is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    if (Amount === '') {
        iziToast.error({ title: 'danger', message: `Amount is Required!`, position: "bottomRight", balloon: true });
        return;
    }

    let fd = new FormData();
    fd.append('TID', TID);
    fd.append('EXCID', EXCID);
    fd.append('Amount', Amount);
    fd.append('Date', Date);

    let url = "<?php echo base_url('Order/Ordercontroller/updateExpenseValue') ?>";
    $.ajax({
        url: url,
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({ title: 'Success', message: `Expense updated successfully!`, position: "bottomRight", balloon: true });
            loadData();
            $("#modaldemo8item").modal('toggle');
            $("#updateprd").hide();
            $("#submitprd").show();
        },
        error: function (xhr, status, error) {
            iziToast.error({ title: 'Error', message: "Something went wrong!", position: "bottomRight", balloon: true });
        }
    });
});


function callcolor() {
    let IIDitem = $("#IIDItem").val();  // ✅ Use "IIDItem" with capital "I"

  // alert(IIDitem);  // Now this will show the correct value

    let url = "<?php echo base_url('Category/CategoryController/loaditemssDetailscolor') ?>";
    $.post(url, { IID: IIDitem }, function (data) {
        let html = `<option value="">Select Color</option>`;
        data.forEach(el => {
            html += `<option value="${el.CID}">${el.ColorName}</option>`;
        });
        $("#ColorID").html(html);
    }).fail(function(xhr, status, err) {
        iziToast.error({
            title: 'Error',
            message: 'Could not load colors. Please try again.',
            position: "bottomRight",
            balloon: true
        });
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
            message: 'Could not load colors. Please try again.',
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

function callcoloredit(ITEMID) {
    let IIDitem = $("#IIDItemedit").val();  // ✅ Use "IIDItem" with capital "I"
  
  // alert(IIDitem);  // Now this will show the correct value

    let url = "<?php echo base_url('Category/CategoryController/loaditemssDetailscolor') ?>";
    $.post(url, { IID: IIDitem }, function (data) {
        console.log("edit color data is :",data);
        let html = ``;
        data.forEach(el => {
            html += `<option value="${el.CID}">${el.ColorName}</option>`;
        });
        $("#ColorIDedit").html(html);
    });
    let url2 = "<?php echo base_url('Category/CategoryController/loaditemssDetailssize') ?>";
    $.post(url2, { IID: IIDitem }, function (data) {
        let html = ``;
        data.forEach(el => {
            html += `<option value="${el.SID}">${el.SizeName}</option>`;
        });
        $("#SizeIDedit").html(html);
    });
}

$("#openModel").click(function(){
   
    $("#Code").val('');$("#Name").val('');
   
    $("#status").prop('checked',true);
  
   
  
    $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    })   
    $("#openModelcolor").click(function(){
        //loadItemsall();
        $("#updateprd").css(`display`,'none');
         
       loadItemsall();
    $("#submitprd").css(`display`,'block');
    $("#modaldemo8item").modal('toggle');
    })    
 function formatDate(dateStr) {
    if (!dateStr) return '';
    const date = new Date(dateStr);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}
function loadData()
{

 let startDate = $("#startDate").val(); 
    let endDate = $("#endDate").val(); 

    let url = "<?php echo base_url("Order/Ordercontroller/loadexpcatagory")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>       <th>Category Name</th><th>Status</th>    <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>

<td>${element.Name}</td>
 <td><span class='badge ${element.Status == 1 ? 'badge-primary' : 'badge-danger'}'>${element.Status == 1 ? 'Active' : 'In-Active'}</span></td>
 <td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.EXCID})"><i class="fal fa-edit"></i></buttton>
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
let url3 = "<?php echo base_url("Order/Ordercontroller/loadexp") ?>";
$.post(url3, { 'startDate': startDate, 'endDate': endDate }, function (data) {
    let tableRows = '';
    let groupedData = {};
    let grandTotal = 0;
 function formatToDMY(dateStr) {
            let d = new Date(dateStr);
            let day = String(d.getDate()).padStart(2, '0');
            let month = String(d.getMonth() + 1).padStart(2, '0');
            let year = d.getFullYear();
            return `${day}/${month}/${year}`;
        }

        function formatCurrency(amount) {
            return parseFloat(amount).toLocaleString('en-PK', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }
    // Group data by category and compute totals
    data.forEach(element => {
        let category = element.CategoryName;
        if (!groupedData[category]) {
            groupedData[category] = {
                rows: [],
                total: 0
            };
        }
        groupedData[category].rows.push(element);
        groupedData[category].total += parseFloat(element.Amount);
        grandTotal += parseFloat(element.Amount);
    });

    // Collect all data rows first (no subtotal rows here)
    Object.values(groupedData).forEach(group => {
        group.rows.forEach(element => {
            tableRows += `<tr>
                <td style="align:left">${element.CategoryName}</td>
                <td>${formatDate(element.Date)}</td>
                <td>${parseFloat(element.Amount).toFixed(2)}</td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="editDetailprd(${element.TID})">
                        <i class="fal fa-edit"></i>
                    </button>
                </td>
            </tr>`;
        });
    });

    // Build footer content with group subtotals and grand total
    let summaryRows = '';
    Object.keys(groupedData).forEach(category => {
        summaryRows += `<tr style="background-color:#f9f9f9; font-weight:bold;">
            <td colspan="2">Subtotal for ${category}</td>
            <td>${groupedData[category].total.toFixed(2)}</td>
            <td></td>
        </tr>`;
    });

    summaryRows += `<tr style="background-color:#dff0d8; font-weight:bold;">
        <td colspan="2">Grand Total</td>
        <td>${grandTotal.toFixed(2)}</td>
        <td></td>
    </tr>`;

    // Insert all rows in one go
    let html = `
    <style>
            #printArra {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f9f9f9;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .header-section {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .header-section img {
                height: 80px;
                width: 80px;
                margin-right: 20px;
            }

            .report-title {
                font-size: 22px;
                font-weight: bold;
                color: #333;
            }

            .date-range {
                font-size: 14px;
                color: #444;
                margin-bottom: 20px;
                padding-left: 100px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 10px;
                text-align: center;
                font-size: 14px;
            }

            th {
                background-color: #007bff;
                color: white;
            }

            tfoot td {
                font-weight: bold;
                background-color: #f1f1f1;
            }

            tr:hover {
                background-color: #f0f8ff;
            }
        </style>
    <div id="printexp">
       <div class="header-section">
                <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Logo"/>
                <div class="report-title">Expense Report</div>
            </div>
 <div class="date-range">
                From: <strong>${formatToDMY(startDate)}</strong> &nbsp;&nbsp;&nbsp; 
                To: <strong>${formatToDMY(endDate)}</strong>
            </div>
    <table class="table table-responsive w-100 d-block table-hover" style="width:100%;">
        <thead>
            <tr>
                <th style="align:left">Expense</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ${tableRows}
        </tbody>
        <tfoot>
            ${summaryRows}
        </tfoot>
    </table> </div>`;

    $('#tableData3').html(html);

    // Initialize DataTable
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
                className: 'btn-outline-primary btn-sm'
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
function showBarcodeDetails(barcode) {
    const qty = prompt("Enter quantity to fetch:");
    if (!qty || isNaN(qty) || qty <= 0) {
        alert("Please enter a valid quantity.");
        return;
    }

    let rows = '';

    for (let i = 0; i < qty; i++) {
        const barcodeId = `barcode-${barcode}-${i + 1}`;
        const canvas = document.createElement("canvas");

        // Set canvas resolution for good print quality (around 2in × 1in at 96 DPI)
        canvas.width = 192; // 2 inches
        canvas.height = 96; // 1 inch

        JsBarcode(canvas, barcode, {
            format: "CODE128",
            lineColor: "#000",
            width: 1.3,           // Suitable for tight but readable bars
            height: 60,           // Fits within 1 inch height
            fontSize: 10,
            margin: 0,
            displayValue: true
        });

        const barcodeImage = canvas.toDataURL("image/png");

       rows += `<tr>
    <td style="padding: 2px 4px 2px 0; text-align: center;">
        <img src="${barcodeImage}" id="${barcodeId}-1" alt="barcode" style="width: 1.7in; height: 0.8in;">
    </td>
    <td style="padding: 2px 0 2px 4px; text-align: center;">
        <img src="${barcodeImage}" id="${barcodeId}-2" alt="barcode" style="width: 1.7in; height: 0.8in;">
    </td>
</tr>`;
    }

    $('#barcodeBody').html(rows);
    $('#barcodeModal').modal('show');
}




function loadItemsall(){
    //let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Order/Ordercontroller/loadexpactivecatagory")?>";
    //alert(url);
$.post(url,function(data){
    $("#IIDItem").html('');
    let html = `<option value="">Select Catagory</option>`
    data.forEach(element => {
        html += `<option value="${element.EXCID}">${element.Name}</option>`
    });
    
   
    
    $("#EXCID").html(html);
     $("#EXCID").select2({ width: '100%',dropdownParent: $("#modaldemo8item") })
})
}


$( "#submit").click(function(e){
e.preventDefault()

let Name = $("#Name").val();
                    if(Name.trim() =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Catagory Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    let status = $("#status").is(":checked")?1:0;
     
                    let fd = new FormData();


fd.append('Name', Name); // Make sure this is a File/Blob object if it's an image
fd.append('status', status);

let url = "<?php echo base_url("Order/Ordercontroller/AddExpCatagory")?>";
$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
 Expense Catagory inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();
    $("#Name").val('');$("#status").prop('checked',true);
 
   // getMaxItemNo()
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

function editDetail(id){
    
    let url = "<?php echo base_url("Order/Ordercontroller/editExpCatagory");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){
        $("#Name").val(`${data[0].Name}`);
       
       
        $("#status").prop('checked',data[0].Status?true:false);
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['EXCID']}`);
    $("#modaldemo8").modal('toggle');
    }
    });
    
    }



    $( "#update").click(function(e){
e.preventDefault()


let Name = $("#Name").val();
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Exp Catagory is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;
               
                   
let chidden = $("#chidden").val();

let fd = new FormData();

fd.append('Name', Name);
// Make sure this is a File/Blob object if it's an image
fd.append('Status', status);
fd.append('id', chidden);
let url = "<?php echo base_url("Order/Ordercontroller/updateEXPCategory")?>";
$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
exp Catagory updated Successfully!`,position:"bottomRight",balloon: true});
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



    
$(document).ready(function(){

  
   const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const formattedDateTime = `${year}-${month}-${day}`;


     
    $('#startDate').val(formattedDateTime);
    $('#endDate').val(formattedDateTime);
      $('#Date').val(formattedDateTime);
       loadData();
       loadItemsall();
      $("#update").css(`display`,'none'); 
})
</script>
<?php
  } else {
    redirect('');
}
?>


    