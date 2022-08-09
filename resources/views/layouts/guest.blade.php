<!DOCTYPE html>
<html lang="en">
    @include('landing-page.partials.head')
<body>

    @include('landing-page.partials.header')

    <div class="container">
        {{ $slot }}
    </div>
    @include('landing-page.partials.footer')

    <!-- Optional JavaScript -->
    @include('landing-page.partials.scripts')
</body>
</html>