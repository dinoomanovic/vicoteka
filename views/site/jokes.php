<?php foreach($jokes as $joke) { ?>

<div class="joke_page">
		<div class="joke_frame">
			<div class="joke_title"> 
				<b> <?= $joke->title; ?> </b>
			</div>	
			<b class="joke_content"> <?=  nl2br($joke->content); ?> </b>
			<br>
			<hr>
			<i> Komentari </i>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<i> Rating: </i>
		</div>
</div>
<?php } ?>