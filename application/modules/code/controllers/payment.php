<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * FusionInvoice
 * 
 * A free and open source web based invoicing system
 *
 * @package		FusionInvoice
 * @author		Jesse Terry
 * @copyright	Copyright (c) 2012 - 2013, Jesse Terry
 * @license		http://www.fusioninvoice.com/support/page/license-agreement
 * @link		http://www.fusioninvoice.com
 * 
 */

class Payment extends Base_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		//$this->load->model('mdl_email_templates');
	}
	
	public function index($page = 0)
	{
        
        $snippet = $this->input->get('s');
        
		//$this->layout->buffer('content', 'email_templates/index');
		$this->layout->render();
	}
	
	public function paypal()
	{
		$this->load->add_package_path(APPPATH.'third_party/Payment');
        $this->load->library('payment');
		$this->layout->render();
	}
	
	public function delete($id)
	{
		$this->mdl_email_templates->delete($id);
		redirect('email_templates');
	}

}

?>