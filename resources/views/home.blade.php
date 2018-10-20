@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <br>
                    <a href="{{route('upload')}}">
                        <button type="button" class="btn btn-primary">
                    Upload page  
                </button>
                </a>

                    <br>
                    <br>
                    <a href="{{route('uploads.view')}}">
                         <button type="button" class="btn btn-primary">
                    View Uploads page
                </button>
                </a>
                    <br>
                    <br>
                    <a href="{{route('audits')}}">
                         <button type="button" class="btn btn-primary">
                    Audits page
                </button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
