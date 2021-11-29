<div class="col-sm-6 col-md-3 skills-isotope-item" data-type="{{ $type }}">
    <div class="service-item">
        @include('partials.image-conversion', [
            'path' => 'img/skills/' . $image,
            'alt' => $alt,
        ])
        <h4>{{ $title }}</h4>
    </div>
</div>
