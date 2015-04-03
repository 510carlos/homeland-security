<?
if($this->user->admin==1):
?>
<div class="radio">
    <h4>Threat Level <span class="glyphicon glyphicon-exclamation-sign"></span></h4>
    <div class="row">
        <label class="radio control-label">
            <input type="radio" name="level" value="1" <?=($case->threat=="1")?'checked="checked"':''?>> Level 1
        </label><br />
        <label class="radio control-label">
            <input type="radio" name="level" value="2" <?=($case->threat=="2")?'checked="checked"':''?>> Level 2
        </label><br />
        <label class="radio control-label">
            <input type="radio" name="level" value="3" <?=($case->threat=="3")?'checked="checked"':''?>> Level 3
        </label><br />
        <label class="radio control-label">
            <input type="radio" name="level" value="4" <?=($case->threat=="4")?'checked="checked"':''?>> Level 4
        </label><br />
        <label class="radio control-label">
            <input type="radio" name="level" value="5" <?=($case->threat=="5")?'checked="checked"':''?>> Level 5
        </label>

    </div>
    <input type="submit" class="btn btn-primary" value="Update Level" />
</div>
<? endif; ?>
