import sys
import os
import argparse
import fileinput

BASE_DIR_VIEW = 'application/views/'
BASE_DIR_MODEL = 'application/models/'
BASE_DIR_CONTROLLER = 'application/controllers/'

ap = argparse.ArgumentParser()
ap.add_argument("-n", "--name", required=True,
   help="Name of the File")

ap.add_argument("-d", "--dest", required=True,
   help="Destination of the required File")

ap.add_argument("-t", "--table", required=True,
   help="Table name in the database")

ap.add_argument("-f", "--fields", required=False,
   help="Fields of table in the database")

args = vars(ap.parse_args())

name = args["name"]
destinationNew = args['dest']
dbTable = args['table']
dbFields = args['fields']
destView = BASE_DIR_VIEW + args['dest']
destModel = BASE_DIR_MODEL + args['dest']
destController = BASE_DIR_CONTROLLER + args['dest']

if not os.path.exists(destView):
    os.mkdir(destView)

if not os.path.exists(destModel):
    os.mkdir(destModel)

if not os.path.exists(destController):
    os.mkdir(destController)

viewFile = destView + f'/{name}.php'
controllerFile = destController+f'/{name}Controller.php'
modelFile = destModel+ f'/{name}Model.php'


with open(viewFile, '+w') as src1:
    line = f"""
<?php 
if ($this->session->has_userdata('user_id'))"""+""" {
    """+ f"""
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
                                            <h6 class="modal-title">{name}</h6><button aria-label="Close" class="btn btn-danger"
                                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                      

                                        
                                                <div class="row">
                                                """
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line += f"""
        <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" class="form-label" style="text-align: left;">{data}:</label>
                                                            <input type="text" class="form-control" id="{data}"
                                                                placeholder="Enter {data}" autocomplete="{data}">
                                                        </div>
  </div>
            """
    line += f"""
                                                    
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
                {name} information
                </h2>
                <div class="panel-toolbar ml-2 mr-2">
                <h3 class="m-0">
                    <button class="btn btn-primary fw-500 l-h-n p-2" id="openModel">
                        <i class="fal fa-plus-circle"></i>  &nbsp; Create {name} &nbsp;
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
$("#openModel").click(function()"""+"""{"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line +=f"""$("#{data}").val('');"""
    line += """
      $("#update").css(`display`,'none');
    $("#submit").css(`display`,'block'); 
    $("#modaldemo8").modal('toggle');
    }"""+f""")    
