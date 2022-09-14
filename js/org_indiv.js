/**
 * Not working.
 * TODO (NEW IDEA):
 * - get a darker shade of the dominant color (use color thief)
 * - change img color
 * - div > img, h1 (filter change img color) OR div > img, div, h1 (subdiv blend multiply to img)
 * - curve text
 * 
 * CSS for changing color of image (img's css)
 * https://www.delftstack.com/howto/css/css-change-image-color/
 * 		filter: opacity(0.4) drop-shadow(0 0 0 red); 
			width: 50%;
 * 
 * CURVE TEXT USING SVG:
 * https://css-tricks.com/snippets/svg/curved-text-along-path/
 * https://stackoverflow.com/a/68518166
 * 
 * 
 * old idea: 
 * 	- TRY using color thief to get dominant colorthen get complementary color
 * 
 * ALTERNATIVE 1:
 * - try adding invisible (hidden) img element in html so we can get the php bg
 * - add img on load event listener here to call the setOrgShortNameColor func
 * - setOrgShortNameColor() details:
 * 		- calls getbrightness func first (pass img to it (this))
 * 		- accdg to brightness, decide to use black or white font color
 * 		- update org short name elemtn's font color to it
 * - modify getbrightness func to draw canvas etc. only
 * 
 * ALTERNATIVE 2:
 * - if luke allows, just use the complementary colors functions from the median website 
 * 		- https://dev.to/producthackers/creating-a-color-palette-with-javascript-44ip
 * - then maybe change description-box's bg color to the dominant color
 * 
 */

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