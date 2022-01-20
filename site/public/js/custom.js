// Owl Carousel Start..................



$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});








// Owl Carousel End..................







$('#contructButtonID').click(function (){

    var contruct_name=$('#contructNameID').val();
    var contruct_number=$('#contructNumberID').val();
    var contruct_email=$('#contructEmailID').val();
    var contruct_massage=$('#contructMassageID').val();

    sendData(contruct_name,contruct_number,contruct_email,contruct_massage);
})



function sendData(contruct_name,contruct_number,contruct_email,contruct_massage){

    axios.post('/sendData',
    {
        contruct_name:contruct_name,
        contruct_number:contruct_number,
        contruct_email:contruct_email,
        contruct_massage:contruct_massage,
    }).then(function (response){


            if(response.status==200 && response.data==1){
                alert(response.status);
            }else {

            }

        }).catch(function (error){

        })

}










































