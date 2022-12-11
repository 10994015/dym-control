<div id="header" wire:ignore.self >
    <a href="/" class="logo">DYM遊戲</a>
    <div class="warning" id="loginWarningText">警告:有人登入失敗已超過3次</div>
    <form action="{{route('logout')}}" method="post">
        @csrf
        {{--Auth::user()->name--}}
        <button type="submit" class="btn btn-light logout" >登出</button>
    </form>
</div>