    <style>
        .container {
            width: 30%;
        }
    </style>

<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" id='email' class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label">Password</label>
            <input type="password" id='password' name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" name="login" id="login" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>

	document.getElementById("login").addEventListener("click", (event)=>{
		event.preventDefault()
		var formData = new FormData()
		const email = document.getElementById("email")
		const password = document.getElementById("password")
	
		formData.append("email", email.value)
		formData.append("password", password.value)
		fetch("index.php?page=login_traitement", {
			method: 'POST',
			body: formData
		})
		.then(response => response.json())
		.then(data => {
			if(data.error){
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: data.error,
					confirmButtonColor: '#34D399',
				});
			}
			if(data.success){
				Swal.fire({
				title: "Success",
				text: data.success,
				confirmButtonColor: '#34D399',
				icon: "success",
				});
				setTimeout(()=>{window.location.href = "index.php?page=dashboard"}, 1000)
			}
		})
	})
</script>