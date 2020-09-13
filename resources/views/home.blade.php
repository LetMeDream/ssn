@extends('home.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido
                </div>
            </div>
        </div>
    </div>
</div>

<!-- This site is converting visitors into subscribers and customers with respond.io - https://respond.io -->
<script src="https://app.respond.io/facebook/chat/plugin/40880/181956451966108" async></script>
@endsection
