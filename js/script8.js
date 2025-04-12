function MostrarDescripciones(div_acceso){
    let divAcceso = document.getElementById('info_cuadratica_'+div_acceso);
    let divAcceso2 = document.getElementById('info_lineal_'+div_acceso);
    let divAcceso3 = document.getElementById('info_cuartica_'+div_acceso);
    let divAcceso4 = document.getElementById('info_cubica_'+div_acceso);
    // divAcceso.style.display = 'block';
    switch(div_acceso){
        case "a":
            divAcceso.style.display = 'inline-block';
            document.getElementById('info_cuadratica_x2').style.display = 'none';
            document.getElementById('info_cuadratica_b').style.display = 'none';
            document.getElementById('info_cuadratica_x').style.display = 'none';
            document.getElementById('info_cuadratica_c').style.display = 'none';
        break;
            
        case "x2":
            divAcceso.style.display = 'inline-block';
            document.getElementById('info_cuadratica_a').style.display = 'none';
            document.getElementById('info_cuadratica_b').style.display = 'none';
            document.getElementById('info_cuadratica_x').style.display = 'none';
            document.getElementById('info_cuadratica_c').style.display = 'none';
        break;

        case "b":
            divAcceso.style.display = 'block';
            document.getElementById('info_cuadratica_x2').style.display = 'none';
            document.getElementById('info_cuadratica_a').style.display = 'none';
            document.getElementById('info_cuadratica_x').style.display = 'none';
            document.getElementById('info_cuadratica_c').style.display = 'none';
        break;
            
        case "x":
            divAcceso.style.display = 'block';
            document.getElementById('info_cuadratica_x2').style.display = 'none';
            document.getElementById('info_cuadratica_b').style.display = 'none';
            document.getElementById('info_cuadratica_a').style.display = 'none';
            document.getElementById('info_cuadratica_c').style.display = 'none';
        break;

        case "c":
            divAcceso.style.display = 'block';
            document.getElementById('info_cuadratica_x2').style.display = 'none';
            document.getElementById('info_cuadratica_b').style.display = 'none';
            document.getElementById('info_cuadratica_x').style.display = 'none';
            document.getElementById('info_cuadratica_a').style.display = 'none';
        break;

        case "m":
            divAcceso2.style.display = 'block';
            document.getElementById('info_lineal_xlin').style.display = 'none';
            document.getElementById('info_lineal_blin').style.display = 'none';
        break;

        case "xlin":
divAcceso2.style.display = 'block';
            document.getElementById('info_lineal_m').style.display = 'none';
            document.getElementById('info_lineal_blin').style.display = 'none';
        break;

        case "blin":
            divAcceso2.style.display = 'block';
            document.getElementById('info_lineal_xlin').style.display = 'none';
            document.getElementById('info_lineal_m').style.display = 'none';
        break;

        case "act":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;

        case "x4ct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;

        case "cct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "x3ct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "bct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "x2ct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "dct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "x1ct":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
            document.getElementById('info_cuartica_e').style.display = 'none';
        break;
        case "e":
            divAcceso3.style.display = 'block';
            document.getElementById('info_cuartica_x4ct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x3ct').style.display = 'none';
            document.getElementById('info_cuartica_bct').style.display = 'none';
            document.getElementById('info_cuartica_cct').style.display = 'none';
            document.getElementById('info_cuartica_x2ct').style.display = 'none';
            document.getElementById('info_cuartica_dct').style.display = 'none';
            document.getElementById('info_cuartica_x1ct').style.display = 'none';
            document.getElementById('info_cuartica_act').style.display = 'none';
        break;

        case "acb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "x3cb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_acb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "bcb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_acb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "x2cb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_acb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "ccb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_acb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "x1cb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_acb').style.display = 'none';
            document.getElementById('info_cubica_dcb').style.display = 'none';
        break; 

        case "dcb":
            divAcceso4.style.display = 'block';
            document.getElementById('info_cubica_x3cb').style.display = 'none';
            document.getElementById('info_cubica_bcb').style.display = 'none';
            document.getElementById('info_cubica_x2cb').style.display = 'none';
            document.getElementById('info_cubica_ccb').style.display = 'none';
            document.getElementById('info_cubica_x1cb').style.display = 'none';
            document.getElementById('info_cubica_acb').style.display = 'none';
        break; 
    }
}