<div class="theDayAnswerModal" id="theDayAnswerModal" wire:ignore.self>
        <div class="back"></div>
        <div class="content">
            <h5>开彩结果（风险控制-当日最大赔损）</h5>
            <a href="javascript:;" id="closetheDayAnswerModal"> <i class="fas fa-times"></i> </a>
            <div class="searchDiv">
                <div class="timeSearch">
                    <input type="time">
                    <button>時間查找</button>
                </div>
                <div class="numberSearch">
                    <input type="text" placeholder="請填入期號">
                    <button>期號查找</button>
                </div>
            </div>
            <div class="table">
                <div class="thead">
                    <div class="tr">
                        <div class="td">時間</div>
                        <div class="td">期號</div>
                        <div class="td">開彩結果</div>
                        <div class="td">操作</div>
                    </div>
                </div>
                <div class="tbody">
                    @foreach($drawResults as $drawResult)
                        <div class="tr">
                            <div class="td"> <p>{{$drawResult->bet_time}} </p> </div>
                            <div class="td"> <p> {{$drawResult->number}} </p></div>
                            <div class="td"> <p>{{$drawResult->ranking}} </p> </div>
                            <div class="td"><button disable>無效</button></div>
                        </div>
                    @endforeach
                </div>
            </div>
           
        </div>
    </div>