<section class="section" data-section="skills-section">
    <div class="container">
        <div class="section-heading">
            <h2>{{ __('index.skills.title') }}</h2>
            <div class="line-dec"></div>
        </div>
        <div class="skills-isotope-wrapper">
            <form class="isotope-toolbar">
                <label>
                    <input type="radio" data-type="backend" checked="" name="isotope-filter"><span>Backend</span>
                </label>
                <label>
                    <input type="radio" data-type="frontend" name="isotope-filter"><span>Frontend</span>
                </label>
                <label>
                    <input type="radio" data-type="utilities" name="isotope-filter"><span>{{ __('index.skills.utilities') }}</span>
                </label>
            </form>
            <div class="isotope-box">
                <div class="row">

                    {{-- BACKEND --}}
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'PHP.png',
                        'alt' => 'PHP',
                        'title' => 'PHP',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'java.png',
                        'alt' => 'java',
                        'title' => 'Java',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'laravel.png',
                        'alt' => 'laravel',
                        'title' => 'Laravel',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'springboot.png',
                        'alt' => 'springboot',
                        'title' => 'Spring Boot',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'mysql.png',
                        'alt' => 'mysql',
                        'title' => 'MySQL',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'backend',
                        'image' => 'postgresql.png',
                        'alt' => 'postgresql',
                        'title' => 'Postgresql',
                    ])

                    {{-- FRONTEND --}}
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'html.png',
                        'alt' => 'html',
                        'title' => 'HTML5',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'css.png',
                        'alt' => 'css',
                        'title' => 'CSS3',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'scss.png',
                        'alt' => 'scss',
                        'title' => 'Scss',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'js.png',
                        'alt' => 'js',
                        'title' => 'Javascript',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'bootstrap.png',
                        'alt' => 'bootstrap',
                        'title' => 'Bootstrap',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'tailwind.png',
                        'alt' => 'tailwind',
                        'title' => 'Tailwind',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'frontend',
                        'image' => 'vue.png',
                        'alt' => 'vue',
                        'title' => 'Vue',
                    ])

                    {{-- UTILITIES --}}
                    @include('partials.my-skills-item', [
                        'type' => 'utilities',
                        'image' => 'docker.png',
                        'alt' => 'docker',
                        'title' => 'Docker',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'utilities',
                        'image' => 'git.png',
                        'alt' => 'git',
                        'title' => 'Git',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'utilities',
                        'image' => 'intellij.png',
                        'alt' => 'intellij',
                        'title' => 'Intellij',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'utilities',
                        'image' => 'phpstorm.png',
                        'alt' => 'phpstorm',
                        'title' => 'PhpStorm',
                    ])
                    @include('partials.my-skills-item', [
                        'type' => 'utilities',
                        'image' => 'vscode.png',
                        'alt' => 'vscode',
                        'title' => 'Visual Studio Code',
                    ])

                </div>
            </div>
        </div>
    </div>
</section>
