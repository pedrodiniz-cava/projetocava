document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if(email === "" || password === "") {
            alert("Preencha todos os campos!");
            return;
        }

        console.log("Email:", email);
        console.log("Senha:", password);

        // Aqui você pode integrar com Laravel (axios ou fetch)
        alert("Login enviado!");
    });

});