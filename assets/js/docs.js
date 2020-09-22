function show(className) {
    var div = document.querySelector(className)

    if (div.style.display === 'none') {
        div.style.display = 'block'
    }
}