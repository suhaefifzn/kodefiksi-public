@extends('layout.main', [
    'title' => '404 Page Not Found',
    'meta' => [
        'description' => 'Artikel tidak ditemukan.',
        'need_canonical' => false
    ]
])
@section('meta.article')
    <meta name="robots" content="noindex, nofollow">
@endsection
@section('content')
<div class="d-flex flex-column align-items-center justify-content-center gap-4 mt-5" id="contentWrapper">
    <div class="img-wrapper-404" class="col-12">
        <img src="/assets/404.png" alt="404 Page Not Found" class="img-fluid">
    </div>
    <h1>404 NOT FOUND</h1>
    <p style="text-align: center; padding: 10px">
        Oops, maaf sepertinya halaman yang Anda cari tidak ditemukan.
        <br/><a href="/" class="text-decoration-none">Kembali ke Beranda</a>.
    </p>
</div>
@endsection
