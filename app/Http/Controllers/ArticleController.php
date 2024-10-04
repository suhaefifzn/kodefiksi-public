<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ? Service
use App\Services\ArticleService;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function articles(Request $request) {
        $page = $request->query('page');
        $category = $request->query('category');
        $username = $request->query('username');
        $validatedPageValue = filter_var($page, FILTER_VALIDATE_INT);

        if ($validatedPageValue) {
            if ($page and $category and !$username) {
                $response = $this->articleService->getArticlesByCategory($category, $page);
            }

            if ($page and $username and !$category) {
                $response = $this->articleService->getArticlesByAuthor($username, $page);
            }

            if ($page and !$category and !$username) {
                $response = $this->articleService->getArticles($page);
            }
        }

        return $response;
    }

    public function home() {
        return view('layout.home', [
            'title' => 'Kode Fiksi'
        ]);
    }

    public function category($categorySlug) {
        return view('layout.category', [
            'title' => 'Kategori - ' . ucfirst($categorySlug),
            'data' => [
                'category' => $categorySlug
            ]
        ]);
    }

    public function author($username) {
        return view('layout.author', [
            'title' => 'Penulis - ' . $username,
            'data' => [
                'username' => $username
            ]
        ]);
    }

    public function article($articleSlug) {
        $response = $this->articleService->getArticleBySlug($articleSlug);
        $decodedResponse = $this->decodeJsonResponse($response)['data'];

        return view('layout.article', [
            'title' => isset($decodedResponse['title']) ? $decodedResponse['title'] : $articleSlug,
            'data' => $decodedResponse
        ]);
    }

    public function about() {
        return view('layout.about', [
            'title' => 'About Us'
        ]);
    }

    public function disclaimer() {
        return view('layout.disclaimer', [
            'title' => 'Disclaimer'
        ]);
    }

    public function contact() {
        return view('layout.contact', [
            'title' => 'Contact Us'
        ]);
    }

    public function privacyPolicy() {
        return view('layout.privacy', [
            'title' => 'Privacy Policy'
        ]);
    }
}
