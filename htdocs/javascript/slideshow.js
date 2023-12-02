// Set which slide to show first
var slideNum = 1;

// Call function to display slide
showPicSlide(slideNum);

// Back/forward
function moveSlide(n) {
	showPicSlide(slideNum += n);
}

function showPicSlide(n) {
	// Get class from HTML with the name "picSlide"
	var slides = document.getElementsByClassName("picSlide");
	
	// Fallback to first image if exceeding slide number
	if (n > slides.length) slideNum = 1
	
	// If less than 1, fallback to last slide
	if (n < 1) slideNum = slides.length
  
	// Set all to not display first
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	
	// Show image on current selected slide only
	slides[slideNum-1].style.display = "block";
}