@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-gradient text-white text-center" style="background: linear-gradient(45deg, #007bff, #0056b3);">
                    <h2 class="mb-0">{{ __('Welcome to Dompetku') }}</h2>
                    <p class="mb-0">{{ __('Hello') }}, {{ auth()->user()->name }}!</p>
                </div>

                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center mb-4">
                                <h4>{{ __('Your Dompetku Balance') }}</h4>
                                @if($wallet)
                                    <div class="display-3 text-primary font-weight-bold">
                                        {{ formatRupiah($wallet->balance) }}
                                    </div>
                                @else
                                    <div class="alert alert-warning d-inline-block">
                                        {{ __('No wallet found. Please contact support.') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card h-100 border-primary">
                                <div class="card-body text-center">
                                    <i class="fas fa-plus-circle fa-3x text-success mb-3"></i>
                                    <h5 class="card-title">{{ __('Add Money') }}</h5>
                                    <p class="card-text">{{ __('Top up your wallet with various payment methods') }}</p>
                                    <button class="btn btn-success" disabled>{{ __('Coming Soon') }}</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card h-100 border-danger">
                                <div class="card-body text-center">
                                    <i class="fas fa-minus-circle fa-3x text-danger mb-3"></i>
                                    <h5 class="card-title">{{ __('View Expenses') }}</h5>
                                    <p class="card-text">{{ __('Track and manage your expenses') }}</p>
                                    <button class="btn btn-danger" disabled>{{ __('Coming Soon') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('profile.index') }}" class="btn btn-info">
                                    <i class="fas fa-user"></i> {{ __('My Profile') }}
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection