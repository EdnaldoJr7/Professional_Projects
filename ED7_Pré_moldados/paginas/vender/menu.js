const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('ativo').forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');    }
})