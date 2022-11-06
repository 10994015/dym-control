const sideBarLink = document.getElementsByClassName('sideBarLink');
const searchBtn = document.getElementById('searchBtn');
const theDayAnswerModal = document.getElementById('theDayAnswerModal');
const closetheDayAnswerModal = document.getElementById('closetheDayAnswerModal');
const changeResult = document.getElementById('changeResult');
const closeChangeResult = document.getElementById('closeChangeResult');
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
window.addEventListener('openChangeResultModal', ()=>{
    changeResult.style.display = "flex";
})
closeChangeResult.addEventListener('click',()=>{
    changeResult.style.display = "none";
})
cancelChangeResult.addEventListener('click', ()=>{
    changeResult.style.display = "none";
})