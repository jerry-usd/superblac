




function listings() {

document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
	
var data="type=listings";

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', '../php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
		 }
	xhr.send(data);
	


}

function blog() {

document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=blog";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
     }
  xhr.send(data);
  


}
function house() {

document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=house";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
     }
  xhr.send(data);
  


}

function home() {

document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=home";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
     }
  xhr.send(data);
  


}
home();



function add(argument) {
	document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
	
var data="type=addlistings";

     
     
		 var xhr = new XMLHttpRequest();
		 xhr.open('POST', '../php/master.php', true);
		 xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		 xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;


$(document).ready(function() {
  $('#summernote').summernote();
});


  $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
           document.getElementById('imgGallery').innerHTML='';
           document.getElementById('kki').style.display='block';
           document.getElementById('uploadbtn').style.display='none';
            var filesAmount = input.files.length;
                 console.log(filesAmount);
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100px" width="100px" style="margin:10px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(document.getElementById('chooseFile'), 'div.imgGallery');
        
      });
      $('#kki').on('click', function() {
        document.getElementById('chooseFile').value='';
        document.getElementById('imgGallery').innerHTML='';
         document.getElementById('kki').style.display='none';
         document.getElementById('uploadbtn').style.display='block';
        
      });
    });  



		 }
	xhr.send(data);
}



function addb(argument) {
  document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=addblogp";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;


$(document).ready(function() {
  $('#summernote').summernote();
});


  $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
           document.getElementById('imgGallery').innerHTML='';
           document.getElementById('kki').style.display='block';
           document.getElementById('uploadbtn').style.display='none';
            var filesAmount = input.files.length;
                 console.log(filesAmount);
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100px" width="100px" style="margin:10px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(document.getElementById('chooseFile'), 'div.imgGallery');
        
      });
      $('#kki').on('click', function() {
        document.getElementById('chooseFile').value='';
        document.getElementById('imgGallery').innerHTML='';
         document.getElementById('kki').style.display='none';
         document.getElementById('uploadbtn').style.display='block';
        
      });
    });  



     }
  xhr.send(data);
}






function manage(argument) {
	document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=manage";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
     }
  xhr.send(data);
  
}
function manageb(argument) {
  document.getElementById('section').innerHTML="<img src='../images/Fidget-spinner.gif' class='preloader'>";
  
var data="type=manageblogp";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('section').innerHTML=xhr.responseText;
     }
  xhr.send(data);
  
}

function search(argument) {
  var id=arguments[0];
      var data='type=searchL&id='+id;

     document.getElementById('result').innerHTML='Searching....';
     
     
 var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('result').innerHTML=xhr.responseText;
        var markupStr =document.getElementById('summ').innerHTML;
$('#summernote').summernote('code', markupStr);

  $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
           document.getElementById('imgGallery').innerHTML='';
           document.getElementById('kki').style.display='block';
           document.getElementById('uploadbtn').style.display='none';
            var filesAmount = input.files.length;
                 console.log(filesAmount);
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100px" width="100px" style="margin:10px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(document.getElementById('chooseFile'), 'div.imgGallery');
        
      });
      $('#kki').on('click', function() {
        document.getElementById('chooseFile').value='';
        document.getElementById('imgGallery').innerHTML='';
         document.getElementById('kki').style.display='none';
         document.getElementById('uploadbtn').style.display='block';
        
      });
    });  
     }
  xhr.send(data);

        
}




