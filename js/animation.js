function rotatelogo(angle){
	
      angle+=3;
    
      $("#image").rotate(360);
	},20);
}

function hideSpin(){
	    $('#image').fadeOut(3000,'linear');
    
}


// background-image: url('images/background.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size:1920px
// <img src="images/animation/loader.png" id="image" class="loading" />