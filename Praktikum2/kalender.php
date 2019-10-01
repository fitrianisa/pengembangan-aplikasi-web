<?php
	$holidays= array
	(
		'2019-1-1' => "New year's Days",
		'2019-2-5' => "Chinese New Year",
		'2019-3-7' => "Bali Hindu New Year",
		'2019-4-3' => "Isra Mi'raj",
		'2019-4-19' => "Good Friday",
		'2019-5-1' => "Labour Day",
		'2019-5-19' => "Waisak Day",
		'2019-5-30' => "Ascension Day of Jesus Christ",
		'2019-6-1' => "Pancasila Day",
		'2019-6-3' => "First joint holiday before Idul Fitri",
		'2019-6-4' => "Second joint holiday before Idul Fitri",
		'2019-6-5' => "Idul Fitri Day 1",
		'2019-6-6' => "Idul Fitri Day 2",
		'2019-6-7' => "Joint holiday after Idul Fitri",
		'2019-8-11' => "Idul Adha",
		'2019-8-17' => "Independence Day",
		'2019-9-1' => "Islamic New Year",
		'2019-11-9' => "Prophet Muhammad's Birthday",
		'2019-12-24' => "Christmas Holiday",
		'2019-12-25' => "Christmas Day"
	);

	function display_month($month,$year)
	{
		global $holidays;
		$first_day_of_month = mktime(0, 0, 0, $month, 1, $year); 
		$first_day_of_week = date('w', $first_day_of_month);
		$days_in_month = date('t', $first_day_of_month);  
		$month_name = date('F', $first_day_of_month); 
		echo "<h3 class='heading'>$month_name $year</h3>";
		echo "<table class='tab'>
			<tr>
				<th class='tab'>Sun</th>
				<th class='tab'>Mon</th>
				<th class='tab'>Tue</th>
				<th class='tab'>Wed</th>
				<th class='tab'>Thu</th>
				<th class='tab'>Fri</th>
				<th class='tab'>Sat</th>
			</tr>";

		$pos_start_month = 1+$first_day_of_week;
		$pos_end_month = $days_in_month+$first_day_of_week;

		for ($i=$pos_start_month; $i <= $pos_end_month ; $i++)
		{
			//tanggal sekarang
			$date_now=$i-$first_day_of_week;

			//mengisi tanggal kosong awal
			if ($i==$pos_start_month && $first_day_of_week>0)
				{
					echo "<tr ><td class='tab' colspan=\"$first_day_of_week\">&nbsp;</td>";  
				}
			//tr buka untuk hari
			else if($i%7==1)
				{
					echo "<tr>";
				}

			//membuat format tanggal
			
			// Isi Tanggal Td
			$tanggal = $year."-".$month."-".$date_now;        
			$currentDateTime = strval(date('Y-n-j'));
			if ($i%7==6){	            
				echo "<td class='jumat'>$date_now</td>";      
			}      
			else if (isset($holidays[$tanggal])){            
				echo "<td class='libur'>$date_now</td>";
			}
			        
			else if ($currentDateTime == $tanggal){            
				echo "<td class='now'>$date_now</td>";      
			}
			else{           
				echo "<td class='tab'>$date_now</td>";       
			}

			//mengisi tanggal kosong akhir 
			if ($i==$pos_end_month && $pos_end_month%7>0)
				{
					echo "<td class='tab' colspan=\"".(7-$pos_end_month%7)."\">&nbsp;</td></tr>";  
				}
			//Tr tutup untuk hari
			else if($i%7==0)
				{
					echo "</tr>";
				}

		}

		echo "</table>";

	}
?>