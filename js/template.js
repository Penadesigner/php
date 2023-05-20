/* Apenas um comentário */
 
function mudacor(){  
    let rs = document.getElementById('rs')
    let barraTopo = document.getElementById('barra-topo')
    let menuArea = document.getElementById('area-menu')

    if(rs.innerHTML == 'modo escuro'){
    rs.style.backgroundColor = "white";
    rs.style.color = 'black' 
    rs.innerHTML = 'modo claro' 
    barraTopo.style.backgroundColor = 'black';
    menuArea.style.backgroundColor = 'black';
    } else {
        rs.style.backgroundColor = "black"; 
        rs.style.color = 'white' 
        rs.innerHTML = 'modo escuro' 
        barraTopo.style.backgroundColor = '#7312b9';
        menuArea.style.backgroundColor = 'white';
        }
}

addEventListener('click', mudacor)