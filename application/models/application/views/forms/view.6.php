<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="civil-complaints">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Civil Rights Complaints</legend>
    <div class="form-group">
        <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
            <? 
				$this->load->view('forms/threat.php', $case);
				?>
            <div class="form-group">
                <label for="summarize_events">Summarize event</label>
                <p><?=$case->DHS_summarize_events?></p>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <p><?=$case->DHS_location?></p>
            </div>
        </form>
    </div>
</fieldset>
</div>