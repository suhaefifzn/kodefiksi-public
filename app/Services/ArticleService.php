<?php

namespace App\Services;

class ArticleService extends MyWebService {
    public function __construct() {
        parent::__construct('articles/public');
    }

    public function getArticles($page = 1) {
        return $this->get("?page=$page");
    }

    public function getArticlesByCategory($slug, $page = 1) {
        return $this->get("?category=$slug&page=$page");
    }

    public function getArticlesByAuthor($username, $page = 1) {
        return $this->get("?username=$username&page=$page");
    }

    public function getArticleBySlug($slug) {
        return $this->get("/$slug");
    }
}
