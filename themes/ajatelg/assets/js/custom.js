$( document ).ready(function() {
    // Otsime välja paragrahvid, mille class on col-list
    var x = document.getElementsByClassName("col-list");
    var i;
    // Loopime välja leitud paragrahvid
    for (i = 0; i < x.length; i++) {
        var p = x[i];
        // Kui col-list paragrahvidele eelneb tekstilõik, lisatakse sinna ette break-line
        var break_line = document.createElement('br');
        if(p.previousElementSibling !== null){
            if(p.previousElementSibling.nodeName == "P"){ 
                p.before(break_line)
            }
        }
        // Salvestame paragrahvi algse väärtuse
        var headline = $(p).text();
        // Anname referal lingile unikaalse väärtuse (list_{leitud paragrahvi järjenumber})
        var referal = "list_" + i;
        // Listi collapse nupu väärtus ja link
        $(p).html('<a class="btn btn-info" data-toggle="collapse" href="#' + referal + '">' + headline + '</a>');
        // Püüame kinni paragrahvile järgneva elemendi ( ul, millest saab collapsable listi sisu ) 
        var content = x[i].nextElementSibling;
        // `element` is the element you want to wrap
        var parent = content.parentNode;
        // Loome divi contenti ümber
        var wrapper = document.createElement('div');
        $(wrapper).attr({class:"collapse", id: referal});
        // Lisame divi uueks chld elemendiks
        parent.replaceChild(wrapper, content);
        // Lisame content ul loodud divi child elemendiks
        wrapper.appendChild(content);
    }
    
    // eemaldame list-style list itemitelt, mille sees on pilt
    $("img").parents('li').css("list-style", "none");
     
/*    $(".btn").on('click', function(){
        if($(this).hasClass("opened")){
                $(this).removeClass("opened");
            }else{
            $(this).addClass("opened");
            $(this).parent().before(break_line);
            }
        }); */
        
        $(".col-list").on('click', function(){
            if($(this).hasClass("opened")){
                $(this).removeClass("opened");
            }else{
            $(this).addClass("opened");
                }
            });

    // lisame piltidele ümber lingi elemendid ja anname elemendile href ja class väärtused, et
    // saaks neile lisada magnific popup lightboxi
    var images = $('img');
    var j;
    for (j = 0; j < images.length; j++){
        var image = images[j];
        var src = $(image).attr('src');
        var image_wrapper = document.createElement('a');
        $(image_wrapper).attr({class: "image-popup-vertical-fit", href: src});
        parent = image.parentNode;
        parent.replaceChild(image_wrapper, image);
        image_wrapper.appendChild(image);
    }
    
    // magnific popup piltide kuvamiseks suurema kujul
    $('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
    });
});