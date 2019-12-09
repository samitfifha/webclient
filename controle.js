function validate() {
	



	if(document.myform.nom.value.charAt(0)  < 'A' || document.myform.nom.value.charAt(0)  > 'Z'){
		//document.getElementById('erreur').innerHTML = "Le nom doit commencer par une lettre Majuscule";
		//return false;
		alert("Le nom de PRODUIT doit commencer par une lettre Majuscule");
		return false;
	}

if(document.myform.quantite.value.length == 0){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Donner la quantite de produit !!");
		return false;
}



if(document.myform.prix.value.length == 0){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Donner le prix de produit !!");
		return false;
}

if(document.myform.image.value.length == 0){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Donner limage de produit !!");
		return false;
}

if(document.myform.id.value.length == 0){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Donner lID de produit !!");
		return false;
}


if(document.myform.nom.value.length == 0){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Donner le nom de produit !!");
		return false;
}

	if(document.myform.id.value.length != 3){
		//document.getElementById('erreur').innerHTML = "Numéro de téléphone erroné";
		//return false;
		alert("Lid doit etre composé de 3 chiffres !!");
		return false;
	}
	

}