$(window).on('load',function() {
    $('#newPostSuccessMessage').fadeOut(5000);
    $('#newPostFailureMessage').fadeOut(5000);

    $('#deletePostSuccessMessage').fadeOut(5000);
    $('#deletePostFailureMessage').fadeOut(5000);
});



$('#previousButton').on('click', function(e) {
    e.preventDefault();
    window.location.href='../view/createPostView.php';
});

$('nav.nav-tabs a').on('click', function(e) {
    e.preventDefault();
    $(this).tab('show');
});