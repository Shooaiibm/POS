
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

        <div class="modal fade" id="modaldemo8">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Wards</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Ward No:</label>
                                                            <input type="text" class="form-control" id="wardNo"
                                                                placeholder="Enter wardNo" disabled autocomplete="wardNo">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Name:</label>
                                                            <input type="text" class="form-control" id="name"
                                                                placeholder="Enter name" autocomplete="name">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Location:</label>
                                                            <input type="text" class="form-control" id="location"
                                                                placeholder="Enter location" autocomplete="location">
                                                        </div>
  </div>
            
        <div class="col-md-12 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="wardStatus" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="wardStatus">Status</label>
                                                            </div>
                                                        </div>
                                                        
  </div>
            
                                                    
                                                </div>
                                                <input type="hidden" class="form-control" id="chidden" >
                                                
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="button" id="submit">Save changes</button> 
                                            
                                            <button class="btn btn-info" type="button" id="update">Update</button> 
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
                Wards information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create Wards &nbsp;
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
$("#openModel").click(function(){$("#name").val('');$("#location").val('');$("#wardStatus").attr('checked',true);
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    getMaxWardNo()
    $("#modaldemo8").modal('toggle');
    })    
function loadData()
{let url = "<?php echo base_url("Wards/WardsController/loadWards")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Ward No</th>    <th>Name</th>    <th>Location</th>    <th>Ward Status</th>  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.wardNo}</td><td>${element.name}</td><td>${element.location}</td>
${element.wardStatus?`<td><span class='badge badge-primary'>Active</span></td>`:`<span class='badge badge-danger'>In-Active</span>`} 
<td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.id})"><i class="fal fa-edit"></i></buttton>
</td>

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

let wardNo = $("#wardNo").val();
                    if(wardNo =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    wardNo is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let name = $("#name").val();
                    if(name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let location = $("#location").val();
                    if(location =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    location is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let wardStatus = $("#wardStatus").is(":checked")?1:0;
                    if(wardStatus =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    ward Status is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }

let url = "<?php echo base_url("Wards/WardsController/AddWards")?>";
$.post(url,
{ "wardNo":wardNo, "name":name, "location":location, "wardStatus":wardStatus,},function(data)
{
    iziToast.success({title:'Success',message: `
 Wards inserted Successfully!`,position:"bottomRight",balloon: true
});
getMaxWardNo()
    loadData();$("#name").val('');$("#location").val('');$("#wardStatus").attr('checked',true);
});
});
function editDetail(id){
    
    let url = "<?php echo base_url("Wards/WardsController/editWards");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){$("#wardNo").val(`${data[0].wardNo}`);$("#name").val(`${data[0].name}`);$("#location").val(`${data[0].location}`);
    $("#wardStatus").attr('checked',`${data[0].wardStatus?true:false}`);
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['uid']}`);
    $("#modaldemo8").modal('toggle');
    }
    });
    
    }

    $( "#update").click(function(e){
e.preventDefault()


let wardNo = $("#wardNo").val();
                    if(wardNo =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    wardNo is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let name = $("#name").val();
                    if(name =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let location = $("#location").val();
                    if(location =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    location is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let wardStatus = $("#wardStatus").is(":checked")?1:0;
                    if(wardStatus =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    wardStatus is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
let chidden = $("#chidden").val();
let url = "<?php echo base_url("Wards/WardsController/updateWards")?>";
$.post(url,
{ "wardNo":wardNo, "name":name, "location":location, "wardStatus":wardStatus, "id":chidden},function(data)
{
    iziToast.success({title:'Success',message: `
Wards updated Successfully!`,position:"bottomRight",balloon: true});
    loadData();
});
$("#modaldemo8").modal('toggle');
});

function getMaxWardNo(){
    let url = "<?php echo base_url("Wards/WardsController/getMaxWardNo")?>";
    $.post(url,
{},function(data)
{
    $("#wardNo").val(data)
});
}
    
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


    