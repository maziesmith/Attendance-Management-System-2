<?php
    $type='';
   session_start();
   $connection=mysql_connect("localhost","root","");
   $db = mysql_select_db("attendance",$connection);
   
   //storing session
     $user_check = $_SESSION['login_user'];
	 $user_name=$_SESSION['login_name'];
	 $type=$_SESSION['login_stdid'];
//sql query
    $ses_sql = mysql_query("select id,Name,type from faculty where id='$user_check'",$connection);
  $row = mysql_fetch_assoc($ses_sql);
  $login_session =$row['id'];
  $login_name=$row['Name'];
  $type=$row['type'];
  if(!isset($login_session))
  {
	  mysql_close($connection);
	  header('location:login.php');
  }
  if($type!='')
  {
	$sql = mysql_query("select stdid,Namee from studentdetails where Stdid='$type'",$connection);
  $row = mysql_fetch_assoc($sql);
  $login_session =$row['stdid'];
  $login_name=$row['Name'];
  if(!isset($login_session))
  {
	  mysql_close($connection);
	  header('location:login.php');
  }
   	
  }
  else
  {
  }






















?>