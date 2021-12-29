<section class="section" data-section="projects-section">
    <div class="container">
        <div class="section-heading">
            <h2>{{ __('index.projects.title') }}</h2>
            <div class="line-dec"></div>
        </div>
        <div class="row">
            <div class="isotope-wrapper">
                <form class="isotope-toolbar">
                    <label>
                        <input type="radio" checked="" data-type="commercial" name="isotope-filter"><span>{{ __('index.projects.commercial') }}</span>
                    </label>
                    <label>
                        <input type="radio" data-type="non-commercial" name="isotope-filter"><span>{{ __('index.projects.noncommercial') }}</span>
                    </label>
                </form>
                <div class="isotope-box">
                    {{-- commercial --}}
                    <div class="isotope-item" data-type="commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/ca_web_app.png',
                                'alt' => 'laravel-web-app',
                            ])
                            <figcaption>
                                <a href="https://gitfront.io/r/rocik/75ba6b89c197af200623f84b85d7c3ce1ed266f5/tradesman-canada-website-ct4/" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="https://ct-4-v1.herokuapp.com/" target="_blank">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <h4>{{ __('index.projects.commercial.first.title') }}</h4>
                                <span>{{ __('index.projects.commercial.first.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/pl_web_app.png',
                                'alt' => 'laravel-training-web-app',
                            ])
                            <figcaption>
                                <a href="https://gitfront.io/r/rocik/9197ae50aff5d14e357196afa7f1cdbaf00df9db/training-polish-app/" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="https://salty-retreat-77378.herokuapp.com/" target="_blank">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <h4>{{ __('index.projects.commercial.second.title') }}</h4>
                                <span>{{ __('index.projects.commercial.second.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/pl_web_app_old_version.png',
                                'alt' => 'laravel-training-web-app-old',
                            ])
                            <figcaption>
                                <a href="https://gitfront.io/r/rocik/68502860d222617da6dc6cb986014f041236b846/training-polish-app-old-version/" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.commercial.third.title') }}</h4>
                                <span>{{ __('index.projects.commercial.third.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    {{-- non commercial --}}
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/laravel_shop_web_app.jfif',
                                'alt' => 'laravel-mvc-shop-project',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/Laravel---MVC_shop_project" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.first.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.first.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/spring_movies_app.png',
                                'alt' => 'spring-movies-web-app',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/Spring-Boot-React---movies_webapp_project" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.second.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.second.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/spring_microservice.jfif',
                                'alt' => 'spring-cloud-microservice',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/spring-cloud-microservice" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.third.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.third.title') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/spring_shop_web_app.jfif',
                                'alt' => 'spring-boot-mvc-shop-project',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/Spring-Boot---MVC_shop_project" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.fourth.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.fourth.title') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/spring_jwt_web_app.jfif',
                                'alt' => 'spring-react-jwt-web-app',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/spring-security-jwt-with-react" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.fifth.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.fifth.title') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="isotope-item" data-type="non-commercial">
                        <figure class="snip1321">
                            @include('partials.image-conversion', [
                                'path' => 'img/projects/laravel-portfolio.jpg',
                                'alt' => 'laravel-portfolio',
                            ])
                            <figcaption>
                                <a href="https://github.com/Rocik764/portfolio_v2" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <h4>{{ __('index.projects.noncommercial.sixth.title') }}</h4>
                                <span>{{ __('index.projects.noncommercial.sixth.content') }}</span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
