<?php include 'partial/sidebar.php'; ?>

    <div class="col">
        <div class="container">
            <!-- Breadcrumbs-->
            <h2>Ваши посты</h2>

            <!-- DataTables Example -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Автор</th>
                            <th colspan="3">Параметры публикации</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(empty($this->allPosts)): ?>
                        <p>Не было опубликовано ни одного поста</p>
                    <?php else : ?>
                        <?php foreach($this->allPosts as $post) : ?>
                            <tr>
                                <td><?= $post->header ?></td>
                                <td><?= $post->category_name ?></td>
                                <td><?= $post->firstname . ' ' . $post->lastname?></td>
                                <td><a href="<?= URL; ?>dashboard/view/<?= $post->id; ?>" class="btn btn-dark">Просмотреть</a></td>
                                <td><a href="<?= URL; ?>dashboard/edit/<?= $post->id; ?>" class="btn btn-primary">Изменить</a></td>
                                <td><a href="<?= URL; ?>dashboard/delete/<?= $post->id; ?>" class="btn btn-danger">Удалить</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



                



    