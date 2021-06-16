<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * MY_Controller.php
 *
 * Date         : 16/06/2021
 * Author       : Wawan Setyawan
 * Email        : wawans.setyawan@gmail.com
 * Description  :
 *
 *
 */
class MY_Controller extends CI_Controller
{
	protected $layout = 'app';
	protected $data = array();
	protected $page = array();

	protected function render()
	{
		if (!empty($this->data)) $this->page['content'] = $this->data;
		$this->load->view('layouts/' . $this->layout, !empty($this->page) ? $this->page : null);
	}
}

/* End of file MY_Controller.php */
