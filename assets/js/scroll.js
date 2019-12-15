$(document).ready(function(){
    setBindings();
    clickButton();
});

function setBindings() {
    $("li a").click(function(e){
        e.preventDefault();
        let sectionID = e.currentTarget.id + "Section";

        $("html, body").animate({
             scrollTop: $("#" + sectionID).offset().top
        }, 1000)
    })
}

function clickButton() {
    $(".button").click(function() {
        $('html, body').animate({
            scrollTop: $("#aboutSection").offset().top
        }, 1000);
    });
}


