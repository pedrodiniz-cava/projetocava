document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const remember = document.getElementById('remember').checked;

        if (email === "" || password === "") {
            alert("Por favor, preencha todos os campos antes de prosseguir.");
            return;
        }

        console.log("--- Tentativa de Login ---");
        console.log("Email:", email);
        console.log("Senha:", "********"); 
        console.log("Lembrar por 30 dias:", remember ? "Sim" : "Não");

        const btn = document.querySelector('.btn-login');
        const originalText = btn.innerText;
        
        btn.innerText = "Verificando...";
        btn.style.opacity = "0.7";
        btn.disabled = true;

        setTimeout(() => {
            alert("Login realizado com sucesso na interface Prime Cater!");
            
            btn.innerText = originalText;
            btn.style.opacity = "1";
            btn.disabled = false;
        
        }, 1500);
    });
});