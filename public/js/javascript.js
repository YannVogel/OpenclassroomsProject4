/* ---------------------------------------- ALERT MESSAGES ---------------------------------------- */
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
/* ------------------------------------------------------------------------------------------------ */
/* ---------------------------------------- THEMES CHANGES ---------------------------------------- */
$('#darkThemeOnButton').on('click', function() {
    Storage.setLocal('darkTheme', 'true');
    $('body').removeClass('bgColor-body-lightTheme');
    $('body').addClass('bgColor-body-darkTheme');

    $('.bgColor-postsContent-lightTheme').addClass('bgColor-postsContent-darkTheme');
    $('.bgColor-postsContent-lightTheme').removeClass('bgColor-postsContent-lightTheme');

    $('.color-briefSection-lightTheme').addClass('color-briefSection-darkTheme');
    $('.color-briefSection-lightTheme').removeClass('color-briefSection-lightTheme');

    $('.color-headers-lightTheme').addClass('color-headers-darkTheme');
    $('.color-headers-lightTheme').removeClass('color-headers-lightTheme');

    $('.color-connectionMessage-lightTheme').addClass('color-connectionMessage-darkTheme');
    $('.color-connectionMessage-lightTheme').removeClass('color-connectionMessage-lightTheme');

    $('.bgColor-commentsSection-lightTheme').addClass('bgColor-commentsSection-darkTheme');
    $('.bgColor-commentsSection-lightTheme').removeClass('bgColor-commentsSection-lightTheme');

    $('.bgColor-commentMessages-lightTheme').addClass('bgColor-commentMessages-darkTheme');
    $('.bgColor-commentMessages-lightTheme').removeClass('bgColor-commentMessages-lightTheme');

    $('.color-commentMessages-lightTheme').addClass('color-commentMessages-darkTheme');
    $('.color-commentMessages-lightTheme').removeClass('color-commentMessages-lightTheme');

    $('.myLine-lightTheme').addClass('myLine-darkTheme');
    $('.myLine-lightTheme').removeClass('myLine-lightTheme');

    $('.myCommentLine-lightTheme').addClass('myCommentLine-darkTheme');
    $('.myCommentLine-lightTheme').removeClass('myCommentLine-lightTheme');

    $('.color-commentAuthor-lightTheme').addClass('color-commentAuthor-darkTheme');
    $('.color-commentAuthor-lightTheme').removeClass('color-commentAuthor-lightTheme');
});

$('#lightThemeOnButton').on('click', function() {

    Storage.setLocal('darkTheme', 'false');
    $('body').removeClass('bgColor-body-darkTheme');
    $('body').addClass('bgColor-body-lightTheme');

    $('.bgColor-postsContent-darkTheme').addClass('bgColor-postsContent-lightTheme');
    $('.bgColor-postsContent-darkTheme').removeClass('bgColor-postsContent-darkTheme');

    $('.color-briefSection-darkTheme').addClass('color-briefSection-lightTheme');
    $('.color-briefSection-darkTheme').removeClass('color-briefSection-darkTheme');

    $('.color-headers-darkTheme').addClass('color-headers-lightTheme');
    $('.color-headers-darkTheme').removeClass('color-headers-darkTheme');

    $('.color-connectionMessage-darkTheme').addClass('color-connectionMessage-lightTheme');
    $('.color-connectionMessage-darkTheme').removeClass('color-connectionMessage-darkTheme');

    $('.bgColor-commentsSection-darkTheme').addClass('bgColor-commentsSection-lightTheme');
    $('.bgColor-commentsSection-darkTheme').removeClass('bgColor-commentsSection-darkTheme');

    $('.bgColor-commentMessages-darkTheme').addClass('bgColor-commentMessages-lightTheme');
    $('.bgColor-commentMessages-darkTheme').removeClass('bgColor-commentMessages-darkTheme');

    $('.color-commentMessages-darkTheme').addClass('color-commentMessages-lightTheme');
    $('.color-commentMessages-darkTheme').removeClass('color-commentMessages-darkTheme');

    $('.myLine-darkTheme').addClass('myLine-lightTheme');
    $('.myLine-darkTheme').removeClass('myLine-darkTheme');

    $('.myCommentLine-darkTheme').addClass('myCommentLine-lightTheme');
    $('.myCommentLine-darkTheme').removeClass('myCommentLine-darkTheme');

    $('.color-commentAuthor-darkTheme').addClass('color-commentAuthor-lightTheme');
    $('.color-commentAuthor-darkTheme').removeClass('color-commentAuthor-darkTheme');
});

