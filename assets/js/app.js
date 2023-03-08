import{removeSpaces,httpRequestGet,httpRequestPost} from './function.js';
console.log('funciona');


//activa la pagina activa
const active = (item) =>{
    let a = document.querySelectorAll('a.nav-link');
    a.forEach(element => { 
        if(element==item) { 
        item.classList.add('nav-link-active')
        }else{
          element.classList.remove('nav-link-active') 
        }
    });
}

//función para cargar el contenido.
const content = (items) =>{ 
    const content = document.getElementById("contenido"); //select section tag to upload content

    switch (items) {
        case 'Personaloperativo':
            httpRequestGet('assets/contenido/administrador/pOperativo.html',function () { //function callback
                content.innerHTML=this.responseText;
            });
            let a = document.getElementById('p-operativo');
            active(a);
        break;

        case 'Capacitaciones':
            httpRequestGet('assets/contenido/administrador/capacitaciones.html',function () {
                content.innerHTML=this.responseText;
            });
            let b = document.getElementById('p-cursos');
            active(b);
        break;

        case 'Búsqueda':
            httpRequestGet("assets/contenido/administrador/filtro.html",function () {
                content.innerHTML=this.responseText;
            });
            let c = document.getElementById('p-filtro');
            active(c);
        break;
           
    
        default:
            break;
    }
}

// cargar contenido
const loadContent = () =>{
    const items = document.getElementById('list');
    items.addEventListener('click',(e)=>{
        if (e.target && e.target.tagName==='A') {
            //console.log(e.target)
            let itemPosition = removeSpaces(e.target.innerText);
            //console.log(itemPosition);
            content(itemPosition);
        }
    });
}

//obtener datos url



document.addEventListener('DOMContentLoaded',loadContent,true);