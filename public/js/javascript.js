if(store.getLocal('darkTheme') === 'true')
{
    $('body').removeClass('bgColor-body-lightTheme');
    $('body').addClass('bgColor-body-darkTheme');

    $('.bgColor-postsContent-lightTheme').addClass('bgColor-postsContent-darkTheme');
    $('.bgColor-postsContent-lightTheme').removeClass('bgColor-postsContent-lightTheme');

    $('.color-briefSection-lightTheme').addClass('color-briefSection-darkTheme');
    $('.color-briefSection-lightTheme').removeClass('color-briefSection-lightTheme');

    $('.colorHeaders-lightTheme').addClass('colorHeaders-darkTheme');
    $('.colorHeaders-lightTheme').removeClass('colorHeaders-lightTheme');

    $('.colorConnectionMessage-lightTheme').addClass('colorConnectionMessage-darkTheme');
    $('.colorConnectionMessage-lightTheme').removeClass('colorConnectionMessage-lightTheme');

    $('.bgColor-commentsSection-lightTheme').addClass('bgColor-commentsSection-darkTheme');
    $('.bgColor-commentsSection-lightTheme').removeClass('bgColor-commentsSection-lightTheme');

    $('.bgColor-commentMessages-lightTheme').addClass('bgColor-commentMessages-darkTheme');
    $('.bgColor-commentMessages-lightTheme').removeClass('bgColor-commentMessages-lightTheme');

    $('.color-commentMessages-lightTheme').addClass('color-commentMessages-darkTheme');
    $('.color-commentMessages-lightTheme').removeClass('color-commentMessages-lightTheme');

    $('.myLine-lightTheme').addClass('myLine-darkTheme');
    $('.myLine-lightTheme').removeClass('myLine-lightTheme');
}else {

    $('body').removeClass('bgColor-body-darkTheme');
    $('body').addClass('bgColor-body-lightTheme');

    $('.bgColor-postsContent-darkTheme').addClass('bgColor-postsContent-lightTheme');
    $('.bgColor-postsContent-darkTheme').removeClass('bgColor-postsContent-darkTheme');

    $('.color-briefSection-darkTheme').addClass('color-briefSection-lightTheme');
    $('.color-briefSection-darkTheme').removeClass('color-briefSection-darkTheme');

    $('.colorHeaders-darkTheme').addClass('colorHeaders-lightTheme');
    $('.colorHeaders-darkTheme').removeClass('colorHeaders-darkTheme');

    $('.colorConnectionMessage-darkTheme').addClass('colorConnectionMessage-lightTheme');
    $('.colorConnectionMessage-darkTheme').removeClass('colorConnectionMessage-darkTheme');

    $('.bgColor-commentsSection-darkTheme').addClass('bgColor-commentsSection-lightTheme');
    $('.bgColor-commentsSection-darkTheme').removeClass('bgColor-commentsSection-darkTheme');

    $('.bgColor-commentMessages-darkTheme').addClass('bgColor-commentMessages-lightTheme');
    $('.bgColor-commentMessages-darkTheme').removeClass('bgColor-commentMessages-darkTheme');

    $('.color-commentMessages-darkTheme').addClass('color-commentMessages-lightTheme');
    $('.color-commentMessages-darkTheme').removeClass('color-commentMessages-darkTheme');

    $('.myLine-darkTheme').addClass('myLine-lightTheme');
    $('.myLine-darkTheme').removeClass('myLine-darkTheme');
}

$('#connectionButton').on('click', function() {
    store.setLocal('nickname', $('#nicknameInput').val());
});

$('#logoutButton').on('click', function() {
    store.setLocal('darkTheme', 'false');
})


$('#nicknameInput').attr("value", store.getLocal("nickname"));

$('#lightThemeOnButton').on('click', function() {

    store.setLocal('darkTheme', 'false');
    $('body').removeClass('bgColor-body-darkTheme');
    $('body').addClass('bgColor-body-lightTheme');

    $('.bgColor-postsContent-darkTheme').addClass('bgColor-postsContent-lightTheme');
    $('.bgColor-postsContent-darkTheme').removeClass('bgColor-postsContent-darkTheme');

    $('.color-briefSection-darkTheme').addClass('color-briefSection-lightTheme');
    $('.color-briefSection-darkTheme').removeClass('color-briefSection-darkTheme');

    $('.colorHeaders-darkTheme').addClass('colorHeaders-lightTheme');
    $('.colorHeaders-darkTheme').removeClass('colorHeaders-darkTheme');

    $('.colorConnectionMessage-darkTheme').addClass('colorConnectionMessage-lightTheme');
    $('.colorConnectionMessage-darkTheme').removeClass('colorConnectionMessage-darkTheme');

    $('.bgColor-commentsSection-darkTheme').addClass('bgColor-commentsSection-lightTheme');
    $('.bgColor-commentsSection-darkTheme').removeClass('bgColor-commentsSection-darkTheme');

    $('.bgColor-commentMessages-darkTheme').addClass('bgColor-commentMessages-lightTheme');
    $('.bgColor-commentMessages-darkTheme').removeClass('bgColor-commentMessages-darkTheme');

    $('.color-commentMessages-darkTheme').addClass('color-commentMessages-lightTheme');
    $('.color-commentMessages-darkTheme').removeClass('color-commentMessages-darkTheme');

    $('.myLine-darkTheme').addClass('myLine-lightTheme');
    $('.myLine-darkTheme').removeClass('myLine-darkTheme');
});

