<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="freedom-act">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
<fieldset>
    <legend>Submit Freedon of Information Act Request</legend>
    <div class="form-group">
        <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
            <? 
				$this->load->view('forms/threat.php', $case);
				?>
            <div class="form-group">
                <label for="document_name">Document Name</label>
                <p><?=$case->DHS_document_name?></p>
            </div>
        </form>
    </div>
</fieldset>
</div>