@extends('_layouts.base')

@section('title', 'お問い合わせ:確認')

@section('description', 'お問い合わせ:確認の説明')

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
      <h1>お問い合わせ:確認</h1>

        <span>以下の内容で送信します。</span>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">姓</label>
            <input type="text" class="form-control" id="sei" name="sei" placeholder="" value="{{ session("contact.sei") }}" required disabled>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastName">名</label>
            <input type="text" class="form-control" id="mei" name="mei" placeholder="" value="{{ session("contact.mei") }}" required disabled>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>


        <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{ session("contact.email") }}" required disabled>
          <div class="invalid-feedback">
            メールアドレスを入力してください。
          </div>
        </div>

        <div class="form-group">
          <label for="message">メッセージ</label>
          <textarea name="message" class="form-control" id="message" rows="3" disabled>{{ session("contact.message") }}</textarea>
        </div>

        <hr class="mb-4">

      <form action="{{ url('/post') }}" method="POST" class="needs-validation">
        {{ csrf_field() }}
        <button class="btn btn-primary btn-lg btn-block" type="submit">送信</button>
      </form>

        <hr class="mb-4">

      <form action="{{ url('/') }}" method="GET">
        <button class="btn btn-primary btn-lg btn-block" type="submit">戻る</button>
      </form>

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
