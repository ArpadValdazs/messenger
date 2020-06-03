
function authCheck(){
	let form = document.getElementById('reg');
	let submit = document.getElementById('submit');
	let err=[];
		let name = document.getElementById('auth_name').value;
		let password = document.getElementById('auth_password').value;
		let email = document.getElementById('auth_email').value;
		if((!name.length)||(name.length>20)||(name.length<6)) {
			err.push(1);
		} else {
		}
		if(err.length==0) {
			submit.removeAttribute('disabled');
			let remove=document.getElementById('alert_block').remove();
		} else {
			let div = form.insertAdjacentHTML('beforeend', '<div class="alert" id="alert_block"><p>Введите правильные данные!</p></div>');
		}
	
}

authCheck();
