@extends('_layouts.base')

@section('title', 'お問い合わせ:送信完了')

@section('description', 'お問い合わせ:送信完了の説明')

@section('css')
@endsection

@section('js_header')
@endsection

@section('js_footer')
@endsection

@section('content')



<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">お問い合わせ</li>
    </ol>
</nav>

  <div class="row">




    <div class="col-md-12 order-md-1">
      <h1>お問い合わせ:完了</h1>

        <span>送信しました。</span>

    </div>
  </div>


<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; {!! date('Y') !!} Company Name</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>



@endsection
