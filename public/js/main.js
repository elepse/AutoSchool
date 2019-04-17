/*
    01. Fullpage Slider
    02. Page Transitioan
    03. Masonry plugin
    04. Parallax
    05. Mobile Menu Navigation
    06. Back To Top Buttone
    07. PhotoSwipe Gallery
    08. Validate form
*/
jQuery(function () {
    'use strict';
    $(document).ready(function() {
    $('body, .contact_form, .contact-info, .btn').addClass('fadeIn animated');   
    /*Create 'exist' selector*/
    jQuery.exists = function(selector) {
            return ($(selector).length > 0);
        }
    /*==============================*/
    /* 01 - Fullpage Slider */
    /*==============================*/
    if ($.exists('.fullpage')) {
        $('.fullpage').fullpage({
            menu: '#menu',
            autoScrolling: true,
            lockAnchors: false,
            fitToSection: true,
            scrollBar: true,
            scrollingSpeed: 700,
            navigation: true,
        });
    }
    /*==============================*/
    /* 02 - Page Transitioan */
    /*==============================*/
    $('.transition a').on('click', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        if (url != '#' && url != '') {
            $('body').addClass('fadeOut animated');
            setTimeout(function() {
                window.location.href = url;
            }, 800);
        }
    });
    /*==============================*/
    /* 03 - Masonry plugin */
    /*==============================*/
    if ($.exists('.masonry')) {
        var $container = $('.masonry');
        $container.imagesLoaded( function() {
            $container.masonry({
                itemSelector: '.grid-item, .blog-item',
                normalScrollElements: '.mobile-menu-overlay',
                percentPosition: true
            });
            function animate() {
                $('.row img, .post-info').each(function(i) {
                    (function(self, j) {
                        setTimeout(function() {
                            $(self).addClass('fadeInUp animated');
                        }, (j * 150) + 150);
                    })(this, i);
                });
            }
            setTimeout(animate, 700);
        });
    }
    /*==============================*/
    /* 04 - Parallax */
    /*==============================*/
    if ($.exists('.parallax')) {
            $(window).scroll(function(){
            parallax();
        });
    }
    function parallax(){
          var scrolled = $(window).scrollTop();
          $('.item-category').css('padding-top', '0'+(scrolled*.02)+'rem');
          $('.parallax').css('top', '0'-(scrolled*.04)+'rem');
          $('.item-category h1, .item-category p').css('opacity', '1'-(scrolled*.003));
    }
    /*==============================*/
    /* 05 - Mobile Menu Navigation */
    /*==============================*/
    $('.mobile-menu i').on('click', function(){
        $('.mobile-menu-overlay').toggleClass('visible');
    });
    $('.mobile-menu-overlay').find('.dropdown').on('click', function(){
        $(this).next().slideToggle('fast');
        //Hide the other panels
        $(".mobile-submenu").not($(this).next()).slideUp('fast');
    });
    /*==============================*/
    /* 06 - Back To Top Buttone*/
    /*==============================*/
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 1000,
        $back_to_top = $('.back-top');
    //hide or show the "back to top" link
    $(window).scroll(function() {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('back-top-is-visible'): $back_to_top.removeClass('back-top-is-visible back-top-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('back-top-fade-out');
        }
    });
    //smooth scroll to top
    $back_to_top.on('click', function(event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration);
    });
    /*==============================*/
    /* 07 - PhotoSwipe Gallery */
    /*==============================*/
    if ($.exists('.gallery')) {
        var initPhotoSwipeFromDOM = function(gallerySelector) {
            // parse slide data (url, title, size ...) from DOM elements 
            // (children of gallerySelector)
            var parseThumbnailElements = function(el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl, linkEl, size, item;
                for (var i = 0; i < numNodes; i++) {
                    figureEl = thumbElements[i]; // <figure> element
                    // include only element nodes 
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }
                    linkEl = figureEl.children[0]; // <a> element
                    size = linkEl.getAttribute('data-size').split('x');
                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };
                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }
                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }
                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }
                return items;
            };
            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };
            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function(e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;
                var eTarget = e.target || e.srcElement;
                // find root element of slide
                var clickedListItem = closest(eTarget, function(el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });
                if (!clickedListItem) {
                    return;
                }
                // find index of clicked item by looping through all child nodes
                // alternatively, you may define index via data- attribute
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;
                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }
                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }
                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };
            // parse picture index and gallery index from URL (#&pid=1&gid=2)
            var photoswipeParseHash = function() {
                var hash = window.location.hash.substring(1),
                    params = {};
                if (hash.length < 5) {
                    return params;
                }
                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if (!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');
                    if (pair.length < 2) {
                        continue;
                    }
                    params[pair[0]] = pair[1];
                }
                if (params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }
                return params;
            };
            var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery, options, items;
                items = parseThumbnailElements(galleryElement);
                // define options (if needed)
                options = {
                    isClickableElement: function(el) {
                        return (el.tagName === 'SELECT' || el.tagName === 'A');
                    }, // define gallery index (for URL)
                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),
                    getThumbBoundsFn: function(index) {
                        // See Options -> getThumbBoundsFn section of documentation for more info
                        var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect();
                        return {
                            x: rect.left,
                            y: rect.top + pageYScroll,
                            w: rect.width
                        };
                    }
                };
                // PhotoSwipe opened from URL
                if (fromURL) {
                    if (options.galleryPIDs) {
                        // parse real index when custom PIDs are used 
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for (var j = 0; j < items.length; j++) {
                            if (items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        // in URL indexes start from 1
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }
                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }
                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }
                // options
                options.history = false;
                options.bgOpacity = 0.8;
                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            };
            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);
            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }
            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            if (hashData.pid && hashData.gid) {
                openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
            }
        };
        // execute above function
        initPhotoSwipeFromDOM('.gallery');
    }
    /*==============================*/
    /* 08 - Validate form */
    /*==============================*/
    if ($.exists('#validForm')) {
        $("#validForm").validate({
            ignore: ":hidden",
            rules:{
                name:{
                    required: true,
                    minlength: 2,
                    maxlength: 16,
                },
                    email:{
                    required: true,
                    email: true,
                },
                    message:{
                    required: true,
                    minlength: 16,
                },
            },
            messages:{
                name:{
                    required: "<i class='fa fa-times-circle'></i>Please enter your name",
                    minlength: "<i class='fa fa-times-circle'></i>Your name must consist of at least 2 characters",
                    maxlength: "<i class='fa fa-times-circle'></i>The maximum number of characters - 16",
                },
                email:{
                    required: "<i class='fa fa-times-circle'></i>Please enter your email",
                    email: "<i class='fa fa-times-circle'></i>Please enter a valid email address.",
                },
                message:{
                    required: "<i class='fa fa-times-circle'></i>Please write me message",
                    minlength: "<i class='fa fa-times-circle'></i>Your message must consist of at least 16 characters",
                    maxlength: "<i class='fa fa-times-circle'></i>The maximum number of characters - 100 ",
                },
            },
            submitHandler: function (form) {
            $.ajax({
                type: "POST",
                url: "contact.php",
                data: $(form).serialize(),
                success: function (data) {
                    if (data == "Email sent!");
                    $('input, textarea').val('');
                    $('button').html('Email sent <i class="fa fa-envelope-o flip animated"></i>');
                    setTimeout(function(){
                        $('button').html('send  <i class="fa fa-paper-plane"></i>');
                    }, 2000);
                }
            });
            return false;
            }
        });
    }
    });  
})