function toggleMenu(){
    var menu = document.getElementById("toggle");

    if(menu.style.display == 'none' || menu.style.display == ''){
		menu.style.display = "flex";
	}else{
		menu.style.display = "none";
	}
}