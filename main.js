'use strict';

{
    const open = document.getElementById('more');
    const deleter = document.getElementById('eraser');
    const modal = document.getElementById('eraser');
    const close = document.getElementById('eraser');
    const mask = document.getElementById('eraser');

    open.addEventListener('click',()=>{
        modal.classList.add('hidden');
        mask.classList.add('hidden');
    })
}