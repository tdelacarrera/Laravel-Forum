<div class="navbar">
    <a href="{{ route('forum.categories.index') }}">Home</a>
    @guest
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
    @else
        <a href="{{ route('profile.edit') }}">Profile</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
        </form>
    @endguest
    <a href="">Search</a>
    <a href="{{ route('forum.users.index') }}">Memberlist</a>
    <a href="">FAQ</a>
    <a href="">Messages</a>
</div>