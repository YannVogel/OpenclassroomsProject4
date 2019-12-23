$('#connectionButton').on('click', function() {
    store.setLocal('nickname', $('#nicknameInput').val());
});


$('#nicknameInput').attr("value", store.getLocal("nickname"));






$('#adminPanelEnterButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php?adminPage=1';
});

$('#adminPanelQuitButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='index.php';
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


