<div class="tab-pane active" id="report-abuse">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
        <legend>Report Fraud, Waste, Abuse</legend>
            <div class="form-group">
                <form role="form" method="post" action="<?=base_url()?>index.php/cases">
                	<div class="radio">
						<h4>Threat Level <span class="glyphicon glyphicon-exclamation-sign"></span></h4>
                        <div class="row">
                        	<label class="radio control-label">
                            	<input type="radio" name="level" value="1"> Level 1
							</label><br />
                            <label class="radio control-label">
                            	<input type="radio" name="level" value="2"> Level 2
                            </label><br />
                            <label class="radio control-label">
                            	<input type="radio" name="level" value="3"> Level 3
                            </label><br />
                            <label class="radio control-label">
                            	<input type="radio" name="level" value="4"> Level 4
                            </label><br />
                            <label class="radio control-label">
                            	<input type="radio" name="level" value="5"> Level 5
                            </label>
 
                        </div>
                      	<input type="submit" class="btn btn-primary" value="Update Level" />
                    </div>
                    <div class="form-group">
                        <label for="type_of_allegation">Type of Allegation</label>
                        <p><?=$case->DHS_type_of_allegation?></p>
                    </div>
                    <div class="form-group">
                        <label for="summary_of_allegation">Summary of Allegation</label>
                        <?=$case->DHS_summary_of_allegation?>
                    </div>
                    <div class="form-group">
                        <label for="names_of_offenders">Names of Offenders</label>
                         <p><?=$case->DHS_names_of_offenders?></p>
                    </div>
                    <div class="form-group">
                        <label for="victums">Victums</label>
                        <p><?=$case->DHS_victums?></p>
                    </div>
                    <div class="form-group">
                        <label for="witnesses">Witnesses</label>
                        <p><?=$case->DHS_witnesses?></p>
                    </div>
                    <div class="form-group">
                        <label for="other">Other applicable data</label>
                        <p><?=$case->DHS_other?></p>
                    </div>
			    </form>
            </div>
        </fieldset>
    </div>