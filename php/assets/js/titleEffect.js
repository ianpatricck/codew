const title = document.querySelector('h1')

function titleEffect(element) {
    const titleArray = element.innerHTML.split('')
    element.innerHTML = ''
    titleArray.forEach((char, i) => {
        setTimeout(() => {
            element.innerHTML += char
        }, 75 * i)
    });
}

titleEffect(title)