<?php
if ($this->session->has_userdata('user_id') and ($this->session->userdata('dashboard') == 1)) {

  $currentMonth= date('m');
  $currentYear= date('Y');
  $today = new DateTime(); // Current date and time
  $sevenDaysAgo = $today->sub(new DateInterval('P7D')); // Subtracts 7 days from the current date
  $sevenDaysAgoFormatted = $sevenDaysAgo->format('d/m/Y');
  $sevenDaysAgoFormattedNew = $sevenDaysAgo->format('Y-m-d');
  $currentDate= date('d/m/Y');

    
$this->load->view('layouts/head'); ?>
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


                    <!-- END Page Header -->
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
            
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

                    <div class="modal fade" id="modaldemo8">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="ModalTitle"></h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                            <div class="row">
                                                <div class="col-md-12" id="tableData"></div>
                                            </div>
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                         
                                           
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="modal fade" id="modaldemo8client">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="ModalTitleclient"></h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                            <div class="row">
                                                <div class="col-md-12" id="tableDataclient"></div>
                                            </div>
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                         
                                           
                                        </div>
                                           <div class="card-footer text-muted">
                                Stellar Business Solutions
                            </div>
                                    </div>
                                </div>
                            </div>
                       
                        <div class="row mt-2 p-4" >
                            <div class="col-sm-6 col-xl-4" id="clientClick" style="cursor:pointer">
                                <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                            <span id="totalClients">0</span>
                                            <small class="m-0 l-h-n">Total Clients</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-user position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4" id="categoryClick" style="cursor:pointer">
                                <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        <span id="totalCategories">0</span>
                                        <small class="m-0 l-h-n">Total Categories</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4" id="itemClick" style="cursor:pointer">
                                <div class="p-3 bg-success rounded overflow-hidden position-relative text-white mb-g">
                                    <div class="">
                                        <h3 class="display-4 d-block l-h-n m-0 fw-500">
                                        <span id="totalItems">0</span>
                                        <small class="m-0 l-h-n">Total Items</small>
                                        </h3>
                                    </div>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                <div class="row p-2">
                    <div class="col-md-6">
                        <label>Start Date</label>
                        <input type="date" class="form-control"  onchange="view_inv_Details()"  id="startDate_out">
                    </div>
                    <div class="col-md-6">
                        <label>End Date</label>
                        <input type="date" class="form-control" onchange="view_inv_Details()" id="endDate_out">
                    </div>
                    <div class="col-md-12" id="outwarddetails"></div>
                    </div>
             

                                </div>
                                <div class="col-md-6">
                                <div class="panel-container show">
                        <div class="panel-content p-4">

                        
                             
                            <ul class="nav nav-pills mb-3 flex-wrap" role="tablist" id="category-tabs" style="gap: 10px;">
                                
                            </ul>

                       
                          
                            <div class="tab-content" id="tab-contents">
                               
                            </div>

                        </div>
                    </div>
                                </div>
                            </div>

                            
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
                    </main>
</div>
                    <!-- this overlay is activated only when mobile menu is triggered -->
                    <?php $this->load->view('layouts/foot.php'); ?>
                    <!-- <script src="<?php echo base_url();?>assets/js/vendors.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.bundle.js"></script> -->
        <script type="text/javascript">
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
function formatDate(dateStr) {
    const dateObj = new Date(dateStr);
    const day = String(dateObj.getDate()).padStart(2, '0');
    const month = String(dateObj.getMonth() + 1).padStart(2, '0');
    const year = dateObj.getFullYear();
    return `${day}/${month}/${year}`;
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
                    
                    <th>view Invoice</th>
                </tr>
            </thead>
            <tbody>`;
        let totalQuantity=0;
        let totalamount=0;
        data.forEach(element => {
            totalQuantity+=parseInt(element.Quantity);
            
            html += `<tr>
                <td>${formatDate(element.Date)}</td>
                <td>MUN-${element.INVNO}</td>
                <td>${element.Quantity}</td>
                
           
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
// Call this on document ready

function Stockbalance(CatID, TablID) {
    let url = "<?php echo base_url('Order/Ordercontroller/Stockbalance') ?>";

    $.post(url, { 'CatID': CatID }, function(data) {
        let html = `
        <div class="col-md-8" >
       
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
            /* Activate smart panels */
            $('#js-page-content').smartPanel();

        </script>
        <!-- The order of scripts is irrelevant. Please check out the plugin pages for more details about these plugins below: -->
        <!-- <script src="<?php echo base_url();?>assets/js/statistics/peity/peity.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/statistics/flot/flot.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script src="<?php echo base_url();?>assets/js/datagrid/datatables/datatables.bundle.js"></script> -->
        <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/data.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/drilldown.js"></script>
                <script>
 


var clientsHTML= ''
var categoriesHTML= ''
var itemsHTML= ''
function invdetails(invno) {
    $('#printdetails').html('');
  let url = "<?php echo base_url('Order/Ordercontroller/Getinvoiceinv'); ?>";
  $.post(url, { INVNO: invno }, function (data) {
    console.log("inv data is:", data);
    const header = data[0] || {};
    const Year = header.year || '';
    const INVNO_val = header.INVNO || '';
    const invdate = header.Date || '';

    // Current Date & Time for Print
    const now = new Date();
    const printDate = now.toLocaleDateString();
    const printTime = now.toLocaleTimeString();

    let html = `
</style>
<div class="thermal-invoice" id="invoiceToPrint">
  <div class="invoice-header text-center">
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
         <th class="text-right">Dis AMT</th>
        <th class="text-right">Amt</th>
      </tr>
    </thead>
    <tbody>`;

    let totalQty = 0;
    let subtotal = 0;
    let serial = 0;

    data.forEach(row => {
      serial++;
      const qty = parseInt(row.Quantity);
      const rate = parseFloat(row.SalesPrices);
      const discount = parseFloat(row.Discount);
      const grossAmount = qty * rate;
      const itemAmount = parseFloat(row.Amount);
const dicprec = parseInt(row.DICprec);
      totalQty += qty;
      subtotal += itemAmount;

      html += `
      <tr>
        <td class="text-left">
  ${row.EMINO}<br>
  ${row.Name} ${row.ColorName} 
  ${row.DICprec > 0 ? `Disc (${row.DICprec}) %` : ''}
</td>
        <td class="text-center">${row.SizeName}</td>
        <td class="text-center">${qty}</td>
        <td class="text-right">${Math.round(rate)}</td>
        <td class="text-right">${Math.round(discount)}</td>
        <td class="text-right">${Math.round(itemAmount)}</td>
      </tr>`;
    });

    const invoiceDiscount = parseFloat(data[0].DiscountAmount || 0);
    const discountPercent = parseFloat(data[0].DiscountPercent || 0);
    const grandTotal = parseFloat(data[0].Grandtotal || 0) ;
    const received = parseFloat(data[0].received || 0) ;
   const balance = received-grandTotal;

    html += `
      <tr class="summary-row">
        <td  class="text-left">Total Items: ${serial}</td>
        <td colspan="4" class="text-right">Subtotal:</td>
        <td class="text-right">${Math.round(subtotal)}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="4" class="text-right">Discount (${discountPercent.toFixed(2)}%):</td>
        <td colspan="2" class="text-right">-${Math.round(invoiceDiscount)}</td>
      </tr>
      <tr class="summary-row">
        <td colspan="4" class="text-right"><strong>Grand Total:</strong></td>
        <td colspan="2" class="text-right"><strong>${Math.round(grandTotal)}</strong></td>
      </tr>
      <tr class="summary-row">
        <td colspan="4" class="text-right"><strong>Received:</strong></td>
        <td colspan="2" class="text-right"><strong>${Math.round(received)}</strong></td>
      </tr>
      <tr class="summary-row">
        <td colspan="4" class="text-right"><strong>Balance:</strong></td>
        <td colspan="2" class="text-right"><strong>${Math.round(balance)}</strong></td>
      </tr>
    </tbody>
  </table>

  <div class="text-center" style="font-weight:bold;">
    <strong>100% COTTON</strong><br>
    <strong>MACHINE WASH COLD, DO NOT BLEACH</strong><br>
    <strong>TUMBLE DRY LOW, MEDIUM IRON</strong>
  </div>

  <div class="text-left">
    <strong>EXCHANGE & CLAIM POLICY</strong><br>
    1. Original invoice and intact barcode/tag must be presented for all exchanges.<br>
    2. Items are eligible for exchange within 8 days from the date of purchase.<br>
    3. No cash refunds; exchanges only for items of equal or higher value (price difference payable).<br>
    4. No exchange on used, worn, washed, altered, or stained items, or items discounted 30% or more.<br>
    5. Claims for manufacturing defects or damage must be made within 8 days of purchase.<br>
    6. Exchanges are subject to stock availability and approval after product inspection.<br>
  </div>

  <div class="invoice-tagline text-center">
    Thank you for Shopping At Muntaha Collection<br>
    Have a wonderful day :)<br>
    Powered by Stellar Business Solutions<br>
    <small>Printed on: ${printDate} ${printTime}</small>
  </div>
   <div class="invoice-tagline text-center">
    Generated By: ${data[0].SalesMan}
   
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
        removeInline: false
    });
}

function loadDashboardData(){
    $('#totalClients').html('');
$('#totalCategories').html('');
$('#totalItems').html('');


let url2 = "<?php echo base_url("Dashboard/Dashbaordcontroller/loadDashboardData")?>";
$.post(url2,function(data){ 
    $('#totalClients').html(data.totalClients.length);
$('#totalCategories').html(data.totalCategories.length);
$('#totalItems').html(data.totalItems.length);

$("#container").html('')
$("#itemsSlider").html('')
let clientsHTML=``;
  clientsHTML = `<table class="table table-responsive w-100 d-block table-hover" id="clientTableclient" style="width:100%;">
        <thead >
            <tr>    <th>Name</th>    <th>VAT</th>    <th>Phone No</th>    <th>Email</th>    <th>Status</th> </tr>
        </thead>
        <tbody>`;
        data.totalClients.forEach(element => {

clientsHTML += ` <tr>
<td>${element.Name}</td><td>${element.City}</td><td>${element.phoneno}</td><td>${element.email}</td>
${element.status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

</tr> `
});
            
        clientsHTML +=` </tbody>
        </table>`
       
      
    categoriesHTML = `<table class="table table-responsive w-100 d-block table-hover" id="categoryTable" style="width:100%;">
        <thead >
            <tr>    <th>Name</th>    <th>Status</th> </tr>
        </thead>
        <tbody>`;
        data.totalCategories.forEach(element => {

categoriesHTML += ` <tr>
<td>${element.Name}</td>
${element.Status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

</tr> `
});
            
        categoriesHTML +=` </tbody>
        </table>`
       
        

    itemsHTML = `<table class="table table-responsive w-100 d-block table-hover" id="itemTable" style="width:100%;">
        <thead >
            <tr>     <th>Image</th>    <th>Code</th>  <th>Category</th>   <th>Name</th>    <th>Sale Price</th>    <th>Purchase Price</th>      <th>Status</th> </tr>
        </thead>
        <tbody>`;
        data.totalItems.forEach(element => {

itemsHTML += ` <tr>
<td><img src='<?php echo base_url(); ?>assets/img/${element.image != null && element.image != ''?'ItemImages/'+element.image:'upload.png'}' class='rounded' height="50px" width="50px" /></td>

<td>${element.Code}</td><td>${element.CatID}</td><td>${element.Name}</td><td>${element.SalePrice}</td><td>${element.purchasePrice}</td>
${element.status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 


</tr> `
});
            
        itemsHTML +=` </tbody>
        </table>`
        

    
    
})
}

$("#clientClick").click(function(){
    let clientdiv=``;
    let url2 = "<?php echo base_url("Dashboard/Dashbaordcontroller/loadclient")?>";
   // alert(url2);
$.post(url2,function(data){ 
   console.log("clinet dat is:",data);
   
  clientdiv += `<table class="table table-responsive w-100 d-block table-hover" id="clientTableclient" style="width:100%;">
        <thead >
            <tr>    <th>Client Name</th>    <th>VAT</th>  <th>Address</th>   <th>Phone No</th>    <th>Email</th>    <th>Status</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

clientdiv += ` <tr>
<td>${element.Name}</td><td>${element.City}</td><td>${element.address}</td><td>${element.phoneno}</td><td>${element.email}</td>
${element.status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

</tr> `
});
            
        clientdiv +=` </tbody>
        </table>`

        $("#ModalTitleclient").html('Client Details')

$("#tableDataclient").html(clientdiv)

$('#clientTableclient').dataTable({
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
$("#modaldemo8client").modal('show')
});

});
$("#categoryClick").click(function(){
$("#ModalTitle").html('Category Details')
$("#tableData").html(categoriesHTML)
$('#categoryTable').dataTable({
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
$("#modaldemo8").modal('show')
})
$("#itemClick").click(function(){
$("#ModalTitle").html('Items Details')
$("#tableData").html(itemsHTML)
$('#itemTable').dataTable({
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
$("#modaldemo8").modal('show')
})
$(document).ready(function()
{
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const formattedDateTime = `${year}-${month}-${day}`;
    $('#startDate_out').val(formattedDateTime);
    $('#endDate_out').val(formattedDateTime);
    tbl_Catagory();
    loadDashboardData();

    view_inv_Details();
})
        </script>
<?php
  } else {
    redirect('');
}
?>