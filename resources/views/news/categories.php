<?php foreach ($categories as $category) :?>
    <div style="border: 1px solid black">
        <a href="<?=route('news.category', ['id' => $category['id']])?>">
            <h2><?=$category['title']?></h2>
        </a>
        <p><?=$category['description']?></p>
    </div>
<?php endforeach;?>
