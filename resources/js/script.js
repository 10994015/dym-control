const sideBarLink = document.getElementsByClassName('sideBarLink');
const searchBtn = document.getElementById('searchBtn');
const theDayAnswerModal = document.getElementById('theDayAnswerModal');
const closetheDayAnswerModal = document.getElementById('closetheDayAnswerModal');
const changeResult = document.getElementById('changeResult');
const closeChangeResult = document.getElementById('closeChangeResult');
const changeNumber = document.getElementsByClassName('changeNumber');
const changeResultSubmit = document.getElementById('changeResultSubmit');
let minutes = "";
let seconds = "";
let x = null;
if(window.location.pathname.includes('home')){
    sideBarLink[0].classList.add('focus');
}
if(window.location.pathname.includes('gameManagement')){
    sideBarLink[4].classList.add('focus');
}
window.addEventListener('openSearch', e=>{
    if(e.detail.password == '1'){
        searchBtn.classList.add('open');
        searchBtn.disabled = false;
    }else{
        searchBtn.classList.remove('open');
        searchBtn.disabled = true;
    }
})

function viewDrawFn(){
    theDayAnswerModal.style.display = "flex";
}
closetheDayAnswerModal.addEventListener('click', ()=>{
    theDayAnswerModal.style.display = "none";
})
window.addEventListener('openChangeResultModal', e=>{
    let nowTime = new Date(e.detail.bet_time).getTime();
    document.getElementById('seconds').innerHTML ="";
    document.getElementById('seconds').innerHTML = "";
    minutes = "";
    seconds = "";
    downTime(nowTime);
    
    changeResult.style.display = "flex";
})
closeChangeResult.addEventListener('click',()=>{
    changeResult.style.display = "none";
    clearInterval(x);
})
cancelChangeResult.addEventListener('click', ()=>{
    changeResult.style.display = "none";
    clearInterval(x);
})

changeResultSubmit.addEventListener('click', ()=>{
    let result = new Set();
    let arr = [];
    for(let i=0;i<changeNumber.length;i++){
        if(!result.has(changeNumber[i].value)) {
            result.add(changeNumber[i].value)
        };
    }
    if(result.size < 10){
        Swal.fire(
            '警告',
            '排名請勿重複',
            'warning'
        )
        return;
    }
    arr = Array.from(result);
    console.log(arr);
    
    window.Livewire.emit('changeSubmit', arr);
    Swal.fire(
        '更新成功',
        '',
        'success'
    )
    clearInterval(x);
})


function downTime(nowTime){
    
    x = setInterval(()=>{
        let now = new Date().getTime();
        
        let distance = nowTime - now;
        
        
    
        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;
        if(nowTime < now){
            changeResult.style.display = "none";
            clearInterval(x);
        }
    },1000)
}