<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#repeatEvery").change(function(){
		var selected = $(this).val();
		if (selected == '2') {
			$('#repeat_on').show();
		} else {
			$('#repeat_on').hide();
		}
	});
});
</script>
</head>
    <body>
        <table id="TABLE1" language="javascript"  >
		<tr>
	<td colspan="2">
		<strong>Add Event Page</strong>
	</td>
</tr>
			<tr>
	<td>
		 Event Title:
	</td>
	<td>
		 [Text Control]
	</td>
</tr>
            <tr>
                <td>
                    Start Date:   
                </td>
                <td>
                   [Calendar Control]
                </td>
            </tr>
			<tr>
                <td>
                    
                </td>
                <td>
                   
                </td>
            </tr>
            <tr>
                <td>Recurrence: 
                </td>
                <td>
                    <label for="Radiobutton2">
						<span style="font-size: 10pt; font-family: Verdana"><b>Repeat Every</b></span>
						<input type="number" name="number" value="1" size="10" style="width: 30px;">
						<select id="repeatEvery" class="textbox-medium" name="repeatEvery" tabindex="10">
							<option selected="selected" value="1">Day</option>
							<option value="2">Week</option>
							<option value="3">Month</option>
							<option value="4">Year</option>
						</select>
					</label>
                </td>
            </tr>
			<tr id="repeat_on" style="display:none;">
                <td> &nbsp;</td>
                <td>
                    <label for="Radiobutton2">
						<span style="font-size: 10pt; font-family: Verdana"><b>Repeat on</b></span>
					</label><br>
					<label>
						<input type="checkbox" class="radio" value="Sun" name="day[]" />Sunday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Mon" name="day[]" />Monday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Tue" name="day[]" />Tuesday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Wed" name="day[]" />Wednesday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Thu" name="day[]" />Thursday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Fri" name="day[]" />Friday</label><br>
					<label>
						<input type="checkbox" class="radio" value="Sat" name="day[]" />Saturday</label>
				</td>
            </tr>
			<tr>
                <td>
                
                </td>
			</tr>
			<tr>
                <td> &nbsp;</td>
                <td>
                    <label for="Radiobutton2">
						<span style="font-size: 10pt; font-family: Verdana"><b>Ends</b></span>
					</label>
					<br>
					<label>
						<input type="radio" class="radio" value="Sun" name="ends" />On</label>
						&nbsp;
						[Date - Calendar Control]
					<br>
					<label>
						<input type="radio" class="radio" value="Sun" name="ends" />After </label>
						<input type="number" name="number" value="1" size="10" style="width: 30px;"> Occurrences
				</td>
            </tr>
            
            <tr>
                <td>
                    
                </td>
                <td>
                   
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td><input type=button value="submit" />                   
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                   
                </td>
            </tr>
			
			<tr>
	<td colspan=2>
		<hr>
	</td>
</tr>
<tr>
	<td colspan="2">
		<strong>Event List Page</strong>
	</td>
</tr>
<tr>
	<td colspan="2">
		<table>
		<tr>
			<td width="20">
				<strong>#</strong>
			</td>
			<td width="150">
				<strong>Title</strong>
			</td>
			<td width="250">
				<strong>Start Date</strong>
			</td>
			<td width="200">
				<strong>Actions</strong>
			</td>
		</tr>
		<tr>
			<td>
				1
			</td>
			<td>
				Event 1
			</td>
			<td>
				2018-01-01
			</td>
			<td>
				<button>View</button>
				<button>Delete</button>
			</td>
		</tr>
		<tr>
			<td>
				2
			</td>
			<td>
				Event 2
			</td>
			<td>
				2018-04-25
			</td>
			<td>
				<button>View</button>
				<button>Delete</button>
			</td>
		</tr>
		<tr>
			<td>
				3
			</td>
			<td>
				Event 3
			</td>
			<td>
				2020-11-01
			</td>
			<td>
				<button>View</button>
				<button>Delete</button>
			</td>
		</tr>
		</table>
	</td>
</tr>
<tr>
	<td colspan=2>
		<hr>
	</td>
</tr>
<tr>
	<td colspan="2">
		<strong>Event View Page</strong>
	</td>
</tr>
			<tr>
                <td>
                    [Event Title]
                </td>
			</tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <table border=1>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date
                            </td>
                            <td style="width: 100px">
                                Day Name
                            </td>
                        </tr>
                    </table>
                    </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                   Total Recurrence Event: [Totla Event  Count]
                </td>
            </tr>
        </table>
    </body>
</html>