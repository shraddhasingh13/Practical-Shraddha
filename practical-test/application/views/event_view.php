<!DOCTYPE html>
<html>

<head>
<title>Event View</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
	body{
		font-family: Verdana;
	}
</style>

</head>
    <body>
    <section class="container">

<div class="row">
		<div class="col-md-12">
	     		 <h4> Event Detail</h4>
	     	</div>
		<div class="col-md-12 table-responsive">
		<table class="table table-striped">
		<thead>
			<tr>
				<th>S. NO.</th>
				<th>Start Date</th>
				<th>Day Name</th>
			</tr>
			</thead>
			</tbody>
				<?php $i=1; foreach ($event_list_data as $value) {?>
			<tr>
			<td><?= $i?></td>
			<td><?= $value->start_date?></td>
			<td><?= $value->event_day?></td>
			
			</tr>
				<?php $i++;} ?>
				</tbody>
				<tr>
					<td colspan="3"><a href="<?= base_url()?>" class="btn btn-sm btn-primary">Back</a></td>
				</tr>
		</table>
 				
		</div>
	    

</div>
</section>
</body>	
</html>