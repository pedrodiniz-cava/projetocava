document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(e) {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if(email === "" || password === "") {
            e.preventDefault();
            alert("Preencha todos os campos!");
        }
    });

});