@vite('resources/js/app.js')

@yield('scripts')

<!-- statistics script place here -->

@if (strpos($_SERVER['HTTP_HOST'], '.loc') === false && strpos($_SERVER['HTTP_HOST'], '.test') === false && strpos($_SERVER['HTTP_HOST'], 'dev.') === false && strpos($_SERVER['HTTP_HOST'], '.beget.tech') === false && (isset($_SERVER['HTTP_USER_AGENT']) && stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false))
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
<!-- Top.Mail.Ru counter -->

<!-- /Top.Mail.Ru counter -->
@endif