/**
 * Get the dominant color of an image using ColorThief API 
 * and return it as an array of three integers or [r, g, b].
 * Adopted from https://lokeshdhakar.com/projects/color-thief/#getting-started
 * @param {HTMLElement} img HTML image element with the image to get dominant color from
 * @returns [Object] array of 3 integers as the RGB value
 */
const getDominantColorFromImage = function(img) {
	const colorThief = new ColorThief();
	// const img = document.querySelector('img');
	let domCol;
	
	// Check if image has completely loaded
	if (img.complete !== null && img.complete) {
		domCol = colorThief.getColor(img);
	} else {
		img.addEventListener('load', function() {
			domCol = colorThief.getColor(img);
		});
	}
	
	console.log(domCol);
	return domCol; 
}

/**
 * 
 * @param {Object} rgb RBG value to lighten/darken as an array of 3 integers
 * @param {Number} offset amount to lighten/darken by
 * @return [Object] an array of 3 integers as RGB value
 */
const lightenDarkenRGB = function(rgb, offset) {
	const r = ((rgb[0] + offset >= 0) && (rgb[0] + offset  <= 255)) ? rgb[0] + offset : (offset > 0 ? 255 : 0);
	const g = ((rgb[1] + offset >= 0) && (rgb[1] + offset  <= 255)) ? rgb[1] + offset : (offset > 0 ? 255 : 0);
	const b = ((rgb[2] + offset >= 0) && (rgb[2] + offset  <= 255)) ? rgb[2] + offset : (offset > 0 ? 255 : 0);
	return [r, g, b];
}

/**
 * Code majorly adopted from https://stackoverflow.com/a/37657940
 * Converts RGB value to HSL, shifts hue by the specified
 * shift degrees on the color wheel and then converts to RGB, 
 * giving shifted color as a RGB value
 * @param  {Object} rgb array of 3 integers as RGB value
 * @param {Number} shift amount to shift between between 0 to 360 degrees 
 * @return [Object] : shifted color as a RGB value
 */
 const shiftRGBOnColorWheel = function(rgb, shift) {	
	// Convert RGB to HSL
	// Adapted from answer by 0x000f http://stackoverflow.com/a/34946092/4939630
	r = rgb[0] / 255.0;
	g = rgb[1] / 255.0;
	b = rgb[2] / 255.0;
	let max = Math.max(r, g, b);
	let min = Math.min(r, g, b);
	let h, s, l = (max + min) / 2.0;

	if(max == min) {
		h = s = 0;  //achromatic
	} else {
		let d = max - min;
		s = (l > 0.5 ? d / (2.0 - max - min) : d / (max + min));

		if(max == r && g >= b) {
			h = 1.0472 * (g - b) / d ;
		} else if(max == r && g < b) {
			h = 1.0472 * (g - b) / d + 6.2832;
		} else if(max == g) {
			h = 1.0472 * (b - r) / d + 2.0944;
		} else if(max == b) {
			h = 1.0472 * (r - g) / d + 4.1888;
		}
	}

	h = h / 6.2832 * 360.0 + 0;

	// Shift hue to opposite side of wheel and convert to [0-1] value
	h+= shift;
	if (h > 360) { h -= 360; }
	h /= 360;

	// Convert h s and l values into r g and b values
	// Adapted from answer by Mohsen http://stackoverflow.com/a/9493060/4939630
	if(s === 0){
		r = g = b = l; // achromatic
	} else {
		let hue2rgb = function hue2rgb(p, q, t){
			if(t < 0) t += 1;
			if(t > 1) t -= 1;
			if(t < 1/6) return p + (q - p) * 6 * t;
			if(t < 1/2) return q;
			if(t < 2/3) return p + (q - p) * (2/3 - t) * 6;
			return p;
		};

		let q = l < 0.5 ? l * (1 + s) : l + s - l * s;
		let p = 2 * l - q;

		r = hue2rgb(p, q, h + 1/3);
		g = hue2rgb(p, q, h);
		b = hue2rgb(p, q, h - 1/3);
	}

	r = Math.round(r * 255);
	g = Math.round(g * 255); 
	b = Math.round(b * 255);

	return [r, g, b];
}

/**
 * Check if a RGB color is dark, and return 1 if is dark, otherwise, 0.
 * @param {Object} rgb array of 3 integers as RGB value
 * @return 1 if `rgb` is dark, 0 if `rgb` is bright
 */
const isRGBDark = function(rgb) {
	// Adopted from https://stackoverflow.com/a/3943023/112731
	// return (rgb[0] * 0.299 + rgb[1] * 0.587 + rgb[2] * 0.114) > 186 ? 1 : 0;
	return (rgb[0] + rgb[1] + rgb[2] / 3) > 186 ? 0 : 1;
}

// document.getElementById('bg-img').addEventListener('load', function(event) {

// Set the corresponding color of the dom-color-* classes in the DOM
const setDomColors = function() {
	// Get dominant color
	const img = document.getElementById('bg-img');
	const domCol = getDominantColorFromImage(img);
	// Darken dominant color
	const rgb = lightenDarkenRGB(domCol, -60);

	// Get equivalent CSS filter. Must import colorToFiler.js first
	// Source: https://codepen.io/sosuke/pen/Pjoqqp 
	const color = new Color(rgb[0], rgb[1], rgb[2]);
	const solver = new Solver(color);
	let filterRes = solver.solve();
	// Redo when color is far off
	while (filterRes.loss >= 5) {
		filterRes = solver.solve();
	}
	console.log(filterRes.filter);

	// Get 1st tetradic color by shifting color by 270 degrees
	let comp = shiftRGBOnColorWheel(rgb, 270);
	
	// Check if rgb is dark, if it is, lighter text color; else darker
	if (isRGBDark(rgb)) {
		$('.description-box').css('color', 'white');
		comp = lightenDarkenRGB(comp, 70);
	} else {
		$('.description-box').css('color', 'black');
	}
	
	$('.dom-color-text').css('color',  `rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`);
	$('.dom-color-bg').css('background-color',  `rgba(${rgb[0]}, ${rgb[1]}, ${rgb[2]}, 0.85)`);
	$('.dom-color-filter').attr('style', filterRes.filter.slice(0,-1) + ' drop-shadow(1px 1px 5px #222);');
	$('.comp-color-text-fill').css('fill', `rgb(${comp[0]}, ${comp[1]}, ${comp[2]})`);
}

// });