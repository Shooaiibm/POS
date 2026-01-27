
<?php 
if ($this->session->has_userdata('user_id') and ($this->session->userdata('category') == 1)) {
    
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
                                            <h6 class="modal-title">Category</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Name:</label>
                                                            <input type="text" class="form-control" id="Name"
                                                                placeholder="Enter Name" autocomplete="Name">
                                                        </div>
  </div>
            
  <div class="col-md-12 mt-4">
        <div class="demo">
                                                            <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="custom-switch-checkbox" id="Status" value="1" class="custom-control-input">
                                                                <label class="custom-control-label" for="Status">Status</label>
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
                Category information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create Category &nbsp;
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
$("#openModel").click(function(){$("#Name").val('');$("#Status").prop('checked',true);
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    })    
function loadData()
{
    let url = "<?php echo base_url("Category/CategoryController/loadCategory")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>    <th>Name</th>    <th>Status</th>  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td>${element.Name}</td>
${element.Status?`<td><span class='badge badge-primary'>Active</span></td>`:`<td><span class='badge badge-danger'>In-Active</span></td>`} 

<td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.CatID})"><i class="fal fa-edit"></i></buttton>
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
                    Name is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Status = $("#Status").is(":checked")?1:0;;
                   

let url = "<?php echo base_url("Category/CategoryController/AddCategory")?>";
$.post(url,
{ "Name":Name, "Status":Status,},function(data)
{
    iziToast.success({title:'Success',message: `
 Category inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();$("#Name").val('');$("#Status").prop('checked',true);
});
});
function editDetail(id){
    
    let url = "<?php echo base_url("Category/CategoryController/editCategory");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){$("#Name").val(`${data[0].Name}`);$("#Status").prop('checked',data[0].Status?true:false);
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['CatID']}`);
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
                    }let Status = $("#Status").is(":checked")?1:0;
                    
let chidden = $("#chidden").val();
let url = "<?php echo base_url("Category/CategoryController/updateCategory")?>";
$.post(url,
{ "Name":Name, "Status":Status, "id":chidden},function(data)
{
    iziToast.success({title:'Success',message: `
Category updated Successfully!`,position:"bottomRight",balloon: true});
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


    