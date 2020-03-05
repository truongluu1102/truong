// JavaScript Document

     function readImage() {
        var output = document.getElementById('upload_image');
        output.src = URL.createObjectURL(event.target.files[0]);
		
        }