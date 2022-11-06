const sideBarLink = document.getElementsByClassName('sideBarLink');
const searchBtn = document.getElementById('searchBtn');
const viewDrawBtn = document.getElementById('viewDrawBtn');
const theDayAnswerModal = document.getElementById('theDayAnswerModal');
const closetheDayAnswerModal = document.getElementById('closetheDayAnswerModal');
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
viewDrawBtn.addEventListener('click', ()=>{
    theDayAnswerModal.style.display = "flex";
})
closetheDayAnswerModal.addEventListener('click', ()=>{
    theDayAnswerModal.style.display = "none";
})
window.addEventListener('searched' , e=>{
    
})