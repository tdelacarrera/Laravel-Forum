<div class="navbar">
    <a href="{{ route('forum.categories.index') }}">Home</a>
    @guest
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
    @else
        <a href="">Profile</a>
        <a href="">Logout</a>
    @endguest
    <a href="">Search</a>
    <a href="">Memberlist</a>
    <a href="">FAQ</a>
    <a href="">Messages</a>
</div>