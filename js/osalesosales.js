// const eyeicon = document.getElementById("eyeicon");
// const password = document.getElementById("Passw");

// eyeicon.onclick = function(){
    
//     if(password.type == "password"){
//         password.type = "text";
//         eyeicon.src= ".././images/open.png";
//     } else {
//         password.type = "password";
//         eyeicon.src= ".././images/close.png";
//     }
// }

function cambioOjoK (eyeicon, password){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src= ".././images/open.png";
    } else {
        password.type = "password";
        eyeicon.src= ".././images/close.png";
    }
}