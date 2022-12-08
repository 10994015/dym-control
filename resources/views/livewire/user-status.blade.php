<div class="userStatus">
    @php
        $statuArr = [0=>'關閉', 1=>'開啟'];
    @endphp
    <div class="title">使用者狀態</div>
    <div class="content">
        <div class="searchBox">
            <input type="text" placeholder="請輸入帳號..." class="form-control" wire:model='searchText' >
        </div>
        <div class="list list-title">
            <div class="item"><p>使用者名稱</p></div>
            <div class="item"><p>使用者手機</p></div>
            <div class="item"><p>狀態</p></div>
            <div class="item"><p></p></div>
            <div class="item"><p></p></div>
        </div>
        <div class="list" style='background:#f5f5f5'>
            <div class="item"><p class="name">ALL</p></div>
            <div class="item"><p class="name">ALL</p></div>
            <div class="item">
                <button class="btn btn-secondary text-wrap" wire:click='closeAll'>全部關閉</button>
                <button class="btn btn-info ml-5 text-wrap" wire:click='openAll'>全部開啟</button>
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </div>
        @foreach ($users as $user)
        <div class="list">
            <div class="item"><p class="name">{{$user->username}}</p></div>
            <div class="item"><p class="name">{{$user->phone}}</p></div>
            <div class="item">
                <input type="checkbox" wire:change='changeStatuType({{$user->id}})' @if($user->status==1) checked @endif >
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </div>
        @endforeach
       

    </div>
</div>
