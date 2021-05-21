const dropdown = document.getElementsByClassName('dropdown')[0]
const navlink = document.getElementsByClassName('navlink')[0]
dropdown.addEventListener('click', () => {
    navlink.classList.toggle('active')

})
