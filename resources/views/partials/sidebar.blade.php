<!-- Sidebar Menu -->
<div class="responsive-nav">
    <i class="fa fa-bars" id="menu-toggle"></i>
    <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
{{--            <div class="image">--}}
{{--                <a href="#"><img src="assets/images/author-image.jpg" alt="" /></a>--}}
{{--            </div>--}}
            <div class="author-content mt-5">
                <h4>Szymon Bury</h4>
                <span>Fullstack Web Developer</span>
            </div>
            <nav class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li><a href="#about-me-section">{{ __('index.about-me.title') }}</a></li>
                    <li><a href="#commercial-experience-section">{{ __('index.experience.title') }}</a></li>
                    <li><a href="#education-section">{{ __('index.education.title') }}</a></li>
                    <li><a href="#skills-section">{{ __('index.skills.title') }}</a></li>
                    <li><a href="#projects-section">{{ __('index.projects.title') }}</a></li>
                    <li><a href="#contact-section">{{ __('index.contact.title') }}</a></li>
                </ul>
            </nav>
            <div class="social-network">
                <ul class="soial-icons">
                    <li><a href="https://github.com/Rocik764" target="_blank"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/szymon-bury-547235213/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="mailto:rsb764@protonmail.com"><i class="fa fa-send"></i></a></li>
                    <li><a href="{{ route('change-locale', __('index.locale')) }}" title="{{ __('index.locale.tip') }}"><i class="fa fa-language"></i></a></li>
                </ul>
            </div>
            <div class="copyright-text">
                <p>© 2021 Szymon Bury</p>
                <a style="color: lightblue" href="https://templatemo.com/tm-531-reflux">Template link</a>
            </div>
        </div>
    </div>
</div>
