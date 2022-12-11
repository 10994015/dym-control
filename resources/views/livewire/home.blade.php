<div id="home">
    <div class="title">平台資訊</div>
    <div class="information">
        <div class="item">
            <h2>平台資訊</h2>
            <p>{{Auth::user()->username}}</p>
        </div>
        <div class="item">
            <h2>最後登入IP</h2>
            <p>{{$login_record->login_ip}}</p>
        </div>
        <div class="item">
            <h2>最後登入時間</h2>
            <p>{{$login_record->login_time}}</p>
        </div>
    </div>
</div>
