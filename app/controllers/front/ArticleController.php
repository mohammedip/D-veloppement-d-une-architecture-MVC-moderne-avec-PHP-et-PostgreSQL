<?php

namespace App\controllers\front;

use App\core\Controller;
use App\model\Article;

class ArticleController extends Controller {
    protected $articles;

    public function __construct() {
        parent::__construct();
        $this->articles = new Article();
    }

    public function home() {
        
        // echo "Inside home() <br>"; 
        $allArticles = $this->articles->getArticles();
    
        // var_dump($allArticles);
         $this->render('front/home', ['articles' => $allArticles]);
    }

    public function article($id) { 
        if (!is_numeric($id)) {
            throw new \Exception("Invalid article ID");
        }
        // echo "Inside article() with ID = $id <br>";
        $article = $this->articles->getArticleById($id);

        if (!$article) {
            throw new \Exception("Article not found");
        }

        $this->render('front/article', ['article' => $article]);
    }


    
}
