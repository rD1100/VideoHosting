$(document).ready(function () {
// date set
    $(function () { 
        $("#datePickerFirst").datepicker({});
     });

     $(function () { 
        $("#datePickerSecond").datepicker({});
      });


      $('#datePickerFirst').change(function () { 
        startDate= $(this).datepicker('getDate');
        $("#datePickerSecond").datepicker("option","minDate",startDate);
       })

       $('#datePickerSecond').change(function () { 
        endDate= $(this).datepicker('getDate');
        $("#datePickerFirst").datepicker("option","maxDate",endDate);
        })

        // end date set

        // footer
        if($(window).height()>$(document.body).height()){
          $('#footer').css({position:"fixed"});
        }else{
          $('#footer').css({position:""});
        }
        // end footer

        // nav user menu dropdown
        
        $('.akunNav  li').hover(function(){
              let isHover = $(this).is(":hover");
              if(isHover){
                $(this).children('.dropDownMenu').stop().slideDown(300);
                // $(this).children('.dropDownMenuNotif').stop().slideDown(300);
              } else {
                $(this).children('.dropDownMenu').stop().slideUp(300);
                // $(this).children('.dropDownMenuNotif').stop().slideUp(300);
              }
         
        });

        $('body').on('click','.ContainerNotifIcon',function () {
             if ($('.dropDownMenuNotif').first().is(':hidden')) {
                $('.dropDownMenuNotif').slideDown(300);
             }else{
              $('.dropDownMenuNotif').slideUp(300);
             }
          
              
          })

          

          $(document).on('click',function (event) { 
              let target =$(event.target);
              if(!target.closest('.ContainerNotifIcon').length && $('.dropDownMenuNotif').is(':visible')){
                $('.dropDownMenuNotif').slideUp(300);
              }
           });
});



