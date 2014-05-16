<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    
    <style>
		div#container {
			width:1000px;
			margin:auto;
		}
	</style>
</head>

<body>

<div id="container">

    <ul class="nav nav-tabs">
    	<li class="active"><a href="#register" data-toggle="tab">Register</a></li>
        <li><a href="#home" data-toggle="tab">Actions</a></li>
        <li><a href="#profile" data-toggle="tab">Report</a></li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
    	<div class="tab-pane active" id="register">
            <div class="panel panel-default">
            	<div class="panel-body">
                	
                    <ul class="nav nav-tabs nav-pills">
                        <li class="active"><a href="#user" data-toggle="tab">User</a></li>
                        <li><a href="#admin" data-toggle="tab">Admin</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="user">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                	<h1>Register User</h1>
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                    
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="user_name">Username</label>
                                            <input type="text" name="DHS_user_name" class="form-control" id="user_name" placeholder="UserName">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="Password">Password</label>
                                            <input type="text" name="DHS_password" class="form-control" id="Password" placeholder="Password">
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
                                        
                                            <input type="hidden" name="form_id" value="1">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                          	</div>
                     	</div>
                        
                        <div class="tab-pane" id="admin">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                	<h1>Register Admin</h1>
                   
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                    
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
                                        
                                            <input type="hidden" name="form_id" value="2">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                          	</div>
                     	</div>
                 	</div>
                    
                </div>
          	</div>
      	</div>
        <div class="tab-pane" id="home">
            <div class="panel panel-default">
                <div class="panel-body">
                    <!-- Nav tabs -->
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
                                        <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                            <div class="form-group">
                                                <label for="summary_of_allegation">Summary of Allegation</label>
                                                <textarea name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="names_of_offenders">Names of Offenders</label>
                                                <input name="DHS_names_of_offenders" type="text" class="form-control" id="names_of_offenders" placeholder="Names of Offenders">
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
                                                <textarea name="DHS_other" class="form-control" id="other" rows="3"></textarea>
                                            </div>
                                            <input type="hidden" name="form_id" value="3">
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </form>
                                    </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-abuse">
                            <fieldset>
                            <legend>Report Fraud, Waste, Abuse</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                            <textarea name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" rows="3"></textarea>
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
                                            <textarea name="DHS_other" class="form-control" id="other" rows="3"></textarea>
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                        <div class="form-group">
                                            <label for="summarize_event">Summarize event</label>
                                            <textarea name="DHS_summarize_event" class="form-control" id="summarize_event" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="DHS_location" class="form-control" id="location" placeholder="Location">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="other">Other applicable data</label>
                                            <textarea name="DHS_other" class="form-control" id="other" rows="3"></textarea>
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                        <div class="form-group">
                                            <label for="summarize_events">Summarize event</label>
                                            <textarea name="DHS_summarize_events" class="form-control" id="summarize_events" rows="3"></textarea>
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                <legend>Immigration Case Manager</legend>
                                <div class="form-group">
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                        <div class="form-group">
                                            <label for="type_of_complaint">Type of complaint</label>
                                            <select name="DHS_type_of_complaint" class="form-control" id="type_of_complaint">
                                                <option>Religion</option>
                                                <option>Race</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
                                            <textarea name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" rows="3"></textarea>
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
                                            <textarea name="DHS_other" class="form-control" id="other" rows="3"></textarea>
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
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
                                    <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                        <div class="form-group">
                                            <label for="type_of_complaint">Type of complaint</label>
                                            <select name="DHS_type_of_complaint" class="form-control" id="type_of_complaint">
                                                <option>Malware</option>
                                                <option>Identity Theft</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
                                            <textarea name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" rows="3"></textarea>
                                        </div>
                                        <input type="hidden" name="form_id" value="13">
                                        <button type="submit" class="btn btn-default pull-right">Submit</button>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="profile">
            <div class="panel panel-default">
                <div class="panel-body">
                
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="tab" href="#feedback2">Feedback</a></li>
                        <li><a data-toggle="tab" href="#report-abuse2">Report Fraud, Waste, Abuse</a></li>
                        <li><a data-toggle="tab" href="#report-acitivity2">Report Suspicious Activity</a></li>
                        <li><a data-toggle="tab" href="#civil-complaints2">Civil Rights Complaints</a></li>
                        <li><a data-toggle="tab" href="#greencard2">Apply for a greencard</a></li>
                        <li><a data-toggle="tab" href="#immigaration-case-manager2">Immigration Case Manager</a></li>
                        <li><a data-toggle="tab" href="#visa2">Apply/Manage Visa</a></li>
                        <li><a data-toggle="tab" href="#passport2">Apply/Manage Passport</a></li>
                        <li><a data-toggle="tab" href="#file-travel2">Report Travel Complaint</a></li>
                        <li><a data-toggle="tab" href="#freedom-act2">Submit Freedon of Information Act Request</a></li>
                        <li><a data-toggle="tab" href="#report-incident2">Report Cyber Incidents</a></li>
                    </ul>
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="feedback2">
                            <fieldset>
                                <legend>Provide Feedback</legend>
                                    <div class="form-group">
                                        <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Summary of Allegation</label>
                                                <p>DHS is corrupted and needs to be disbanded. Can you guys also stop looking at my text?</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Names of Offenders</label>
                                                <span>
                                                	Carlos Mendoza
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Victums</label>
                                                <span>
                                                	Carlos Mendoza
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Witnesses</label>
                                                <span>
                                                	Carlos Mendoza
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Other applicable data</label>
                                                <p>My phone was doing weird noises I know it was you guys!</p>
                                            </div>
                                            <div class="well clearfix">
                                            	<textarea class="form-control" rows="3"></textarea>
                                                <br />
                                            	<button type="submit" class="btn btn-default pull-right">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-abuse2">
                            <fieldset>
                            <legend>Report Fraud, Waste, Abuse</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="type_of_allegation">Type of Allegation</label>
                                            <span>Waste</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="summary_of_allegation">Summary of Allegation</label>
                                            <p>I saw people dumping toxic oose into the lake!</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Names of Offenders</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Victums</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Witnesses</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Other applicable data</label>
                                            <p>They had a red truck and lot of barrels.</p>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-acitivity2">
                            <fieldset>
                            <legend>Report Suspicious Activity</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Summarize event</label>
                                            <p>There was a guy who looked very suspiciius at the baseball game.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Location</label>
                                            <span>AT&T Park</span>
                                        </div>
    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Other applicable data</label>
                                            <p>He was wearing a red cap and blue shirt. Get him!</p>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="civil-complaints2">
                            <fieldset>
                                <legend>Civil Rights Complaints</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Summarize event</label>
                                            <p>A police officer abused me by hitting me with his night stick.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Location</label>
                                            <span>Hayward BART</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="greencard2">
                            <fieldset>
                            <legend>Apply for a greencard</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of greencard</label>
                                            <span>Apply</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <span>Under review</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="immigaration-case-manager2">
                            <fieldset>
                                <legend>Immigration Case Manager</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of greencard</label>
                                            <span>Apply</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Case Status</label>
                                            <span>Under review</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="visa2">
                            <fieldset>
                                <legend>Apply/Manage Visa</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Visa Status</label>
                                            <span>In the mail</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="passport2">
                            <fieldset>
                                <legend>Immigration Case Manager</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Case Status</label>
                                            <span>Under review</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of Case</label>
                                            <span>Immigration benefits</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="file-travel2">
                            <fieldset>
                            <legend>Report Travel Complaint</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of complaint</label>
                                            <span>Race</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Summary of Allegation</label>
                                            <p>The clippers owner did not allow me to enter the venue.</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Names of Offenders</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Offenders</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Victims</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Witnesses</label>
                                            <span>Carlos Mendoza</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Other applicable data</label>
                                            <p>I am never going tback again. I can't believe this happened.</p>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="freedom-act2">
                            <fieldset>
                                <legend>Submit Freedon of Information Act Request</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Document Name</label>
                                            <span>9/11 twin tower rubble rubric</span>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane" id="report-incident2">
                            <fieldset>
                            <legend>Report Cyber Incidents</legend>
                                <div class="form-group">
                                    <form role="form" class="" method="post" action="<?=base_url()?>/cases">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type of complaint</label>
                                            <span>Identity Theft</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Summary of Allegation</label>
                                            <p>Some people hacked all my accounts becuase of the heart bleed bug.</p>
                                        </div>
                                        <div class="well clearfix">
                                            <textarea class="form-control" rows="3"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-default pull-right">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
</div>
	<script>
	
		//$('.tab-content').find('.tab-pane').addClass('active');
		
	</script>
</body>
</html>
