const body = document.querySelector("#body-theme")
const iconTheme = document.querySelector(".icon-theme")

changeTheme = () => {
    body.classList.toggle("light")

    iconTheme.classList.toggle("bxs-sun")
    iconTheme.classList.toggle("bxs-moon")
}