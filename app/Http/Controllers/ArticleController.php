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

    public function home(Request $request) {
        $page = $request->query('page');
        $response = $page ? $this->articleService->getArticles($page)
            : $this->articleService->getArticles();
        $data = $this->decodeJsonResponse($response);

        return view('layout.home', [
            'title' => 'Kode Fiksi',
            'data' => $data
        ]);
    }

    public function category(Request $request, $categorySlug) {
        $page = $request->query('page');
        $response = $page ? $this->articleService->getArticlesByCategory($categorySlug, $page)
            : $this->articleService->getArticlesByCategory($categorySlug);
        $data = $this->decodeJsonResponse($response);

        return view('layout.category', [
            'title' => 'Kategori - ' . ucfirst($categorySlug),
            'data' => $data,
            'category' => $categorySlug
        ]);
    }

    public function author(Request $request, $username) {
        $page = $request->query('page');
        $response = $page ? $this->articleService->getArticlesByAuthor($username, $page)
            : $this->articleService->getArticlesByAuthor($username);
        $data = $this->decodeJsonResponse($response);

        return view('layout.author', [
            'title' => 'Penulis - ' . $username,
            'data' => $data,
            'author' => $username
        ]);
    }

    public function article($articleSlug) {
        $response = $this->articleService->getArticleBySlug($articleSlug);
        $decodedResponse = $this->decodeJsonResponse($response);

        if ($decodedResponse['status'] === 'fail') {
            return abort(404);
        }

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
