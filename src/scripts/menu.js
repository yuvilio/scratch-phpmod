const menuTrigger = document.querySelector('.menu__switch')

const menuToggle = () => {
  menuTrigger.addEventListener('click', (event) => {
    event.preventDefault()
    menuTrigger.classList.toggle('isOn')
  })
}

export default menuToggle
