<script>

var data = {
	'DHS_user_name': 'Anon', 
	'DHS_password': 'MadeUpPassword',
	'DHS_first_name': 'John',
	'DHS_middle_name': 'Smith',
	'DHS_last_name': 'Doe', 
	'DHS_social_security': '234-34-3456',
	'DHS_address': '1234 Fake Street',
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
      <li class="active" style="margin-right:25px;"><a href="<?=base_url()?>user/register">User</a></li>
      <li><a href="<?=base_url()?>user/admin">Admin</a></li>
    </ul>

<div class="panel-body">
    <h1>Register User</h1>
    <form role="form" method="post" action="<?=base_url()?>user">
    
        <div class="form-group col-md-6">
            <label class="control-label" for="user_name">Username</label>
            <input type="text" name="DHS_user_name" class="form-control" id="user_name" placeholder="UserName">
        </div>
        <div class="form-group col-md-6">
            <label class="control-label" for="Password">Password</label>
            <input type="password" name="DHS_password" class="form-control" id="Password" placeholder="Password">
        </div>
        <div class="form-group col-md-5">
            <label class="control-label" for="first_name">First Name</label>
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
            <input type="hidden" name="form_id" value="1">
        <button type="submit" class="btn btn-default pull-right">Submit</button>
    </form>
    </div>
    <div id="report" style="display:none">
	<p><b>
	---------------------------------------------------------------<br />
	BEGIN: AUTOMATED REGISTER<br />
  	---------------------------------------------------------------<br />
	---------------------------------------------------------------<br />
	TEST: 1 <br / >
	| Username: Anon	  		<br /> 	      
	| Password: MadeUpPassword	<br /> 	
	| push Submit				<br /> 
	| Account: 1        		<br /> 
	| First: John      			<br /> 
	| Middle: Smith				<br />
	| Last: Doe        			<br />
	| SSNe: 234-34-3456			<br />
	| Address:1234 Fake Street  <br />  
	| City: Gotham       		<br />
	| State: NY     			<br />
	| Country: United States    <br />
    --------------------------------------------------------------</b><br />
	</p>
    </div>
</div>
</div>