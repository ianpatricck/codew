function typeWriter(element) {
    const textArray = element.innerHTML.split('')
    element.innerHTML = ''
    textArray.forEach((char, i) => {
        setTimeout(() => {
            element.innerHTML += char
        }, 75 * i)
    });
}

const title = document.querySelector('h1')

typeWriter(title)