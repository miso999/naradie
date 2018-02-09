import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';

class RevealOnScroll {
    constructor(els, offset) {
        this.itemsToReveal =  els;
        this.hideInitially();
        this.offset = offset;
        this.revealItem();
    }

    hideInitially() {
        this.itemsToReveal.addClass('reveal-item');
    }

    revealItem() {
        var config = this;
        this.itemsToReveal.each(function () {
            var currentItem = this;
            new Waypoint({
                element: currentItem,
                handler: function() {
                    $(currentItem).addClass('reveal-item--show');
                },
                offset: config.offset
            });
        });
    }
}

export default RevealOnScroll;