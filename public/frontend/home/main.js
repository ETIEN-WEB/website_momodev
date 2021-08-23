
$(document).ready(function(){
    //$(document).on('submit','#form', function()
    $("#form").on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                
                $(document).find('span.error-text').text('');
                
            },
            success:function(data){
                
                if(data.status == 0 ){
                    
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{

                    document.getElementById('form').reset();
                    swal({
                        title: "Félicitation!",
                        text: "Nous avons réussi votre message",
                        icon: "success",
                        button: "Fermer",
                        });
        
                        $('.swal-button').on('click',function (){
                        /*window.location.href="{{route('contacts')}}";*/
                        });

                    /*document.getElementById('form').reset();
                    alert(data.msg);*/
                    
                    
                    /* $('main_form')[0].reset();
                    alert(data.msg); */
                }
            }
        });

    });

    

    // $(".services").on('click', function(e){
    //     e.preventDefault();

    //     $('.nos_services').css('display', 'block');
    //     $(".services").removeClass("services").addClass("off_services");

    //     $(".off_services").on('click', function(e){
    //         e.preventDefault();
    
    //         $('.nos_services').remove();
    //         $(".off_services").removeClass("off_services").addClass("services");
    //     });
        
    // });

    // $(".off_services").on('click', function(e){
    //     e.preventDefault();

    //     $('.nos_services').remove();
        
    // });


});

$(document).ready(function(){
    $(".services").click(function(){
      $(".nos_services").toggle(800);
    });
  });
