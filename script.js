const circle = document.getElementById('circle');
const circlestyle = circle.style;

document.addEventListener('mousemove', e => {
    window.requestAnimationFrame(() => {
        circlestyle.top = `${e.clientY - circle.offsetHeight / 2}px`;
        circlestyle.left = `${e.clientX - circle.offsetWidth / 2}px`;
    })
});

//Script erstellt mit YouTube Tutorial