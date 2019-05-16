@extends('layouts.main')
@section('paralax')
    <div class="parallax">
        <div class="darker"></div>
    </div>
@endsection
@section('border')
    <div class="item-category">
        <h1>О НАС</h1>
        <p>Немного о нас</p>
        <div class="border">
            <div></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">

        <!-- Row -->
        <div class="row">
            <div class="col-md6 col-sm-6 col-xs-12">
                <img src="{{asset('images/about-me.jpg')}}" alt="Image description" />
            </div>
            <div class="col-md6 col-sm-6 col-xs-12">
                <h3>AutoSchool</h3>
                <p style="font-size: 16px">
                    Наша автошкола на рынке уже 6 лет. За это время мы подготовили множество кандидатов в водителе для прохождение экзамена в ГИБДД.Опытные инструкторы, современные автомобили и удобные учебные классы помогают достигать высоких результатов в учебе. Пора получать права! Записывайтесь на обучение прямо сейчас! Правильный выбор автошколы -залог безопасного вождения!
                </p>
            </div>
            <!-- Social Icons -->
            <div class="social-icons col-md12 col-sm-12 col-xs-12">
                <h3>Найти нас:</h3>
                <a href="#" class="btn facebook" style="color:" title="Facebook">
                    <i class="fa fa-facebook-official fa-2x"></i>
                </a>
                <a href="#" class="btn youtube" style="color:" title="Youtube">
                    <i class="fa fa-youtube fa-2x"></i>
                </a>
                <a href="#" class="btn px" style="color:" title="500px">
                    <i class="fa fa-500px fa-2x"></i>
                </a>
                <a href="#" class="btn flickr" style="color:" title="Flickr">
                    <i class="fa fa-flickr fa-2x"></i>
                </a>
                <a href="#" class="btn pinterest" style="color:" title="Pinterest">
                    <i class="fa fa-pinterest fa-2x"></i>
                </a>
                <a href="#" class="btn twitter" style="color:" title="Twitter">
                    <i class="fa fa-twitter fa-2x"></i>
                </a>
                <a href="#" class="btn instagram" style="color:" title="Instagram">
                    <i class="fa fa-instagram fa-2x"></i>
                </a>
                <a href="#" class="btn google" style="color:" title="Google Plus">
                    <i class="fa fa-google-plus-square fa-2x"></i>
                </a>
            </div>
            <!-- /Social Icons -->

        </div>
        <!-- /Row -->

        <!-- Footer -->
        <footer id="footer">
            <p>© AutoSchool @php echo date('Y') @endphp. Все права защищены.</p>
        </footer>
        <!-- /Footer -->
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-about').addClass('menu-active');
        });
    </script>
    @endsection