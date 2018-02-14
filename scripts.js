$(document).ready(function(){
    $(".galo_O").draggable({revert: "invalid"});
    $(".galo_X").draggable({revert: "invalid"});
    $(".droppable").droppable();
    $(".btclick").mouseenter(function(){
        $(this).attr("src", "Imagens/btrm.png");
        $(this).attr("style", "width: 300px; height: 90px")
    })

    $(".btclick").mouseleave(function(){
        $(this).attr("src", "Imagens/btrm1.png");
        $(this).attr("style", "width: 321px; height: 96px")
    })

    $(".btclick").click(function(){
        $(".galo_O").animate({  
            top: "45%",
            left: ".6%"
    });

    $(".galo_X").animate({
            top: "45%",
            left: "88.1%"
        });
    })

})