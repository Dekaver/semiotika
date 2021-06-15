<button type="submit" {{ $attributes->merge(['class' => 'btn btn-lg btn-primary h-10']) }}>
    <span class="far fa-paper-plane"></span>&nbsp;&nbsp;
    {{ $slot }}
</button>
