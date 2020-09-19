function h1Effect(element) {
    const h1Array = element.innerHTML.split('')
    element.innerHTML = ''
    h1Array.forEach((char, i) => {
        setTimeout(() => {
            element.innerHTML += char
        }, 75 * i)
    });
}

const title = document.querySelector('h1')

h1Effect(title)

// ================================


function show(section) {
    // ..
}