if(Storage.getLocal('darkTheme') === 'true')
{
    $('body').removeClass('bgColor-body-lightTheme');
    $('body').addClass('bgColor-body-darkTheme');

    $('.bgColor-postsContent-lightTheme').addClass('bgColor-postsContent-darkTheme');
    $('.bgColor-postsContent-lightTheme').removeClass('bgColor-postsContent-lightTheme');

    $('.color-briefSection-lightTheme').addClass('color-briefSection-darkTheme');
    $('.color-briefSection-lightTheme').removeClass('color-briefSection-lightTheme');

    $('.color-headers-lightTheme').addClass('color-headers-darkTheme');
    $('.color-headers-lightTheme').removeClass('color-headers-lightTheme');

    $('.color-connectionMessage-lightTheme').addClass('color-connectionMessage-darkTheme');
    $('.color-connectionMessage-lightTheme').removeClass('color-connectionMessage-lightTheme');

    $('.bgColor-commentsSection-lightTheme').addClass('bgColor-commentsSection-darkTheme');
    $('.bgColor-commentsSection-lightTheme').removeClass('bgColor-commentsSection-lightTheme');

    $('.bgColor-commentMessages-lightTheme').addClass('bgColor-commentMessages-darkTheme');
    $('.bgColor-commentMessages-lightTheme').removeClass('bgColor-commentMessages-lightTheme');

    $('.color-commentMessages-lightTheme').addClass('color-commentMessages-darkTheme');
    $('.color-commentMessages-lightTheme').removeClass('color-commentMessages-lightTheme');

    $('.myLine-lightTheme').addClass('myLine-darkTheme');
    $('.myLine-lightTheme').removeClass('myLine-lightTheme');

    $('.myCommentLine-lightTheme').addClass('myCommentLine-darkTheme');
    $('.myCommentLine-lightTheme').removeClass('myCommentLine-lightTheme');

    $('.color-commentAuthor-lightTheme').addClass('color-commentAuthor-darkTheme');
    $('.color-commentAuthor-lightTheme').removeClass('color-commentAuthor-lightTheme');
}else {

    $('body').removeClass('bgColor-body-darkTheme');
    $('body').addClass('bgColor-body-lightTheme');

    $('.bgColor-postsContent-darkTheme').addClass('bgColor-postsContent-lightTheme');
    $('.bgColor-postsContent-darkTheme').removeClass('bgColor-postsContent-darkTheme');

    $('.color-briefSection-darkTheme').addClass('color-briefSection-lightTheme');
    $('.color-briefSection-darkTheme').removeClass('color-briefSection-darkTheme');

    $('.color-headers-darkTheme').addClass('color-headers-lightTheme');
    $('.color-headers-darkTheme').removeClass('color-headers-darkTheme');

    $('.color-connectionMessage-darkTheme').addClass('color-connectionMessage-lightTheme');
    $('.color-connectionMessage-darkTheme').removeClass('color-connectionMessage-darkTheme');

    $('.bgColor-commentsSection-darkTheme').addClass('bgColor-commentsSection-lightTheme');
    $('.bgColor-commentsSection-darkTheme').removeClass('bgColor-commentsSection-darkTheme');

    $('.bgColor-commentMessages-darkTheme').addClass('bgColor-commentMessages-lightTheme');
    $('.bgColor-commentMessages-darkTheme').removeClass('bgColor-commentMessages-darkTheme');

    $('.color-commentMessages-darkTheme').addClass('color-commentMessages-lightTheme');
    $('.color-commentMessages-darkTheme').removeClass('color-commentMessages-darkTheme');

    $('.myLine-darkTheme').addClass('myLine-lightTheme');
    $('.myLine-darkTheme').removeClass('myLine-darkTheme');

    $('.myCommentLine-darkTheme').addClass('myCommentLine-lightTheme');
    $('.myCommentLine-darkTheme').removeClass('myCommentLine-darkTheme');

    $('.color-commentAuthor-darkTheme').addClass('color-commentAuthor-lightTheme');
    $('.color-commentAuthor-darkTheme').removeClass('color-commentAuthor-darkTheme');
}

$('#logoutButton').on('click', function() {
    Storage.setLocal('darkTheme', 'false');
})
/* ------------------------------------------------------------------------------------------------ */
/* ----------------------------------------- CONNECTIONS MANAGEMENT ------------------------------- */
$('#connectionButton').on('click', function() {
    Storage.setLocal('nickname', $('#nicknameInput').val());
});

$('#nicknameInput').attr("value", Storage.getLocal("nickname"));
/* ------------------------------------------------------------------------------------------------ */
/* ----------------------------------------- ADMIN PANEL ------------------------------------------ */
$('#adminPanelEnterButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php?adminPage=1';
    Storage.setLocal('darkTheme', 'false');
});

$('#adminPanelQuitButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php';
    Storage.setSession('activeTab', '1')
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
    Storage.setSession('activeTab', '1')
});

$('#tab2').on('click', function() {
    Storage.setSession('activeTab', '2')
});

$('#tab3').on('click', function() {
    Storage.setSession('activeTab', '3')
});

$('#tab4').on('click', function() {
    Storage.setSession('activeTab', '4')
});

if(Storage.getSession('activeTab') === '2') {
    ActiveTab.setActive('2');
}else if (Storage.getSession('activeTab') === '3'){
    ActiveTab.setActive('3');
}else if (Storage.getSession('activeTab') === '4'){
    ActiveTab.setActive('4');
}else {
    ActiveTab.setActive();
}