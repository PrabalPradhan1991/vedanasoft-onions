@extends('backend.main')

@section('content')
<div class="row sierra-row">	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
					<div class="d-flex align-items-center">
						<a href="{{ route('admin-service-list') }}" class="btn btn-primary btn-round ml-auto">
							<i class="fa fa-list"></i>&nbsp;
							 List Services
						</a>
					</div>	
			</div>
			<form method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="col-sm-10">
						<div class="form-group">
							<label for="service">Service</label>
							<input id="service" type="text" name="data[service]" class="form-control service" required value="{{ request()->old('service') }}">
							<span class="error-block">	@if($errors->has('service'))
								@foreach($errors->get('service') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="data[description]" class="form-control" rows="5">{{ request()->old('description') }}</textarea>
							
							<span class="error-block">	@if($errors->has('description'))
								@foreach($errors->get('description') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="icon">Icon</label>
							<input id="icon" type="text" name="data[icon]" class="form-control icon" required value="{{ request()->old('icon') }}">
							<span class="error-block">	@if($errors->has('icon'))
								@foreach($errors->get('icon') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="ordering">Ordering</label>
							<input id="ordering" type="number" name="data[ordering]" step=1 min=0 class="form-control ordering" value="{{ \App\Http\Controllers\HelperController::getOrdering('\App\Http\Controllers\CoreModules\Service\ServiceModel', 'ordering') }}" required>
							@if($errors->has('ordering'))
								@foreach($errors->get('ordering') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>


					</div>	
				</div>
			{{ csrf_field() }}
				<div class="card-action">
					<div class="col-sm-5">				
						<button type="submit" class="btn btn-success">Submit</button>
					</div>	
				</div>
			</form>
		</div>
	</div>
</div>			
@stop

@section('custom-js')
	
@stop