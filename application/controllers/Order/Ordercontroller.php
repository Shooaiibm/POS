
    <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ordercontroller extends CI_Controller{
public function __construct()
{
parent::__construct();
$this->load->model('Order/Ordermodel', 'M');
}
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

public function index()
{

    $maxID = $this->session->userdata("ORID");
   
   
    if($maxID){
        $data['getuserwisehead'] = $this->M->getuserwisehead($maxID);
       // $data['MAXID'] = $this->M->GetMaxID();
    //     Echo "helooo";
    //     print_r($data['getuserwisehead']);
    // die;
    }else{
        $data['getuserwisehead'] = NULL;
    $data['MAXID'] = NULL;
    // Echo "hell";
    // die;
    }
    
    // $this->load->view('Orders/Order.php',$data);
$this->load->view('Order/Order',$data);
}
public function Scan()
{
$this->load->view('Order/Scan');
}
public function Orders()
{
$this->load->view('Order/ordergeneration');
}
public function Expense()
{
  
$this->load->view('Expense/exp');
}
public function sales()
{
$this->load->view('Order/sales');
}
public function Reports()
{
$this->load->view('Order/Report');
}
public function viewdata()
{
$this->load->view('Order/viewdata');
}
public function addpayment()
{
$this->load->view('Order/addpayment');
}
public function INOUT()
{
$this->load->view('Order/INOUT');
}

public function Stock()
{
$this->load->view('Order/Stock');
}

public function loadCategory()
{
$data = $this->M->loadCategory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function tbl_Catagory()
{
$data = $this->M->tbl_Catagory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function OrderHeads()
{
$data = $this->M->OrderHeads($_POST['stardate'],$_POST['enddate']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function OrderHeadsdetails()
{
$data = $this->M->OrderHeadsdetails($_POST['OID']);
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function undoprd(){
    
    
    $data = $this->M->undoprd($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}


public function undoprdorder(){
    
    
    $data = $this->M->undoprdorder($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}
public function undoprdoutward(){
    
    
    $data = $this->M->undoprdoutward($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}


public function undoinvoice(){
    
    
    $data = $this->M->undoinvoice($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}


public function undoprdoutwardout(){
    
    
    $data = $this->M->undoprdoutwardout($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}
public function undoprdhead(){
    
    
    $data = $this->M->undoprdhead($_POST['id']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}


public function loadActiveCategory()
{
$data = $this->M->loadActiveCategory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function addCategory()
{
$data = $this->M->addCategory($this->input->post('Name',TRUE ),$this->input->post('Status',TRUE ));
return true;
}

public function AddExpCatagory()
{
$data = $this->M->AddExpCatagory($this->input->post('Name',TRUE ),$this->input->post('status',TRUE ));
return true;
}

public function editExpCatagory()
{
$data = $this->M->editExpCatagory($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function loadexpcatagory()
{
$data = $this->M->loadexpcatagory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function loadexpactivecatagory()
{
$data = $this->M->loadexpactivecatagory();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function updateEXPCategory()
{
$data = $this->M->updateEXPCategory($this->input->post('Name',TRUE ),$this->input->post('Status',TRUE ),$this->input->post('id',TRUE ));
return true;
}

public function loadexp()
{
$data = $this->M->loadexp($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function editCategory()
{
$data = $this->M->editCategory($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function Editexpense()
{
$data = $this->M->Editexpense($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function updateCategory()
{
$data = $this->M->updateCategory($this->input->post('Name',TRUE ),$this->input->post('Status',TRUE ),$this->input->post('id',TRUE ));
return true;
}
public function Stockbalance()
{
$data = $this->M->Stockbalance($this->input->post('CatID'));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function insertExpenseValue()
{
    $EXCID = $this->input->post('EXCID', true);
    $Amount = $this->input->post('Amount', true);
    $Date = $this->input->post('Date', true);
    $UserID = $this->session->userdata('user_id');
    $EntryDate = date('Y-m-d H:i:s');

    
    $this->M->insertExpenseValue($EXCID, $Amount, $UserID, $EntryDate, $Date);

    echo json_encode(['status' => 'success']);
}
public function invtnrotyBalance()
{
$data = $this->M->invtnrotyBalance();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function view_orders()
{
$data = $this->M->view_orders($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function view_ordersnew()
{
$data = $this->M->view_ordersnew($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function view_inv_Details()
{
$data = $this->M->view_inv_Details($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function view_inv_Details_new()
{
$data = $this->M->view_inv_Details_new($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ),$this->input->post('SalesMan',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function view_inv_Detailsout()
{
$data = $this->M->view_inv_Detailsout($this->input->post('startDate',TRUE ),$this->input->post('endDate',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function view_ordersoutward()
{
$data = $this->M->view_ordersoutward();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function updateInvoiceHead()
{
    $paymentDateedit = $this->input->post('paymentDateedit');
    $CIDedit         = $this->input->post('CIDedit');
    $SalesManedit    = $this->input->post('SalesManedit');
    $paymentTypeedit = $this->input->post('paymentTypeedit');
    $InvoiceID       = $this->input->post('InvoiceID');

    // Call Model
    $result = $this->M->updateInvoiceData($InvoiceID, $CIDedit, $paymentDateedit, $paymentTypeedit, $SalesManedit);

    echo json_encode($result);
}
public function view_ordersoutwardedit()
{
$data = $this->M->view_ordersoutwardedit($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function generateInvoice()
{
    $CID = $this->input->post('cid');
    $discountPercent = $this->input->post('discount_percent'); // Added
    $received = $this->input->post('ReceivedAMut'); // Added
    $Balance = $this->input->post('balance'); // Added
 $paymentType = $this->input->post('paymentType');
    $SalesMan = $this->input->post('SalesMan');
    if (!$CID) {
        echo json_encode(['status' => false, 'message' => 'Client ID is missing.']);
        return;
    }

    $result = $this->M->generateInvoiceForClient($CID, $discountPercent, $received, $Balance,$paymentType,$SalesMan);
    echo json_encode($result);
}
public function generateInvoiceout()
{
    $CID = $this->input->post('cid');
    

    if (!$CID) {
        echo json_encode(['status' => false, 'message' => 'CID or Date is missing.']);
        return;
    }

   // $this->load->model('Store_model'); // change to your model
    $result = $this->M->generateInvoiceForClientout($CID);

    echo json_encode($result);
}
public function Getinvoiceout(){
 
    $data = $this->M->Getinvoiceout();

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}

public function Getinvoice(){
 
    $data = $this->M->Getinvoice();

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}
public function Getinvoiceinv(){
 
    $data = $this->M->Getinvoiceinv($_POST['INVNO']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}
public function Getinvoiceinvout(){
 
    $data = $this->M->Getinvoiceinvout($_POST['INVNO']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}

public function Store_outwardtransaction_manual(){
 
    $data = $this->M->Store_outwardtransaction_manual();

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}

public function clearSession(){
    $this->session->unset_userdata('ORID');
    return true;
}


public function AddOrder_head(){
 
    $data = $this->M->AddOrder_head($_POST['EIMI'],$_POST['odate'],
    $_POST['purchasePrice'],$_POST['salesprice'],$_POST['IID'],$_POST['qty']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}

public function AddOrder_headgeneration(){
 
    $data = $this->M->AddOrder_headgeneration($_POST['odate'],
    $_POST['purchasePrice'],$_POST['salesprice'],$_POST['IID'],$_POST['qty']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}


public function AddOUT(){
 
    $data = $this->M->AddOUT($_POST['EIMI'],$_POST['odate'],
    $_POST['PPU'],$_POST['CID'],$_POST['Name'],$_POST['barcode'],$_POST['qty']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}

public function updated(){
 
    $data = $this->M->updated($_POST['CID'],$_POST['odate'],
    $_POST['Origin'],$_POST['Destination'],$_POST['Shipper'],$_POST['barcode'],$_POST['Remarks'],$_POST['OID']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}
public function updatebarcode(){
 
    $data = $this->M->updatebarcode($_POST['OID'],$_POST['newbarcode']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}


public function loadscanning(){
 
    $data = $this->M->loadscanning($_POST['deliveryStatus']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}


public function loadpayment(){
 
    $data = $this->M->loadpayment($_POST['deliveryStatus'],$_POST['stardate'],$_POST['enddate']);

    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
    //return true;
}
public function Scaningdata()
{
    // Sanitize and validate input
    $orderNumber = $this->input->post('order_number');
   
    
    // Call model function to check order status
    $data = $this->M->Scaningdata($orderNumber);

    
    return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
}



public function Scaning()
{
    $barcode = $this->input->post('order_number');
    $CID = $this->input->post('CID');

    $result = $this->M->ScanningData($barcode, $CID);

    // Proper JSON response using CodeIgniter's output class
    $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($result));
}

public function Scaningviaitem()
{
    $IIDoutward = $this->input->post('IIDoutward');
    $CID = $this->input->post('CID');

     // Load model
    $result = $this->M->Scaningviaitem($IIDoutward, $CID);

    echo json_encode($result);
}

public function Scaningviaitemedit()
{
    $IIDoutward = $this->input->post('IIDoutward');
    $CID = $this->input->post('CID');
 $InvoiceID = $this->input->post('InvoiceID');
  $HID = $this->input->post('HID');
     // Load model
    $result = $this->M->Scaningviaitemedit($IIDoutward, $CID,$InvoiceID,$HID);

    echo json_encode($result);
}

public function uscanned()
{
$data = $this->M->uscanned($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}
public function Payment()
{
$data = $this->M->Payment($this->input->post('id',TRUE ));
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}

public function AddOrder_Details() {
    $OID = $_POST['OID'];
    $CatID = $_POST['CatID'];
    $IID = $_POST['IID'];
    $qty = $_POST['qty'];
    $PPU = $_POST['PPU'];
    $purchasePrice = $_POST['purchasePrice'];
    $Amount = $_POST['Amount'];
    $Dimensions = $_POST['Dimensions'];
    $Remarks = $_POST['Remarks'];

    // Call the model function and pass the data
    $data = $this->M->AddOrder_Details($OID, $CatID, $IID, $qty, $PPU, $purchasePrice, $Amount, $Dimensions, $Remarks);

    // Return a JSON response
    return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($data));
}

public function getMaxOrderNo()
{
$data = $this->M->getMaxOrderNo();
return $this->output
->set_content_type('application/json')
->set_status_header(200)
->set_output(json_encode($data));
}


public function updateOutwardQuantity()
{
    $TID      = $this->input->post('TID');
    $ITID     = $this->input->post('ITID');
    $Quantity = $this->input->post('Quantity');
    $SalesPrices = $this->input->post('SalesPrices');
     $DiscPrec = $this->input->post('DICprec');

    // Call model
    $result = $this->M->updateOutwardQuantity($TID, $ITID, $Quantity,$SalesPrices,$DiscPrec);

    // Return proper JSON output
    return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));
}

public function inventoryLedgerReport()
{
    

    $itemID = $this->input->post('IID');
    $startDate = $this->input->post('Sdate');
    $endDate = $this->input->post('Edate');

    if (!$itemID || !$startDate || !$endDate) {
        echo json_encode(['error' => 'Missing parameters']);
        return;
    }

    

    $opening_balance = $this->M->getOpeningBalance($itemID, $startDate);
    $transactions = $this->M->getGroupedTransactions($itemID, $startDate, $endDate);

    $final_balance = !empty($transactions) ? end($transactions)['balance'] : $opening_balance;

    echo json_encode([
        'opening_balance' => $opening_balance,
        'transactions' => $transactions,
        'final_balance' => $final_balance
    ]);
}

public function updateExpenseValue()
{
    $TID = $this->input->post('TID', true);
    $EXCID = $this->input->post('EXCID', true);
    $Amount = $this->input->post('Amount', true);
    $Date = $this->input->post('Date', true);
    $UserID = $this->session->userdata('user_id');
    $EntryDate = date('Y-m-d H:i:s');

   // $this->load->model('Order/Ordermodel');
    $this->M->updateExpenseValue($TID, $EXCID, $Amount, $UserID, $EntryDate, $Date);

    echo json_encode(['status' => 'success']);
}
} 
?>           
    