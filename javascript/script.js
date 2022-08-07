function openConfirmPage() {
    openInNewTab("../html/confirmPage.html")
}

function openInNewTab(url) {
    var win = window.open(url, "_self")
    win.focus()
}