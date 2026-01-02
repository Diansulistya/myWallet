@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">{{ __('My Profile') }}</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>{{ __('Personal Information') }}</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>{{ __('Name') }}:</strong></td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Email') }}:</strong></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>{{ __('Member Since') }}:</strong></td>
                                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>{{ __('Wallet Information') }}</h5>
                            @if($user->wallet)
                                <div class="alert alert-success">
                                    <h4 class="alert-heading">{{ __('Current Balance') }}</h4>
                                    <p class="display-4">{{ formatRupiah($user->wallet->balance) }}</p>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    {{ __('No wallet found. Please contact support.') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="d-flex gap-2">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">
                                    <i class="fas fa-key"></i> {{ __('Change Password') }}
                                </a>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> {{ __('Back to Dashboard') }}
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
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