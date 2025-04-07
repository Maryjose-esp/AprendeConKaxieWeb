// const passwordInput = document.querySelector("#Passw");
// const eyeIcon = document.querySelector(".VerNoVer i");
// const log = document.querySelectorById("ver");
// const btnRegistro = document.querySelectorById("registra");

// const requirements = [
//     { regex: /.{8}/, index: 0}, //mínimo 8 carácteres
//     { regex: /.[0-9]/, index: 1},
//     { regex: /.[a-z]/, index: 2},
//     { regex: /.[^A-Za-z0-9]/, index: 3},
//     { regex: /.[A-Z]/, index: 4}
// ]

// passwordInput.addEventListener("keyup", (e) => {
//     requirements.forEach(item => {
//     const isValid= item.regex.test(e.target.value);
//     const requirementItem = requirementList[item.index];

//     if(isValid) {
//         requirementItem.classList.add("valid");

//         log.textContent = e.srcElement.value;
//     } else {
//         requirementItem.classList.add("valid");
//         btnRegistro.disabled = false;
//     }
//     })
// });

// eyeIcon.addEventListener("click", () => {
//     //cambiar entre password y text
//     passwordInput.type = passwordInput.type === "password" ? "text" : "password";

//     //cambiar el icono de clase basado en el input type
//     eyeIcon.className = `fa-solid fa-eye${passwordInput.type === "password" ? "" : "-slash"}`;
// });


function validarPassword(password, btnRegistro){
    const decimal = /^(?=-*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;


    if(password.value.match(decimal)){
        alert("La contraseña es permitida.");
        btnRegistro.disabled=false;
    } else {
        alert(password.value);
        btnRegistro.disabled=true;
    }
};
//91{}+dAa