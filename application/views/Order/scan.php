
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
    <div class="col-lg-12 p-5">

        <!-- Start here with columns -->
        
        <div class="panel" id="panel-1">
    <div class="panel-hdr">
        <h2>Order Scanning</h2>
        <div class="panel-toolbar ml-2 mr-2"></div>
    </div>

    <div class="panel-container show">
        <div class="panel-content">
            <!-- Radio buttons and input field -->
          
               <!-- Add this inside your <head> or a linked CSS file -->
<style>
    .form-check-input {
        width: 20px;
        height: 20px;
        margin-top: 0.3em;
        cursor: pointer;
    }

    .form-check-label {
        font-size: 1.1rem;
        margin-left: 0.5rem;
        font-weight: 500;
        cursor: pointer;
    }

    .form-check-inline {
        margin-right: 1.5rem;
    }

    #orderInput {
        height: 50px;
        font-size: 1.1rem;
        padding: 10px 15px;
        border: 1px solid #ced4da;
        border-radius: 8px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease;
    }

    #orderInput:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }
</style>

<!-- Your form HTML -->
<div class="form-group mb-4">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="scanOption" id="option1" value="1" onclick="loaddata()" checked>
        <label class="form-check-label" for="option1">Delivered</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="scanOption" id="option2"  onclick="loaddata()" value="2">
        <label class="form-check-label" for="option2">Return</label>
    </div>

    <!-- Order number input field -->
    <input type="text" class="form-control mt-3" id="orderInput" placeholder="Enter Barcode Number" autofocus>
