<div id="gameManagement" >
    <div class="title">遊戲設定</div>
    <div class="ivu-body">
        <div class="left">
            <div class="game-type">
                <p>遊戲類型</p>
                <select wire:model="selectGameType" wire:change="changeGameType">
                    <option value="-1" selected >遊戲類型</option>
                    @foreach($gameTypes as $type)
                    <option value="{{$type->id}}">{{$type->typename}}</option>
                    @endforeach
                </select>
            </div>
            <div class="game-name"  wire:change="changeGame">
                <p>遊戲名稱</p>
                <p wire:loading class="loading" wire:target="changeGame">Loading...</p>
                <select wire:model="selectGame" wire:loading.remove>
                    <option value="-1" selected>遊戲名稱</option>
                    @foreach($games as $game)
                    <option value="{{$game->id}}">{{$game->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="right">
            <button class="search" id="searchBtn" disabled wire:click="searchFn">搜尋</button>
            <button class="unlock">解鎖編輯</button>
        </div>
    </div>
    <div class="content">
        <div class="gameName"><h2>60秒飛機競速</h2></div>
        <div class="tableBox">
            <table class="table table-bordered">
                <tr>
                    <td class="table-title">開彩資訊</td>
                    <td class="table-content">content.</td>
                </tr>
            </table>
        </div>
    </div>
    
</div>
