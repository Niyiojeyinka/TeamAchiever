
function buttonTransition(control){
 let normalButton = document.querySelector('button[id="preloading"]');
 let loadingButton = document.querySelector('button[id="loading"]');
  if (control) {
    normalButton.style.display="none";
    loadingButton.style.display ="block";
  }else{
  	 normalButton.style.display="block";
    loadingButton.style.display ="none";
  }

}

function registerClicked() {
const display = document.querySelector('div[class="display"]');
	
buttonTransition(true);
let reg = register();
reg.then(function(data){
if (data.error == 1){
	//error occurred
display.innerHTML= "<span class='w3-text-red'>"+data.errorMessage+"</span>";
buttonTransition(false);
}else{
	//success
alert(data.successMessage);
buttonTransition(false);
window.location.assign("login.html");


}

});

return false;
	}

	function loginClicked() {
const display = document.querySelector('div[class="display"]');
	
buttonTransition(true);
let log = login();
log.then(function(data){
if (data.error == 1){
	//error occurred
display.innerHTML= "<span class='w3-text-red'>"+data.errorMessage+"</span>";
buttonTransition(false);
}else{
	//success
alert("Login Successful");
buttonTransition(false);
showDashboard(data);

}

});

return false;
	}


	function showDashboard(user){
let dashboardCode =`<div class='w3-padding'><span class='w3-large'>Welcome </span><br>
<span class='w3-medium'>${user.username}<span>
<br><br><button id='preloading' onclick='logoutClicked()'' class='btn-login w3-btn'>Logout</button>
</div>`;

let dashSpace = document.querySelector('div[class="contact"]');
let topMessage = document.querySelector('p[class="login-msg"]');

dashSpace.innerHTML= dashboardCode;
topMessage.innerHTML ="Continue Your  Journey <br> To The Land Of Your Achievement";
	}

	function logoutClicked(){

		let logout = logOut();
		logout.then(function(data){
         alert("Logged Out Successfully");
//refresh
window.location.assign("login.html");


		});
	}


	function checkSession() {
	
let check = checkLogin();
check.then(function(data){
if (data.error == 0){
	//error occurred
showDashboard(data.user)
}

});

return false;
	}