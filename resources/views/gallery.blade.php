@extends('layouts.main')
@section('paralax')
    <div class="parallax">
        <div class="darker"></div>
    </div>
@endsection
@section('border')
    <div class="item-category">
        <h1>Галерея</h1>
        <p>Немного фотографий из нашей автошколы</p>
        <div class="border">
            <div></div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content">

        <!-- Row-->
        <div class="masonry gallery row">

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-1.jpg')}}" itemprop="contentUrl" data-size="1200x1200">
                    <img src="{{asset('images/portfolio/gallery-1.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption  1</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-2.jpg')}}" itemprop="contentUrl" data-size="1200x750">
                    <img src="{{asset('images/portfolio/gallery-2.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 2</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-3.jpg')}}" itemprop="contentUrl" data-size="1200x1200">
                    <img src="{{asset('images/portfolio/gallery-3.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 3</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-4.jpg')}}" itemprop="contentUrl" data-size="1200x750">
                    <img src="{{asset('images/portfolio/gallery-4.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 4</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-7.jpg')}}" itemprop="contentUrl" data-size="1200x750">
                    <img src="{{asset('images/portfolio/gallery-7.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 4</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-5.jpg')}}" itemprop="contentUrl" data-size="1200x750">
                    <img src="{{asset('images/portfolio/gallery-5.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 5</figcaption>
            </figure>
            <!-- /Grid Item-->

            <!-- Grid Item-->
            <figure class="grid-item col-md-4 col-sm-4 col-xs-12">
                <a href="{{asset('images/portfolio/gallery-6.jpg')}}" itemprop="contentUrl" data-size="1200x750">
                    <img src="{{asset('images/portfolio/gallery-6.jpg')}}" itemprop="thumb" alt="Image description" />
                </a>
                <figcaption itemprop="caption description">Image caption 6</figcaption>
            </figure>
            <!-- /Grid Item-->

        </div>
        <!-- /Row -->

        <!-- Load more button -->
        <!-- /Load more button -->

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <!-- Background of PhotoSwipe.
                 It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>
            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">
                <!-- Container that holds slides.
                    PhotoSwipe keeps only 3 of them in the DOM to save memory.
                    Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Root element of PhotoSwipe. Must have class pswp. -->

        <!-- Back to top button -->
        <a href="#" class="back-top btn">
            <i class="fa fa-angle-up fa-2x"></i>
        </a>
        <!-- /Back to top button -->

        <footer id="footer">
            <p>© AutoSchool @php echo date('Y') @endphp. Все права защищены.</p>
        </footer>
        <!-- /Footer -->

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-gallery').addClass('menu-active');
        });
    </script>
    @endsection