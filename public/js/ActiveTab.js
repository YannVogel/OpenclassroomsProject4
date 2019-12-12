const ActiveTab = {


    setActive(activeTab) {
        const $tab1 = $('#tab1');
        const $p1 = $('#p1');
        const $tab2 = $('#tab2');
        const $p2 = $('#p2');
        const $tab3 = $('#tab3');
        const $p3 = $('#p3');
        const $tab4 = $('#tab4');
        const $p4 = $('#p4');


        switch (activeTab) {
            case '2':
                $tab1.removeClass('active');
                $p1.removeClass('active');
                $tab2.addClass('active');
                $p2.addClass('active');
                $tab3.removeClass('active');
                $p3.removeClass('active');
                $tab4.removeClass('active');
                $p4.removeClass('active');
                break;
            case '3':
                $tab1.removeClass('active');
                $p1.removeClass('active');
                $tab2.removeClass('active');
                $p2.removeClass('active');
                $tab3.addClass('active');
                $p3.addClass('active');
                $tab4.removeClass('active');
                $p4.removeClass('active');
                break;

            case '4':
                $tab1.removeClass('active');
                $p1.removeClass('active');
                $tab2.removeClass('active');
                $p2.removeClass('active');
                $tab3.removeClass('active');
                $p3.removeClass('active');
                $tab4.addClass('active');
                $p4.addClass('active');
                break;

            default:
                $tab1.addClass('active');
                $p1.addClass('active');
                $tab2.removeClass('active');
                $p2.removeClass('active');
                $tab3.removeClass('active');
                $p3.removeClass('active');
                $tab4.removeClass('active');
                $p4.removeClass('active');
        }
    }

}