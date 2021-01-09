// Pour avoir la barre de défilement en bas du chat en JS, il faut mettre ce script :

<script>
	function updateScroll() {
		var element = document.getElementById("");
		element.scrollTop = element.scrollHeight;
	}

	$(document).ready(() => {
		updateScroll()
	})
</script>
