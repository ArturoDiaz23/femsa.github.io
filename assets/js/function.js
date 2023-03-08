export{removeSpaces,httpRequestGet,httpRequestPost};


// revome Spaces
const removeSpaces = (cadena) => {  //function revome spaces
    let result = cadena.split(" ").join(""); //search and replace spaces
    return result; //return of string
} 
function confirmar(){
	let result= confirm('Desea eleminar este registro');
	return result
}
//********  HttpRequest  *******************/
//---------------------------------------------------
//-------------------- GET-------------------------------
function httpRequestGet(url,callback) { //function http type GET
    const http = new XMLHttpRequest();
    http.open("get",url,true); //url of file
    http.send(); 

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}
//---------------------------------------------------
//-------------------- POST -------------------------------
function httpRequestPost(url,data,callback) { //function http type POST
    const http = new XMLHttpRequest();
    http.open('POST',url);//url of file
    http.send(data); //data of form

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}