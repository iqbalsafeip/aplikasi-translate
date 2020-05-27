const searchInput = document.getElementById('search-input');
searchInput.addEventListener('keyup', function(e) {
	const { value: keyword } = this;
	let data = document.querySelectorAll('#tabel-data tbody tr');
	data.forEach((trEl) => {
		const word = trEl.getElementsByTagName('td')[0].innerHTML;
		if (!(word.indexOf(keyword) > -1)) {
			trEl.style.display = 'none';
		} else {
			trEl.style.display = '';
		}
	});
});
