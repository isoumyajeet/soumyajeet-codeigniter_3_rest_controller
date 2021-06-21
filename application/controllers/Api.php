<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;
class Api extends REST_Controller
{
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

	public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation','encryption', 'encrypt','session','javascript','image_lib','pagination','Authorization_Token']);
        $this->load->helper(['url', 'form', 'date','admin_helper','jwt_helper']);
        $this->encryption->create_key(16);
        $this->load->model(['api_model']);
        $this->gallery_path = realpath(APPPATH . '../uploads');
    }
}
