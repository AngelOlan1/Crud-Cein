function deleteUser(userId){
	if(confirm("¿Estas seguro de eliminar este ususario?")) {
		// Enviar una solicitud AJAX al servidor
		var xhr = new XMLHttpRequest();
		xhr.open("POST", "delete_exe.php", true);
		xhr.setRequestHeader("content-Type", "appication/x-www-form-urlencoded");
		xhr.onreadystatechange = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				location.reload();
			}
		};
		xhr.send("id=" + userId);
	}
}