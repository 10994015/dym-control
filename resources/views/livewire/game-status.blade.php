<div class="gameStatus">
    @php
        $statuArr = [0=>'關閉', 1=>'開啟'];
    @endphp
    <div class="title">遊戲狀態</div>
    <div class="content">
        <div class="list list-title">
            <div class="item"><p>遊戲名稱</p></div>
            <div class="item"><p>狀態</p></div>
            <div class="item"><p>操作</p></div>
            <div class="item"><p></p></div>
            <div class="item"><p></p></div>
        </div>
        <div class="list">
            <div class="item"><p class="name">60秒飛機競速</p></div>
            <div class="item"><p class="statu @if($airstatuSelectType == 1) open @endif">{{$statuArr[$airstatuSelectType]}}</p></div>
            <div class="item">
                <select name="" id="" wire:model="airstatuSelectType" wire:change="changeStatuType(23)">
                    <option value="1">開啟</option>
                    <option value="0">關閉</option>
                </select>
            </div>
            <div class="item">
            </div>
            <div class="item">
            </div>
        </div>
    </div>
</div>
