
<?php
include('cert.php');

$initials='SIS'; $semester='2'; $period='regular'; $year='2019';

		$alle = array( $semester,$period,$year);
		$alli = array($initials, $semester,$period,$year);
		
	//print_r($alli);
	//echo '</br>';
	
	$courses = $db->query("SELECT `allocated` FROM `courses` WHERE `id` = '$cid' AND `allocated` != ''") ;
	if($courses->num_rows){
		$fet=mysqli_fetch_array($courses);
		$fetched=$fet['allocated'];
		$fetched = explode (".",$fetched);
		
		//print_r($fetched);
																								
			foreach($fetched as $fetcher){
				$fetcher = explode (",", $fetcher);
				if($alli === $fetcher){
					$result = 'found';
				}else{
					$result = 'notfound';
				}
				
			}
			if($result =- 'notfound'){
				die('<font color="red">Please specify a course allocated to you<font/>')
			}else{
				if(!ISSET($_SESSION)){SESSION_START();}
				$_SESSION['cid']=$cid;
				$_SESSION['initials'] = $initials;
				$_SESSION['semester'] = $semester;
				$_SESSION['period'] = $year;
		
				header ("location: grading.php");
				
	}}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
/*			
			
				//$fetcher = implode (",", $fetcher);
				echo '<h1></br>';
				print_r($fetcher);
				echo '</h1></br>';
				
				
				print_r($alle);
				if($alle == $fetcher)
				{
					$key=$sn;
					echo '<h1>'.$key.'</h1>' ;
				}
				
				// $sn++;
			}
			//if($sn == true){unset($fetched[$key]);}
			
			
			array_unshift($fetched, $alli);
			
	
			
			
			echo '</br>';
			$fetched = join(".", $fetched);
			print_r($fetched);
			echo '</br>';
	}
		

	

/*
$allo=array($madrid=array('hames','rodri','hazard'), $inter=array('rony','camba','meta'));
$just = array($allo[0]);
echo print_r($allo[0]) ;

*/


/*
$first = array('p', 'h', 'w');
$second = array('p', 'r', 'b');
$third = array('t', 'r', 'd');
$a = array($first,$second ,$third);

if ($key=in_array(array('p', 'h', 's'), $a)) {
    echo "'phw' was found\n".$key;
}

echo '</br>' ;

$slow = array('apple', 'banana', 'orange');

if (in_array('banana', $slow)){
    print('Found it!');
}

if ('p' == $first[0]){
	echo '</br>First</br>';
}


$stack = array("orange", "banana", "apple", "raspberry");
array_pop($stack);
print_r($stack);

*/
?>