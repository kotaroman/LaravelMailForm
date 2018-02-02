@extends('_layouts.base')

@section('title', 'お問い合わせ')

@section('description', 'お問い合わせの説明')

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
      <h1>お問い合わせ</h1>

      <form action="{{ route('comfirm') }}" method="POST" class="needs-validation" novalidate>

        {{ csrf_field() }}

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">姓</label>
            <input type="text" class="form-control{{ $errors->has("sei") ? " is-invalid" : "" }}" id="sei" name="sei" placeholder="" value="{{ session("contact.sei") }}" required>
            @if ($errors->has("sei"))
            <div class="invalid-feedback">
                {{ $errors->first("sei") }}
            </div>
            @endif

          </div>

          <div class="col-md-6 mb-3">
            <label for="lastName">名</label>
            <input type="text" class="form-control{{ $errors->has("mei") ? " is-invalid" : "" }}" id="mei" name="mei" placeholder="" value="{{ session("contact.mei") }}" required>
            @if ($errors->has("mei"))
            <div class="invalid-feedback">
                {{ $errors->first("mei") }}
            </div>
            @endif
          </div>
        </div>


        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" class="form-control{{ $errors->has("email") ? " is-invalid" : "" }}" id="email" name="email" placeholder="you@example.com" value="{{ session("contact.email") }}" required>
            @if ($errors->has("email"))
            <div class="invalid-feedback">
                {{ $errors->first("email") }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <label for="message">メッセージ</label>
            <textarea name="message" class="form-control{{ $errors->has("message") ? " is-invalid" : "" }}" id="message" rows="3">{{ session("contact.message") }}</textarea>
            @if ($errors->has("email"))
            <div class="invalid-feedback">
                {{ $errors->first("message") }}
            </div>
            @endif
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">確認</button>
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
