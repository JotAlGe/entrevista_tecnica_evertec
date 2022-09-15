<nav class="navbar sticky-top bg-light">
    <div class="container-fluid">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" value="Logout" class="navbar-brand">
        </form>
    </div>
</nav>
