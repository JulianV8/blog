<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogPost;
use Sirius\Validation\Validator;
use function Sodium\add;

class PostController extends BaseController {
    public function getIndex() {
        //admin/post or admin/post/index

        /* De esta forma realizo consultas a la base de datos antes de usar ELOQUENT
        //global $pdo;

        //$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        //$query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $this->render('admin/post.twig', ['blogPosts' => $blogPosts]);
        */
        $blogPosts = BlogPost::all();
        return $this->render('admin/post.twig', ['blogPosts' => $blogPosts]);
    }
    public function getCreate() {
        //admin/post/create
        return $this->render('admin/insert-post.twig');
    }
    public function postCreate() {
        /**
         * Antes de usar eloquent o illuminate/database asi realizaba las consultas a la base de datos
         */
        /*
        global $pdo;

        $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'title' => $_POST['title'],
            'content' => $_POST['content']
        ]);

        return $this->render('admin/insert-post.twig', ['result' => $result]);
        */

        $errors = [];
        $result = false;
        $validator = new Validator();
        $validator->add('title', 'required');
        $validator->add('content', 'required');

        if ($validator->validate($_POST)){
            $blogPosts = new BlogPost([
                'title' => $_POST['title'],
                'content' => $_POST['content']
            ]);
            $blogPosts->save();
            $result = true;
        } else {
            $errors = $validator->getMessages();
        }

        return $this->render('admin/insert-post.twig', [
            'result' => $result,
            'errors' => $errors
        ]);
    }
}