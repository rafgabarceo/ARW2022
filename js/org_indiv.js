// Get dominant color
// From https://lokeshdhakar.com/projects/color-thief/#getting-started
// Will add DOM manipulation to change colors of description-box and abbr org name to this
const getDominantColor = function(img) {
	const colorThief = new ColorThief();
	// const img = document.querySelector('img');
	let domCol;
	
	// Check if image has completely loaded
	if (img.complete !== null && img.complete) {
		domCol = colorThief.getColor(img);
	} else {
		image.addEventListener('load', function() {
			domCol = colorThief.getColor(img);
		});
	}
	
	console.log(domCol);
}

// TEST
const imagePath = '../assets/arw_cover_bg/cover_bg_noclouds.png';
const img = document.createElement('img');
img.setAttribute('src', imagePath);
img.style.display = 'none';
document.body.appendChild(img);

getDominantColor(img);