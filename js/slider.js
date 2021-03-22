
	
	var slider = ".slider";
	
	//alert(slider.width);

	 function initialize (slider) {
		 
		this.ul = slider.children[0];
		this.li = this.ul.children;
		
		// make <ul> as large as all <li>’s
		this.ul.style.width = (this.li[0].clientWidth * this.li.length) + 'px';
 
		this.currentIndex = 0;

		
	}
	
	
	function goTo (index) {
		// filter invalid indices
		if (index < 0 || index > this.li.length - 1)
		return;
 
		// move <ul> left
		this.ul.style.left = '-' + (100 * index) + '%';
 
		this.currentIndex = index;
	}
	
	
	function goToPrev() {
		goTo(this.currentIndex - 1);
	}
 
	function goToNext () {
		goTo(this.currentIndex + 1);
		
	}
  
  
  
