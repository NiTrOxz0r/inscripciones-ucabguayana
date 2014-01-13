<?php
require_once('../mpdf/mpdf.php');

$mpdf = new mPDF();
$stylesheet = file_get_contents('../css/horario.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML('<table border="0" class="horario" width="100%" cellspacing="0" cellpadding="0" style="display: block;">
			<tbody><tr>
				<th>Hora</th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miércoles</th>
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sábado</th>
			</tr>
		<tr><td class="hora">7:00 -7:30 </td><td>&nbsp;</td><td class="materia m4" rowspan="4">Investigacion de Operaciones I<br>(A2-12)</td><td class="materia m4" rowspan="4">Investigacion de Operaciones I<br>(A2-12)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">7:30 -8:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">8:00 -8:30 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">8:30 -9:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">9:00 -9:30 </td><td>&nbsp;</td><td class="materia m6" rowspan="6">Analisis de Inversiones<br>(LAB-BD)</td><td>&nbsp;</td><td>&nbsp;</td><td class="materia m2" rowspan="4">Metodologia del Software<br>(A2-12)</td><td>&nbsp;</td></tr><tr><td class="hora">9:30 -10:00</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">10:00-10:30</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">10:30-11:00</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">11:00-11:30</td><td>&nbsp;</td><td class="materia m1" rowspan="4">Redes de Computadores II<br>(AR-24)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">11:30-12:00</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">12:00-12:30</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">12:30-1:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">1:00 -1:30 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">1:30 -2:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">2:00 -2:30 </td><td>&nbsp;</td><td class="materia m2" rowspan="4">Metodologia del Software<br>(A2-11)</td><td class="materia m5" rowspan="4">Seguridad Computacional<br>(LAB-BD)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">2:30 -3:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">3:00 -3:30 </td><td class="materia m1" rowspan="4">Redes de Computadores II<br>(A2-11)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">3:30 -4:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">4:00 -4:30 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td class="materia m1" rowspan="4">Redes de Computadores II<br>(LAB-BD)</td><td>&nbsp;</td></tr><tr><td class="hora">4:30 -5:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">5:00 -5:30 </td><td>&nbsp;</td><td>&nbsp;</td><td class="materia m3" rowspan="4">Sistemas de Bases de Datos II<br>(AR-21)</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">5:30 -6:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">6:00 -6:30 </td><td>&nbsp;</td><td class="materia m5" rowspan="6">Seguridad Computacional<br>(A2-11)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">6:30 -7:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">7:00 -7:30 </td><td class="materia m3" rowspan="4">Sistemas de Bases de Datos II<br>(A2-11)</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">7:30 -8:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">8:00 -8:30 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">8:30 -9:00 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">9:00 -9:30 </td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td class="hora">9:30 -10:00</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table>');
$mpdf->Output();
exit;
?>