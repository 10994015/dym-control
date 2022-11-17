<div id="header">
    <a href="/" class="logo">DYM遊戲</a>
    <form action="/logout" method="post">
        @csrf
        {{Auth::user()->name}}
        <button type="submit" class="btn btn-light logout" >登出</button>
    </form>
</div>