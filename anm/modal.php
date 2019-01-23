
<!controller--->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vijay extends CI_Controller {

public function index()

{
	$this->load->view('welcome_message');
}
public function add(){
    $this->load->model('ajay');
    $data = $this->ajay->getData();
    print_r($data);
	$this->load->view('add');
}
}
//


<!model--->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajay extends CI_Model {

public function getData()

{

	return ['a'=>'vijay','b'=>'sanjay'];
}

}
//