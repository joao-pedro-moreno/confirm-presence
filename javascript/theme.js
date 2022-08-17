const body = document.querySelector("#body-theme")
const iconTheme = document.querySelector(".icon-theme")

checkTheme = () => {
    if (localStorage.getItem("theme") == "dark") {
        body.classList.remove("light")
        iconTheme.classList.remove("bxs-moon")
        iconTheme.classList.add("bxs-sun")
    } else if (localStorage.getItem("theme") == "light") {
        body.classList.add("light")
        iconTheme.classList.remove("bxs-sun")
        iconTheme.classList.add("bxs-moon")
    } else {
        localStorage.setItem("theme", "dark")
    }
}

changeTheme = () => {
    if (localStorage.getItem("theme") == "dark") {
        body.classList.add("light")
        iconTheme.classList.remove("bxs-sun")
        iconTheme.classList.add("bxs-moon")
        localStorage.setItem("theme", "light")
    } else if (localStorage.getItem("theme") == "light") {
        body.classList.remove("light")
        iconTheme.classList.remove("bxs-moon")
        iconTheme.classList.add("bxs-sun")
        localStorage.setItem("theme", "dark")
    }
}