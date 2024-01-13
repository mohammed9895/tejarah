const item1 = document.getElementById('item-1');
const item2 = document.getElementById('item-2');
const item3 = document.getElementById('item-3');

const info1 = document.getElementById('info-1');
const info2 = document.getElementById('info-2');
const info3 = document.getElementById('info-3');
item1.addEventListener('click', function () {
    info1.classList.remove('hidden')
    info2.classList.add('hidden')
    info3.classList.add('hidden')
});
item2.addEventListener('click', function () {
    info2.classList.remove('hidden')
    info1.classList.add('hidden')
    info3.classList.add('hidden')
});
item3.addEventListener('click', function () {
    info3.classList.remove('hidden')
    info1.classList.add('hidden')
    info2.classList.add('hidden')
});

require('vanilla-headless')
