<?php 
if (ISSET($_POST['save']))
{
if(!empty($_POST['school1']))
{$sn=1;
include ('demics.php');
};

if(!empty($_POST['school2']))
{$sn=2;
include ('demics.php');
};

if(!empty($_POST['school3']))
{$sn=3;
include ('demics.php');
};

if(!empty($_POST['school4']))
{$sn=4;
include ('demics.php');
};

if(!empty($_POST['school5']))
{$sn=5;
include ('demics.php');
};


header ("location: affiliations.php");


};





?>