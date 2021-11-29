<section class="section" data-section="about-me-section">
    <div class="container">
        <div class="section-heading">
            <h2>{{ __('index.about-me.title') }}</h2>
            <div class="line-dec"></div>
            <span>
                {{ __('index.about-me.content') }}
            </span>
        </div>
        <div class="left-image-post">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        @include('partials.image-conversion', [
                            'path' => 'img/about/laravel-logo.png',
                            'alt' => 'laravel',
                        ])
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-text">
                        <h4>{{ __('index.about-me.framework.title') }}</h4>
                        <p>{{ __('index.about-me.framework.content') }}</p>
                        <div class="white-button">
                            <a href="https://laravel.com//" target="__blank">Laravel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-image-post">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-text">
                        <h4>{{ __('index.about-me.cms.title') }}</h4>
                        <p>{{ __('index.about-me.cms.content') }}</p>
                        <div class="white-button">
                            <a href="https://backpackforlaravel.com/" target="__blank">{{ __('index.about-me.cms.button') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        @include('partials.image-conversion', [
                            'path' => 'img/about/backpack-cms.png',
                            'alt' => 'backpack-cms',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
