$( document ).ready(function() {
    // Otsime välja paragrahvid, mille class on col-list
    var x = document.getElementsByClassName("col-list");
    var i;
    // Loopime välja leitud paragrahvid
    for (i = 0; i < x.length; i++) {
        var p = x[i];
        // Salvestame paragrahvi algse väärtuse
        var headline = $(p).text();
        // Listi collapse nupu väärtus ja link
        $(p).html('<a class="btn btn-info" data-toggle="collapse" href="#' + headline.replace(/ /g,"_") + '">' + headline.toUpperCase() + '</a>');
        // Püüame kinni paragrahvile järgneva elemendi ( ul, millest saab collapsable listi sisu ) 
        var content = x[i].nextElementSibling;
        content.outerhtml = '<span>';
        // `element` is the element you want to wrap
        var parent = content.parentNode;
        // Loome divi contenti ümber
        var wrapper = document.createElement('div');
        $(wrapper).attr({class:"collapse", id: headline.replace(/ /g,"_")});
        // set the wrapper as child (instead of the element)
        parent.replaceChild(wrapper, content);
        // set element as child of wrapper
        wrapper.appendChild(content);
    }
});