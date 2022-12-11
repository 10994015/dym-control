<div class="statisticalData">
    <div class="title">統計數據</div>
    <div class="ivu-body">
        <div class="left">
            <div class="game-type">
                <p>時間區間</p>
                <input type="date" class="form-control" wire:model='startTime'>
            </div>
            <div>
                <p>&nbsp;</p>
                <p>-</p>
            </div>
            <div class="game-name">
                <p>&nbsp;</p>
                <input type="date" class="form-control" wire:model='endTime'>
            </div>
        </div>
        <div class="right" >
            <button class="search open" id="" >下載報表</button>
        </div>
    </div>
    <div class="content">
        <div class="list list-title">
            <div class="item"><p>會員帳號</p></div>
            <div class="item"><p>下注金額</p></div>
            <div class="item"><p>總碼量</p></div>
            <div class="item"><p>總輸贏</p></div>
            <div class="item"><p>對戰抽水總額</p></div>
            <div class="item"><p>下注時間</p></div>
        </div>
        @if ($total_bet <=0 )
            <div class="list ondata">
                <p>暫無數據</p>
            </div>
        @else
            @foreach ($betList as $bet)
                <div class="list">
                    <div class="item"> {{$bet->user->username}} </div>
                    <div class="item"> {{$bet->money}} </div>
                    <div class="item"></div>
                    <div class="item"> {{$bet->result}} </div>
                    <div class="item">0</div>
                    <div class="item"> {{$bet->created_at}} </div>
                </div>
            @endforeach
        @endif
       
       
       

    </div>
</div>
