@if (session()->has('flash_notification.message'))
	<script>
		swal({
			title: "Admin",  
			text: "{{ session('flash_notification.message') }}",  
			 type: "{{ session('flash_notification.level') === 'danger' ? 'error' : session('flash_notification.level') }}", 
			 // timer: 2000,
			 showConfirmButton: true,
			 confirmButtonText: 'Okay'
		});
	</script>
@endif