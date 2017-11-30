class Navbar{
  constructor(){
    this.bar = $('#main-navbar');
    this.transparentClass = 'navbar-transparent';
	}
  installBar(){;
    this.bar.addClass(this.transparentClass);
    this.installEvents();
	}
  installEvents(){
    var that = this;
		$(window).on('scroll', function(e){
      if( window.scrollY > that.bar.height() ){
        that.bar.removeClass(that.transparentClass);
      }else{
        that.bar.addClass(that.transparentClass);
      }
    });
	}
}

var navbar = new Navbar();

export {navbar};
