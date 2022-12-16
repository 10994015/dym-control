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
            <button class="search open" id="downloadExcel" >下載報表</button>
        </div>
    </div>
    <div class="content">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">會員帳號</th>
                <th scope="col">下注金額</th>
                <th scope="col">總碼量</th>
                <th scope="col">總輸贏</th>
                <th scope="col">對戰抽水總額</th>
                <th scope="col">下注時間</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($betList as $bet)
            <tr>
                <td>{{$bet->user->username}}</th>
                <td>{{$bet->money}}</td>
                <td>{{$bet->chips}}</td>
                <td>{{$bet->result}}</td>
                <td>0</td>
                <td>{{$bet->created_at}}</td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
    </div>

    <script>
        const downloadExcel = document.getElementById('downloadExcel');
       
        downloadExcel.addEventListener('click',()=>{
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("table"));
        })
        
        </script>
</div>