function searchB(argument) {
  var id=arguments[0];
      var data='type=searchB&id='+id;

     document.getElementById('result').innerHTML='Searching....';
     
     
 var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     
        document.getElementById('result').innerHTML=xhr.responseText;
        var markupStr =document.getElementById('summ').innerHTML;
$('#summernote').summernote('code', markupStr);
  $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
           document.getElementById('imgGallery').innerHTML='';
           document.getElementById('kki').style.display='block';
           document.getElementById('uploadbtn').style.display='none';
            var filesAmount = input.files.length;
                 console.log(filesAmount);
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100px" width="100px" style="margin:10px;">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(document.getElementById('chooseFile'), 'div.imgGallery');
        
      });
      $('#kki').on('click', function() {
        document.getElementById('chooseFile').value='';
        document.getElementById('imgGallery').innerHTML='';
         document.getElementById('kki').style.display='none';
         document.getElementById('uploadbtn').style.display='block';
        
      });
    });  
     }
  xhr.send(data);

        
}
function submitL() {
  var title=document.getElementsByName("title")[0].value;
  var price=document.getElementsByName("price")[0].value;
  var location=document.getElementsByName("location")[0].value;
  var category=document.getElementsByName("category")[0].value;
  var type=document.getElementsByName("type1")[0].value;
  var markupStr = $('#summernote').summernote('code');
       var myFile = document.getElementById('chooseFile'); 
                   var files = myFile.files;
var formElement = document.getElementById('gcpr');
                    // Create a FormData object
                    var formData = new FormData(formElement);


                    // Select only the first file from the input array
                    var file = files[0]; 

                    

                    // Add the file to the AJAX request
                    var ins = document.getElementById('chooseFile').files.length;
for (var x1 = 0; x1 < ins; x1++) {
    formData.append("chooseFile[]", document.getElementById('chooseFile').files[x1]);
}
                    
                   
                    formData.append('type', 'insertL');
                    formData.append('details', markupStr);
                    
                    



                    // Set up the request
                    var xhr = new XMLHttpRequest();

                    // Open the connection
                    xhr.open('POST', '../php/master.php', true);

                    // Set up a handler for when the task for the request is complete
                    xhr.onload = function () {
                    

                      console.log(xhr.responseText.replace(/\r?\n|\r/g,''));
                      if (xhr.responseText.replace(/\r?\n|\r/g,'') =='alert-success') {
                       iziToast.success({
    title: 'Listing Added!',
    message: 'Great Job',
    position: 'topRight'
  });
                      }
                      else{
                                  iziToast.error({
    title: 'An Error Occurred!',
    message: 'Please Check Data',
    position: 'topRight'
  });
           
                      }
      
                    };

                    // Send the data.
                    xhr.send(formData);


}




function submitB() {

  var markupStr = $('#summernote').summernote('code');
       var myFile = document.getElementById('chooseFile'); 
                   var files = myFile.files;
var formElement = document.getElementById('gcpr');
                    // Create a FormData object
                    var formData = new FormData(formElement);


                    // Select only the first file from the input array
                    var file = files[0]; 

                    

                    // Add the file to the AJAX request
                    var ins = document.getElementById('chooseFile').files.length;
for (var x1 = 0; x1 < ins; x1++) {
    formData.append("chooseFile[]", document.getElementById('chooseFile').files[x1]);
}
                    
                   
                    formData.append('type', 'insertB');
                    formData.append('details', markupStr);
                    
                    



                    // Set up the request
                    var xhr = new XMLHttpRequest();

                    // Open the connection
                    xhr.open('POST', '../php/master.php', true);

                    // Set up a handler for when the task for the request is complete
                    xhr.onload = function () {
                    

                      console.log(xhr.responseText.replace(/\r?\n|\r/g,''));
                      if (xhr.responseText.replace(/\r?\n|\r/g,'') =='alert-success') {
                       iziToast.success({
    title: 'Blog Post Added!',
    message: 'Great Job',
    position: 'topRight'
  });
                      }
                      else{
                                  iziToast.error({
    title: 'An Error Occurred!',
    message: 'Please Check Data',
    position: 'topRight'
  });
           
                      }
      
                    };

                    // Send the data.
                    xhr.send(formData);


}




