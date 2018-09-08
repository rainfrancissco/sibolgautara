@if ($errors->any())
	{{-- expr --}}
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
			</li>
		@endforeach
	</ul>
@endif