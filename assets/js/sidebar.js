const burger = document.querySelector('.burger');
const nav = document.querySelector('nav');

burger.addEventListener('click', e => {
    burger.dataset.state === 'closed' ? burger.dataset.state = "open" : burger.dataset.state = "closed";
    nav.dataset.state === "closed" ? nav.dataset.state = "open" : nav.dataset.state = "closed";
});