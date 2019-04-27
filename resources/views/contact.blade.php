@extends('layouts.main')
@section('paralax')
    <div class="parallax">
        <div class="darker"></div>
    </div>
@endsection
@section('border')
    <div class="item-category">
        <h1>КОНТАКТЫ</h1>
        <p>Вы можете написать нам в любое время</p>
        <div class="border">
            <div></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">
        <!-- Row-->
        <div class="row">
            <div class="contact-info col-sm-12">
                <div class="col-sm-12 text-center">
                    <h1>ВЫ МОЖЕТЕ</h1>
                </div>
                <hr>
                <div class="col-sm-4 text-left">
                    <h3>найти нас по адресам</h3>
                    <address>
                        <p>57 Mainstreet, MainTower, Barcelona</p>
                    </address>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="phone">
                        <h3>Позвонить нам</h3>
                        <p>+99(004) 987-654-3210</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <div class="email">
                        <h3>Написать на Email</h3>
                        <p>contact@mail.com</p>
                    </div>
                </div>
            </div>
            <!-- Contact us form -->
            <div class="contact_form col-sm-12">
                <div class="col-sm-12">
                    <h3>Отправить сообщение</h3>
                    <p>Даже если сейчас мы не можем вам ответить, вы можете оставь нам сообщение в любое время!</p>
                </div>
                <form id="validForm">
                    <div class="form-group control-group col-sm-6">
                        <span><i class="fa fa-user"></i></span>
                        <input class="form-control" type="text" name="name" minlength="2" placeholder="Имя *">
                    </div>
                    <div class="form-group control-group col-sm-6">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <input class="form-control" type="email" name="email" placeholder="Email адресс *">
                    </div>
                    <div class="form-group control-group col-sm-12">
                        <span><i class="fa fa-pencil"></i></span>
                        <textarea class="form-control" type="text" name="message" placeholder="Сообщение *"></textarea>
                    </div>
                    <div class="form-button col-xs-12">
                        <button type="submit" name="enter" class="btn center-block">
                            Отправить  <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /Contact us form -->
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
            $('.menu-contacts').addClass('menu-active');
        });
    </script>
    <!-- /Content -->
    @endsection