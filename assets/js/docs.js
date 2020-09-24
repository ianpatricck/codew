var divs = [
    'introduction', 
    'config',
    'cli'
]

divs.forEach((element) => {
    document.querySelector('.' + element).style.display = 'none'
})

document.querySelector('.introduction').style.display = 'block'

function show(className) {
    divs.forEach((element) => {
        document.querySelector('.' + element).style.display = 'none'
    })

    document.querySelector(className).style.display = 'block'
}

