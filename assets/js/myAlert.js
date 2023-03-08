function myAlert(callback,cadena) {
    let html = document.querySelector('body');// tag donde puede ser cambiado
    const elemento  = document.createElement('div');//se crea el tag para el contenido
    elemento.setAttribute('class', 'alert');// se agraga una clase existende en el css
    html.appendChild(elemento);// se agrega el tag como hijo del html
    callback(cadena,elemento);// callback, que lleba la cadane de texto, y la funcion a llamar
}
/** cierra las alertas despues de cieto tiempo */
function closealert(tag){
    setTimeout(function(){tag.classList.remove('alertShow')},5000);
    setTimeout(function(){
        tag.parentNode.removeChild(tag)//Remueve la alerta
    },8000 /*Puede cambiar el tiempo 1000 = 1 segundo */);
}
function openAlert(tag){
    setTimeout(function(){
        tag.classList.add('alertShow')},
        500);
}
/** Funciones para el contenido de las alertas */
/** receben 2 parametor enviador por la función alerta */
function succes(cadena,tag) {//cadena = texto, tag = div 'Contenedor padre'
    openAlert(tag);
    const mensaje = document.createElement('p');// crea un nuevo tag que contendar el mensaje
    mensaje.textContent=cadena; //asigna el valor de la cadena de texto
    mensaje.setAttribute('class', 'succes_alert');//se agrega una clase
    tag.appendChild(mensaje);// se agrega al contenedor padre proveniente en el tag
    closealert(tag); // función para cerrar la alerta... solo se modifica el tiempo
}

function error(cadena,tag) {
    openAlert(tag);
    const mensaje = document.createElement('p');
    mensaje.textContent=cadena;
    mensaje.setAttribute('class', 'error_alert');
    tag.appendChild(mensaje);
    closealert(tag);
}

function info(cadena,tag) {
    openAlert(tag);
    const mensaje = document.createElement('p');
    mensaje.textContent=cadena;
    mensaje.setAttribute('class', 'info_alert');
    tag.appendChild(mensaje);
    closealert(tag); 
}    

function warning(cadena,tag) {
    openAlert(tag);
    const mensaje = document.createElement('p');
    mensaje.textContent=cadena;
    mensaje.setAttribute('class', 'warning_alert');
    tag.appendChild(mensaje);
    closealert(tag);
} 

function confirm_e(cadena,tag,titulo){
    openAlert(tag);
    const mensaje = document.createElement('p');
    mensaje.textContent=cadena;
    mensaje.setAttribute('class', 'confirmar');
    tag.appendChild(mensaje);
}