
function validaNif(form){
  var dni = form.value;
  var numero
  var let
  var letra
  var expresion_regular_dni
 
  expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
 
  if(expresion_regular_dni.test (dni) == true){
     numero = dni.substr(0,dni.length-1);
     let = dni.substr(dni.length-1,1);
     numero = numero % 23;
     letra='TRWAGMYFPDXBNJZSQVHLCKET';
     letra=letra.substring(numero,numero+1);
     if (letra!=let.toUpperCase()) {
		 document.getElementById('pildni').innerHTML = "<img src=images/fail.png>";
       alert('Dni erroni, la lletra del NIF no es correspon');
     }else{
		document.getElementById('pildni').innerHTML = "<img src=images/Ok.png>";
     }
  }else{
	 document.getElementById('pildni').innerHTML = "<img src=images/fail.png>";
     alert('Dni erroni, format no vàlid');
   }
}


function validaNom(form){	
	//validació nom
	var nom = form.value;
	
	if (nom.toString().length < 3){
		document.getElementById('pilnom').innerHTML = "<img src=images/fail.png>";
		alert("Nom massa curt");
	}else{
		document.getElementById('pilnom').innerHTML = "<img src=images/Ok.png>";
	}
		
}
	
function validaCognoms(form){
	//validació cognoms
	var cognoms = form.value;
	
	if (cognoms.toString().length < 3){
		document.getElementById('pilcog').innerHTML = "<img src=images/fail.png>";
		alert("Cognoms massa curt");
	}else{
		document.getElementById('pilcog').innerHTML = "<img src=images/Ok.png>";
	}
}

function validaTelefon(form){
	//validacio telefon
	var telefon = form.value;

	if(telefon.toString().length != 9){
		document.getElementById('piltel').innerHTML = "<img src=images/fail.png>";
		alert("Telefon incorrecte");
	}else{
		document.getElementById('piltel').innerHTML = "<img src=images/Ok.png>";
	}
}

function validaAdreca(form){
	//validació adreça
	var adreca = form.value;
	
	if(adreca.toString().length==0){
		document.getElementById('piladr').innerHTML = "<img src=images/fail.png>";
		alert("adreça incorrecte");
	}else{
		document.getElementById('piladr').innerHTML = "<img src=images/Ok.png>";
	}
}

function validaAterratges(form){	
	//validació aterratges	
	var aterratges = form.value;
    var controlador = aterratges - Math.floor(aterratges);
    if(( controlador != 0)||(aterratges==0)){
		document.getElementById('pilate').innerHTML = "<img src=images/fail.png>";
        alert("Numero d'aterratges incorrecte");
    }else{
		document.getElementById('pilate').innerHTML = "<img src=images/Ok.png>";
	}
	
}

function validaHores(form){	
	//validacio hores de vol
	var horesvol = form.value;
	var controlador= isNaN(horesvol);
	
	if((controlador == true)||(horesvol==0)){
		document.getElementById('pilhor').innerHTML = "<img src=images/fail.png>";
		alert("hores de vol incorrecte");
	}else{
		document.getElementById('pilhor').innerHTML = "<img src=images/Ok.png>";
	}
	
}


