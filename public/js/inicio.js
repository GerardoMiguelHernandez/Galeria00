$( document ).ready(function(){


$("drop").dropzone({ 
  url: "/admin/imagenes"
});

   $('.parallax').parallax();
  $('.materialboxed').materialbox();
$('.carousel').carousel();
$('.slider').slider({full_width: true});


   $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
  $('.scrollspy').scrollSpy();
  $('.materialboxed').materialbox();
  $('.datepicker').pickadate({
    format: "yyyy/mm/dd",
    language: "es",
    autoclose: true,
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
	
$(".button-collapse").sideNav();
$('.tooltipped').tooltip({delay: 50});

  $('.slider').slider({full_width: true});

  
    $('select').material_select();
    $(".button-collapse").sideNav();


     $('.btn-Search').on('click', function(e){
        e.preventDefault();
        swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Your imaginary file has been deleted.", "success");
  } else {
	    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});   
    });
 
});