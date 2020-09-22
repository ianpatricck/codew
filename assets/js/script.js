const title = document.querySelector('h1')

function titleEffect(element) {
    const h1Array = element.innerHTML.split('')
    element.innerHTML = ''
    h1Array.forEach((char, i) => {
        setTimeout(() => {
            element.innerHTML += char
        }, 75 * i)
    });
}

// ================================

titleEffect(title)