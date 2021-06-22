<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar negativeMargin">
        <div class="fixed-left">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Админка</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/editProfile"><span data-feather="file-text"></span>Изменить профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>dashboard/view"><span data-feather="file-text"></span>Просмотреть посты</a>
                </li>
                <?php if(Session::get('user')['permission'] == "Admin" or Session::get('user')['permission'] == "Editor") :?>
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>dashboard/allUserPosts"><span data-feather="file-text"></span>Ваши посты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/add"><span data-feather="file-text"></span>Добавить пост</a>
                </li>
                <?php endif; ?>
            </ul>

            <?php if(Session::get('user')['permission'] == "Admin") : ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Полномочия Админа</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/category"><span data-feather="file-text"></span>Добавить категорию</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>dashboard/allUsers"><span data-feather="file-text"></span>Управления пользователями</a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </nav>

    <div class="col-md-2"></div>



    
