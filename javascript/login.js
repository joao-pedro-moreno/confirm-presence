const passwordInput = document.querySelector("#password-input")
const password = "mostSafetyPassword"

function openInNewTab(url) {
    var win = window.open(url, "_self")
    win.focus()
}

function login() {
    if (passwordInput.value === password) {
        notify("success","You will be redirected in a few seconds", 5)
        setTimeout(function() {
            openInNewTab("../html/confirmed.html")
        }, 4000)
    } else {
        notify("error","Wrong password try again", 5)
    }
}