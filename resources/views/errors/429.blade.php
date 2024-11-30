@extends('layout.main', [
    'title' => '429 Too Many Requests',
    'meta' => [
        'description' => 'Oops, kami mendeteksi adanya aktivitas mencurigakan.',
        'need_canonical' => false
    ]
])
@section('meta.article')
    <meta name="robots" content="noindex, nofollow">
@endsection
@section('content')
<div class="d-flex flex-column align-items-center justify-content-center gap-4 mt-5" id="contentWrapper">
    <div class="img-wrapper-404" class="col-12">
        <img src="/assets/429.webp" alt="429 Too Many Request - Icon By storyset.com" class="img-fluid">
    </div>
    <h1>429 TOO MANY REQUESTS</h1>
    <p style="text-align: center; padding: 10px">
        Oops, kami mendeteksi adanya aktivitas mencurigakan. Permintaan beruntun dalam rentan waktu yang cepat.
        <br/><a href="/" class="text-decoration-none">Kembali ke Beranda</a>.
    </p>
</div>
@endsection
