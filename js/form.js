$(document).ready(function(){
    
    $('#modals').submit(function(event){
        event.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "php/modal.php",
            data: $(this).serialize()
        }).done(function (){
            $(this).find("input").val("");
            alert("Успешно отправлено!");
            $('.close-popup').click();
            $("#modals").trigger("reset");
        });
        return false;
    });


    $('#mail').submit(function(event){
        event.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "php/mail.php",
            data: $(this).serialize()
        }).done(function (){
            $(this).find("input").val("");
            alert("Успешно отправлено!");
            $("#mail").trigger("reset");
        });
        return false;
    });
       
    $('#modals').submit(function(event){
        event.preventDefault();
        
        $.ajax({
            type: "POST",
            url: "php/telegram.php",
            data: $(this).serialize()
        }).done(function (){
            $(this).find("input").val("");
            alert("Успешно отправлено!");
            $("#mail").trigger("reset");
        });
        return false;
    });
       
});