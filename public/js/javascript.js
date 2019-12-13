$('#connectionButton').on('click', function() {
    store.setLocal('nickname', $('#nicknameInput').val());
    store.setLocal('password', $('#passwordInput').val());
});




$('#nicknameInput').attr("value", store.getLocal("nickname"));
$('#passwordInput').attr("value", store.getLocal("password"));





















/* ---------------------------------------- ADMIN PANEL ---------------------------------------- */
$(window).on('load',function() {
    $('#newPostSuccessMessage').fadeOut(5000);
    $('#newPostFailureMessage').fadeOut(5000);

    $('#editPostSuccessMessage').fadeOut(5000);
    $('#editPostFailureMessage').fadeOut(5000);

    $('#deletePostSuccessMessage').fadeOut(5000);
    $('#deletePostFailureMessage').fadeOut(5000);

    $('#newUserSuccessMessage').fadeOut(5000);
    $('#newUserFailureMessage').fadeOut(5000);
});

$('#previousButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='.';
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

