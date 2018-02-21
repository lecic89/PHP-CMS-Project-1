tinymce.init({ selector: 'textarea' });


// Ovde je za stranicu view all posts, kada cekirani id da cekira sve ostalo checkbox ove na jedan klik id-a... 
$(document).ready(function(){

	$('#selectAllBoxes').click(function(event){

        if(this.checked){

            $('.checkBoxes').each(function(){

                this.checked = true;

            });

        } else {

            $('.checkBoxes').each(function(){

                this.checked = false;

            });

	    }

	});

    // ovo je za loader, trenutno ne radi kako treba popravi kad se vratis na ovaj deo, ne gadja dobro 

    // var div_box = "<div id='load-screen'><div id='loading'></div></div>";

    // $("body").prepend(div_box);

    // $('#load-screen').delay(700).fadeOut(600, function(){
    //    $(this).remove();
    // });




});

// active users on page admin_navigation.php before Home position...
function loadUsersOnline() {

    $.get("functions.php?onlineusers=result", function (data) {

        $(".usersonline").text(data);

    });

}

setInterval(function () {

    loadUsersOnline();

}, 500);



loadUsersOnline();


