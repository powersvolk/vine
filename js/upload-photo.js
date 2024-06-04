document.getElementById('upload').addEventListener('change', function (event) {
	const file = event.target.files[0];
	if (file) {
		const reader = new FileReader();
		reader.onload = function (e) {
			const circle = document.getElementById('circle');
			circle.style.backgroundImage = `url(${e.target.result})`;
			circle.style.backgroundSize = 'cover';
			circle.style.backgroundPosition = 'center';
		};
		reader.readAsDataURL(file);
	}
});