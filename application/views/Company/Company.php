
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
                                            <h6 class="modal-title">Company</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Company Name:</label>
                                                            <input type="text" class="form-control" id="CompanyName"
                                                                placeholder="Enter CompanyName" autocomplete="CompanyName">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Address:</label>
                                                            <input type="text" class="form-control" id="Address"
                                                                placeholder="Enter Address" autocomplete="Address">
                                                        </div>
  </div>
            
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Phone No:</label>
                                                            <input type="text" class="form-control" id="Phoneno"
                                                                placeholder="Enter Phoneno" autocomplete="Phoneno">
                                                        </div>
  </div>

  <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Tag Line:</label>
                                                            <input type="text" class="form-control" id="tagline"
                                                                placeholder="Enter tagline" autocomplete="tagline">
                                                        </div>
  </div>
            
  <div class="col-md-12">
                        <div class="modal-inside">
                                    <img src="<?php echo base_url() ?>assets/img/upload.png" id="picUserShow"   alt="picture" style="border-radius:50%" height="100px" width="100px">
                                    
                                    <div class="form-group">
                                <label>File</label>

                                <input type="file" onchange="loadFile(event)" id="logo" class="form-control">
                                <input type="hidden" id="previmage">
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
                Company information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <!-- <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create Company &nbsp;
                    </button> -->
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
var loadFile = function(event) {
    var image = document.getElementById('picUserShow');
    image.src = URL.createObjectURL(event.target.files[0]);
};
$("#openModel").click(function(){$("#CompanyName").val('');$("#Address").val('');$("#Phoneno").val('');$("#logo").val(val);$("#tagline").val('');
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    })    
function loadData()
{let url = "<?php echo base_url("Company/CompanyController/loadCompany")?>";
$.post(url,function(data){let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>  <th>Logo</th>  <th>Company Name</th>    <th>Address</th>    <th>Phone No</th>     <th>Tagline</th>  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
<td><img src='<?php echo base_url(); ?>assets/img/${element.logo != null && element.logo != ''?'CompanyImages/'+element.logo:'upload.png'}' class='rounded' height="50px" width="50px" /></td>

<td>${element.CompanyName}</td><td>${element.Address}</td><td>${element.Phoneno}</td>
<td>${element.tagline}</td> 
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

let CompanyName = $("#CompanyName").val();
                    if(CompanyName =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    CompanyName is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Address = $("#Address").val();
                    if(Address =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Address is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Phoneno = $("#Phoneno").val();
                    if(Phoneno =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Phoneno is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let logo = $("#logo").val();
                    if(logo =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    logo is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let tagline = $("#tagline").val();
                    if(tagline =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    tagline is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }

let url = "<?php echo base_url("Company/CompanyController/AddCompany")?>";
$.post(url,
{ "CompanyName":CompanyName, "Address":Address, "Phoneno":Phoneno, "logo":logo, "tagline":tagline,},function(data)
{
    iziToast.success({title:'Success',message: `
 Company inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();$("#CompanyName").val('');$("#Address").val('');$("#Phoneno").val('');$("#logo").val(val);$("#tagline").val('');
});
});
function editDetail(id){
    
    let url = "<?php echo base_url("Company/CompanyController/editCompany");?>";
    $.post(url,{'id':id},function(data)
    { 
    if(data){$("#CompanyName").val(`${data[0].CompanyName}`);$("#Address").val(`${data[0].Address}`);$("#Phoneno").val(`${data[0].Phoneno}`);$("#tagline").val(`${data[0].tagline}`);
        $("#previmage").val(`${data[0].logo}`);
        $("#logo").val(null);
        var image = document.getElementById('picUserShow');
image.src = `<?php echo base_url(); ?>assets/img/${data[0].logo != null && data[0].logo != ''?'CompanyImages/'+data[0].logo:'upload.png'}`;

        $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['CID']}`);
    $("#modaldemo8").modal('toggle');
    }
    });
    
    }

    $( "#update").click(function(e){
e.preventDefault()


let CompanyName = $("#CompanyName").val();
                    if(CompanyName =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    CompanyName is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Address = $("#Address").val();
                    if(Address =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Address is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let Phoneno = $("#Phoneno").val();
                    if(Phoneno =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    Phoneno is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }let logo = $("#logo").val();
                    let tagline = $("#tagline").val();
                    if(tagline =='')
                    {
                    iziToast.error({
                        title:'danger',message: `
                    tagline is Requred!`,position:"bottomRight",balloon: true});
                    return;
                    }
let chidden = $("#chidden").val();
let url = "<?php echo base_url("Company/CompanyController/updateCompany")?>";
let fd = new FormData();

fd.append('CompanyName', CompanyName);
fd.append('Address', Address);
fd.append('Phoneno', Phoneno);
fd.append('logo', $("#logo")[0].files[0]); // If this is a File, make sure it's from an input
fd.append('tagline', tagline);
fd.append('id', chidden);
fd.append('previmage', $("#previmage").val());

$.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            iziToast.success({title:'Success',message: `
Company updated Successfully!`,position:"bottomRight",balloon: true});
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
// { "CompanyName":CompanyName, "Address":Address, "Phoneno":Phoneno, "logo":logo, "tagline":tagline, "id":chidden},function(data)
// {
//     iziToast.success({title:'Success',message: `
// Company updated Successfully!`,position:"bottomRight",balloon: true});
//     loadData();
// });
// $("#modaldemo8").modal('toggle');
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


    