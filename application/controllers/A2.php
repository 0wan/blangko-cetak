<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * A2.php
 *
 * Date         : 16/06/2021
 * Author       : Wawan Setyawan
 * Email        : wawans.setyawan@gmail.com
 * Description  :
 *
 *
 */
class A2 extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$this->page['page'] = strtolower(__CLASS__ . '_' . __FUNCTION__);
        $this->render();
    }

	/**
	 * Memuat profil pengaturan pdf.
	 *
	 */
	public function load()
	{

    }

	/**
	 * Menyimpan profil pengaturan pdf.
	 *
	 */
	public function save()
	{

    }

	/**
	 * Cetak PDF
	 *
	 */
	public function cetak()
	{
		$profile = '';
		$pageMarginT = 15;
		$pageMarginL = 10;
		$pageMarginR = 5;
		$pageMarginB = 5;

		$a_y = (int) $this->input->post('a_y') ?? 0;	$a_1 = (int) $this->input->post('a_1') ?? 0;
		$b_y = (int) $this->input->post('b_y') ?? 0;	$b_1 = (int) $this->input->post('b_1') ?? 0;
		$c_y = (int) $this->input->post('c_y') ?? 0;	$c_1 = (int) $this->input->post('c_1') ?? 0;
		$d_y = (int) $this->input->post('d_y') ?? 0;	$d_1 = (int) $this->input->post('d_1') ?? 0;
		$e_y = (int) $this->input->post('e_y') ?? 0;	$e_1 = (int) $this->input->post('e_1') ?? 0;
		$f_y = (int) $this->input->post('f_y') ?? 0;	$f_1 = (int) $this->input->post('f_1') ?? 0;
		$g_y = (int) $this->input->post('g_y') ?? 0;	$g_1 = (int) $this->input->post('g_1') ?? 0;
		$h_y = (int) $this->input->post('h_y') ?? 0;	$h_1 = (int) $this->input->post('h_1') ?? 0;
		$i_y = (int) $this->input->post('i_y') ?? 0;	$i_1 = (int) $this->input->post('i_1') ?? 0;
		$j_y = (int) $this->input->post('j_y') ?? 0;	$j_1 = (int) $this->input->post('j_1') ?? 0;
		$k_y = (int) $this->input->post('k_y') ?? 0;	$k_1 = (int) $this->input->post('k_1') ?? 0;
		$l_y = (int) $this->input->post('l_y') ?? 0;	$l_1 = (int) $this->input->post('l_1') ?? 0;
		$m_y = (int) $this->input->post('m_y') ?? 0;	$m_1 = (int) $this->input->post('m_1') ?? 0;
		$n_y = (int) $this->input->post('n_y') ?? 0;	$n_1 = (int) $this->input->post('n_1') ?? 0;
		$o_y = (int) $this->input->post('o_y') ?? 0;	$o_1 = (int) $this->input->post('o_1') ?? 0;
		$p_y = (int) $this->input->post('p_y') ?? 0;	$p_1 = (int) $this->input->post('p_1') ?? 0;
		$q_y = (int) $this->input->post('q_y') ?? 0;	$q_1 = (int) $this->input->post('q_1') ?? 0;
		$r_y = (int) $this->input->post('r_y') ?? 0;	$r_1 = (int) $this->input->post('r_1') ?? 0;
		$s_y = (int) $this->input->post('s_y') ?? 0;	$s_1 = (int) $this->input->post('s_1') ?? 0;
		$t_y = (int) $this->input->post('t_y') ?? 0;	$t_1 = (int) $this->input->post('t_1') ?? 0;
		$u_y = (int) $this->input->post('u_y') ?? 0;	$u_1 = (int) $this->input->post('u_1') ?? 0;
		$v_y = (int) $this->input->post('v_y') ?? 0;	$v_1 = (int) $this->input->post('v_1') ?? 0;
		$w_y = (int) $this->input->post('w_y') ?? 0;	$w_1 = (int) $this->input->post('w_1') ?? 0;
		$x_y = (int) $this->input->post('x_y') ?? 0;	$x_1 = (int) $this->input->post('x_1') ?? 0;
		$y_y = (int) $this->input->post('y_y') ?? 0;	$y_1 = (int) $this->input->post('y_1') ?? 0;
		$z_y = (int) $this->input->post('z_y') ?? 0;	$z_1 = (int) $this->input->post('z_1') ?? 0;

		$ts = array(
			'a' => [1, 1],
			'b' => [1, 1],
			'c' => [3, 0],
			'd' => [2, 1],
			'e' => [1, 1],
			'f' => [2, 1],
			'g' => [3, 1],
			'h' => [1, 1],
			'i' => [3, 1],
			'j' => [1, 1],
			'k' => [2, 0],
			'l' => [1, 1],
			'm' => [1, 1],
			'n' => [1, 1],
			'o' => [1, 1],
			'p' => [1, 1],
			'q' => [1, 1],
			'r' => [1, 1],
			's' => [1, 1],
			't' => [1, 1],
			'u' => [1, 1],
			'v' => [2, 1],
			'w' => [2, 1],
			'x' => [2, 1],
			'y' => [2, 1],
		);

		$this->load->library('pdf');

		$this->pdf->SetTitle("Formulir Cetak A2");
		$this->pdf->SetDisplayMode('real');
		$this->pdf->SetAutoPageBreak(false, $pageMarginB);
		$this->pdf->SetMargins($pageMarginL, $pageMarginT, $pageMarginR);
		$this->pdf->AddPage('L',array(215,165));
		$this->pdf->SetFont('arial','',8);

		foreach ($ts as $char => $max) {
//			$pos_y = $char.'_y';
//			$this->pdf->SetY($$pos_y + $pageMarginT, true);
			$pos_y = (int) $this->input->post($char.'_y') ?? 0;
			$this->pdf->SetY($pos_y + $pageMarginT, true);

			for ($i=1;$i<=$max[0];$i++) {
				// $pos_x = $char.'_'.$i;
				// $this->pdf->SetX($$pos_x + $pageMarginL);
				$pos_x = (int) $this->input->post($char.'_'.$i) ?? 0;
				$this->pdf->SetX($pos_x + $pageMarginL);
				$this->pdf->Write(4,'TEXT');

				if ($max[1] == 1) {
					$this->pdf->SetY($this->pdf->GetY() + 4, true);
				}
			}
		}

		$this->pdf->Output(hash("md4",microtime()),"I");
	}
}

/* End of file A2.php */
