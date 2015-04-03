<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="report-acitivity">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Report Suspicious Activity</legend>
        <div class="form-group">
            <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
                <? 
				$this->load->view('forms/threat.php', $case);
				?>
                <div class="form-group">
                    <label for="summarize_event">Summarize event</label>
                    <p><?=$case->DHS_summarize_event?></p>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <p><?=$case->DHS_location?></p>
                </div>

                <div class="form-group">
                    <label for="other">Other applicable data</label>
                    <p><?=$case->DHS_other3?></p>
                </div>

            </form>
        </div>
    </fieldset>
</div>