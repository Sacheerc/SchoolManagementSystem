var image_tracker='1';
function change(){
	var image=document.getElementById('slider');
	if(image_tracker=='1'){
		image.src="./Assets/Images/Slider/slider_2.png";
		image_tracker='2';
		}
	else if(image_tracker=='2'){
		image.src="./Assets/Images/Slider/slider_3.png";
		image_tracker='3';
		}
	else{
		image.src="./Assets/Images/Slider/slider_1.png";
		image_tracker='1';
		}
	}

	setInterval('change()',8000);