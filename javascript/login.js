const passwordInput = document.querySelector("#password-input")
const password = "mostSafetyPassword"

function openInNewTab(url) {
    var win = window.open(url, "_self")
    win.focus()
}

function login() {
    if (passwordInput.value == password) {
        openInNewTab("../html/confirmed.html")
    }
}