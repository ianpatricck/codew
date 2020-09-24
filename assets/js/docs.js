var divs = [
    'introduction', 
    'config',
    'app'
]

divs.forEach((element) => {
    document.querySelector('.' + element).style.display = 'none'
})

document.querySelector('.app').style.display = 'block'

function show(className) {
    divs.forEach((element) => {
        document.querySelector('.' + element).style.display = 'none'
    })

    document.querySelector(className).style.display = 'block'
}

