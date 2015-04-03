<div class="tab-content">
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
	<div class="tab-pane active" id="feedback">
        <fieldset>
            <legend>Provide Feedback</legend>
                <div class="form-group">
                    <form role="form" method="post" action="<?=base_url()?>/cases/user/5">
                        <div class="form-group">
                            <label for="summary_of_allegation">Summary of Allegation</label>
							<p>
								<?=$case->DHS_summary_of_allegation?>
							</p>
                        </div>
                        <div class="form-group">
                            <label for="other">Other applicable data</label>
                            <p><?=$case->DHS_other?></p>
                        </div>
                    </form>
                </div>
        </fieldset>
    </div>
 </div>
 