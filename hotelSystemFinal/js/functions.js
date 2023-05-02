function showMenu(){
    $(".menubtn").click(function(){
        $("#menuList").slideToggle();
        $(".searchBar").slideUp();
    });
    $(".showsearch").click(function(){
        $(".searchBar").slideToggle();
        $("#menuList").slideUp();
    });
    $(".dn").click(function(){
        $("#dinner").slideToggle();
        $("#lunch").slideUp();
        $("#breakfast").slideUp();
    });
    $(".ln").click(function(){
        $("#lunch").slideToggle();
        $("#dinner").slideUp();
        $("#breakfast").slideUp();
    });
    $(".bf").click(function(){
        $("#breakfast").slideToggle();
        $("#lunch").slideUp();
        $("#dinner").slideUp();
    });
}

function hideMenu(){
$("#menuList").slideUp();
}
function hideSearch(){
$(".searchBar").slideUp();
}

function orders(){
$("#orders").slideToggle();
$("#charges").slideUp();    
}
function charges(){
$("#orders").slideUp();
$("#charges").slideToggle();    
}    

function hideform(){
$("#popupForm").slideUp();
}    
function showform(){
$("#popupForm").fadeIn(2000);    
}  
