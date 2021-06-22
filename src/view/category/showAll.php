<?php
    $categories = Session::get('categories');
    $activeCategory = Session::get('activeCategory');
    $categoryName = $categories[$activeCategory];
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    // $index = array_search($activeCategory, );

?>

<div class="container">
<h1 class="text-center mt-5">Категория: <?= $categoryName ?></h1>

<section>   

<!-- Search function -->
<!--<form id="search_php" method="GET" action="/category/showCategory/--><?//= $activeCategory ?><!--">-->
<!--    <div class="input-group mb-3">-->
<!--        <input type="text" value="--><?//=$search?><!--" class="form-control" name="search" placeholder="Что-то не нашли? Ну ищите нужные вам посты" aria-describedby="button-addon2">-->
<!--        <div class="input-group-append">-->
<!--            <button class="btn btn-primary" type="submit" id="button-addon2">Поиск</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->

<!-- Display all posts -->
<div class="card-columns">
<?php foreach($this->posts as $item) : ?>
    <div class="card">
        <a href="/category/show/<?= $item->id; ?>">
            <img class="card-img-top" src="/<?= $item->image ?>" alt="Card image cap">
        </a>
        <div class="card-body">
                
            <p class="card-text mb-0 text-muted"><small><?= $item->category_name ?></small></p>
                
            <h5 class="card-title"><?= $item->header ?></h5>
            <p class="card-text"><?= substr($item->content, 0, 200) ?>...<a href="/category/show/<?= $item->id; ?>">Читать далее</a></p>
            <div class="row">
                <div class="col">
                    <p class="card-text"><small class="text-muted"><?= $item->timestamp ?></small></p>
                </div>

                <div class="col">
                    <p class="card-text pull-right"><small class="text-muted">Автор: </br><?= $item->firstname . ' ' . $item->lastname?></small></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>


</section>