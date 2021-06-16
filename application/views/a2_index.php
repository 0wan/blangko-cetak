<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * a2_index.php
 *
 * Date         : 16/06/2021
 * Author       : Wawan Setyawan
 * Email        : wawans.setyawan@gmail.com
 * Description  :
 *
 *
 */

$t_1 = array(
		'a' => 1,
		'b' => 1,
		'c' => 3,
);
$t_2 = array(
		'd' => 2,
		'e' => 1,
		'f' => 2,
		'g' => 3,
		'h' => 1,
		'i' => 3,
		'j' => 1,
		'k' => 2,
		'l' => 1,
);
$t_3 = array(
		'p' => 1,
		'q' => 1,
		'r' => 1,
		's' => 1,
		't' => 1,
		'u' => 1,
		'm' => 1,
		'n' => 1,
		'o' => 1,
);
$t_4 = array(
		'v' => 2,
		'w' => 2,
		'x' => 2,
		'y' => 2,
);

$init = array(
		'a_y' => 4,
		'b_y' => 1,
		'c_y' => 3,
		'd_y' => 2,
		'e_y' => 1,
		'f_y' => 2,
		'g_y' => 3,
		'h_y' => 1,
		'i_y' => 3,
		'j_y' => 1,
		'k_y' => 2,
		'l_y' => 1,
		'm_y' => 1,
		'n_y' => 1,
		'o_y' => 1,
		'p_y' => 1,
		'q_y' => 1,
		'r_y' => 1,
		's_y' => 1,
		't_y' => 1,
		'u_y' => 1,
		'v_y' => 2,
		'w_y' => 2,
		'x_y' => 2,
		'y_y' => 2,

		'a_1' => 1,
		'b_1' => 1,
		'c_1' => 3,
		'c_2' => 3,
		'c_3' => 3,
		'd_1' => 2,
		'd_2' => 2,
		'e_1' => 1,
		'f_1' => 2,
		'f_2' => 2,
		'g_1' => 3,
		'g_2' => 3,
		'g_3' => 3,
		'h_1' => 1,
		'i_1' => 3,
		'i_2' => 3,
		'i_3' => 3,
		'j_1' => 1,
		'k_1' => 2,
		'k_2' => 2,
		'l_1' => 1,
		'm_1' => 1,
		'n_1' => 1,
		'o_1' => 1,
		'p_1' => 1,
		'q_1' => 1,
		'r_1' => 1,
		's_1' => 1,
		't_1' => 1,
		'u_1' => 1,
		'v_1' => 2,
		'v_2' => 2,
		'w_1' => 2,
		'w_2' => 2,
		'x_1' => 2,
		'x_2' => 2,
		'y_1' => 2,
		'y_2' => 2,
);
?>
	<form method="post" action="<?php echo site_url('/a2/cetak')?>" target="_blank">
		<table style="width: 100%;">
			<tr>
				<td style="width: 50%;">
					<table style="width: 100%;">
						<?php foreach ($t_1 as $char => $max) : ?>
							<?php for ($i=1;$i<=$max;$i++): ?>
								<tr>
									<td style="width: 70px;">
										y
										<input id="<?php echo $char.'_y'; ?>" type="text" name="<?php echo $char.'_y'; ?>" value="<?php echo $init[$char.'_y'] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td style="width: 70px;">
										x
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i; ?>" value="<?php echo $init[$char.'_'.$i] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td>
										Label
									</td>
									<td>
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i.'_t'; ?>" value="" style="">
									</td>
								</tr>
							<?php endfor; ?>
						<?php  endforeach; ?>
					</table>
					<br/>
					<br/>
					<table style="width: 100%;">
						<?php foreach ($t_2 as $char => $max) : ?>
							<?php for ($i=1;$i<=$max;$i++): ?>
								<tr>
									<td style="width: 70px;">
										y
										<input id="<?php echo $char.'_y'; ?>" type="text" name="<?php echo $char.'_y'; ?>" value="<?php echo $init[$char.'_y'] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td style="width: 70px;">
										x
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i; ?>" value="<?php echo $init[$char.'_'.$i] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td>
										Label
									</td>
									<td>
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i.'_t'; ?>" value="" style="">
									</td>
								</tr>
							<?php endfor; ?>
						<?php  endforeach; ?>
					</table>
				</td>
				<td style="width: 50%; vertical-align: top;">
					<table style="width: 100%;">
						<?php foreach ($t_3 as $char => $max) : ?>
							<?php for ($i=1;$i<=$max;$i++): ?>
								<tr>
									<td style="width: 70px;">
										y
										<input id="<?php echo $char.'_y'; ?>" type="text" name="<?php echo $char.'_y'; ?>" value="<?php echo $init[$char.'_y'] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td style="width: 70px;">
										x
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i; ?>" value="<?php echo $init[$char.'_'.$i] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td>
										Label
									</td>
									<td>
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i.'_t'; ?>" value="" style="">
									</td>
								</tr>
							<?php endfor; ?>
						<?php  endforeach; ?>
					</table>
					<br/>
					<br/>
					<table style="width: 100%;">
						<?php foreach ($t_4 as $char => $max) : ?>
							<?php for ($i=1;$i<=$max;$i++): ?>
								<tr>
									<td style="width: 70px;">
										y
										<input id="<?php echo $char.'_y'; ?>" type="text" name="<?php echo $char.'_y'; ?>" value="<?php echo $init[$char.'_y'] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td style="width: 70px;">
										x
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i; ?>" value="<?php echo $init[$char.'_'.$i] ?? 0 ;?>" style="width: 50px;">
									</td>
									<td>
										Label
									</td>
									<td>
										<input id="<?php echo $char.'_'.$i; ?>" type="text" name="<?php echo $char.'_'.$i.'_t'; ?>" value="" style="">
									</td>
								</tr>
							<?php endfor; ?>
						<?php  endforeach; ?>
					</table>
				</td>
			</tr>


		</table>


		<button type="submit">submit</button>
	</form>
<?php

/* End of file a2_index.php */
