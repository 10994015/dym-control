const sideBarLink = document.getElementsByClassName('sideBarLink');
const gameManagementBtn = document.getElementById('gameManagementBtn');
const gameManagementUl = document.getElementById('gameManagementUl');
let gameManagementOpen = false;


if(window.location.pathname.includes('gameManagement') || window.location.pathname.includes('gameStatus')){
    sideBarLink[4].classList.add('selected');
    gameManagementUl.classList.add('focus');
    if(window.location.pathname.includes('gameStatus')){
        gameManagementUl.getElementsByClassName('li-btn')[0].classList.add('focus');
    }
    if(window.location.pathname.includes('gameManagement')){
        gameManagementUl.getElementsByClassName('li-btn')[1].classList.add('focus');
    }
}

gameManagementBtn.addEventListener('click',()=>{
    gameManagementOpen  = !gameManagementOpen;
    if(gameManagementOpen){
        gameManagementBtn.classList.add('selected');
        gameManagementUl.classList.add('focus');
    }else{
        gameManagementBtn.classList.remove('selected');
        gameManagementUl.classList.remove('focus');
    }
})

