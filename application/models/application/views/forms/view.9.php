<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="visa">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Apply/Manage Visa</legend>
    <div class="form-group">
        <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
            <? 
				$this->load->view('forms/threat.php', $case);
				?>
            <div class="form-group">
                <label for="visa_status">Visa Status</label>
                <p><?=$case->DHS_visa_status?></p>
            </div>
        </form>
    </div>
</fieldset>
</div>