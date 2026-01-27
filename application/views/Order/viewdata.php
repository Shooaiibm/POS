
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

    <!-- Order number input field -->
    <input type="text" class="form-control mt-3" id="orderInput" placeholder="Enter Barcode Number" autofocus>
</div>


            <h3 class="m-0"></h3>
            <br>

            <div class="row"></div>

            <div class="col-md-12" id='approvedDtPO'>

</div>
        </div>
    </div>
</div>

        

          

        </div>

    </div>
</div>
</div>
<!-- END Page Wrapper -->
<?php $this->load->view('layouts/foot.php'); ?>
<script src="<?php echo base_url("/assets/js/JsBarcode.all.min.js")?>";></script>
<script>
    
    $('#orderInput').on('keypress', function(e) {
    if (e.which === 13) {
        let orderNumber = $(this).val();
       // alert(orderNumber);  // ✅ Now it shows the actual value typed in the input

        $.ajax({
            url: 'Order/Ordercontroller/Scaningdata',
            type: 'POST',
            data: {
                order_number: orderNumber
            },
            success: function (response) {
                viewapproveddataPO(orderNumber);  // Use correct variable
                $('#orderInput').val('');  // Clear input after success
            }
        });
    }
});

    
    


function printOrderDetails(printDiv) {
    
    $(`#${printDiv}`).printThis({
        importCSS: false,
        importStyle: true,
        removeInline: false,
    
    });
}

function viewapproveddataPO(id) {
    $('#approvedDtPO').html("");  
    let url = "<?php echo base_url("Order/Ordercontroller/Scaningdata");?>";
    $.post(url, { "order_number": id },async function (data) {
        if (data.length>0) {
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
            //$("#dateModelPO").modal('toggle');
        }
        else{
            $('#approvedDtPO').html("<h1 style='text-align:center;font-weight:bold;'>No Record Found!</h1>");  
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
          // loaddata();
       
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
    //loaddata();
})
</script>
<?php
  } else {
    redirect('');
}
?>


    