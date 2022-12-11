<div id="sideBar">
    <div class="userInfo">
        <i class="fa-solid fa-user"></i>
        <h2>DYM</h2>
        <p>SP20220919015550</p>
    </div>
    <ul>
        <a href="/" class="sideBarLink">平台資訊</a>
        <a href="/" class="sideBarLink">帳款查詢</a>
        <a href="/member_wallet_verify" class="sideBarLink">會員錢包</a>
        <a href="/statistical_data" class="sideBarLink">統計數據</a>
        <a href="javascript:;" class="sideBarLink" id="gameManagementBtn">遊戲管理</a>
        <ul class="smallUl" id="gameManagementUl">
            <a href="{{url('gameStatus')}}" class="li-btn">遊戲狀態</a>
            <a href="{{url('userStatus')}}" class="li-btn">使用者狀態</a>
            <a href="{{url('gameManagement')}}" class="li-btn">遊戲設定</a>
        </ul>
        <a href="/" class="sideBarLink">配置</a>
    </ul>
</div>