<?php 

	class Makeresult{
		private $grade;
		public $total;
		public $mark1;
		public $mark2;

		public function result($all){
			$mark1 = $all["n1"];
			$mark2 = $all["n2"];
			$total = $mark1 + $mark2;

			if($total>79&&$total<101)
				$grade="A+";
			elseif ($total>69&&$total<80)
				$grade="A";
			elseif ($total>59&&$total<70)
				$grade="A-";
			elseif ($total>49&&$total<60)
				$grade="B";
			elseif ($total>39&&$total<50)
				$grade="C";
			elseif ($total>32&&$total<40)
				$grade="D";
			elseif ($total>=0&&$total<33)
				$grade="F";
			else
				$grade="Wrong input";

			$allresult['grade'] = $grade;
			$allresult['total'] = $total;
			$allresult['mark1'] = $mark1;
			$allresult['mark2'] = $mark2;
			return $allresult;
		}
	}
 ?>