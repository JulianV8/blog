<?php

namespace App\Controllers;

use App\Models\BlogPost;

class IndexControllers extends BaseController {

    public function getIndex() {
        $blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();
        return $this->render('index.twig', ['blogPosts' => $blogPosts]);
    }
}

