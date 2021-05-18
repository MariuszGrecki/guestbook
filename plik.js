const form = document.querySelector("form");
const inputone = document.querySelector(".input__one");
const inputsecond = document.querySelector(".input__second");


form.addEventListener("submit", e => {
    e.preventDefault();

    
    if (inputone.value.length >= 1 && inputsecond.value.length >=1) {
        e.target.submit();
    } else {
        alert("Pola nie mogą być puste");
    }
})