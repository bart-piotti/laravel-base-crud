require('./bootstrap');
$('.delete_btn').on('click', function(){
    $(this).next('.form_container').show();
    $('.overlay').show();
    console.log('ok');
})
$('.go_back_btn').on('click', function(){
    $(this).parents('.form_container').hide();
    $('.overlay').hide();
    console.log('ok');
})
