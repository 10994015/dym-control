<div id="changeResult" class="changeResult">
    <div class="back"></div>
    <div class="content">
        <a href="javascript:;" id="closeChangeResult"> <i class="fas fa-times"></i> </a>
        <h4>更改結果</h4>
        <div class="newBet">
            <p>最新一期下注: SR93592211070125</p>
            <p>無下注紀錄</p>
        </div>
        <div class="timeleft">
            <p>操作剩餘時間</p>
            <p>00:00</p>
        </div>
        <div>
            <p>下注總碼量</p>
            <input type="number" disabled value="0">
        </div>
        <div>
            <p>原開獎結果</p>
            <p>10－04－02－08－03－01－09－06－07－05</p>
        </div>
        <div>
            <p>原結果輸贏</p>
            <input type="number" disabled value="0">
        </div>
        <div>
            <p>欲更改結果</p>
            @for($n=1;$n<=10;$n++)
            <input type="number" class="change" min="1" max="10"><span>-</span> 
            @endfor
        </div>
        <div>
            <button class="reCalcBtn">重新計算</button>
        </div>
        <div>
            <p>更改後輸贏</p>
            <input type="number" disabled value="0">
        </div>
        <div class="btnList">
            <button class="cancel" id="cancelChangeResult">取消</button>
            <button class="submit">確定</button>
        </div>
    </div>
</div>