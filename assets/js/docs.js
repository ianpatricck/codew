var divs = [
    'introduction', 
    'config', 
    'app', 
    'cli', 
    'internalf', 
    'url', 
    'inputs', 
    'requests', 
    'sessions', 
    'database'
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

