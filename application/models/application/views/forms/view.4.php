<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane" id="report-abuse">
	<a href="<?=base_url()?>cases/all"><< Go back to list</a>
        <fieldset>
        <legend>Report Fraud, Waste, Abuse</legend>
            <div class="form-group">
                <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
                	<? 
				$this->load->view('forms/threat.php', $case);
				?>
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
						<?=$case->DHS_names_of_offenders?>
                    </div>
                    <div class="form-group">
                        <label for="victums">Victums</label>
						<?=$case->DHS_victums?>
                    </div>
                    <div class="form-group">
                        <label for="witnesses">Witnesses</label>
						<?=$case->DHS_witnesses?>
                    </div>
                    <div class="form-group">
                        <label for="other">Other applicable data</label>
						<?=$case->DHS_other2?>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>