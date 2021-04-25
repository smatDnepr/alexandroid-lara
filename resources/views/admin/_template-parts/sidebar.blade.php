<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ route('front.index') }}" id="link_to_site" class="brand-link elevation-4" target="_blank">
        {{-- <img src="/assets/img/favicon.svg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity:0.8; width:33px; height:33px; box-shadow: none !important; border-radius: 0"> --}}

        <svg version="1.1" class="brand-image img-circle elevation-3" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 58 58"
            style="enable-background:new 0 0 58 58; opacity:0.8; width:33px; height:33px; box-shadow: none !important; border-radius: 0"
            xml:space="preserve">
            <g>
                <path d="M28.4,47.2c-3-3-4.5-7.3-4.5-11.8c0-9.2,7.6-16.6,16.8-16.6c3.4,0,6.5,1,9.3,2.7l8.1-9.7
     c-0.4-0.1-0.8-0.2-1-0.2c-1.2-0.2-1.9-0.2-2.4-0.2c-0.5,0-1.2,0.6-1.2,0.6s-0.3-0.4-0.8-1C52,10.4,52,9.6,51.2,8.1
     c-0.7-1.5-3-2.7-3.4-2.9C47.5,5,47,5,47,5s0-0.3,0-0.7S46.7,4,46.7,4S36.5,4,36.4,4S36.1,4,36,4.2C36,4.4,35.9,5,35.9,5
     c-0.9,0.1-2.7,1.1-3.5,1.9c-0.8,0.8-2.4,4.2-3.4,5.1c-1,0.9-3.4,1.4-4.8,1.7c-1.4,0.3-5.2,0.7-5.4,0.7c-0.3,0-4.4,0.4-4.5,0.3
     c-0.7-0.3-1.7-0.2-1.7-0.2c-1.1,0-3.9,0.6-4.6,0.8c-0.7,0.2-2.1,0.6-2.9,1c-0.9,0.4-1.8,1.2-2.6,2C1.6,19,1,20.6,0.8,21.1
     c-0.2,0.6-0.4,3.8-0.4,4.5c0,0.6-0.5,15.2-0.4,17.9c0.1,2.7,0.4,6.8,0.5,8c0.1,1.2,1.1,1.6,1.8,2c0.7,0.3,2.2,0.4,2.2,0.4
     s8.4,0.1,8.5,0.1s0.3,0,0.3,0c0.2-0.1,1.2-0.4,1.2-0.4s3.5,0,8.8,0L28.4,47.2z M10.1,18.8c-1.3,0.2-2.4-0.3-2.5-1.1
     s0.9-1.5,2.1-1.7c1.3-0.2,2.4,0.3,2.5,1.1C12.2,17.8,11.4,18.6,10.1,18.8z M15.7,50.6c0,0.3-0.2,0.5-0.5,0.5h-0.1
     c-0.3,0-0.5-0.2-0.5-0.5V25.8c0-0.3,0.2-0.5,0.5-0.5h0.1c0.3,0,0.5,0.2,0.5,0.5V50.6z" />
                <path d="M33.4,41.7c-1.3-1.7-2-3.6-2-5.9c0-5.3,4.4-9.7,9.8-9.7c1.6,0,3.1,0.4,4.4,1.1l2.9-3.5
     c-2.2-1.3-4.7-2.1-7.5-2.1c-8,0-14.3,6.3-14.3,14.1c0,3.6,1.4,6.9,3.7,9.5L33.4,41.7z" />
            </g>
        </svg>

        <span class="brand-text font-weight-light">На сайт</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); this.previousElementSibling.submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout {{ auth()->user()->name }}</p>
                    </a>
                </li>
            </ul>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item pb-3 mb-3" style="border-bottom: 1px solid #4f5962;">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="{{ route('admin.translates') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Translations</p>
                    </a>
                </li>

				<li class="nav-item pb-3 mb-3" style="border-bottom: 1px solid #4f5962;">
                    <a href="{{ route('admin.google-analytics.index') }}" class="nav-link">
                        <i class="nav-icon fab fa-google"></i>
                        <p>Google Analytics</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="{{ route('admin.files') }}" class="nav-link">
                        <i class="nav-icon far fa-folder-open"></i>
                        <p>{{ __('Файлы') }}</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-phone-alt"></i>
                        <p>{{ __('Мои контакты') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.partners') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>{{ __('Мои партнеры') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.portfolios.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>{{ __('Портфолио') }}</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.genres.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-icons"></i>
                        <p>{{ __('Жанры') }}</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            {{ __('Страницы') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.landing')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>{{ __('Главная') }}</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="{{route('admin.politika')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>{{ __('Политика конфид-cти') }}</p>
                            </a>
                        </li>
                    </ul>
                </li>











            </ul>
        </nav>

    </div>
</aside>
