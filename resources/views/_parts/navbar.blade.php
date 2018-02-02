<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">

		<a class="navbar-brand" href="{{ config('app.url') }}">{{ config('app.name') }}</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbars">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
				<a class="nav-link" href="{{ url('/') }}">お問い合わせ</a>
				</li>

			</ul>
		</div>
	</div>
</nav>
