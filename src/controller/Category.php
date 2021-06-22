<?php

class Category extends Controller {

    public function showCategory($id) {
        Session::set('activeCategory', $id);
        $categories = Session::get('categories');
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $result = $this->model->getPostsByCategoryId($id, $search);
        $this->view->posts = $result;

        $this->view->render('category/showAll');
    }

    public function insertComment() {
        $comment = $_POST;
        $getId = explode("/", $_GET['url']);
        $postId = $getId[2];
        $user_comment = $comment['user_comment'];

        $this->model->userComment($user_comment, $postId);

        header("Location: " . URL . "category/show/$postId");
    }

    public function show($id) {
        $data = $this->model->getPostById($id);
        $comments = $this->model->getAllCommentsById($id);

        $this->view->data = $data;
        $this->view->comments = $comments;

        $this->view->render('category/show');
    }

    public function index() {
        $this->view->render('category/digitalminimalism');
    }

}