'use strict';

{
    const open = document.getElementById('open');
    const closing = document.getElementById('closing');
    const modal = document.getElementById('modal');
    const mask = document.getElementById('mask');

    open.addEventListener('click',()=>{
        modal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });

    getElementById('closing').addEventListener('click',()=>{
        modal.classList.add('hidden');
        mask.classList.add('hidden');
    });
}