(function() {
	
	var SkillsBar = function( bars ) {
		this.bars = document.querySelectorAll( bars );
		if( this.bars.length > 0 ) {
			this.init();
		}	
	};
	
	SkillsBar.prototype = {
		init: function() {
			var self = this;
			self.index = -1;
			self.timer = setTimeout(function() {
				self.action();
			}, 500);
			
			
		},
		select: function( n ) {
			var self = this,
				bar = self.bars[n];
				
				if( bar ) {
					var width = bar.parentNode.dataset.percent;
				
					bar.style.width = width;
					bar.parentNode.classList.add( "complete" );	
				}
		},
		action: function() {
			var self = this;
			self.index++;
			if( self.index == self.bars.length ) {
				clearTimeout( self.timer );
			} else {
				self.select( self.index );	
			}
			
			setTimeout(function() {
				self.action();
			},500);
		}
	};
	
	window.SkillsBar = SkillsBar;
	
})();

(function() {
	document.addEventListener( "DOMContentLoaded", function() {
		var skills = new SkillsBar( ".skillbar-bar" );
	});
})();







const $ = e => document.querySelector(e);
const $$ = e => document.querySelectorAll(e);
const cursor = $(".custom-cursor");
// Cursor Event
/* ========== */
window.addEventListener("mousemove", ({pageY: Y, pageX: X}) => {
  cursor.style.top = `${Y}px`;
  cursor.style.left = `${X}px`;
})








function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}