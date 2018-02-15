<?php
	
	namespace XPROJECT\Http\Controllers;

use XPROJECT\Http\Controllers\Controller;

	class InqController extends controller

	{

			public function fibonacci ()
		{
			echo "<table border=1>";
			$n0=0; $n1=0; $n=1;

			for ($n2=1; $n2<=5; $n2++)
			{
				 echo "<tr>";
				 for ($n3=1; $n3<=5; $n3++)
				{
				 echo "<td>", $n, "</td>";
				
				$n0 = $n1;
				$n1 = $n;
				$n=$n0 + $n1;

				}
				 echo "</tr>";
			}
			echo "</table>";
		}
	}
