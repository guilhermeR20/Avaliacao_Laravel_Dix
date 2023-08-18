<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('WD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('White Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @isset  ($var) @if ($pageSlug == 'dashboard') class="active " @endif @endisset > 
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i> 
                    <span class="nav-link-text" >{{ __('Gerenciamento Usuário') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug = 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Meu Perfil') }}</p>
                            </a>
                        </li>
                        @can('manage-users')
                            
                        <li @if ($pageSlug = 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Gerenciar Usuarios') }}</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </li>
           
            <li @if ($pageSlug = 'news') class="active " @endif>
                <a href="{{ route('news.index') }}">
                    <i class="tim-icons icon-single-copy-04"></i>
                    <p>{{ __('noticias') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
