$(window).ready(function(){
    $('nav #get-started').on('click', function(){
        $('.login').fadeIn(700);
        $('.login').show();
    })
    $('.login-close').on('click', function(){
        $('.login').hide();
    })
    $('.login #signup').on('click', function(){
        $('.login').hide();
        $('.signup').fadeIn(700);
        $('.signup').show();
    });

    //for sign up
    $('.signup #login').on('click', function(){
        $('.signup').hide();
        $('.login').fadeIn(700);
        $('.login').show();
    })
    $('.signup-close').on('click', function(){
        $('.signup').hide();
    })

    //admin
    $('#admin').on('click', function(){
        $('.login').hide();
        $('.admin').fadeIn(700);
        $('.admin').show();
    })
    $('.admin-close').on('click', function(){
        $('.admin').hide();
    })
});

//checking passwords on sign up
setInterval(function(){
    $('.signup .password1').change(function(){
        $('.signup button').on('click', function(){
            if($('.signup .password1').val() != $('.signup .password2').val()){
                $('.signup .message').show();
            }
        });
    });
}, 100);