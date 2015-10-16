<ul class="nav navbar-nav navbar-left">
@if (Auth::check())
    <li>{!! HTML::link(url('categories'), 'Show All Category') !!}</li>
@endif
</ul>

<ul class="nav navbar-nav navbar-right">
@if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }}
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/auth/logout">Logout</a></li>
        </ul>
    </li>
@endif
</ul>
