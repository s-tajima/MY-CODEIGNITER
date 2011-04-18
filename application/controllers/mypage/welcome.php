<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('parser');	

		$this->smarty->assign('test', 'test_assign');

		echo "mypage_welcome";

		$data = array(
			'data1' => array('data1-1','data1-2'),
			'data2' => array('data2-1' => "aaa", 'data2-2' => "bbb"),
			'data3' => 'ccc'
		);
	
		$this->smarty->view( 'welcome.tpl', $data );

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
