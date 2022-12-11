const loginWarningText = document.getElementById('loginWarningText');
window.Livewire.emit('watchFail');
window.addEventListener('showWarning', e=>{
    loginWarningText.style.display = 'block';
})
window.addEventListener('closeWarning', e=>{
    loginWarningText.style.display = 'none';
})