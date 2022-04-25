<h1>@lang('messages.welcome', ['name'=>rand(1000,9999)])</h1>
<p>Change Language to <a href="{{ route('language-switch', ['language' => 'en']) }}">English</a> / 
    <a href="{{ route('language-switch', ['language' => 'de']) }}">German</a> / <a href="{{ route('language-switch', ['language' => 'es']) }}">Spanish</a></p>