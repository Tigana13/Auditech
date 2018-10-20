
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upload a file') }}</div>

                <div class="card-body">
                	@if(session('error'))
                		<div class="alert alert-danger">
                			{{session('error')}}
                		</div>
            		@elseif(session('success'))
            			<div class="alert alert-success">
                			{{session('success')}}
                		</div>
                	@endif
					<form action="{{route('upload.post')}}" enctype="multipart/form-data" method="post">
						@csrf
						<div class="form-group row">
						    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('File') }}</label>

						    <div class="col-md-6">
						        <input type="file" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required autofocus>

						        @if ($errors->has('image'))
						            <span class="invalid-feedback">
						                <strong>{{ $errors->first('image') }}</strong>
						            </span>
						        @endif
						    </div>
						</div>

						<div class="form-group row">
							<div class="col-md-6">
								<input type="submit" value="upload">
						    </div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection