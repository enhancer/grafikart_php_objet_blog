<h1>Home</h1>

<a href="index.php?p=single">Single</a>

<div class="row">
    
    <div class="col-sm-8">
    
        <?php     var_dump(App\Table\Article::getLast());
        

        foreach (App\Table\Article::getLast() as $post):?> 

        <h2><a href="<?php echo $post->url; ?>"><?php echo $post->titre; ?></a></h2>
        <p><em><?php echo $post->categorie_titre;?></em></p>
        <p><?php $post->extrait;?></p>

        <?php endforeach; die();?>
    </div>
    
    <div class="col-sm-4">
        <ul>
            
            
        <?php foreach (\App\Table\Categorie::all() as $categorie) :?>
        
            <li>
                <a href="<?php echo $categorie->url ?>"><?php echo $categorie->categorie_titre ; ?></a>
            </li>

        <?php endforeach ?>
            
        </ul>
    </div>
</div>

    
    
    
    
    
    







