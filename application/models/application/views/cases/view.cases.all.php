<style>
	.level-1 { background:#F5F5F5; }
	.level-2 { background:#DFF0D8; }
	.level-3 { background:#D9EDF7; }
	.level-4 { background:#FCF8E3; }
	.level-5 { background:#F2DEDE; }
	ul li.row {
		border:1px solid grey;
	}
	ul {
		padding:0;
		margin:0;
		list-style:none;
	}
		ul.column li {
			float:left;
			padding:10px;
			padding-left:25px;
			padding-right:25px;
			border-left:1px solid grey;
			border-right:1px solid grey;
		}
		.first { width:33%; }
		.second { width:33%; }
		.third { width:34%; }
</style>

<ul>
	<li class="row head">
    	<ul class="column">
        	<li class="first">ID</li>
            <li class="second">Name</li>
            <li class="third">Threat Level</li>
        </ul>
    </li>
    <? foreach($cases as $case): ?>
        <li class="row level-<?=$case->threat?>">
            <a href="<?=base_url()?>cases/view/<?=$case->caseid?>">
                <ul class="column">
                    <li class="first"><?=$case->caseid?></li>
                    <li class="second"><?=$case->name?></li>
                    <li class="third"><?=$case->threat?></li>
                </ul>
            </a>
        </li>
	<? endforeach; ?>
    
</ul>
