@extends('layouts.adminlayout')

@section('content')
    

        <!-- +++++ Logged successfully +++++ -->
        <div class="col-xs-8 border p-3" style="width: 80%;">
            <div class="card bg-dark text-light border-success">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in, Alex!') }}
                </div>

                <div class="card-footer text-center"><i class="fas fa-tools"></i></div>
            </div>
        </div>
        
@endsection