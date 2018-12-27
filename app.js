$get=(url,data,done,error)=> {


	let Xhr=()=>{
      let xhr = null;   
      if (window.XDomainRequest) {
          xhr = new XDomainRequest(); 
      } else if (window.XMLHttpRequest) {
          xhr = new XMLHttpRequest(); 
      } else {
          alert("Votre navigateur ne gère pas l'AJAX cross-domain !");
      }
      return xhr; 
  }

  xhttp = Xhr();  // xhttp objet de type XMLHttpRequest

  // ancienne méthode
  
  xhttp.onreadystatechange = function(){
	     if (this.readyState == 4 ){
		     if (this.status == 200) done(xhttp)
			     else error(xhttp)
	     }
  }
  
  url += "?"+getUrl(data)+"& cache="+new Date().getTime() ;
  xhttp.open("get", url, true);
  xhttp.send();

}


