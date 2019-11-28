function controle()
{
	if(document.getElementById('nom').value.length<1)
		 {
		 	alert('le champs Nom est obligatoire');
		 }
}		
function controle1()
{
	if(document.getElementById('prenom').value.length!<1)
		 {
		 	alert('le champs Prenom est obligatoire');
		 }	
}
	
function controle2()
{
	if(document.getElementById('username').value.length!<1)
		 {
		 	alert('le champs Username est obligatoire');
		 }
}	
	
function controle3()
{
	if(document.getElementById('adresse').value.length!<1)
		 {
		 	alert('le champs Adresse est obligatoire');
		 }
}	
	
function controle4()
{
	if(document.getElementById('tel').value.length!<1)
		 {
		 	alert('le champs Telephone est obligatoire');
		 }
}	
	
function controle5()
{
	if(document.getElementById('email').value.length!<1)
		 {
		 	alert('le champs E-mail est obligatoire');
		 }
}	

function controle6()
{
	if(document.getElementById('password').value.length!<6)
		 {
		 	alert('le champs mot de passe est obligatoire');
		 }
}	
	
function controle7
{
	if (document.getElementById('password1')!= document.getElementById('password1')) 
		{
			alert('Veuillez choisir le meme mot de passe');
		}
}	
	
		
function verif()
{
	controle();
	controle2();
	controle3();
	controle4();
	controle5();
	controle6();
	controle7();
}
