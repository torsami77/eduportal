<?php
$fullinstadd = 'ECWA Theological Seminary, Kagoro' ;
$institution = 'etsk' ;
$website = 'www.etsk.sch.ng' ;
ob_start();
$db = new mysqli('sql11.freemysqlhosting.net', 'sql11423416', 'PFsP4MV6z7', 'sql11423416');
if($db->connect_errno){
	die('Sorry unable to connect to database at the moment, Please try again later.');
	}


if(!ISSET($_SESSION)){SESSION_START();}
	if(ISSET($_SESSION['sn']) || ISSET($_SESSION['addnum']) || ISSET($_SESSION['email'])){
	if(ISSET($_SESSION['addnum'])){
	$addnum = $_SESSION['addnum'];
	$_SESSION['addnu'] = $addnum;
	$result = $db->query("SELECT * FROM students WHERE addnum='$addnum'") ;
    $row = $result->fetch_array(MYSQLI_BOTH) ;


			$currentyear = date('Y', strtotime(date("y-m-d"))) ;
			$period = 'regular';
			if(date('m', strtotime(date("y-m-d"))) > 5 && date('m', strtotime(date("y-m-d"))) < 8){
				$period = 'summer';
			}
			$admittedyear = date('Y', strtotime($row['admitted'])) ;
			$schoolyear = $currentyear - $admittedyear ;
			if($currentyear % 2 !== 0){
				if(date('m', strtotime(date("y-m-d")) ) < 6 )
			{ $currentsemester = 2 ; $schoolyear = $schoolyear - 1;
			}else{$currentsemester = 1 ; $schoolyear = $schoolyear;
			}}else{

			if(date('m', strtotime(date("y-m-d")) ) < 8 )
			{ $currentsemester = 2 ; $schoolyear = $schoolyear - 1;
			}else{$currentsemester = 1 ; $schoolyear = $schoolyear;
			}};
			if($schoolyear==0){$schoolyear=1;}
			$schoolyear=$schoolyear.'00';
			$schoolyear=abs($schoolyear);

			if($row['duration'] == 2 || $row['duration'] == 3){
				$arith = 4 - $row['duration'];
				$schoolyear = $schoolyear + $arith ;
			};




			//$credithour;
			$abbrev = $row['programme'] ;
			$country = $row['country'] ;
			$denomination = $row['denomination'] ;

			if ($country != 'Nigeria')
			{if ($abbrev =='mabsnt' || 'mabsot' || 'mace' || 'mactpp' || 'maep' || 'mapt' || 'mapbc' || 'pgdps'){$credithour = 5100;}
		 elseif ($abbrev == 'bacrs' || 'baecrs' || 'batm' || 'batp' || 'bats'){$credithour = 3850;}
		 elseif ($abbrev == 'dt'){$credithour = 3650;}
		 elseif ($abbrev == 'cbwi' || 'ctpm'){$credithour = 3500;}
		 elseif ($abbrev == 'bep'){$credithour = 2500;}
		 else{$credithour = 8000;}
			}elseif($denomination != 'ECWA')
			{if ($abbrev =='mabsnt' || 'mabsot' || 'mace' || 'mactpp' || 'maep' || 'mapt' || 'mapbc' || 'pgdps'){$credithour = 4600;}
		 elseif ($abbrev == 'bacrs' || 'baecrs' || 'batm' || 'batp' || 'bats'){$credithour = 3750;}
		 elseif ($abbrev == 'dt'){$credithour = 3550;}
		 elseif ($abbrev == 'cbwi' || 'ctpm'){$credithour = 3350;}
		 elseif ($abbrev == 'bep'){$credithour = 2300;}
		 else{$credithour = 8000;}

			}else //ECWA members
			{if ($abbrev =='mabsnt' || 'mabsot' || 'mace' || 'mactpp' || 'maep' || 'mapt' || 'mapbc' || 'pgdps'){$credithour = 4000;}
		 elseif ($abbrev == 'bacrs' || 'baecrs' || 'batm' || 'batp' || 'bats'){$credithour = 3200;}
		 elseif ($abbrev == 'dt'){$credithour = 3000;}
		 elseif ($abbrev == 'cbwi' || 'ctpm'){$credithour = 2800;}
		 elseif ($abbrev == 'bep'){$credithour = 1800;}
		 else{$credithour = 8000;}

			};




	}
	if(ISSET($_SESSION['sn'])){
		$addnum = $_SESSION['addnu'];

	$result = $db->query("SELECT * FROM referee WHERE addnum='$addnum'") ;
    $ref = $result->fetch_array(MYSQLI_ASSOC) ;
	//$ref = array_values($ref);
	}
	if(ISSET($_SESSION['email'])){
	$email = $_SESSION['email'];
	$result = $db->query("SELECT * FROM faculty WHERE email='$email'") ;
    $rw = $result->fetch_array(MYSQLI_BOTH) ;
	$id = $rw['id'];}
	}else{header ("location:index.php");}





?>
