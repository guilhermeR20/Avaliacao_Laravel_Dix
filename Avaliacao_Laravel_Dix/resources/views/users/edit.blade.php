@extends('layouts.app', ['page' => __('Edit User'), 'pageSlug' => 'edit user'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            @if (Session::has('status_success'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ Session::get('status_success') }}</p>
                    </div>
            @endif
            <div class="card-header">
                <h4 class="card-title">{{ __('Editar Usuario') }}</h4>
            </div>
            <form method="post" action="{{ route('user.manager.update', $user->id) }}" autocomplete="off">
                <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success')

                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Nome') }}</label>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nome') }}" value="{{ $user->name }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label>{{ __('Email') }}</label>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Endereço de Email') }}" value="{{ $user->email }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ __('Salvar') }}</button>
                </div>
            </form>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ __('Senha') }}</h5>
            </div>
            <form method="post" action="{{ route('user.password', $user->id) }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')

                    @include('alerts.success', ['key' => 'password_status'])

                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <label>{{ __('Nova Senha') }}</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nova Senha') }}" value="" required>
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('Confirme Nova Senha') }}</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirme Nova Senha') }}" value="" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ __('Alterar Senha') }}</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection