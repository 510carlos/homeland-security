<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="report-incident">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Report Cyber Incidents</legend>
        <div class="form-group">
            <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
                
                <? 
				$this->load->view('forms/threat.php', $case);
				?>
                
                <div class="form-group">
                    <label for="type_of_complaint">Type of complaint</label>
                    <p><?=$case->DHS_type_of_complaint?></p>
                </div>
                <div class="form-group">
                    <label for="summary_of_allegation">Summary of Allegation</label>
                    <p><?=$case->DHS_summary_of_allegation?></p>
                </div>
                <input type="hidden" name="form_id" value="13">
            </form>
        </div>
    </fieldset>
</div>

