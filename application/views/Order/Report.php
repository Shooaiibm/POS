
<?php 
if ($this->session->has_userdata('user_id') and ($this->session->userdata('username') == 'Admin')) {
    
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
               Inward / Outward Reports
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
             
            </div>  
            </div>

            <div class="panel-container show">
    <div class="panel-content">
        <!-- Nav Tabs -->
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#tab-inward">Inward Reports</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab-outward-details">Outward Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#tab-inward-details">Inventory ledger</a>
            </li>
        </ul>

        <!-- Tab Contents -->
        <div class="tab-content py-3">
            <!-- Inward Tab -->
            <div class="tab-pane fade show active" id="tab-inward" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>
                <br>

                <div class="row">
                    <!-- Hidden Order Number -->
                    
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
                <button onclick="printInvoice()" class="btn btn-primary btn-sm">
                         Print Report
                    </button>
                <div class="col-md-12" id="tableData"></div>
            </div>

            <!-- Outward Tab -->
            <div class="tab-pane fade" id="tab-outward" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>
         <!-- Radio Buttons -->
            </div>
            <div class="tab-pane fade" id="tab-outward-details" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>

            
                <div class="row p-2">
    <div class="col-md-3">
        <label>Start Date</label>
        <input type="date" class="form-control" onchange="view_inv_Details()" id="startDate_out">
    </div>
    <div class="col-md-3">
        <label>End Date</label>
        <input type="date" class="form-control" onchange="view_inv_Details()" id="endDate_out">
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label class="form-label">Sales man:</label>
            <select id="SalesMan" class="form-control">
                <option value="ALL">ALL</option>
                <option value="Abdul Rehman">Abdul Rehman</option>
                <option value="Rukshar">Rukshar</option>
                <option value="Mouzam">Mouzam</option>
                <!-- Add more options if needed -->
            </select>
        </div>
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <button type="button" class="btn btn-primary w-100" onclick="view_inv_Details()">Show Reports</button>
    </div>
</div>

                    <button onclick="printInvoiceout()" class="btn btn-primary btn-sm">
                         Print Report
                    </button>
                <div class="col-md-12" id="outwarddetails"></div>
            </div>
            <!-- Inward Details Tab -->
            <div class="tab-pane fade" id="tab-inward-details" role="tabpanel">
                <div class="panel-toolbar ml-2 mr-2"></div>
                <div class="row p-2">
    <div class="col-md-4">
        <div class="form-group">
            <label class="form-label">Select Product:</label>
            <select id="IID" class="form-control"></select>
        </div>
    </div>
    <div class="col-md-3">
        <label>Start Date</label>
        <input type="date" class="form-control" id="startDate_out1">
    </div>
    <div class="col-md-3">
        <label>End Date</label>
        <input type="date" class="form-control" id="endDate_out1">
    </div>
    <div class="col-md-2 d-flex align-items-end">
        <button class="btn btn-primary btn-block" onclick="view_Stockbalance()">
            View Ledger
        </button>
    </div>
</div>

                   
                    <button onclick="printInvoicledger()" class="btn btn-primary btn-sm">
                         Print Report
                    </button>

                <div class="col-md-12" id="Stockbalance"></div>
            </div>
        </div>
    </div>
</div>


<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>

<script>

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

function loadall(){
    loadotwareddata();
loaddata();

view_inv_Details();
}


  function view_Stockbalance() {
    let startDate = $('#startDate_out1').val();
    let endDate = $('#endDate_out1').val();
    let itemID = $('#IID').val();

    if (!startDate || !endDate || !itemID) {
        alert("Please select product and date range.");
        return;
    }
function formatToDMY(dateStr) {
            let d = new Date(dateStr);
            let day = String(d.getDate()).padStart(2, '0');
            let month = String(d.getMonth() + 1).padStart(2, '0');
            let year = d.getFullYear();
            return `${day}/${month}/${year}`;
        }
    $.post("<?= base_url('Order/Ordercontroller/inventoryLedgerReport') ?>", {
        IID: itemID,
        Sdate: startDate,
        Edate: endDate
    }, function(response) {
        //alert("i ma here");

        let data = JSON.parse(response);
        if (!data.transactions || data.transactions.length === 0) {
            $('#Stockbalance').html("<div class='alert alert-warning'>No transactions found for selected period.</div>");
            return;
        }

        let productName = data.transactions.length > 0 ? data.transactions[0].Name : 'Unknown Product';

        let html = `
        <style>
            #prinledger {
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
            .product-name {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 10px;
                padding-left: 100px;
                color: #222;
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
        <div id="prinledger">
            <div class="header-section">
                <img src="<?= base_url(); ?>assets/img/logo.jpg" alt="Logo" />
                <div class="report-title">Ledger Report</div>
            </div>

            <div class="product-name">
                Product: <strong>${productName}</strong>
            </div>

            <div class="date-range">
                From: <strong>${formatToDMY(startDate)}</strong> &nbsp;&nbsp;&nbsp;
                To: <strong>${formatToDMY(endDate)}</strong>
            </div>

            <h5><strong>Opening Balance:</strong> ${data.opening_balance}</h5>
            <table class="table table-bordered" id="Stockbalancetable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>`;

        data.transactions.forEach(row => {
            html += `
                <tr>
                    <td>${formatToDMY(row.Date)}</td>
                    <td>${row.in_qty ?? 0}</td>
                    <td>${row.out_qty ?? 0}</td>
                    <td>${row.balance ?? 0}</td>
                </tr>`;
        });

        html += `
                </tbody>
            </table>
            <h5><strong>Final Balance:</strong> ${data.final_balance}</h5>
        </div>`;

        $('#Stockbalance').html(html);
       // alert(html);
    });
}
function view_inv_Details() {
    let startDate = $("#startDate_out").val();
    let endDate = $("#endDate_out").val();
    let SalesMan = $("#SalesMan").val();

    let url = "<?php echo base_url('Order/Ordercontroller/view_inv_Details_new') ?>";

    $.post(url, { 'startDate': startDate, 'endDate': endDate, 'SalesMan': SalesMan }, function (data) {
        console.log("New outward data is:", data);

        // Utility: Format date as dd/mm/yyyy
        function formatToDMY(dateStr) {
            let d = new Date(dateStr);
            let day = String(d.getDate()).padStart(2, '0');
            let month = String(d.getMonth() + 1).padStart(2, '0');
            let year = d.getFullYear();
            return `${day}/${month}/${year}`;
        }

        // Utility: Format number to PKR currency
        function formatCurrency(amount) {
            return parseFloat(amount || 0).toLocaleString('en-PK', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });
        }

        // ✅ Group data by Date only
        let groupedData = {};
        data.forEach(item => {
            let date = item.Date;
            if (!groupedData[date]) groupedData[date] = [];
            groupedData[date].push(item);
        });

        // Sort dates ascending
        let sortedDates = Object.keys(groupedData).sort((a, b) => new Date(a) - new Date(b));

        let html = `
        <style>
            #printArraout {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding: 20px;
                background-color: #fff;
            }
            .header-section {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .header-section img {
                height: 80px;
                width: 100px;
                margin-right: 20px;
            }
            .report-title {
                font-size: 24px;
                font-weight: bold;
                color: #2c3e50;
                text-transform: uppercase;
            }
            .date-range {
                font-size: 14px;
                color: #555;
                margin: 10px 0 20px 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
            }
            th, td {
                border: 1px solid #ccc;
                padding: 8px;
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
            .date-header {
                background-color: #f5f5f5;
                font-weight: bold;
                color: #333;
                text-align: left;
                padding: 10px;
            }
            .subtotal-row {
                background-color: #e9ecef;
                font-weight: bold;
                color: #333;
            }
            tr:hover {
                background-color: #f0f8ff;
            }
        </style>

        <div id="printArraout">
            <div class="header-section">
                <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Logo" />
                <div>
                    <div class="report-title">FORMAL SALES-WISE OUTWARD REPORT</div>
                    <div><strong>Prepared by:</strong> Muntaha Traders</div>
                </div>
            </div>
            <div class="date-range">
                From: <strong>${formatToDMY(startDate)}</strong> &nbsp;&nbsp;&nbsp;
                To: <strong>${formatToDMY(endDate)}</strong>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Payment Type</th>
                        <th>Item Name</th>
                        <th>Color</th>
                        <th>Size</th>
                      
                        <th>Purchase Price</th>
                        <th>Sales Price</th>
                        <th>Discount Amount</th>
                        <th>Amount</th>
                        <th>Profit</th>
                        <th>1% of Sales Price</th>
                    </tr>
                </thead>
                <tbody>`;

        // Grand Totals
        let grandPurchase = 0, grandSales = 0, grandDiscount = 0, grandAmount = 0, grandProfit = 0, grandOnePercentSales = 0, totalQuantity = 0;

        sortedDates.forEach(date => {
            html += `
                <tr class="date-header">
                    <td colspan="12">Date: <strong>${formatToDMY(date)}</strong></td>
                </tr>`;

            let datePurchase = 0, dateSales = 0, dateDiscount = 0, dateAmount = 0, dateProfit = 0, dateOnePercentSales = 0, dateTotalQty = 0;

            // ✅ Sort items by INVNO ascending
            let sortedItems = groupedData[date].sort((a, b) => parseInt(a.INVNO) - parseInt(b.INVNO));

            sortedItems.forEach(element => {
                let purchase = parseFloat(element.PurchasePrice || 0);
                let sales = parseFloat(element.SalesPrices || 0);
                let Discount = parseFloat(element.Discount || 0);
                let Amount = parseFloat(element.Amount || 0);
                let profit = Amount - purchase;
                let onePercentSales = Amount * 0.01;
              

                datePurchase += purchase;
                dateSales += sales;
                dateDiscount += Discount;
                dateAmount += Amount;
                dateProfit += profit;
                dateOnePercentSales += onePercentSales;
                //dateTotalQty += Qty;

                grandPurchase += purchase;
                grandSales += sales;
                grandDiscount += Discount;
                grandAmount += Amount;
                grandProfit += profit;
                grandOnePercentSales += onePercentSales;
               // totalQuantity += Qty;

                html += `
                    <tr>
                        <td>MUN-${element.INVNO}</td>
                        <td>${element.paymentType}</td>
                        <td style="text-align:left">${element.Itemname}</td>
                        <td>${element.ColorName}</td>
                        <td>${element.SizeName}</td>
                       
                        <td>${formatCurrency(purchase)}</td>
                        <td>${formatCurrency(sales)}</td>
                        <td>${formatCurrency(Discount)}</td>
                        <td>${formatCurrency(Amount)}</td>
                        <td>${formatCurrency(profit)}</td>
                        <td>${formatCurrency(onePercentSales)}</td>
                    </tr>`;
            });

            // Subtotal row per date
            html += `
                <tr class="subtotal-row">
                    <td colspan="5" style="text-align:right;">Subtotal for ${formatToDMY(date)}:</td>
                   
                    <td>${formatCurrency(datePurchase)}</td>
                    <td>${formatCurrency(dateSales)}</td>
                    <td>${formatCurrency(dateDiscount)}</td>
                    <td>${formatCurrency(dateAmount)}</td>
                    <td>${formatCurrency(dateProfit)}</td>
                    <td>${formatCurrency(dateOnePercentSales)}</td>
                </tr>`;
        });

        // Grand totals row
        html += `
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" style="text-align:right;">Grand Total:</td>
                        
                        <td>${formatCurrency(grandPurchase)}</td>
                        <td>${formatCurrency(grandSales)}</td>
                        <td>${formatCurrency(grandDiscount)}</td>
                        <td>${formatCurrency(grandAmount)}</td>
                        <td>${formatCurrency(grandProfit)}</td>
                        <td>${formatCurrency(grandOnePercentSales)}</td>
                    </tr>
                </tfoot>
            </table>
        </div>`;

        $('#outwarddetails').html(html);
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

function printInvoice() {
  $('#printArra').printThis({
    importCSS: false,
    importStyle: true,// leave empty if CSS is already in global file
    removeInline: false,

  });
}
function printInvoiceout() {
  $('#printArraout').printThis({
    importCSS: false,
    importStyle: true,// leave empty if CSS is already in global file
    removeInline: false,

  });
}
function printInvoicledger() {
  $('#prinledger').printThis({
    importCSS: false,
    importStyle: true,// leave empty if CSS is already in global file
    removeInline: false,

  });
}

function loaddata() {
    let startDate = $("#startDate").val();
    let endDate = $("#endDate").val();

    let url = "<?php echo base_url('Order/Ordercontroller/view_orders') ?>";

    $.post(url, { 'startDate': startDate, 'endDate': endDate }, function (data) {
        console.log("outward data is:", data);

        // Format date to dd/mm/yyyy
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

        <div id="printArra"> 
            <div class="header-section">
                <img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="Logo"/>
                <div class="report-title">Item wise Inward Report</div>
            </div>

            <div class="date-range">
                From: <strong>${formatToDMY(startDate)}</strong> &nbsp;&nbsp;&nbsp; 
                To: <strong>${formatToDMY(endDate)}</strong>
            </div>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Product Name</th>
                       
                        <th>Quantity</th>
                        <th>Amount</th>
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
                        <td>${formatToDMY(element.Date)}</td>
                        <td>${element.Name}</td>
                       
                        <td>${element.Quantity}</td>
                        <td>${formatCurrency(amount.toFixed(0))}</td>
                    </tr>`;
        });

        html += `
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td>Total:</td>
                        <td>${totalQty}</td>
                        <td>${formatCurrency(totalamount.toFixed(0))}</td>
                    </tr>
                </tfoot>
            </table>
        </div>`;

        $('#tableData').html(html);
    });
}




   

function loadItems(){
    //let CatID = $("#CatID").val(); 
    let url = "<?php echo base_url("Category/CategoryController/loaditemss")?>";
$.post(url,function(data){
    $("#IID").html('');
    let html = `<option value="">Select Items</option>`
    data.forEach(element => {
        html += `<option value="${element.ITID}">${element.Name}</option>`
    });
    $("#IID").html(html);
    
   // $("#IIDoutward").html(html);
    
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
    
    
    $('#startDate_out1').val(formattedDateTime);
    $('#endDate_out1').val(formattedDateTime);
  //  getMaxOrderNo()
  loaddata();
  loadItems();
 
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


    