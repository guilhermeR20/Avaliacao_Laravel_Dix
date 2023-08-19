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
                <h4 class="card-title">{{ __('Editar Noticia') }}</h4>
            </div>
            <form method="post" action="{{ route('news.update', $new->id) }}" autocomplete="off">
                <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success')

                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label>{{ __('Titulo') }}</label>
                            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Titulo') }}" value="{{ $new->title }}">
                            @include('alerts.feedback', ['field' => 'title'])
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                            <label>{{ __('Descrição') }}</label>
                            <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Descrição') }}" value="{{ $new->description }}">
                            @include('alerts.feedback', ['field' => 'description'])
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                            <label>{{ __('Conteudo') }}</label>
                            <textarea name="content" id="content" cols="57" rows="50"  class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" placeholder="{{ __('Conteudo') }}">{{ $new->content }}</textarea>
                            @include('alerts.feedback', ['field' => 'content'])
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        </div>

       
</div>
@endsection