// Function to highlight the active link based on the current section
import { Collapse } from 'flowbite';

// set the target element that will be collapsed or expanded (eg. navbar menu)
const $targetEl = document.getElementById('targetEl');

// optionally set a trigger element (eg. a button, hamburger icon)
const $triggerEl = document.getElementById('triggerEl');

// optional options with default values and callback functions
const options = {
    onCollapse: () => {
        console.log('element has been collapsed');
    },
    onExpand: () => {
        console.log('element has been expanded');
    },
    onToggle: () => {
        console.log('element has been toggled');
    },
};

const instanceOptions = {
    id: 'targetEl',
    override: true
};

/*
 * $targetEl: required
 * $triggerEl: optional
 * options: optional
 */
const collapse = new Collapse($targetEl, $triggerEl, options, instanceOptions);

$triggerEl.addEventListener('click', function () {
    collapse.toggle();
})

function highlightActiveLink(entries) {
    entries.forEach(entry => {
        const targetId = entry.target.id;
        const activeLink = document.querySelector(`.nav-container a[href="#${targetId}"]`);

        if (entry.isIntersecting) {
            activeLink.classList.add('border-primary');
            activeLink.classList.remove('border-transparent');
        } else {
            activeLink.classList.add('border-transparent');
            activeLink.classList.remove('border-primary');
        }
    });
}

// Create an Intersection Observer to watch for section visibility
const observer = new IntersectionObserver(highlightActiveLink, { threshold: 0.5 });

// Observe each section
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});


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

