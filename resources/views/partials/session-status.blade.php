@if (session('status'))
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<strong>{{ session('status') }}</strong>
		<button type="button"
		class="close"
		data-dismiss="alert"
		aria-label="close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
