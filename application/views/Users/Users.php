
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


        <!-- Model HTML -->

        <div class="modal fade" id="modaldemo8">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Users</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Username:</label>
                                                            <input type="text" class="form-control" id="Username"
                                                                placeholder="Enter Username" autocomplete="Username">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">password:</label>
                                                            <input type="password" class="form-control" id="password"
                                                                placeholder="Enter password" autocomplete="password">
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
            
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="ClientStatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="ClientStatus">Client Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>  
            

  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="catagoryStatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="catagoryStatus">Catagory Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>  
            
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="itemstatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="itemstatus">Inventory Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>    
      
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="orderStatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="orderStatus">Order Status</label>
                                                            </div>
                                                        </div>
        </div>                                                    
  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="inwardstatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="inwardstatus">Inward Status</label>
                                                            </div>
                                                        </div>
                                                        
                                    
  </div>
    <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="SalesStatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="SalesStatus">Sales Status</label>
                                                            </div>
                                                        </div>
                                    
  </div>
  

  <div class="col-md-6 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="Dashboardstatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="Dashboardstatus">Dashboard status</label>
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

    
    <div class="col-lg-12 p-5">

        <!-- Start here with columns -->
        
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                Users information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create Users &nbsp;
                    </button>
                </h3>
            </div>  
            </div>

            <div class="panel-container show">
                <div class="panel-content">
                <div class="row">
                    <div class="col-md-12" id='tableData'>

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
<script>
$("#openModel").click(function(){$("#Username").val('');$("#password").val('');$("#status").prop('checked',true);$("#ClientStatus").prop('checked',true);$("#catagoryStatus").prop('checked',true);$("#itemstatus").prop('checked',true);$("#orderStatus").prop('checked',true);$("#Dashboardstatus").prop('checked',true);

$("#SalesStatus").prop('checked',true);
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    })    
function loadData() {
    let url = "<?php echo base_url('Users/UsersController/loadUsers') ?>";
    $.post(url, function(data) {
        let html = `
        <table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Client Status</th>
                    <th>Category Status</th>
                    <th>Inventory Status</th>
                    <th>Order Status</th>
                    <th>Dashboard Status</th>
                    <th>Sales Status</th>
                                        <th>Inward Status</th>

                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>`;

        data.forEach(element => {
            html += `
            <tr>
                <td>${element.Username}</td>
                <td>${element.password}</td>
                <td><span class='badge ${element.status == 1 ? 'badge-primary' : 'badge-danger'}'>${element.status == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.ClientStatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.ClientStatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.catagoryStatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.catagoryStatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.itemstatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.itemstatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.orderStatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.orderStatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.Dashboardstatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.Dashboardstatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td><span class='badge ${element.SalesStatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.SalesStatus == 1 ? 'Active' : 'In-Active'}</span></td>
                
                  <td><span class='badge ${element.inwardstatus == 1 ? 'badge-primary' : 'badge-danger'}'>${element.inwardstatus == 1 ? 'Active' : 'In-Active'}</span></td>
                <td>
                    <button class="btn btn-info btn-sm" onclick="editDetail(${element.UserID})">
                        <i class="fal fa-edit"></i>
                    </button>
                </td>
            </tr>`;
        });

        html += `</tbody></table>`;
        $('#tableData').html(html);

        $('#tableDataGet').dataTable({
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

$( "#submit").click(function(e){
e.preventDefault()

let Username = $("#Username").val();
                    if(Username =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Username is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let password = $("#password").val();
                    if(password =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    password is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;
                    let ClientStatus = $("#ClientStatus").is(":checked")?1:0;
                    let catagoryStatus = $("#catagoryStatus").is(":checked")?1:0;
                    let itemstatus = $("#itemstatus").is(":checked")?1:0;
                    let orderStatus = $("#orderStatus").is(":checked")?1:0;
                    let Dashboardstatus = $("#Dashboardstatus").is(":checked")?1:0;
                    
                    let SalesStatus = $("#SalesStatus").is(":checked")?1:0;
                     let inwardstatus = $("#inwardstatus").is(":checked")?1:0;
                    
                    

let url = "<?php echo base_url("Users/UsersController/AddUsers")?>";
$.post(url,
{ "Username":Username, "password":password, "status":status, "ClientStatus":ClientStatus, "catagoryStatus":catagoryStatus, "itemstatus":itemstatus, "orderStatus":orderStatus, "Dashboardstatus":Dashboardstatus,"SalesStatus":SalesStatus,"inwardstatus":inwardstatus,},function(data)
{
    iziToast.success({title:'Success',message: `
 Users inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();$("#Username").val('');$("#password").val('');$("#status").prop('checked',true);$("#ClientStatus").prop('checked',true);$("#catagoryStatus").prop('checked',true);$("#itemstatus").prop('checked',true);$("#orderStatus").prop('checked',true);$("#Dashboardstatus").prop('checked',true);
    inwardstatus
     $("#SalesStatus").prop('checked',true);
    $("#inwardstatus").prop('checked',true);
});
});
function editDetail(id) {
    let url = "<?php echo base_url('Users/UsersController/editUsers'); ?>";
    $.post(url, { 'id': id }, function(data) {
        if (data) {
            $("#Username").val(`${data[0].Username}`);
            $("#password").val(`${data[0].password}`);

            $("#status").prop('checked', data[0].status == 1);
            $("#ClientStatus").prop('checked', data[0].ClientStatus == 1);
            $("#catagoryStatus").prop('checked', data[0].catagoryStatus == 1);
            $("#itemstatus").prop('checked', data[0].itemstatus == 1);
            $("#orderStatus").prop('checked', data[0].orderStatus == 1);
            $("#Dashboardstatus").prop('checked', data[0].Dashboardstatus == 1);
            $("#SalesStatus").prop('checked', data[0].SalesStatus == 1);
    $("#inwardstatus").prop('checked', data[0].inwardstatus == 1);

            $("#update").css('display', 'block');
            $("#submit").css('display', 'none');
            $('#chidden').val(`${data[0]['UserID']}`);
            $("#modaldemo8").modal('toggle');
        }
    });
}

    $( "#update").click(function(e){
e.preventDefault()


let Username = $("#Username").val();
                    if(Username =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Username is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let password = $("#password").val();
                    if(password =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    password is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;
                    let ClientStatus = $("#ClientStatus").is(":checked")?1:0;
                    let catagoryStatus = $("#catagoryStatus").is(":checked")?1:0;
                    let itemstatus = $("#itemstatus").is(":checked")?1:0;
                    let orderStatus = $("#orderStatus").is(":checked")?1:0;
                    let Dashboardstatus = $("#Dashboardstatus").is(":checked")?1:0;
                    
                      let SalesStatus = $("#SalesStatus").is(":checked")?1:0;
                     let inwardstatus = $("#inwardstatus").is(":checked")?1:0;
let chidden = $("#chidden").val();
let url = "<?php echo base_url("Users/UsersController/updateUsers")?>";
$.post(url,
{ "Username":Username, "password":password, "status":status, "ClientStatus":ClientStatus, "catagoryStatus":catagoryStatus, "itemstatus":itemstatus, "orderStatus":orderStatus, "Dashboardstatus":Dashboardstatus, "id":chidden,"SalesStatus":SalesStatus,"inwardstatus":inwardstatus},function(data)
{
    iziToast.success({title:'Success',message: `
Users updated Successfully!`,position:"bottomRight",balloon: true});
    loadData();
});
$("#modaldemo8").modal('toggle');
});
    
$(document).ready(function(){
    loadData();
    $("#update").css(`display`,'none'); 
})
</script>
<?php
  } else {
    redirect('');
}
?>


    