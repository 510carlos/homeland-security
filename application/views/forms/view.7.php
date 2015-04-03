<style>
	.radio { 
		display:block;
	}
</style>
<div class="tab-pane active" id="greencard">
 <a href="<?=base_url()?>cases/all"><< Go back to list</a>
    <fieldset>
    <legend>Apply for a greencard</legend>
        <div class="form-group">
            <form role="form" method="post" action="<?=base_url()?>cases/view/<?=$case->caseid?>">
                <? 
				$this->load->view('forms/threat.php', $case);
				?>
                <div class="form-group">
                    <label for="apply_for_a_greencard">Type of greencard</label>
                    <p><?=$case->DHS_apply_for_a_greencard?></p>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <p><?=$case->DHS_status?></p>
                </div>
            </form>
        </div>
    </fieldset>
</div>