
<?php 
if ($this->session->has_userdata('user_id') and ($this->session->userdata('client') == 1)) {
    
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
                                            <h6 class="modal-title">Clients</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Company Name:</label>
                                                            <input type="text" class="form-control" id="Name"
                                                                placeholder="Enter Name" autocomplete="Name">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Owner Name:</label>
                                                            <input type="text" class="form-control" id="City"
                                                                placeholder="Enter Owner Name" autocomplete="City">
                                                        </div>
  </div>
  <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Address:</label>
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="Enter Address" autocomplete="address">
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
                Clients information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create Clients &nbsp;
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
$("#openModel").click(function(){$("#Name").val('');$("#City").val('');$("#phoneno").val('');$("#email").val('');$("#status").prop('checked',true);
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#address").val('');
    $("#modaldemo8").modal('toggle');
    })    
function loadData()
{let url = "<?php echo base_url("Clients/ClientsController/loadClients")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Company Name</th>    <th>Owner Name</th>    <th>Address</th> <th>Phone No</th>    <th>Email</th>    <th>Status</th>  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.Name}</td><td>${element.City}</td>
<td>${element.address}</td><td>${element.phoneno}</td><td>${element.email}</td>
${element.status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

<td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.CID})"><i class="fal fa-edit"></i></buttton>
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
$( "#submit").click(function(e){
e.preventDefault()

let Name = $("#Name").val();
                    if(Name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Company Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let City = $("#City").val();
                    if(City =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    VAT no is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let phoneno = $("#phoneno").val();
                    if(phoneno =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    phoneno is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    
                    let address = $("#address").val();
                    if(address =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Address is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    let email = $("#email").val();
                    if(email =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    email is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;;
                    

let url = "<?php echo base_url("Clients/ClientsController/AddClients")?>";
$.post(url,
{ "Name":Name, "City":City, "phoneno":phoneno,"address":address, "email":email, "status":status,},function(data)
{
    iziToast.success({title:'Success',message: `
 Clients inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();$("#Name").val('');$("#City").val('');$("#address").val('');$("#phoneno").val('');$("#email").val('');$("#status").prop('checked',true);
});
});
function editDetail(id){
    
    let url = "<?php echo base_url("Clients/ClientsController/editClients");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){$("#Name").val(`${data[0].Name}`);$("#City").val(`${data[0].City}`);$("#phoneno").val(`${data[0].phoneno}`);$("#email").val(`${data[0].email}`);
        $("#status").prop('checked',data[0].status?true:false);
        $("#address").val(`${data[0].address}`);
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['CID']}`);
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
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let City = $("#City").val();
                    if(City =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    VAT is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let phoneno = $("#phoneno").val();
                    if(phoneno =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    phoneno is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    
                    let address = $("#address").val();
                    if(address =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Address is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
                    let email = $("#email").val();
                    if(email =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    email is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let status = $("#status").is(":checked")?1:0;;
                    
let chidden = $("#chidden").val();
let url = "<?php echo base_url("Clients/ClientsController/updateClients")?>";
$.post(url,
{ "Name":Name, "City":City, "phoneno":phoneno,"address":address, "email":email, "status":status, "id":chidden},function(data)
{
    iziToast.success({title:'Success',message: `
Clients updated Successfully!`,position:"bottomRight",balloon: true});
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


    