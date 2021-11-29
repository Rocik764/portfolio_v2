<picture>
    <source type="image/webp" srcset="{{ route('image', "{$path}?fm=webp") }}">
    <img src="{{ route('image', "{$path}") }}" alt="{{ $alt ?? "" }}">
</picture>
