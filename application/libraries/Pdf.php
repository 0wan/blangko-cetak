<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Pdf.php
 *
 * Date         : 16/06/2021
 * Author       : Wawan Setyawan
 * Email        : wawans.setyawan@gmail.com
 * Description  :
 *
 *
 */
include_once FCPATH."application/third_party/fpdf/fpdf.php";
defined('FPDF_FONTPATH') OR define('FPDF_FONTPATH', FCPATH."application/third_party/fpdf/font");

class Pdf extends FPDF
{
	private $CI;

    public function __construct()
    {
        parent::__construct();
		$this->CI =& get_instance();
    }

}

/* End of file Pdf.php */
