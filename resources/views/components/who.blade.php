@if (Auth::guard('web')->check())
    <p>You are logged in as a User.</p>
@else
    <p>You are logged out as a User.</p>
@endif

@if (Auth::guard('admin')->check())
    <p>You are logged in as an Admin.</p>
@else
    <p>You are logged out as an Admin.</p>
@endif
