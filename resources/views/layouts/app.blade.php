<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @if(Auth::check())
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{route('adminSchedule')}}" class="nav-link">Рассписание</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void 0" onclick="openPracticeModal()" class="nav-link">Запись на
                                практику</a>
                        </li>
                        @if(Auth::user()->role === 1)
                            <li class="nav-item">
                                <a href="{{route('usersInfo')}}" class="nav-link">Пользователи</a>
                            </li>
                        @endif
                        @endif
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- Practice modal -->
<div class="modal fade bd-example-modal-lg" id="practiceModal" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="exampleModalLabel">Запись на практику</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form id="classForm">
                    <div class="col-lg-12">
                        <label for="instructor">Выберите инстурктора</label>
                        <select id="instructor" class="form-control formPractice">
                            <option value="">Не выбран</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-lg-12 row">
                        <div class="col-lg-6">
                            <label for="typeClass">Тип коробки передач:</label>
                            <select id="typeClass" class="form-control">
                                <option value="">Не выбрано!</option>
                                <option value="1">Механическая</option>
                                <option value="2">Автоматическая</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="classDate">Дата:</label>
                            <input id="classDate" type="date" class="form-control formPractice">
                        </div>
                    </div>
                    <div class="col-lg-12" id="timeContainer" style="display: none;">
                        <hr>
                        <div class="col-lg-6 offset-lg-3 col-xs-12">
                            <label for="classTime">Свободное время:</label>
                            <select id="classTime" class="form-control">
                                <option value="">Не выбрано</option>
                                <option value="12:00">12:00 - 14:00</option>
                                <option value="14:00">14:00 - 16:00</option>
                                <option value="16:00">16:00 - 18:00</option>
                                <option value="18:00">18:00 - 20:00</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" onclick="savePracticeRequest();">Записаться</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/lk.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script> window.csrf = "{{csrf_token()}}"</script>
</body>
</html>
