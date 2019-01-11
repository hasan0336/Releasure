
function signupEye() {
	var abc = document.getElementById("confirm-password");

	if (abc.type === "password"){
		abc.type = "text";}

	else{
	abc.type = "password";}
}


function loginEye() {
	var abc = document.getElementById("user-password");

	if (abc.type === "password"){
		abc.type = "text";}

	else{
	abc.type = "password";}
}

