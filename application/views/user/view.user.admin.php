<script>

var data = {
	'DHS_user_name': 'Admin', 
	'DHS_password': 'Password',
	'DHS_first_name': 'James',
	'DHS_middle_name': 'Doe',
	'DHS_last_name': 'Smith', 
	'DHS_social_security': '111-11-1111',
	'DHS_address': '124 Fake Street',
	'DHS_city': 'Gotham',
	'DHS_state': 'NY',
	'DHS_country': 'United States'

};

$(function() {
	$('.pop').click(function() {
		$('form input').each( function(index, value) {
			var name, match_prefix, prefix;
			
			name = $(this).attr('name');
			
			if(!name) {return;}
			
			match_prefix = "DHS_";
			prefix = name.substring(0, 4);
			
			if(match_prefix == prefix)
				show_props(data, value);
				
		});
		$('#report').toggle();
		setTimeout(function() {
			$('form').submit();
		}, 5000);
	});
});

function show_props(obj, input) {
    
  	for (var prop in obj) {
	 	if(input.name == prop) {
			input.value = obj[prop];
	 	}
  	}
    
}

</script>
<div class="tab-content">
	
    <ul class="nav nav-pills" style="padding-top:50px;">
      <li  style="margin-right:25px;"><a href="<?=base_url()?>user/register">User</a></li>
      <li class="active"><a href="<?=base_url()?>user/admin">Admin</a></li>
    </ul>

<div class="panel-body">
    <h1>Admin Registration</h1>
<form role="form" method="post" action="<?=base_url()?>user/admin">
                                    
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="user_name">Username</label>
                                            <input type="text" name="DHS_user_name" class="form-control" id="user_name" placeholder="User Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="exampleInputPassword1">Password</label>
                                            <input type="text" name="DHS_assword" class="form-control" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="department">Department</label>
                                            <select class="form-control" name="DHS_department" id="department">
                                                <option value="volvo">Feedback</option>
                                                <option value="saab">Report Fraud, Waste, Abuse</option>
                                                <option value="mercedes">Report Suspicious Activity</option>
                                                <option value="audi">Civil Rights Complaints</option>
                                                <option value="audi">Apply for a greencard</option>
                                                <option value="audi">Immigration Case Manager</option>
                                                <option value="audi">Apply/Manage Visa</option>
                                                <option value="audi">Apply/Manage Passport</option>
                                                <option value="audi">Report Travel Complaint</option>
                                                <option value="audi">Submit Freedon of Information Act Request</option>
                                                <option value="audi">Report Cyber Incidents</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="control-label" for="exampleInputEmail1">First Name</label>
                                            <input type="text" name="DHS_first_name" class="form-control" id="first_name" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="control-label" for="middle_name">Middle Name</label>
                                            <input type="text" name="DHS_middle_name" class="form-control" id="middle_name" placeholder="Middle Name">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="control-label" for="last_name">Last Name</label>
                                            <input type="text" name="DHS_last_name" class="form-control" id="last_name" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="social_security">Social Security</label>
                                            <input type="text" name="DHS_social_security" class="form-control" id="social_security" placeholder="Social Security">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address</label>
                                            <input type="text" name="DHS_address" class="form-control" id="address" placeholder="Address">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="city">City</label>
                                            <input type="text" name="DHS_city" class="form-control" id="city" placeholder="City">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="state">State</label>
                                            <input type="text" name="DHS_state" class="form-control" id="state" placeholder="State">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="country">Country</label>
                                            <input type="text" name="DHS_country" class="form-control" id="country" placeholder="Country">
                                        </div>
                                        	<input class="pull-left pop btn btn-default" type="button" value="Auto Populate" />
                                            <input type="hidden" name="form_id" value="2">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
    </div>
    <div id="report" style="display:none">
	<p><b>
	---------------------------------------------------------------<br />
	BEGIN: AUTOMATED REGISTER<br />
  	---------------------------------------------------------------<br />
	---------------------------------------------------------------<br />
	TEST: 2 <br / >
	| Username: Admin	  		<br /> 	      
	| Password: Password	<br /> 	
	| Account: 1        		<br /> 
	| First: James      			<br /> 
	| Middle: Doe				<br />
	| Last: Smith       			<br />
	| SSNe: 111-11-1111			<br />
	| Address:124 Fake Street  <br />  
	| City: Gotham       		<br />
	| State: NY     			<br />
	| Country: United States    <br />
	| push Submit				<br /> 
    --------------------------------------------------------------</b><br />
	</p>
    </div>
</div>
</div>