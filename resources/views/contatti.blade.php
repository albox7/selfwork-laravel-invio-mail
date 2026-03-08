
<x-layout>

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6">
				<h1>
					Contattaci
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6">

				@if (session('message'))
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
				@endif				

				<form method="POST" action="{{route('send_email')}}">
					
					@csrf
					
					{{-- Nome --}}
					<div class="input-group mb-4">
						<span class="input-group-text">
        					<i class="bi bi-person"></i>
    					</span>
    					<input type="text" class="form-control" name="name" class="form-control" id="user_name" placeholder="Scrivi il tuo nome...">
					</div>

					{{-- Email --}}
					<div class="input-group mb-4">
						<span class="input-group-text">
        					<i class="bi bi-envelope"></i>
    					</span>
    					<input type="email" class="form-control" name="email" class="form-control" id="user_email" placeholder="Scrivi la tua email...">
					</div>

					{{-- Messaggio --}}
					<div class="input-group mb-4">
						<span class="input-group-text">
							<i class="bi bi-chat-dots"></i>
						</span>
						<textarea name="messaggio" id="user_msg" class="form-control" placeholder="Scrivi il tuo messaggio..." cols="30" rows="10" ></textarea>
					</div>

					<div>
						<button type="submit" class="btn btn-primary">Invia</button>
					</div>

				</form>
			</div>
		</div>
	</div>

</x-layout>