
function Subscribe()
{
	//alert(document.getElementById('email').value);
	//session_start();
	//$_SESSION['flag']=1;
	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('POST', 'subscribe.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//maybe for post req
	http.send(`email=${email}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
			
		}
	}
}
function unSubscribe()
{
	
	//$_SESSION['flag']=2;
	let email = document.getElementById('email').value;
	const http = new XMLHttpRequest();
	http.open('POST', 'unsubscribe.php', true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//maybe for post req
	http.send(`email=${email}`);
	http.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('result').innerHTML = this.responseText;
			
		}
	}
}