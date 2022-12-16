<div class="viewbill">
    <div class="title">帳款查詢</div>
    <div class="bill-list">
        <div class="bill">
            <p>總注單量</p>
            <p>{{$total_bet_amount}}</p>
        </div>
        <div class="bill">
            <p>下注總碼量</p>
            <p>{{$bet_total_chip_size}}</p>
        </div>
        <div class="bill">
            <p>下注總輸贏</p>
            <p style="color:@if($bet_total_win < 0) green @elseif($bet_total_win > 0) red @endif">{{$bet_total_win}}</p>
        </div>
        <div class="bill">
            <p>下注總抽水</p>
            <p>{{$bet_total_rake}}</p>
        </div>
    </div>
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
            <button class="search open" id="downloadExcel" >下載報表</button>
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">詳細</th>
            <th scope="col">平台登入帳號</th>
            <th scope="col">平台登入名稱</th>
            <th scope="col">總注單量</th>
            <th scope="col">總碼量</th>
            <th scope="col">總輸贏</th>
            <th scope="col">對戰抽水總額</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="col">#</td>
            <td scope="col">{{Auth::user()->username}}</td>
            <td scope="col">{{Auth::user()->name}}</td>
            <td scope="col">{{$total_bet_amount}}</td>
            <td scope="col">{{$bet_total_chip_size}}</td>
            <td scope="col" style="color:@if($bet_total_win < 0) green @elseif($bet_total_win > 0) red @endif">{{$bet_total_win}}</td>
            <td scope="col">{{$bet_total_rake}}</td>
          </tr>
        </tbody>
      </table>

      <script>
        const downloadExcel = document.getElementById('downloadExcel');
       
        downloadExcel.addEventListener('click',()=>{
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("table"));
        })
        
        </script>
</div>
