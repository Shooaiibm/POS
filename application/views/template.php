

    <?php $this->load->view('layouts/head'); ?>

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

                       <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: purple;color:white">
                                                <h5 class="modal-title" id="exampleModalLabel"><b></b></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card" id="printCard">
                                                    <div class="card-body">
   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary" onclick="printDiv('printCard')" data-dismiss="modal">Print Report</button> -->
                                            </div>
                                            <div class="card-footer text-muted">
                                                Staller Software Solutions
                                            </div>
                                        </div>
                                    </div>
                                </div>
               
                   
                    <div class="col-lg-12">

                        <!-- Start here with columns -->
                    <div class="row">
                 
                        <div class="col-md-12">
                       
                       <div id="panel-1" class="panel">
                           <div class="panel-hdr">
                               <h2>
                                 Form Template
                               </h2>
                            
                           </div>

                           <div class="panel-container show">
                               <div class="panel-content">
                            <form id="requestForm">
                              <div class="row">
                                <div class="col-md-3">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Input Text </label>
                                    <input type="text" class="form-control" id="reqInit" required> 
                                </div>
                                <div class="col-md-3">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Input Number </label>
                                    <input type="number" class="form-control" id="reqInit" required> 
                                </div>
                                <div class="col-md-3">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Input Date </label>
                                    <input type="date" class="form-control" id="reqInit" required> 
                                </div>
                                <div class="col-md-3">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Input Time </label>
                                    <input type="time" class="form-control" id="reqInit" required> 
                                </div>
                                <div class="col-md-3">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Input Month </label>
                                    <input type="month" class="form-control" id="reqInit" required> 
                                </div>
                                <div class="col-md-3 mt-2">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Name Of Organization / Company/Department </label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select option</option>
                                        <option value=""></option>
                                    </select>
                                </div>

                                <div class="col-md-4 mt-2">
                                    <label style="font-weight: bold;font-family:Georgia, serif">Visit Agenda /Purpose:  </label>
                                    <textarea type="text" class="form-control" id="visitAgenda" >  

                                    </textarea>
                                </div>
                               
                              </div>
                               </form>
                              <br>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary" id="sendRequest">Send Request</button>
                                    </div>
                                 </div>
                   
                               </div>
                           </div>
                        
                       </div>
                   </div>
                    </div>
                     
                     
                     
                        <!-- BEGIN Page Footer -->
                        <!-- <footer class="page-footer" role="contentinfo">
                            <div class="d-flex align-items-center flex-1 text-muted">
                                <span class="hidden-md-down fw-700">2021 © Forward Sports by&nbsp;IT Dept Forward Sports</span>
                            </div>
                            <div>

                            </div>
                        </footer> -->
                     
                      
      
                        <!-- END Page Footer -->
          
  
                    </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php $this->load->view('layouts/foot.php'); ?>


        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) -->
        <script>
  let currentDate = new Date().toJSON().substr(0,10);
             let d = new Date(); // for now
            let hour = d.getHours(); // => 9
            let minutes = d.getMinutes(); // =>  30
            let seconds = d.getSeconds(); // => 51
            let currentTime = new Date().toLocaleTimeString().split(" ")[0];

            $('#schedule').dataTable({
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
                        className: 'btn-outline-primary btn-sm'
                    }
                ]
            });

            $("#sendRequest").click(function(){
              
               let reqInit = $("#reqInit").val();
               let orgName = $("#orgName").val();
               let phoneno = $("#phoneno").val();
               let emailAddr = $("#emailAddr").val();
               let nameVisitor = $("#nameVisitor").val();
               let nameDesig = $("#nameDesig").val();
               let VisitorA = $("#VisitorA").val();
               let VisitorB = $("#VisitorB").val();
               let VisitorC = $("#VisitorC").val();
               let VisitorD = $("#VisitorD").val();
               let orgName2 = $("#orgName2").val();
               let phoneno2 = $("#phoneno2").val();
               let emailAddr2 = $("#emailAddr2").val();
               let visitDate = $("#visitDate").val();
               let visitTime = $("#visitTime").val();
               let visitAgenda = $("#visitAgenda").val();
                if(phoneno == '' || emailAddr == '' || visitDate == '' || visitTime == '' ){
                    alert("Required(*) Fields are Missing")
                }
                else{
                    let data = {
                "reqInit" : reqInit,
               "orgName" :orgName,
               "phoneno" : phoneno,
               "emailAddr" : emailAddr,
               "nameVisitor" : nameVisitor,
               "nameDesig" : nameDesig,
               "VisitorA" : VisitorA,
               "VisitorB" : VisitorB,
               "VisitorC" : VisitorC,
               "VisitorD" : VisitorD,
               "orgName2" : orgName2,
               "phoneno2" : phoneno2,
               "emailAddr2" : emailAddr2,
               "visitDate" : visitDate,
             "visitTime" : visitTime,
               "visitAgenda" : visitAgenda
               }

    url = "<?php echo base_url(''); ?>index.php/RequestController/addData"
    $.post(url,data ,function(data) {
      if(data){
        alert("Request Send Successfully!")
        window.location.reload()
      }
      else{
        alert("Error While sending Request!")
      }
 
    });
                }

               
            })
        </script>
       
        </body>

        </html>

