const confirmInput = document.querySelector("#confirm-input")

function openConfirmPage() {
    openInNewTab("../html/confirmPage.html")
}

function openInNewTab(url) {
    var win = window.open(url, "_self")
    win.focus()
}

function confirmName() {
    if (confirmInput.value == "") {
        notify("error","Please enter a valid name", 5)
    } else {
        console.log(confirmInput.value)
        notify("success","Name successfully confirmed", 5)
    }
}