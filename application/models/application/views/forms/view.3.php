<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="feedback">
	<a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
        <legend>Provide Feedback</legend>
            <div class="form-group">
                <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
                	<? 
				$this->load->view('forms/threat.php', $case);
				?>
                    <div class="form-group">
                        <label for="summary_of_allegation">Feedback</label>
                        <p><?=$case->DHS_feedback?></p>
                    </div>
                    <div class="form-group">
                        <label for="other">Other applicable data</label>
                        <p><?=$case->DHS_other1?></p>
                    </div>
                </form>
            </div>
    </fieldset>
</div>
