// ...............Option Manu popup toggle function start................

const right_sidebar = document.getElementById("right_sidebar");
function show_hide(){
    right_sidebar.classList.toggle("sidebarShow");
}

window.addEventListener('click', function(event) {
    if (!event.target.matches('.optiontoggle')) {
        if (right_sidebar.classList.contains('sidebarShow')) {
            right_sidebar.classList.remove('sidebarShow');
        }
    }
});
right_sidebar.addEventListener('click', (event) => event.stopPropagation());

// ...............Option Manu popup toggle function end................
