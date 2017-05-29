<ul id="last-articles">
<?php
$posts = get_posts('numberposts=5&order=DESC'); // sélection des 5 derniers articles en order descendant
foreach ($posts as $post) : start_wp(); // création de la boucle
?>
<li><a href="<? the_permalink();?>" target="_top" title="<? the_title();?>"><? the_title();?></a> <? the_date(); ?></li>
<? endforeach; ?>
</ul>