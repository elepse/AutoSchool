@extends('layouts.main')
@section('content')
    <!-- /Header -->
    <!-- Content -->
    <section class="content fullpage transition">

        <!-- Section One -->
        <section class="section" id="section1">
            <div class="darker"></div>
            <div class="border">
                <div class="frames">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="corners">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="cover-titles">
                <div class="align-left">
                    <p>Автошкола</p>
                    <h1 class="title">AutoSchool</h1>
                    <h2>Всегда на пути развития!</h2>
                </div>
            </div>
        </section>
        <!-- /Section One -->

        <!-- Section Two -->
        <section class="section" id="section2">
            <div class="darker"></div>
            <div class="border">
                <div class="frames">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="corners">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="cover-titles">
                <div class="align-left">
                    <p>Професионализм</p>
                    <h1 class="title">Качество</h1>
                    <p>Мы отвественно подходим к обучению наших учеников и благодаря множествам этапов подготовки процент сдачи близится к 100%</p>
                </div>
            </div>
        </section>
        <!-- /Section Two -->

        <!-- Section Three -->
        <section class="section" id="section3">
            <div class="darker"></div>
            <div class="border">
                <div class="frames">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="corners">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="cover-titles">
                <div class="align-left">
                    <p>новый автопарк</p>
                    <h1 class="title">современность</h1>
                    <p>У нас новый автопарк состоящий из хороших и надёжных автомобилей, на которых будет удобно учиться нашим ученикам</p>
                </div>
            </div>
        </section>
        <!-- /Section Three -->

        <!-- Section Four -->
        <section class="section" id="section4">
            <div class="darker"></div>
            <div class="border">
                <div class="frames">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="corners">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="cover-titles">
                <div class="align-left">
                    <p>Личный кабинет</p>
                    <h1 class="title">удобство</h1>
                    <p>Для наших клиентов разработанн удобный личный кабинет, в котором вы можете посмотреть всю свою информацию</p>
                    </a>
                </div>
            </div>
        </section>
        <!-- /Section Four -->

    </section>
    <!-- /Content -->

    <!-- Footer -->
    <footer id="footer" class="fixed white">
        <p>© AutoSchool @php echo date('Y') @endphp. Все права защищены.</p>
    </footer>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#header').addClass('fixed');
            $('.menu-main').addClass('menu-active');
        });
    </script>
    <!-- /Footer -->
    @endsection