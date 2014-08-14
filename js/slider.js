$( document ).ready(function() {
    $('.cat1 > .desc').html($('#cat1 > input').val());
     $('.cat2 > .desc').html($('#cat2 > input').val());
     $('.cat3 > .desc').html($('#cat3 > input').val());
    $('.your-class').slick({
        slidesToShow: 1});
    $('.your-class').hide();
    $('#cat1').show();

    $( "#slBlock > ul > li" ).on( "click", function() { alert(111);
        $('.your-class').hide();
        var id = $( this ).attr('class');
        $('#' + id).show();
        $( '.slick-next').trigger('click');
    });

});