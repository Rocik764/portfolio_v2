<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet" />

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
{{--        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />--}}
{{--        <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" />--}}
    </head>
    <body class="antialiased">
    <div id="page-wraper">

        @include('partials.sidebar')
        @include('sections.about-me')
        @include('sections.commercial-experience')
        @include('sections.education')
        @include('sections.my-skills')
        @include('sections.my-work')
        @include('sections.contact-me')

    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--    <script src="{{ asset('js/isotope.min.js') }}"></script>--}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(".main-menu li:first").addClass("active");

        let showSection = function showSection(section, isAnimate) {
            let direction = section.replace(/#/, ""),
                reqSection = $(".section").filter(
                    '[data-section="' + direction + '"]'
                ),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $("body, html").animate(
                    {
                        scrollTop: reqSectionPos
                    },
                    800
                );
            } else {
                $("body, html").scrollTop(reqSectionPos);
            }
        };

        let checkSection = function checkSection() {
            $(".section").each(function() {
                let $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    let currentId = $this.data("section"),
                        reqLink = $("a").filter("[href*=\\#" + currentId + "]");
                    reqLink
                        .closest("li")
                        .addClass("active")
                        .siblings()
                        .removeClass("active");
                }
            });
        };

        $(".main-menu").on("click", "a", function(e) {
            e.preventDefault();
            showSection($(this).attr("href"), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
    </body>
</html>