$('#darkThemeOnButton').on('click', function() {
    store.setLocal('darkTheme', 'true');
    $('body').removeClass('bgColor-body-lightTheme');
    $('body').addClass('bgColor-body-darkTheme');

    $('.bgColor-postsContent-lightTheme').addClass('bgColor-postsContent-darkTheme');
    $('.bgColor-postsContent-lightTheme').removeClass('bgColor-postsContent-lightTheme');

    $('.color-briefSection-lightTheme').addClass('color-briefSection-darkTheme');
    $('.color-briefSection-lightTheme').removeClass('color-briefSection-lightTheme');

    $('.colorHeaders-lightTheme').addClass('colorHeaders-darkTheme');
    $('.colorHeaders-lightTheme').removeClass('colorHeaders-lightTheme');

    $('.colorConnectionMessage-lightTheme').addClass('colorConnectionMessage-darkTheme');
    $('.colorConnectionMessage-lightTheme').removeClass('colorConnectionMessage-lightTheme');

    $('.bgColor-commentsSection-lightTheme').addClass('bgColor-commentsSection-darkTheme');
    $('.bgColor-commentsSection-lightTheme').removeClass('bgColor-commentsSection-lightTheme');

    $('.bgColor-commentMessages-lightTheme').addClass('bgColor-commentMessages-darkTheme');
    $('.bgColor-commentMessages-lightTheme').removeClass('bgColor-commentMessages-lightTheme');

    $('.color-commentMessages-lightTheme').addClass('color-commentMessages-darkTheme');
    $('.color-commentMessages-lightTheme').removeClass('color-commentMessages-lightTheme');

    $('.myLine-lightTheme').addClass('myLine-darkTheme');
    $('.myLine-lightTheme').removeClass('myLine-lightTheme');
})




$('#adminPanelEnterButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php?adminPage=1';
    store.setLocal('darkTheme', 'false');
});

$('#adminPanelQuitButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php';
    store.setSession('activeTab', '1')
});














/* ---------------------------------------- ADMIN PANEL ---------------------------------------- */
$(window).on('load',function() {
    $('#newPostSuccessMessage').fadeOut(5000);
    $('#newPostFailureMessage').fadeOut(5000);

    $('#editPostSuccessMessage').fadeOut(5000);
    $('#editPostFailureMessage').fadeOut(5000);

    $('#deletePostSuccessMessage').fadeOut(5000);
    $('#deletePostFailureMessage').fadeOut(5000);

    $('#newUserSuccessMessage').fadeOut(5000);
    $('#newUserFailureMessage').fadeOut(10000);

    $('#connectionUserFailureMessage').fadeOut(5000);

    $('#newCommentSuccessMessage').fadeOut(5000);
    $('#newCommentFailureMessage').fadeOut(5000);

    $('#signalCommentSuccessMessage').fadeOut(5000);

    $('#deleteCommentSuccessMessage').fadeOut(5000);

    $('#connectionSuccessMessage').fadeOut(5000);
    $('#connectionFailureMessage').fadeOut(5000);
});

$('#previousButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php?adminPage=1';
});

$('nav.nav-tabs a').on('click', function(e) {
    e.preventDefault();
    $(this).tab('show');
});

$('#tab1').on('click', function() {
    store.setSession('activeTab', '1')
})

$('#tab2').on('click', function() {
    store.setSession('activeTab', '2')
})

$('#tab3').on('click', function() {
    store.setSession('activeTab', '3')
})

$('#tab4').on('click', function() {
    store.setSession('activeTab', '4')
})

if(store.getSession('activeTab') === '2') {
    ActiveTab.setActive('2');
}else if (store.getSession('activeTab') === '3'){
    ActiveTab.setActive('3');
}else if (store.getSession('activeTab') === '4'){
    ActiveTab.setActive('4');
}else {
    ActiveTab.setActive();
}

for(let i=0; i <5; i++) {

    if($(`.moderationLevel${i}`).length !== 0) {
        if (i === 0) {

            $(`.moderationLevel${i}`).css('color', 'green');

        } else if (i < 3) {

            $(`.moderationLevel${i}`).css('color', 'yellow');

        } else {

            $(`.moderationLevel${i}`).css('color', 'orange');
        }
    }
}


