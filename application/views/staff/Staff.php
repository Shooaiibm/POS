
<?php 
if ($this->session->has_userdata('user_id')) {
    
$this->load->view('layouts/head'); 


$user_type = $this->session->userdata('user_type');
?>

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

        <div class="modal fade" id="dateModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: purple;color:white">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Staff Infomation</b></h5>
                                <button type="button" class="close" style="color:white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card" id="printCard">
                                    <div class="card-body">
                                        <form id="ShipperForm" action="POST" >
                                            <div class="row">
                                            <div class="col-md-6">
                                    <img src="<?php echo base_url() ?>assets/img/admin.png" id="picUserShow"   alt="picture" style="border-radius:50%" height="100px" width="100px">
                                    
                                    <div class="form-group">
                                <label>File</label>

                                <input type="file" onchange="loadFile(event)" id="picUser" class="form-control">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Name</label>
                            
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        </div>
                     
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">City</label>
                            
                            <input type="text" id="city" name="city" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Address</label>
                            
                            <input type="text" id="addr" name="addr" class="form-control">
                        </div>
                        </div>
                      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">DOJ</label>
                            
                            <input type="date" id="doj" name="doj" class="form-control">
                        </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Gender</label>
                            
                            <select type="text" id="gender" name="gender" class="form-control">
                    
            
                  
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
         
                            </select>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Emergency Contact #</label>
                            
                            <input type="number" id="econtact" name="econtact" class="form-control">
                        </div>
                        </div>  <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Designation :</label>
                            
                            <input type="text" id="designation" name="designation" class="form-control">
                        </div>
                        </div> <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">CNIC :</label>
                            
                            <input type="text" id="cnic" name="cnic" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Salary</label>
                            
                            <input type="number" id="salary" name="salary" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6" hidden>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">AttID :</label>
                            
                            <input type="number" id="AttID" name="AttID" value="1" class="form-control">
                        </div>
                        </div>
                       
                                            
                                                <div class="col-md-6 mt-4">
                                                <div class="demo">
                                                <div class="custom-control custom-switch">
                                                <input type="checkbox" name="Status" id="Status" value="1" class="custom-control-input">
                                                    <label class="custom-control-label" for="Status">Status</label>
                                                </div>
                                            </div>
                                                </div>
                                                <div class="col-md-4">
                                                <input type="hidden" class="form-control" id="chidden" >
                                                <input type="hidden" class="form-control" id="prevImg" >
                                                </div>
                                            </div>
                                        
                                
                                    
                                        </form>
                                
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-primary" id='submit'>Add</button>
                            <button class="btn btn-primary" id='update' style="display:none">Update</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="printDiv('printCard')" data-dismiss="modal">Print Report</button> -->
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
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-md-12">
                        <div id="panel-2" class="panel">
            <div class="panel-hdr">
                <h2>
                Staff
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="modelBtn">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create &nbsp;
                    </button>
                </h3>
            </div>  
            </div>

            <div class="panel-container show">
                <div class="panel-content">
                <div class="col-md-12" id='tableData'>

</div>

                </div>

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

function loadData()
{
let url = "<?php echo base_url("Staff/StaffController/loadStaff")?>";
$.post(url,function(data){
    $('#tableData').html('');
  
let  html = `<table class="table table-bordered table-hover table-striped w-100 dataTable dtr-inline collapsed" id="tableDataGet" style="width:100%;">
        <thead class='bg-primary-600'>
            <tr>
           
            <th>Image</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact #</th>
            <th>Date of Joining</th>
              <th>Designation</th>     <th>CNIC</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {
          
            html += ` <tr>
           
            <td>  <img src="<?php echo base_url() ?>assets/img/${element.image?`StaffSignature/${element.image}`:`admin.png`}" alt="picture"  class="rounded-circle" style="width: 50px; height: 50px"></td>
            <td>${element.name}</td>
            <td>${element.gender}</td>
            <td>${element.Address}</td>
            <td>${element.emergencyContactno}</td>
            <td>${element.DOJ}</td> <td>${element.Designation}</td> <td>${element.CNIC}</td>
            <td>${element.Salary}</td>
            ${element.Status?`<td><span class="badge badge-primary">Active</span></td>` : `<td><span class="badge badge-danger">In-Active</span></td>`} 
            
            <td>
            <button class="btn btn-info btn-sm" onclick="editDetail(${element.id})"><i class="fal fa-edit"></i></buttton>
              <button class="btn btn-danger btn-sm ml-2" onclick="deleteDetail(${element.id})"><i class="fal fa-trash"></i></buttton>
          
            </td>
            </td>
            </tr> `
        });
            
        html +=` </tbody>
        </table>`
        $('#tableData').html(html);
        $('#tableDataGet').dataTable({
        responsive: true,
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
            title:"<?php echo Base_CompanyName ?>",
            className: 'btn-outline-primary btn-sm',
            customize: function ( win ) {
        $(win.document.body).find( 'thead' ).prepend(`    <div style="display: flex;width: 100% !important;">
        <span style="width:40%;"><img src='<?php echo Base_logo; ?>' width='150px' height='100px' /></span>
       
        </div>`);
        }
        }
    ]
    });
});

}

$("#modelBtn").click(function(){
let currentDate = new Date().toJSON().substr(0,10)
$("#name").val('');
$("#city").val('')
$("#addr").val('');
$("#gender").val('Male');
$("#doj").val(currentDate);
$("#econtact").val('');
$("#Designation").val('');
$("#salary").val('0');
$("#cnic").val('');
var image = document.getElementById('picUserShow');
image.src = '<?php echo base_url(); ?>assets/img/admin.png';
$("#picUser").val(null)
$("#Status").prop('checked',true);
$("#update").css(`display`,'none');
$("#submit").css(`display`,'block'); 
$("#dateModel").modal('toggle');
})

$("#submit").click(function(e){
e.preventDefault()

var data = $('#ShipperForm').serializeArray().reduce(function(obj, item) 
{

    obj[item.name] = item.value;
    return obj;
}, {});
let name = $("#name").val();
let city = $("#city").val();
let addr = $("#addr").val();
let gender = $("#gender").val();
let doj = $("#doj").val();
let cnic = $("#cnic").val();
let Designation = $("#designation").val();
let econtact = $("#econtact").val();
let Status = $("#Status").is(':checked')?1:0;
let salary = $("#salary").val();

let AttID = $("#AttID").val();
if(name.trim() ==''){
    iziToast.error({title:'Error',message: `
Staff Name is Requred!`,position:"topRight",balloon: true
});
return;
}
if(addr.trim() ==''){
    iziToast.error({title:'Error',message: `
Address is Requred!`,position:"topRight",balloon: true
});
return;
}
if(salary.trim() ==''){
    iziToast.error({title:'Error',message: `
Salary is Requred!`,position:"topRight",balloon: true
});
return;
}
if(Designation.trim() ==''){
    iziToast.error({title:'Error',message: `
Designation is Requred!`,position:"topRight",balloon: true
});
return;
}
if(cnic.trim() ==''){
    iziToast.error({title:'Error',message: `
cnic is Requred!`,position:"topRight",balloon: true
});
return;
}


var fd = new FormData();    
fd.append( 'picUser', $("#picUser")[0].files[0]);
fd.append( 'name', name );
fd.append( 'DOJ', doj );
fd.append( 'designationID', 1 );
fd.append( 'Address', addr );
fd.append( 'emergencyContactno', econtact );
fd.append( 'City', city );
fd.append( 'Status', Status);
fd.append( 'Salary', salary);
fd.append( 'gender', gender);
fd.append( 'cnic', cnic);
fd.append( 'Designation', Designation);
fd.append( 'AttID', AttID );
let url = "<?php echo base_url("Staff/StaffController/AddStaff")?>";
$.ajax({
    url: url,// your request url
    data: fd,
    processData: false,
    contentType: false,
    type: 'POST',
success: function (data) {
   
    if(data == true){
        iziToast.success({title:'Success',message: `
Staff Added Successfully!`,position:"topRight",balloon: true
});
let currentDate = new Date().toJSON().substr(0,10)
$("#name").val('');
$("#city").val('')
$("#addr").val('');
$("#gender").val('Male');
$("#doj").val(currentDate);
$("#econtact").val('');
$("#salary").val('0');
$("#designation").val('');
$("#cnic").val('');
var image = document.getElementById('picUserShow');
image.src = '<?php echo base_url(); ?>assets/img/admin.png';
$("#picUser").val(null)
$("#Status").prop('checked',true);
loadData();
    }
    else{
        iziToast.error({title:'Error',message: `
Error while adding Staff!`,position:"topRight",balloon: true
});
    }
  
}
    });
});

$( "#update").click(function(e){
e.preventDefault()
let cnic = $("#cnic").val();
let name = $("#name").val();
let city = $("#city").val();
let addr = $("#addr").val();
let gender = $("#gender").val();
let doj = $("#doj").val();
let econtact = $("#econtact").val();
let Status = $("#Status").is(':checked')?1:0;
let salary = $("#salary").val();

let Designation = $("#designation").val();
let AttID = $("#AttID").val();
if(name.trim() ==''){
    iziToast.error({title:'Error',message: `
Staff Name is Requred!`,position:"topRight",balloon: true
});
return;
}
if(addr.trim() ==''){
    iziToast.error({title:'Error',message: `
Address is Requred!`,position:"topRight",balloon: true
});
return;
}
if(salary.trim() ==''){
    iziToast.error({title:'Error',message: `
Salary is Requred!`,position:"topRight",balloon: true
});
return;
}
if(Designation.trim() ==''){
    iziToast.error({title:'Error',message: `
Designation is Requred!`,position:"topRight",balloon: true
});
return;
}

if(cnic.trim() ==''){
    iziToast.error({title:'Error',message: `
cnic is Requred!`,position:"topRight",balloon: true
});
return;
}

var fd = new FormData();    
let id = $("#chidden").val();  
fd.append( 'picUser', $("#picUser")[0].files[0]);
fd.append( 'name', name );
fd.append( 'DOJ', doj );
fd.append( 'designationID', 1 );
fd.append( 'Address', addr );
fd.append( 'emergencyContactno', econtact );
fd.append( 'City', city );
fd.append( 'Status', Status );
fd.append( 'Salary', salary );
fd.append( 'gender', gender );
fd.append( 'cnic', cnic );
fd.append( 'id', id );
fd.append( 'Designation', Designation );
fd.append( 'AttID', AttID );
fd.append( 'prevImg', $('#prevImg').val()); 
if($("#picUser")[0].files[0] == null){  
let url = "<?php echo base_url("Staff/StaffController/updateStaffWithoutPic")?>";
            $.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
         
            iziToast.success({title:'Success',message: `
Staff Updated Successfully!`,position:"topRight",balloon: true});
loadData();
        }
        })
    }
    else{
      
let url = "<?php echo base_url("Staff/StaffController/updateStaff")?>";
      $.ajax({
        url: url,// your request url
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
         
            iziToast.success({title:'Success',message: `
                Staff Updated Successfully!`,position:"topRight",balloon: true});
loadData();
        }
        })
    }
});

function editDetail(id){
    
let url = "<?php echo base_url("Staff/StaffController/editStaff");?>";
$.post(url,{'id':id},function(data)
{ 
if(data){
console.log("edit Staff Detail",data);

$("#name").val(`${data[0].name}`);
$("#city").val(`${data[0].City}`);
$("#addr").val(`${data[0].Address}`);
$("#doj").val(`${data[0].DOJ}`);
$("#econtact").val(`${data[0].emergencyContactno}`);
$("#gender").val(`${data[0].gender}`);
$("#salary").val(`${data[0].Salary}`);
$("#designation").val(`${data[0].Designation}`);
$("#cnic").val(`${data[0].CNIC}`);
$("#AttID").val(`${data[0].AttID}`);
if(data[0].Status == true){
    $("#Status").prop('checked',true);
}
else{
    $("#Status").prop('checked',false);
}
var image = document.getElementById('picUserShow');
image.src = `<?php echo base_url(); ?>assets/img/${data[0].image != null && data[0].image != ''?"StaffSignature/"+data[0].signature:'admin.png'}`;

$("#update").css(`display`,'block');
$("#submit").css(`display`,'none'); 
$('#chidden').val(`${data[0]['id']}`);
$('#prevImg').val(`${data[0]['image']}`);
$("#dateModel").modal('toggle');
}
});

}

function deleteDetail(id){  
swal({
title: "Are you sure to delete selected record?",
text: "You will not be able to recover this record!",
icon: "warning",
buttons: [
'No, cancel it!',
'Yes, I am sure!'
],
dangerMode: true,
}).then(function(isConfirm) {
if (isConfirm) {
    
let url = "<?php echo base_url("Staff/StaffController/deleteStaff")?>";
$.post(url,{'id':id},function(data)
{ 


    iziToast.info({title:'Success',message: `
    Staff Deleted Successfully!`,position:"topRight",balloon: 
    
    true
    });

    loadData();
    
});
} else {
swal("Cancelled", "Your data is not deleted :)", "error");
}
})
}

$(document).ready(function(){
loadData();
})
</script>

</body>

</html>
<?php
} else {
redirect('');
}
?>

    