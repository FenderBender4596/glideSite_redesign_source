$(document).ready(function() {
	$(".mobile-menu").on('click', function(){
        console.log('menu_toggled');
		$(".mobile-dropdown").slideToggle("fast");
	});
});


// var togByClass = document.getElementById('togClass');
// var addClassToDiv = document.getElementById("mobile");

// togByClass.addEventListener("click", function () {
//     toggleMenu();
// });

// function toggleMenu() {
//     console.log('toggled menu');
//     addClassToDiv.classList.toggle("mobile-menu");
//   }