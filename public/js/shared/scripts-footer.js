if ($(window).width() < 768) {
    $(".company-details").addClass('footer');
    $(".options-list").insertBefore(".company-details");
}

$(window).on('resize', function(){

    if ($(window).width() < 768) {
        $(".company-details").addClass('footer');
        $(".options-list").insertBefore(".company-details");
    }

    else{
        $(".company-details").removeClass('footer');
        $(".company-details").insertBefore(".options-list");
    }

});

function recaptchaCallback() {
    $('.send-message').removeClass('disabled-button');
    $('.send-message').removeAttr('disabled');
};

function recaptchaCallback() {
    $('.send-message').removeClass('disabled-button');
    $('.send-message').removeAttr('disabled');
};
