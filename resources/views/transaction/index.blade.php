@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('Status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Status') }}
                        </div>
                    @endif

                    {{ __('Succes!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
