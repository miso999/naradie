import $ from 'jquery';
import smoothScroll from 'jquery-smooth-scroll';

class StickyHeader {
    constructor() {

        this.header = $('.site-header');
        this.triggerElement = $('.white-menu');
        this.fixOnScroll();
        this.refreshWaypoints();
    }

    refreshWaypoints() {
            Waypoint.refreshAll();
    }


    fixOnScroll() {
        var config = this;
        new Waypoint({
            element: this.triggerElement[0],
            handler: function () {
                config.header.toggleClass('site-header--dark');
            },
        });
    }
}

export default StickyHeader;