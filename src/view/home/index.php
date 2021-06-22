
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <h4 class="text-uppercase">Блог от Славика</h4>
            <div class="intro-heading">Давайте поможем Славику</br>получить 60 баллов</div>
            <a class="btn btn-xl text-white text-uppercase" href="/category/showCategory/1">Помочь</a><i class="fa fa-angle-right"></i>
        </div>
    </div>
</header>

<section class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Что это такое?</h2>
                <hr class="dark my-4">
                <p class="text-faded mb-4">Это попытки выжить в этом сложном мире.</p>
            </div>
        </div>
    </div>
</section>

<!-- Here comes the main content -->
<div class="container"> <!-- START: div#content -->

<!-- Content Cards -->
<!--<section>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-8 mx-auto text-center">-->
<!--            <h2 class="section-heading">Последние посты</h2>-->
<!--            <hr class="dark my-4">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="card-columns">-->
<!---->
<?php //foreach($this->post as $item) : ?>
<!--        <div class="card d-none">-->
<!--            <a href="--><?//= URL; ?><!--category/show/--><?//= $item->id; ?><!--">-->
<!--                <img class="card-img-top" src="--><?//= $item->image ?><!--" alt="Card image cap">-->
<!--            </a>-->
<!--            <div class="card-body">-->
<!--                    -->
<!--                <p class="card-text mb-0 text-muted"><small>--><?//= $item->category_name ?><!--</small></p>-->
<!--                    -->
<!--                <h5 class="card-title">--><?//= $item->header ?><!--</h5>-->
<!--                <p class="card-text">--><?//= substr($item->content, 0, 200) ?><!--...<a href="--><?//= URL; ?><!--category/show/--><?//= $item->id; ?><!--">Читать далее</a></p>-->
<!--                <div class="row">-->
<!--                    <div class="col">-->
<!--                        <p class="card-text"><small class="text-muted">--><?//= $item->timestamp ?><!--</small></p>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col">-->
<!--                        <p class="card-text pull-right"><small class="text-muted">Автор: </br>--><?//= $item->firstname . ' ' . $item->lastname?><!--</small></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    -->
<?php //endforeach; ?>
<!--    </div>-->
<!---->
<!---->
<!--     Pagination start -->
<!--    <div class="mt-5">-->
<!--        <nav aria-label="Page navigation example">-->
<!--            <ul class="pagination justify-content-center" id="cardPagination">-->
<!---->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->
<!--</section>-->
<!--<script>-->
<!--    //let activePage = --><?////= ACTIVE_PAGE ?><!--//;-->
<!--    //let cardsPerPage = --><?////= CARDS_PER_PAGE ?><!--//;-->
<!--</script>-->

<!--<script src="--><?//= URL . "public/js/pagination.js" ?><!--"></script>-->