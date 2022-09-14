home
<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Logout">
</form>
