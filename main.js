'use strict';

{
    const open = document.getElementById('open');
    const open2 = document.getElementById('open2');
    const open3 = document.getElementById('open3');
    const close = document.getElementById('close');
    const modal = document.getElementById('modal');
    const mask = document.getElementById('mask');

    open.addEventListener('click',()=>{
        modal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });

    open2.addEventListener('click',()=>{
        modal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });

    open3.addEventListener('click',()=>{
        modal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });

    close.addEventListener('click',()=>{
        modal.classList.add('hidden');
        mask.classList.add('hidden');
    });

    mask.addEventListener('click',()=>{
        close.click();
    })
}