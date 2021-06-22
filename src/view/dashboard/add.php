<?php include 'partial/sidebar.php'; ?>
<?php
    
    $postErr = isset($this->post_err) ? true : false;
    $postErrMsg = isset($this->post_err) ? $this->post_err : '';

?>

<div class="col-md-10">
    <div class="container">
        <!-- Breadcrumbs-->
        <h2>Добавить пост</h2>

            <!-- Add post -->
        <div class="card card-body bg-light mt-4 mb-5">
        <?php if($postErr) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $postErrMsg ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        <?php endif; ?>

        <form action="<?php echo URL; ?>dashboard/doAdd" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Название: <sup>*</sup></label>
                <input type="text" name="header" class="form-control form-control-lg" value="">
            </div>

            <div class="form-group">
                <label for="category">Выберите категорию: <sup>*</sup></label>
                <select class="form-control" name="category_id">
                    <?php foreach ($this->data as $item): ?>
                        <option value="<?= $item->id ?>"><?= $item->category_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>   

            <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
            </div>

            <div class="form-group inputDnD">
                <label for="title">Загрузить картинку: <sup>*</sup></label>
                <input type="file" class="form-control-file text-upload font-weight-bold" name="post_file" id="inputFile" onchange="readUrl(this)" data-title="Нажмите для загрузки файла">
            </div>

            <div class="form-group">
                <label for="body">Текст поста: <sup>*</sup></label>
                <textarea name="content" rows="15" id="post_text" class="form-control form-control-lg">  </textarea>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
            
    </div>
</div>







