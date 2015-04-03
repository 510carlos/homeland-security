<script>
var data = {
	//feedback
	'DHS_feedback': 'I do not like the layout',
	'DHS_other1': 'this for other',
	//waste abuse fraud
	'DHS_type_of_allegation': 'Waste',
	'DHS_summary_of_allegation': 'There is an illegal dump near my house.',
	'DHS_names_of_offenders': 'Unknown',
	'DHS_victums': 'the earth',
	'DHS_witnesses': 'self',
	'DHS_other2': 'Other info',
	//suspicious activity
	'DHS_summarize_event': 'shady looking character outside my house',
	'DHS_location': '25800 carlos bee blvd hayward,ca 94542',
	'DHS_other3': 'Other info',
	//civil rights
	'DHS_summarize_events': 'somebody is violationg my rights',
	'DHS_location': '25800 carlos bee blvd',
	//greencard
	'DHS_apply_for_greencard': 'Apply',
	'DHS_status': 'Passports will take 2-3 months to process',
	//case manager
	'DHS_type_of_greencard': 'Replacement',
	'DHS_case_status': 'Passport will arrive in 20 business days',
	//visa
	'DHS_visa_status': 'visa is not ready yet',
	//immigration
	'DHS_type_of_greencard': 'Apply',
	'DHS_case_status': 'You are not legible for immigation',
	'DHS_type_of_case': 'Immigration',
	//travel
	'DHS_type_of_compolaint': 'Religion',
	'DHS_names_of_offenders': 'John Doe',
	'DHS_summary_of_allegation': 'He is violating my rights of worship',
	'DHS_victims': 'self',
	'DHS_witnesses': 'none',
	'DHS_other4': 'Other info',
	//information
	'DHS_document_name': 'project eagle',
	//cyber
	'DHS_type_of_complaint': 'Identity Theft',
	'DHS_summary_of_allegation': 'I believe that someone stole my identity',
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
		}, 300000);
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

				<div class="panel-body">
                    <!-- Nav tabs -->
					
					<div class="row">
						<div class="col-md-8">
							<dl class="dl-horizontal">
								<dt>Password: </dt>
								<dd><?=$user->DHS_password?></dd>
								<dt>First Name: </dt>
								<dd><?=$user->DHS_first_name?></dd>
								<dt>Middle Name: </dt>
								<dd><?=$user->DHS_middle_name?></dd>
								<dt>Last Name: </dt>
								<dd><?=$user->DHS_last_name?></dd>
								<dt>Social Security: </dt>
								<dd><?=$user->DHS_social_security?></dd>
								<dt>Address: </dt>
								<dd><?=$user->DHS_address?></dd>
								<dt>City: </dt>
								<dd><?=$user->DHS_city?></dd>
								<dt>Country: </dt>
								<dd><?=$user->DHS_country?></dd>
							</dl>
						</div>
						
						<div class="col-md-4">
							<span class="glyphicon glyphicon-user"></span> Logged In as: <?=$user->DHS_user_name?>
						</div>
					</div>
					
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="tab" href="#feedback">Feedback</a></li>
                        <li><a data-toggle="tab" href="#report-abuse">Report Fraud, Waste, Abuse</a></li>
                        <li><a data-toggle="tab" href="#report-acitivity">Report Suspicious Activity</a></li>
                        <li><a data-toggle="tab" href="#civil-complaints">Civil Rights Complaints</a></li>
                        <li><a data-toggle="tab" href="#greencard">Apply for a greencard</a></li>
                        <li><a data-toggle="tab" href="#immigaration-case-manager">Immigration Case Manager</a></li>
                        <li><a data-toggle="tab" href="#visa">Apply/Manage Visa</a></li>
                        <li><a data-toggle="tab" href="#passport">Apply/Manage Passport</a></li>
                        <li><a data-toggle="tab" href="#file-travel">Report Travel Complaint</a></li>
                        <li><a data-toggle="tab" href="#freedom-act">Submit Freedon of Information Act Request</a></li>
                        <li><a data-toggle="tab" href="#report-incident">Report Cyber Incidents</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="feedback">
                            <fieldset>
                                <legend>Provide Feedback</legend>
                                    <div class="form-group">
                                        <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                            <div class="form-group">
                                                <label for="feedback">Feedback</label>
												<input name="DHS_feedback" type="text" class="form-control" id="feedback" placeholder="feedback here...">
                                            </div>
                                            <div class="form-group">
                                                <label for="other">Other applicable data</label>
												<input type="text" name="DHS_other1" class="form-control" id="other" placeholder="Other data here...">
                                            </div>
                                            <input type="hidden" name="form_id" value="3">
                                            <input class="pull-left pop btn btn-default" type="button" value="Auto Populate" />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </form>
                                    </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-abuse">
                            <fieldset>
                            <legend>Report Fraud, Waste, Abuse</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="type_of_allegation">Type of Allegation</label>
                                            <select name="DHS_type_of_allegation" class="form-control" id="type_of_allegation">
                                                <option>Waste</option>
                                                <option>Abuse</option>
                                                <option>Report Fraud</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
											<input name="DHS_summary_of_allegation" type="text" class="form-control" id="summary_of_allegation" placeholder="allegation here...">
                                        </div>
                                        <div class="form-group">
                                            <label for="names_of_offenders">Names of Offenders</label>
                                            <input type="text" name="DHS_names_of_offenders" class="form-control" id="names_of_offenders" placeholder="Names of Offenders">
                                        </div>
                                        <div class="form-group">
                                            <label for="victums">Victums</label>
                                            <input type="text" name="DHS_victums" class="form-control" id="victums" placeholder="Victums">
                                        </div>
                                        <div class="form-group">
                                            <label for="witnesses">Witnesses</label>
                                            <input type="text" name="DHS_witnesses" class="form-control" id="witnesses" placeholder="Witnesses">
                                        </div>
                                        <div class="form-group">
                                            <label for="other">Other applicable data</label>
                                            <input type="text" name="DHS_other2" class="form-control" id="other" placeholder="Other data here...">
                                        </div>
                                        <input type="hidden" name="form_id" value="4">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-acitivity">
                            <fieldset>
                            <legend>Report Suspicious Activity</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="summarize_event">Summarize event</label>
											<input type="text" name="DHS_summarize_event" class="form-control" id="summarize_event" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="DHS_location" class="form-control" id="location" placeholder="Location">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="other">Other applicable data</label>
                                            <input type="text" name="DHS_other3" class="form-control" id="other" placeholder="Other data here...">
                                        </div>
                                        <input type="hidden" name="form_id" value="5">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="civil-complaints">
                            <fieldset>
                                <legend>Civil Rights Complaints</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="summarize_events">Summarize event</label>
                                            <input type="text" name="DHS_summarize_event" class="form-control" id="summarize_event" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="DHS_location" class="form-control" id="location" placeholder="Location">
                                        </div>
                                        <input type="hidden" name="form_id" value="6">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="greencard">
                            <fieldset>
                            <legend>Apply for a greencard</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="apply_for_a_greencard">Type of greencard</label>
                                            <select name="DHS_apply_for_a_greencard" class="form-control" id="apply_for_a_greencard">
                                                <option>Replacement</option>
                                                <option>Apply</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" name="DHS_status" class="form-control" id="status" placeholder="Status">
                                        </div>
                                        <input type="hidden" name="form_id" value="7">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="immigaration-case-manager">
                            <fieldset>
                                <legend>Immigration Case Manager</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="type_of_greencard">Type of greencard</label>
                                            <select name="DHS_type_of_greencard" class="form-control" id="type_of_greencard">
                                                <option>Replacement</option>
                                                <option>Apply</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="case_status">Case Status</label>
                                            <input type="text" name="DHS_case_status" class="form-control" id="case_status" placeholder="Case Status">
                                        </div>
                                        <input type="hidden" name="form_id" value="8">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="visa">
                            <fieldset>
                                <legend>Apply/Manage Visa</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="visa_status">Visa Status</label>
                                            <input type="text" name="DHS_visa_status" class="form-control" id="visa_status" placeholder="Visa">
                                        </div>
                                        <input type="hidden" name="form_id" value="9">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="passport">
                            <fieldset>
								<legend>Apply/Manage Passport</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="type_of_greencard">Type of greencard</label>
                                            <select name="DHS_type_of_greencard" class="form-control" id="type_of_greencard">
                                                <option>Replacement</option>
                                                <option>Apply</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="case_status">Case Status</label>
                                            <input type="text" name="DHS_case_status" class="form-control" id="case_status" placeholder="Case Status">
                                        </div>
                                        <div class="form-group">
                                            <label for="type_of_case">Type of Case</label>
                                            <input type="text" name="DHS_type_of_case" class="form-control" id="type_of_case" placeholder="Type of Case">
                                        </div>
                                        <input type="hidden" name="form_id" value="10">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="file-travel">
                            <fieldset>
                            <legend>Report Travel Complaint</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="type_of_complaint">Type of complaint</label>
                                            <select name="DHS_type_of_complaint" class="form-control" id="type_of_complaint">
                                                <option>Religion</option>
                                                <option>Race</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
											<input type="text" name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" placeholder="Allegation here...">
                                        </div>
                                        <div class="form-group">
                                            <label for=">names_of_offenders">Names of Offenders</label>
                                            <input type="text" name="DHS_names_of_offenders" class="form-control" id="names_of_offenders" placeholder="Names of Offenders">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Victims</label>
                                            <input type="text" name="DHS_victims" class="form-control" id="victims" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="witnesses">Witnesses</label>
                                            <input type="text" name="DHS_witnesses" class="form-control" id="witnesses" placeholder="Witnesses">
                                        </div>
                                        <div class="form-group">
                                            <label for="other">Other applicable data</label>
											<input type="text" name="DHS_other4" class="form-control" id="other" placeholder="Location">
                                        </div>
                                        <input type="hidden" name="form_id" value="11">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="freedom-act">
                            <fieldset>
                                <legend>Submit Freedon of Information Act Request</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="document_name">Document Name</label>
                                            <input type="text" name="DHS_document_name" class="form-control" id="document_name" placeholder="Document Name">
                                        </div>
                                        <input type="hidden" name="form_id" value="12">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-incident">
                            <fieldset>
                            <legend>Report Cyber Incidents</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>cases/user/<?=$user->userid?>">
                                        <div class="form-group">
                                            <label for="type_of_complaint">Type of complaint</label>
                                            <select name="DHS_type_of_complaint" class="form-control" id="type_of_complaint">
                                                <option>Malware</option>
                                                <option>Identity Theft</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
											<input name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation">
                                        </div>
                                        <input type="hidden" name="form_id" value="13">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                    </div>
    <div id="report" style="display:none">
	<p><b>
	---------------------------------------------------------------<br />
	BEGIN: AUTOMATED CASE SUBMISSION<br />
  	---------------------------------------------------------------<br />
	---------------------------------------------------------------<br />
	TEST: 3 <br / >
	| Feedback: I do not like the layout.<br />
	| Other: This for other.<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 4 <br / >
	| Type of Allegation: Waste<br />
	| Summary of Allegation: There is an illegal dump near my house.<br />
	| Nnames of Offenders': Unknown<br />
	| Victims: the earth<br />
	| Witnesses: self<br />
	| Other: Other info<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST:5 <br / >
	| Summarize Event: shady looking character outside my house.<br />
	| Location: 25800 carlos bee blvd hayward,ca 94542<br />
	| Other: Other info<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 6 <br / >
	| Summarize Events: somebody is violationg my rights<br />
	| Location: 25800 carlos bee blvd<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 7 <br / >
	| Apply for Greencard: Apply<br />
	| Status: Passports will take 2-3 months to process<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 8 <br / >
	| Type of Greencard: Replacement<br />
	| Case Status: Passport will arrive in 20 business days<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 9 <br / >
	| Visa Status: visa is not ready yet<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 10 <br / >
	| Type of Greencard: Apply<br />
	| Case Status: You are not legible for immigation<br />
	| Type of case: Immigration<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 11 <br / >
	| Type of Complaint: Religion<br />
	| Names of Offenders: John Doe<br />
	| Summary of Allegation': He is violating my rights of worship<br />
	| Victims: self<br />
	| Witnesses: 'none<br />
	| Other: Other info<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 12 <br / >
	| Document Name: project eagle<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	TEST: 13 <br / >
	| Type of Complaint: Identity Theft<br />
	| Summary of Allegation: I believe that someone stole my identity<br />
	| push Submit<br />
	---------------------------------------------------------------<br />
	</b>
	</p>
    </div>
                </div>