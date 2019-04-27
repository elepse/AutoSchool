@extends('layouts.main')
@section('paralax')
    <div class="parallax">
        <div class="darker"></div>
    </div>
    @endsection
@section('border')
    <div class="item-category">
        <h1>Новости</h1>
        <p>Здесь вы можете прочесть новости о нашей школе</p>
        <div class="border">
            <div></div>
        </div>
    </div>
    @endsection
@section('content')
    <div class="content">

        <!-- Row -->
        <div class="masonry row transition">

            <!-- Blog Item -->
            <div class="blog-item">
                <a href="blog-post.html">
                    <div class="col-md6 col-sm-6 col-xs-12">
                        <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
                    </div>
                </a>
                <div class="post-info col-md6 col-sm-6 col-xs-12">
                    <div class="date">31
                        <span><i class="fa fa-calendar fa-2x"></i>december, 2016</span>
                    </div>
                    <a href="blog-post.html">
                        <h3>Lorem Ipsum</h3>
                    </a>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="text-left col-xs-4">
                        <a href="#" class="">
                            <i class="fa fa-heart">12</i>
                        </a>
                        <i class="fa fa-comments">3</i>
                    </div>
                    <div class="text-right col-xs-8 col-lg-8">
                        <a href="blog-post.html">read
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Blog Item -->

            <!-- Blog Item -->
            <div class="blog-item">
                <a href="blog-post.html">
                    <div class="col-md6 col-sm-6 col-xs-12">
                        <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
                    </div>
                </a>
                <div class="post-info col-md6 col-sm-6 col-xs-12">
                    <div class="date">31
                        <span><i class="fa fa-calendar fa-2x"></i>december, 2016</span>
                    </div>
                    <a href="blog-post.html">
                        <h3>Lorem Ipsum</h3>
                    </a>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="text-left col-xs-4">
                        <a href="#" class="">
                            <i class="fa fa-heart">12</i>
                        </a>
                        <i class="fa fa-comments">3</i>
                    </div>
                    <div class="text-right col-xs-8 col-lg-8">
                        <a href="blog-post.html">read
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Blog Item -->

            <!-- Blog Item -->
            <div class="blog-item">
                <a href="blog-post.html">
                    <div class="col-md6 col-sm-6 col-xs-12">
                        <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
                    </div>
                </a>
                <div class="post-info col-md6 col-sm-6 col-xs-12">
                    <div class="date">31
                        <span><i class="fa fa-calendar fa-2x"></i>december, 2016</span>
                    </div>
                    <a href="blog-post.html">
                        <h3>Lorem Ipsum</h3>
                    </a>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="text-left col-xs-4">
                        <a href="#" class="">
                            <i class="fa fa-heart">12</i>
                        </a>
                        <i class="fa fa-comments">3</i>
                    </div>
                    <div class="text-right col-xs-8 col-lg-8">
                        <a href="blog-post.html">read
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Blog Item -->

            <!-- Blog Item -->
            <div class="blog-item">
                <a href="blog-post.html">
                    <div class="col-md6 col-sm-6 col-xs-12">
                        <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
                    </div>
                </a>
                <div class="post-info col-md6 col-sm-6 col-xs-12">
                    <div class="date">31
                        <span><i class="fa fa-calendar fa-2x"></i>december, 2016</span>
                    </div>
                    <a href="blog-post.html">
                        <h3>Lorem Ipsum</h3>
                    </a>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="text-left col-xs-4">
                        <a href="#" class="">
                            <i class="fa fa-heart">12</i>
                        </a>
                        <i class="fa fa-comments">3</i>
                    </div>
                    <div class="text-right col-xs-8 col-lg-8">
                        <a href="blog-post.html">read
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Blog Item -->

            <!-- Blog Item -->
            <div class="blog-item">
                <a href="blog-post.html">
                    <div class="col-md6 col-sm-6 col-xs-12">
                        <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
                    </div>
                </a>
                <div class="post-info col-md6 col-sm-6 col-xs-12">
                    <div class="date">31
                        <span><i class="fa fa-calendar fa-2x"></i>december, 2016</span>
                    </div>
                    <a href="blog-post.html">
                        <h3>Lorem Ipsum</h3>
                    </a>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="text-left col-xs-4">
                        <a href="#" class="">
                            <i class="fa fa-heart">12</i>
                        </a>
                        <i class="fa fa-comments">3</i>
                    </div>
                    <div class="text-right col-xs-8 col-lg-8">
                        <a href="blog-post.html">read
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Blog Item -->

        </div>
        <!-- /Row -->

        <!-- Pagination-->
        <ul class="pager">
            <li><a class="btn" href="#"><i class="fa fa-angle-left"></i>Назад</a></li>
            <li><a class="btn" href="#"> <i class="fa fa-angle-right"></i>Вперёд</a></li>
        </ul>

        <!-- Back to top button -->
        <a href="#" class="back-top btn">
            <i class="fa fa-angle-up fa-2x"></i>
        </a>

        <footer id="footer">
            <p>© AutoSchool @php echo date('Y') @endphp. Все права защищены.</p>
        </footer>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-news').addClass('menu-active');
        });
    </script>
    @endsection