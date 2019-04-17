@extends('layouts.main')
@section('paralax')
    <div class="parallax">
        <div class="darker"></div>
    </div>
    @endsection
@section('border')
    <div class="item-category">
        <h1>blog</h1>
        <p>There are many variations of passages of Lorem Ipsum available</p>
        <div class="border">
            <div></div>
        </div>
    </div>
    @endsection
@section('content')
<div class="content">
    <!-- Row-->
    <div class="masonry row transition">

        <!-- Blog Item -->
        <div class="blog-item timeline col-md6 col-sm-6 col-xs-12">
            <a href="blog-post.html">
                <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
            </a>
            <div class="post-info">
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
        <div class="blog-item timeline col-md6 col-sm-6 col-xs-12">
            <a href="blog-post.html">
                <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
            </a>
            <div class="post-info">
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
        <div class="blog-item timeline col-md6 col-sm-6 col-xs-12">
            <a href="blog-post.html">
                <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
            </a>
            <div class="post-info">
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
        <div class="blog-item timeline col-md6 col-sm-6 col-xs-12">
            <a href="blog-post.html">
                <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
            </a>
            <div class="post-info">
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
        <div class="blog-item timeline col-md6 col-sm-6 col-xs-12">
            <a href="blog-post.html">
                <img src="{{asset('images/blog/blog.jpg')}}" alt="Image description">
            </a>
            <div class="post-info">
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
        <li><a class="btn" href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
        <li><a class="btn" href="#">Next <i class="fa fa-angle-right"></i></a></li>
    </ul>
    <!-- /Pagination-->

    <!-- Back to top button -->
    <a href="#" class="back-top btn">
        <i class="fa fa-angle-up fa-2x"></i>
    </a>
    <!-- /Back to top button -->

    <!-- Footer -->
    <footer id="footer">
        <p>© Your name 2016. All rights reserved.</p>
    </footer>
    <!-- /Footer -->
</div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#header').removeClass('fixed');
        });
    </script>
    @endsection