<div class="categories index container-fluid">
	<h2>Teams in each iGem Track</h2>

	<?php
	$i = 0;
	foreach($categories as $cat)
	{
	if($i%3 == 0)
	{
		echo "<div class = 'row row-centered'>";
	}
	echo "<div class='catHold col-sm-4 col-xs-10 col-centered'>";
		echo "<h3><a href='http://www.igemmatch.org/categories/view/".$cat['Category']['id']."'>".$cat['Category']['name']."</a></h3>";

		if(!empty($cat['User']))
		{
			foreach($cat['User'] as $users)
			{
				echo "<h4> ".$this->Html->link($users['team'],'http://www.igemmatch.org/users/view/'.$users['id'])."</h4>";
			}
		}
	echo "</div>";
	$i++;
	if($i%3 == 0){echo "</div>";}

	}



	?>

</div>

