
const btn = document.querySelector ('.js-btn-menu');
const sidebarList = document.querySelector ('.js-sidebar');
const sidebarListBg = document.querySelector ('.js-sidebar-bg');
const body = document.body;


btn.addEventListener ('click', ()=> {
    btn.classList.toggle('js-btn-menu-open');
    sidebarList.classList.toggle('js-sidebar-open');
    sidebarListBg.classList.toggle('js-sidebar-openBg');
    body.classList.toggle('js-body-scroll');
});



window.addEventListener('resize', ()=>{
    btn.classList.remove('js-btn-menu-open');
    sidebarList.classList.remove('js-sidebar-open');
    sidebarListBg.classList.remove('js-sidebar-openBg');
    body.classList.remove('js-body-scroll');
})
