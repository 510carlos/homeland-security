<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="immigaration-case-manager">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Immigration Case Manager</legend>
    <div class="form-group">
        <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
            <? 
				$this->load->view('forms/threat.php', $case);
				?>
            <div class="form-group">
                <label for="type_of_greencard">Type of greencard</label>
                <p><?=$case->DHS_type_of_greencard?></p>
            </div>
            <div class="form-group">
                <label for="case_status">Case Status</label>
                <p><?=$case->DHS_case_status?></p>
            </div>
        </form>
    </div>
</fieldset>
</div>