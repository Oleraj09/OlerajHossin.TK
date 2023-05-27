@include('Backend.inc.masterhead')
<div id="app">
    <div class="main-wrapper">
        @include('Backend.inc.navbar')
        @include('Backend.inc.sidebar')
        @yield('content')
    </div>
</div>
@include('Backend.inc.masterfoot')
