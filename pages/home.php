<h1>Home</h1>

<a href="index.php?p=single">Single</a>

<?php

foreach ($db->query('SELECT * FROM article', 'App\Table\Article') as $post):?> 
        
<h2><a href="<?php echo $post->url; ?>"><?php echo $post->titre; ?></a></h2>
<p><?php $post->extrait;?></p>


    
<?php endforeach; ?>







