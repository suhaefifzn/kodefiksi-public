<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// ? Service
use App\Services\ArticleService;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function home() {
        $response = $this->articleService->getArticlesHome();
        $data = $this->decodeJsonResponse($response);

        if (is_null($data['data']) || count($data['data']['articles']) === 0) {
            abort(404);
        }

        return view('layout.home', [
            'title' => !is_null($data['data']) ? (count($data['data']['articles']) > 0 ? 'Kode Fiksi' : '404 Page Not Found') : '404 Page Not Found',
            'data' => $data['data']
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
            'category' => $categorySlug,
            'url' => config('app.url') . '/category/' . $categorySlug,
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
            'author' => $username,
            'url' => config('app.url') .'/author/' .  $username,
        ]);
    }

    public function article($articleSlug) {
        $response = $this->articleService->getArticleBySlug($articleSlug);
        $decodedResponse = $this->decodeJsonResponse($response);

        if (!isset($decodedResponse['data']['title'])) {
            abort(404);
        }

        return view('layout.article', [
            'title' => $decodedResponse['data']['title'],
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

    public function search(Request $request) {
        $validator = Validator::make($request->all(), [
            'q' => 'required|string|min:3|max:100|regex:/^[a-zA-Z0-9\s]+$/',
            'page' => 'integer|min:1|max:100|regex:/^[a-zA-Z0-9\s]+$/'
        ]);

        $page = $request->query('page');
        $query = htmlspecialchars($request->input('q'));
        $data = [
            'title' => 'Search results for ' .  $query,
            'query' => $query
        ];

        if ($validator->fails()) {
            return view('layout.search', $data);
        }

        $response = $page ? $this->articleService->getArticlesBySearch($query, $page)
            : $this->articleService->getArticlesBySearch($query);
        $results = $this->decodeJsonResponse($response);
        $data['data']['articles'] = $results['data']['articles'];
        $data['data']['meta'] = $results['data']['meta'];
        $data['status'] = $results['status'];

        if (count($results['data']['articles']) < 1 || $results['status'] !== 'success') {
            return view('layout.search', $data);
        }

        return view('layout.search', [
            'data' => $data,
            'title' => $data['title'],
            'query' => $query
        ]);
    }
}
