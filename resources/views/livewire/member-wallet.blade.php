<div class="memberWallet">
    <div class="title">會員錢包 {{$clientIp}} </div>
    <div class="content">
        <div class="searchBox">
            <input type="text" placeholder="請輸入使用者帳號或手機..." class="form-control" wire:model='searchText' >
        </div>
        <div class="list list-title">
            <div class="item"><p>會員名稱</p></div>
            <div class="item"><p>會員手機</p></div>
            <div class="item"><p>會員錢包</p></div>
            <div class="item"><p></p></div>
            <div class="item"><p></p></div>
        </div>
        @foreach ($users as $user)
        <div class="list">
            <div class="item"><p class="name">{{$user->username}}</p></div>
            <div class="item"><p class="name">{{$user->phone}}</p></div>
            <div class="item">
                <input type="number" value="{{$user->money}}" class="money">
                <button class="btn btn-info storeBtn" value='{{$user->id}}'>儲存</button>
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </div>
        @endforeach
       

    </div>
    <script>
        const storeBtn = document.getElementsByClassName('storeBtn');
        for(let i=0;i<storeBtn.length;i++){
            storeBtn[i].addEventListener('click', storeMemberMoney);
        }
        function storeMemberMoney(e){
            let money = Number(e.target.parentNode.getElementsByClassName('money')[0].value);
            let id = e.target.value;
            console.log(id)
            Swal.fire(
                '更改成功!',
                '',
                'success'
            )
            window.Livewire.emit('updateMemberMoney', id, money);
        }
    </script>
</div>