function loadData()
"""
    line += """{"""

    line += f"""let url = "<?php echo base_url("{destinationNew}/{name}Controller/load{name}")?>";
$.post(url,function(data)"""

    line +="""{"""

    line += """let  html = `<table class="table table-responsive w-100 d-block table-hover" id="tableDataGet" style="width:100%;">
        <thead >
            <tr>"""
    
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line += f"""    <th>{data}</th>"""
          
       
    line +=     """  <th>Actions</th> </tr>
        </thead>
        <tbody>`;
        data.forEach(element => {

html += ` <tr>
"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line += """<td>${element."""+f"""{data}"""+"""}</td>"""


    line += """ 
<td>
<button class="btn btn-info btn-sm" onclick="editDetail(${element.id})"><i class="fal fa-edit"></i></buttton>
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

"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
    
        line += f"""let {data} = $("#{data}").val();
                    if({data} =='')
                    """+"""{
                    iziToast.error({"""+f"""
                        title:'danger',message: `
                    {data} is Requred!`,position:"bottomRight",balloon: true"""+"""});
                    return;
                    }"""

    line += f"""

let url = "<?php echo base_url("{destinationNew}/{name}Controller/Add{name}")?>";
$.post(url,
"""+"""{"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
    
        line += f""" "{data}":{data},"""
    line += """},function(data)
{
    iziToast.success({title:'Success',message: `
 """+f"""{name}"""+""" inserted Successfully!`,position:"bottomRight",balloon: true
});
    loadData();"""
    

    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line +=f"""$("#{data}").val('');"""

    line +="""
});
});
function editDetail(id){
    """+f"""
    let url = "<?php echo base_url("{destinationNew}/{name}Controller/edit{name}");?>";
    """+"""$.post(url,{'id':id},function(data)
    { 
    if(data){"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line +=f"""$("#{data}").val(`"""+"""${data[0]."""+f"""{data}"""+"""}`);"""
    line += """
    $("#update").css(`display`,'block');
    $("#submit").css(`display`,'none'); 
    $('#chidden').val(`${data[0]['id']}`);
    $("#modaldemo8").modal('toggle');
    }
    });
    
    }

    $( "#update").click(function(e){
e.preventDefault()


"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line += f"""let {data} = $("#{data}").val();
                    if({data} =='')
                    """+"""{
                    iziToast.error({"""+f"""
                        title:'danger',message: `
                    {data} is Requred!`,position:"bottomRight",balloon: true"""+"""});
                    return;
                    }"""

    line += f"""
let chidden = $("#chidden").val();
let url = "<?php echo base_url("{destinationNew}/{name}Controller/update{name}")?>";
$.post(url,
"""+"""{"""
    for data in dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]:
        line += f""" "{data}":{data},"""
    
    line += """ "id":chidden},function(data)
{
    iziToast.success({title:'Success',message: `
"""+f"""{name} updated Successfully!`,position:"bottomRight",balloon: true"""+"""});
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


    """
    src1.write(line)


with open(controllerFile, '+w') as src1:
    line = f"""
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class {name}Controller extends CI_Controller"""+"""{"""+ f"""
public function __construct()
"""+"""{"""+f"""
parent::__construct();
$this->load->model('{destinationNew}/{name}Model', 'M');
"""+"""}"""+f"""
/**
* Index Page for this controller.
*
* Maps to the following URL
* 		http://example.com/index.php/welcome
*	- or -
* 		http://example.com/index.php/welcome/index
*	- or -
* Since this controller is set as the default controller in
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see https://codeigniter.com/user_guide/general/urls.html
*/

public function {name}()
"""+"""{"""+f"""
$this->load->view('{destinationNew}/{name}');
"""+"""}"""+f"""

public function load{name}()
"""+"""{"""+f"""
$data = $this->M->load{name}();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
"""+"""}"""+f"""

public function add{name}()
"""+"""{"""+f"""
$data = $this->M->add{name}("""

    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""$this->input->post('{data}',TRUE )"""
        else:
            line +=f"""$this->input->post('{data}',TRUE ),"""
    line += """);
return true;
"""+"""}"""+f"""

public function edit{name}()
"""+"""{"""+f"""
$data = $this->M->edit{name}($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
"""+"""}"""+f"""

public function update{name}()
"""+"""{"""+f"""
$data = $this->M->update{name}("""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""$this->input->post('{data}',TRUE )"""
        else:
            line +=f"""$this->input->post('{data}',TRUE ),"""
    line += """,$this->input->post('id',TRUE ));
return true;
"""+"""}"""+f"""

public function delete{name}()
"""+"""{"""+f"""
$data = $this->M->delete{name}($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
"""+"""}
} 
?>           
    """    
    src1.write(line)

with open(modelFile, '+w') as src1:

    line = f"""
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class {name}Model extends CI_Model
"""+"""{"""+f"""
public function load{name}()
"""+"""{"""+f"""
$query = $this->db->query("SELECT *
FROM {dbTable}");
return $query->result_array();
"""+"""}"""+f"""

public function add{name}("""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""${data}"""
        else:
            line +=f"""${data},"""
    line +=""")
"""+"""{"""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""${data} = ${data}=='' || ${data}=='undefined' || ${data}==NULL || ${data} == 'NULL'?"NULL":"'${data}'";"""
        else:
            line +=f"""${data} = ${data}=='' || ${data}=='undefined' || ${data}==NULL || ${data} == 'NULL'?"NULL":"'${data}'";"""
    line +=f"""

$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d H:i:s');
$query = $this->db->query("INSERT INTO {dbTable} ("""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""{data}"""
        else:
            line +=f"""{data},"""
    line +=""",EntryDate,EntryDateTime,login_name_id) VALUES ("""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""${data}"""
        else:
            line +=f"""${data},"""
    line +=""",'$dateGet','$dateGet',$userId)");
return true;
"""+"""}"""+f"""

public function edit{name}($id)
"""+"""{"""+f"""
$query = $this->db->query("SELECT * FROM {dbTable} where id=$id");
return $query->result_array();
"""+"""}"""+f"""

public function update{name}("""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""${data}"""
        else:
            line +=f"""${data},"""
    line +=""",$id)
"""+"""{"""
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""${data} = ${data}=='' || ${data}=='undefined' || ${data}==NULL || ${data} == 'NULL'?"NULL":"'${data}'";"""
        else:
            line +=f"""${data} = ${data}=='' || ${data}=='undefined' || ${data}==NULL || ${data} == 'NULL'?"NULL":"'${data}'";"""
    line += f"""
$userId = $this->session->userdata('user_id');
$dateGet = date('Y-m-d h:m:s');
$query = $this->db->query("UPDATE {dbTable} SET """
    for index, data in enumerate(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]):
        if index == len(dbFields.split(',') if len(dbFields.split(','))>0 else [dbFields]) - 1:
            line +=f"""{data} = ${data}""" 
        else:
            line +=f"""{data} = ${data},""" 
    line += """,updatedDate='$dateGet',updatedBy_id=$userId  WHERE (id=$id)");
return true;
"""+"""}"""+f"""

public function delete{name}($id)
"""+"""{"""+f"""
$query = $this->db->query("DELETE {dbTable} WHERE (id=$id)");
return true;
"""+"""}

}
?>
"""    
    src1.write(line)