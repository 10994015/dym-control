<div class="memberWalletVerify">
    <form action="/member_wallet" method="post" class="">
        @csrf
        <p>請輸入密碼</p>
        @if($errors->count()) {{$error}}  @endif
        <input type="password" placeholder="請輸入密碼" class="form-control" name="pwd">
        <button type="submit" class="btn btn-info">送出</button>
    </form>
</div>