</div>


            <h3 class="m-0"></h3>
            <br>

            <div class="row"></div>

            <div class="col-md-12" id="tableData"></div>
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
    
    $('#orderInput').on('keypress', function(e) {
        if(e.which === 13){
            let orderNumber = $(this).val();
    let deliveryStatus = $('input[name="scanOption"]:checked').val(); // Get selected option: 1 or 2

    $.ajax({
        url: 'Order/Ordercontroller/Scaning', // Replace with your actual controller path
        type: 'POST',
        data: {
            order_number: orderNumber,
            delivery_status: deliveryStatus
        },
        success: function (response) {
            if(deliveryStatus == 1){
                if (response === 'Order Already Delivered') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else  if (response === 'Barcode Not Found') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            }  else {
                iziToast.success({
                    title: 'Success',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
                loaddata(); // Reload the data
                $('#orderInput').val(''); // Clear the input field
            }
            }
            else{
                if (response === 'Order Already Returned') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else  if (response === 'Barcode Not Found') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
                loaddata(); // Reload the data
                $('#orderInput').val(''); // Clear the input field
            }
            }
            
            $('#orderInput').val('');
            $('#orderInput').focus();
        },
        error: function (xhr, status, error) {
            $('#orderInput').val('');
            $('#orderInput').focus();
            iziToast.error({
                    title: 'Error',
                    message: error,
                    position: "bottomRight",
                    balloon: true
                });
            console.error('Error:', error);
        }
    });
        }
    })
    $('#orderInput').on('input', function() {
        // Your code here
		if ($(this).val().length == 18) {
    let orderNumber = $(this).val();
    let deliveryStatus = $('input[name="scanOption"]:checked').val(); // Get selected option: 1 or 2

    $.ajax({
        url: 'Order/Ordercontroller/Scaning', // Replace with your actual controller path
        type: 'POST',
        data: {
            order_number: orderNumber,
            delivery_status: deliveryStatus
        },
        success: function (response) {
            if(deliveryStatus == 1){
                if (response === 'Order Already Delivered') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else  if (response === 'Barcode Not Found') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            }  else {
                iziToast.success({
                    title: 'Success',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
                loaddata(); // Reload the data
                $('#orderInput').val(''); // Clear the input field
            }
            }
            else{
                if (response === 'Order Already Returned') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else  if (response === 'Barcode Not Found') {
                iziToast.error({
                    title: 'Error',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: response,
                    position: "bottomRight",
                    balloon: true
                });
                loaddata(); // Reload the data
                $('#orderInput').val(''); // Clear the input field
            }
            }
            
            $('#orderInput').val('');
            $('#orderInput').focus();
        },
        error: function (xhr, status, error) {
            $('#orderInput').val('');
            $('#orderInput').focus();
            iziToast.error({
                    title: 'Error',
                    message: error,
                    position: "bottomRight",
                    balloon: true
                });
            console.error('Error:', error);
        }
    });
}
});


    
function loaddata(){

    let deliveryStatus = $('input[name="scanOption"]:checked').val();
    let url = "<?php echo base_url("Order/Ordercontroller/loadscanning")?>";

$.post(url,{"deliveryStatus":deliveryStatus},function(data){let  html = `
    <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Order No</th>  
              <th>Order Date</th>

            <th>Client</th>
              <th>Phone</th>
                     <th>City</th>
                   <th>Origin</th> 
                   <th>Destination</th>  
             
              <th>Shipper</th> 
              <th>Quantity</th>
 <th>view Details</th>
               <th>Action</th>
             </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.OrderNO}</td>
<td>${element.OrderDate}</td>
<td>${element.Name}</td>
<td>${element.phoneno}</td>
<td>${element.City}</td>
<td>${element.Origin}</td>
<td>${element.Destination}</td>
<td>${element.Shipper}</td>
<td>${element.Quantity}</td>
 <td>
                
                
                  
                  <button class="btn btn-primary" onclick="viewapproveddataPO(${element.OID})">view Details</button>
                </td>
 <td>
                
                
                  
                  <button class="btn btn-danger btn-sm" onclick="sendrequest(${element.OID})">undo</button>
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


function printOrderDetails(printDiv) {
    
    $(`#${printDiv}`).printThis({
        importCSS: false,
        importStyle: true,
        removeInline: false,
    
    });
}

function viewapproveddataPO(id) {
    let url = "<?php echo base_url("Order/Ordercontroller/OrderHeadsdetails");?>";
    $.post(url, { "OID": id }, function (data) {
        if (data) {
            console.log("PO data is", data);

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
                                <td colspan="6" style="font-weight:bold; font-size:15px;">
                                    <b>Client Name:</b> <span id="suppliername"></span><br>
                                    <b>Address:</b> <span id="address"></span><br>
                                    <b>Phone No:</b> <span id="phoneno"></span><br>
                                    <b>Email:</b> <span id="email"></span><br>
                                </td>
                                <td colspan="4" style="font-weight:bold; font-size:15px;">
                                    <b>Order Date:</b> <span id="date"></span><br>
                                    <b>Order #:</b> <span id="pono"></span><br>
                                    <svg id="Barcode"></svg><br>
                                    
                                </td>
                            </tr>
                            <tr style="background-color:#62478A; color:white;">
                                <th style="border:1px solid black;">Serial No</th>
                                <th colspan="3" style="border:1px solid black;">Product Name</th>
                                <th style="text-align:center; border:1px solid black;">PPU</th>
                                <th style="text-align:center; border:1px solid black;">Quantity</th>
                                <th style="text-align:right; border:1px solid black;">Amount</th>
                            </tr>
                        </thead>
                        <tbody>`;

            data.forEach((item, index) => {
                let amount = parseFloat(item.Amount) || 0;
                let price = parseFloat(item.SalesPrice) || 0;
                let qty = parseFloat(item.Quantity) || 0;

                totalQty += qty;
                grandTotal += amount;
                counter++;

                html += `
                    <tr>
                        <td style="text-align:center; border:1px solid black;">${counter}</td>
                        <td colspan="3" style="border:1px solid black;">${item.ItemName}</td>
                        <td style="text-align:center; border:1px solid black;">${price.toFixed(2)}</td>
                        <td style="text-align:center; border:1px solid black;">${qty}</td>
                        <td style="text-align:right; border:1px solid black;">${amount.toFixed(2)}</td>
                    </tr>`;
            });

            html += `
                    <tr>
                        <td></td>
                        <td colspan="2"><b>Total Items: ${counter}</b></td>
                        <td></td>
                      
                        <td style="text-align:right; border:1px solid black;"><b>Total:</b></td>
                          <td style="text-align:center; border:1px solid black;">${totalQty}</td>
                        <td style="text-align:right; border:1px solid black;"><b>${grandTotal.toFixed(2)}</b></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <p><b>Special Note (if any):</b></p>
                            <b><span id="SpecialNote"></span></b>
                        </td>
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
            $('#email').html(data[0]['email']);
            $('#date').html(data[0]['OrderDate']);
            $('#pono').html(data[0]['OID']);
            $('#pono').html(data[0]['OID']);
            $('#Barcode').html(data[0]['Barcode']);

            // Show modal
            $("#dateModelPO").modal('toggle');
        }
    });
}



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
        
        let url = "<?php echo base_url("Order/Ordercontroller/uscanned")?>";
          $.post(url,{"id":id,},function(data){ 
           
         
              iziToast.error({title:'Danger',message: "Data updated Successfully!",position:"topRight",balloon: true});
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
$(document).ready(function(){
    loaddata();
})
</script>
<?php
  } else {
    redirect('');
}
?>


    