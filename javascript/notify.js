const notifyDiv = document.querySelector(".notify-div")
const notifyIcon = document.querySelector(".notify-icon")
const notifyTitle = document.querySelector(".notify-title")
const notifyTextContent = document.querySelector(".notify-text")

function notify(notifyType, notifyText, notifyTime) {
    if (notifyType == "success") {
        notifyDiv.classList.remove("notify-error")
        notifyDiv.classList.add("notify-success")
        notifyDiv.style.opacity = "1"
        notifyIcon.classList.add("bxs-check-circle")
        notifyTitle.innerHTML = "Success"
        notifyTextContent.innerHTML = notifyText
        setTimeout(function() {
            notifyDiv.style.opacity = "0"
            notifyIcon.classList.remove("bxs-check-circle")
            notifyDiv.classList.remove("notify-success")
        }, notifyTime * 1000)
    } else if (notifyType == "error") {
        notifyDiv.classList.remove("notify-success")
        notifyDiv.classList.add("notify-error")
        notifyDiv.style.opacity = "1"
        notifyIcon.classList.add("bxs-x-circle")
        notifyTitle.innerHTML = "Error"
        notifyTextContent.innerHTML = notifyText
        setTimeout(function() {
            notifyDiv.style.opacity = "0"
            notifyIcon.classList.remove("bxs-x-circle")
            notifyDiv.classList.remove("notify-error")
        }, notifyTime * 1000)
    }
}