import $ from 'jquery';

class Submenu {
    constructor() {
        this.openSubmenuButton = $('.submenu_button');
        this.events();
    }

    events() {
        this.openSubmenuButton.mouseover(this.openSubmenu);
        this.openSubmenuButton.mouseleave(this.closeSubmenu);
        $('.submenu').mouseleave(this.closeSubmenu);
    }

    openSubmenu() {
        var sub_id = $(this).attr('data-submenu');
        $('#' + sub_id).addClass('submenu--opened');
        return false;
    }

    closeSubmenu() {
        setTimeout(function() {
            var isHovered = !!$('.submenu--opened, .submenu_button').
            filter(function() { return $(this).is(":hover"); }).length;
            if (isHovered) {
                console.log('hovered');
            } else  $('.submenu').removeClass('submenu--opened');
        }, 100);
        return false;
    }
}
export default Submenu;