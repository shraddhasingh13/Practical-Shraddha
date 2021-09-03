<!DOCTYPE html>
<html>

<head>
<title>Event Page</title>
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
<script>
$(document).ready(function(){
	$("#daytype").change(function(){
		var selected = $(this).val();
		if (selected == 'Week') {
			$('#repeat_on').show();
			// $('.radio').attr('required','true');
		} else {
			$('#repeat_on').hide();
			$('.radio').removeAttr('required');
		}
	});
	$(".end-radio").click(function(){
		var endtype = $(this).val();
		if(endtype == 'On') {
			$('#end_type_date_div').show();
			$('#end_date').attr('required','true');
			$('#end_type_occurences_div').hide();
			$('#end_occurence_day').removeAttr('required');
		} else {
			$('#end_type_date_div').hide();
			$('#end_date').removeAttr('required');
			$('#end_type_occurences_div').show();
			$('#end_occurence_day').attr('required','true');
		}
	});
});
</script>

</head>
    <body>
    <section class="container">
<form action="<?= base_url('event_submit')?>" method="post" class="form-horizontal">
     <div class="row">
	     	<div class="col-md-12">
	     		    <h4>Add Event</h4>
	     	</div>
	     	<div class="col-md-6">
     		<div class="form-group">
     		  <lebel for="title"> Event Title:</lebel>
     		  <input id="title" type="text" name="event_title" placeholder="Type event title here" class="form-control" required="">
     		</div>
     	   </div>
     	   	<div class="col-md-6">
     		 <div class="form-group">
     		   <lebel for="startdate"> Event Start Date:</lebel>
     		   <input id="startdate" type="date" name="start_date" class="form-control" required="">
     		</div>
     	   </div>
     	   	<div class="col-md-6">
     		 <div class="form-group">
     		   <lebel for="Recurrence"> Recurrence (Repeat Every):</lebel>
     		   <input id="Recurrence" type="number" value="1" min="1" name="repeat_every" class="form-control" required="">
     		 </div>
     	   </div>
     	   <div class="col-md-6">
     		 <div class="form-group">
     		   <lebel for="daytype"> Select Type:</lebel>
	     		   <select class="form-control" name="repeat_type"  id="daytype" required="">
	     		       <option value="Day">Day</option>
	     		       <option value="Week">Week</option>
	     		       <option value="Month">Month</option>
	     		       <option value="Year">Year</option>
	     		   </select>
     		 </div>
     	   </div>
     	    <div class="col-md-6" id="repeat_on" style="display: none;">
     		 <div class="form-group">
     		        <label for="Radiobutton2">
						Repeat on
					</label><br>
					<div class="row">
						<div class="container">
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Sunday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Sunday</label>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Monday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Monday</label>
							</div>

							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Tuesday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Tuesday</label>
							</div>

							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Wednesday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Wednesday</label>
							</div>

							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Thursday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Thursday</label>
							</div>

							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Friday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Friday</label>
							</div>

							<div class="clearfix"></div>
							<div class="col-md-1">
								<input type="checkbox" class="radio" value="Saturday" name="week_day[]" />
							</div>
							<div class="col-md-11">
								<label>Saturday</label>
							</div>
						</div>
					</div>
					
     		 </div>
     	   </div>
     	   <div class="col-md-6">
     		 <div class="form-group">
     		      <lebel for="end">Event End:</lebel>
     		      <input  type="radio" value="On" id="on_type" name="end_type" class="end-radio" required="" />
     		      <label for="on_type">On</label>
     		      <input type="radio" value="After" id="after_type"  name="end_type" class="end-radio" required="" />
     		      <label for="after_type">After</label>
     		 </div>
     	   </div>
     	   <div class="col-md-6" id="end_type_date_div" style="display:none;">
     		 <div class="form-group">
     		   <lebel for="end_date">Event End Date:</lebel>
     		   <input id="end_date" type="date" name="end_date" placeholder="Event End Date" class="form-control" />
     		</div>
     	   </div>
     	   <div class="col-md-6" id="end_type_occurences_div" style="display:none;">
     		 <div class="form-group">
     		   <lebel for="Occurence">Occurence:</lebel>
     		   <input id="Occurence" type="number" min="1" name="end_occurence_day" placeholder="Enter number of occurence" class="form-control" />
     		</div>
     	   </div>
     	     <div class="col-md-6">
     		 <div class="form-group">
     		 <button type="submit" class="btn btn-md btn-primary">Submit</button>
     	    </div>
     	</div>
     	   <div class="col-md-12">
     	   <span><b class="text-danger"><?= ($this->session->flashdata('msg')) ? $this->session->flashdata('msg') : ''?></b></span>
     	</div>
     </div>
</form>

<div class="row">
		<div class="col-md-12">
	     		 <h4> Event List</h4>
	     	</div>
		<div class="col-md-12 table-responsive">
		<table class="table table-striped">
		<thead>
			<tr>
				<th>S. NO.</th>
				<th>Event Title</th>
				<th>Start Date</th>
				<th>Action</th>
			</tr>
			</thead>
			</tbody>
				<?php $i=1; foreach ($event_list_data as $value) {?>
			<tr>
			<td><?= $i?></td>
			<td><?= $value->event_title?></td>
			<td><?= $value->event_start_date?></td>
			<td>
			<a href="<?= base_url('event-
			view/'.$value->event_id)?>" class="btn btn-sm btn-success">View</a>
			<a href="<?= base_url('event-
			delete/'.$value->event_id)?>" class="btn btn-sm btn-danger" onclick="confirm('Are you sure you want to delete this event.')">Delete</a>
			
			</td>

			</tr>
				<?php $i++;} ?>
				</tbody>
		</table>
 				
		</div>
	    

</div>
</section>
</body>	
</html>