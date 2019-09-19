
async function sendRequest(url,data){

function formEncode(obj) {
var str = [];
for(var p in obj)
str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
return str.join("&");
}

var dat = await fetch(url, {
method: 'POST',
headers: { "Content-type": "application/x-www-form-urlencoded"},
body: formEncode(data)
}).then(res => res.json())
.then(response => JSON.stringify(response))
.catch(error => console.error('Error: '+error));

return JSON.parse(dat);

}


function register() {
    var username = document.querySelector('input[name="username"]').value;
	var password = document.querySelector('input[name="password"]').value;
	var email = document.querySelector('input[name="email"]').value;

	let data = {username:username,email:email,password:password};
	let url = 'https://cors-anywhere.herokuapp.com/https://intense-lowlands-41245.herokuapp.com/api.php/register';
//let url='http://localhost/w/backend17/api.php/register';

	return sendRequest(url,data);
	
	
}


function login() {
	var password = document.querySelector('input[name="password"]').value;
	var email = document.querySelector('input[name="email"]').value;

	let data = {email:email,password:password};
	let url = 'https://cors-anywhere.herokuapp.com/https://intense-lowlands-41245.herokuapp.com/api.php/login';
//let url='http://localhost/w/backend17/api.php/login';
	return sendRequest(url,data);
	
	
}



function logOut() {
	
	let data = {};
	let url = 'https://cors-anywhere.herokuapp.com/https://intense-lowlands-41245.herokuapp.com/api.php/logout';
    //let url='http://localhost/w/backend17/api.php/logout';
	return sendRequest(url,data);
	
	
}


function checkLogin() {
	
	let data = {};
	let url = 'https://cors-anywhere.herokuapp.com/https://intense-lowlands-41245.herokuapp.com/api.php/dashboard';
    //let url='http://localhost/w/backend17/api.php/dashboard';
	return sendRequest(url,data);
	
	
}