function updateL(argument) {
  var id= arguments[0];
  var title=document.getElementsByName("title")[0].value;
  var price=document.getElementsByName("price")[0].value;
  var location=document.getElementsByName("location")[0].value;
  var category=document.getElementsByName("category")[0].value;
  var type=document.getElementsByName("type1")[0].value;
  var markupStr = $('#summernote').summernote('code');

       var myFile = document.getElementById('chooseFile'); 

                   var files = myFile.files;
var formElement = document.getElementById('gcpr');
                    // Create a FormData object
                    var formData = new FormData(formElement);


                    // Select only the first file from the input array
                       
            var file = files[0]; 

                    

                    // Add the file to the AJAX request
                    var ins = document.getElementById('chooseFile').files.length;
for (var x1 = 0; x1 < ins; x1++) {
    formData.append("chooseFile[]", document.getElementById('chooseFile').files[x1]);
}
     
        
       
                   
                    formData.append('type', 'updateL');
                    formData.append('details', markupStr);
                    formData.append('id', id);
                    
                    



                    // Set up the request
                    var xhr = new XMLHttpRequest();

                    // Open the connection
                    xhr.open('POST', '../php/master.php', true);

                    // Set up a handler for when the task for the request is complete
                    xhr.onload = function () {
                    

                      console.log(xhr.responseText.replace(/\r?\n|\r/g,''));
                      if (xhr.responseText.replace(/\r?\n|\r/g,'') =='alert-success') {
                       iziToast.success({
    title: 'Listing Updated!',
    message: 'Great Job',
    position: 'topRight'
  });
                      }
                      else{
                                  iziToast.error({
    title: 'An Error Occurred!',
    message: 'Please Check Data',
    position: 'topRight'
  });
           
                      }
      
                    };

                    // Send the data.
                    xhr.send(formData);






}

function updateB(argument) {
  var id= arguments[0];
  
  var markupStr = $('#summernote').summernote('code');

       var myFile = document.getElementById('chooseFile'); 

                   var files = myFile.files;
var formElement = document.getElementById('gcpr');
                    // Create a FormData object
                    var formData = new FormData(formElement);


                    // Select only the first file from the input array
                       
            var file = files[0]; 

                    

                    // Add the file to the AJAX request
                    var ins = document.getElementById('chooseFile').files.length;
for (var x1 = 0; x1 < ins; x1++) {
    formData.append("chooseFile[]", document.getElementById('chooseFile').files[x1]);
}
     
        
       
                   
                    formData.append('type', 'updateB');
                    formData.append('details', markupStr);
                    formData.append('id', id);
                    
                    



                    // Set up the request
                    var xhr = new XMLHttpRequest();

                    // Open the connection
                    xhr.open('POST', '../php/master.php', true);

                    // Set up a handler for when the task for the request is complete
                    xhr.onload = function () {
                    

                      console.log(xhr.responseText.replace(/\r?\n|\r/g,''));
                      if (xhr.responseText.replace(/\r?\n|\r/g,'') =='alert-success') {
                       iziToast.success({
    title: 'Blog Post Updated!',
    message: 'Great Job',
    position: 'topRight'
  });
                      }
                      else{
                                  iziToast.error({
    title: 'An Error Occurred!',
    message: 'Please Check Data',
    position: 'topRight'
  });
           
                      }
      
                    };

                    // Send the data.
                    xhr.send(formData);

}
function qedit(argument) {
  var id =arguments[0];
  manage();
  setTimeout(function (argument) {
    search(id);
  },2000);
 
}
function qedit1(argument) {
  var id =arguments[0];
  manageb();
  setTimeout(function (argument) {
    searchB(id);
  },2000);
 
}
function addf(argument) {


  


     var formElement = document.getElementById('frmp');
                    // Create a FormData object
                    var formData = new FormData(formElement);


                    formData.append('type', 'addf');
                    
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', '../php/master.php', true);
    
     xhr.onload = function () {
      console.log(xhr.responseText);
                  iziToast.success({
    title: 'House Of The week Updated!',
    message: 'Great Job',
    position: 'topRight'
  });
       
     }
  xhr.send(formData);

}