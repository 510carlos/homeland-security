<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script language="javascript" type="text/javascript" src="http://carlosemendoza.com/school/Software-Dev/homelandsecurity/jquery.populate.js"></script>
    
    <script>

	</script>
    <style>
		div#container {
			width:1000px;
			margin:auto;
		}
	</style>
</head>
<?
$userid = $this->input->cookie('userid');
if(!empty($userid))
	$userid = $userid;
else {
	$userid = '48';
	
	echo $this->input->cookie('userid');

}
?>
<body>

<div id="container">

    <ul class="nav nav-tabs">
    	<li><a href="<?=base_url()?>">Register</a></li>
        <li><a href="<?=base_url()?>cases/all">Actions</a></li>
        <li><a href="<?=base_url()?>cases/user/<?=$userid?>">Report</a></li>
    </ul>

<?
if (isset($formid))
	$this->load->view( 'forms/view.'. $formid .'.php' );
else if( isset($content) )
	$this->load->view( $view .'/view.'. $view .'.'. $content .'.php' );
else 
	$this->load->view( $view .'/view.'. $view .'.php' );
?>



</div>
	<script>
	
		//$('.tab-content').find('.tab-pane').addClass('active');
		
	</script>
</body>
</html>