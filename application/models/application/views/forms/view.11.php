<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="file-travel">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Report Travel Complaint</legend>
        <div class="form-group">
            <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
               <? if($this->user->admin == 1): ?>
                	<? 
				$this->load->view('forms/threat.php', $case);
				?>
                <? endif; ?>
                <div class="form-group">
                    <label for="type_of_complaint">Type of complaint</label>
                    <p><?=$case->DHS_type_of_complaint?></p>
                </div>
                <div class="form-group">
                    <label for="summary_of_allegation">Summary of Allegation</label>
                    <p><?=$case->DHS_summary_of_allegation?></p>
                    <textarea name="DHS_summary_of_allegation" class="form-control" id="summary_of_allegation" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for=">names_of_offenders">Names of Offenders</label>
                    <p><?=$case->DHS_names_of_offenders?></p>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Victims</label>
                    <p><?=$case->DHS_victims?></p>
                </div>
                <div class="form-group">
                    <label for="witnesses">Witnesses</label>
                    <p><?=$case->DHS_witnesses?></p>
                </div>
                <div class="form-group">
                    <label for="other">Other applicable data</label>
                     <p><?=$case->DHS_other4?></p>
                </div>

            </form>
        </div>
    </fieldset>
</div>