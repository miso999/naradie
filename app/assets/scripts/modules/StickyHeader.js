import $ from 'jquery';
import smoothScroll from 'jquery-smooth-scroll';

class StickyHeader {
    constructor() {

        this.header = $('.site-header');
        this.triggerElement = $('.white-menu');
        this.fixOnScroll();
        this.pageSection = $('.page-section');
        this.navLinks = $('.primary-nav a');
        this.sectionWaypoint();
        this.addSmoothScroll({});
        this.refreshWaypoints();
    }

    refreshWaypoints() {
            Waypoint.refreshAll();
    }

    addSmoothScroll() {
        // this.navLinks.smoothScroll({offset: -300});
        $('a').smoothScroll({offset: -62});
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

    sectionWaypoint() {
        var config = this;
        this.pageSection.each(function () {
            var currentSection = this;
            new Waypoint({
                element: currentSection,
                handler: function (direction) {
                    if (direction == 'down') {
                        var pageLink = currentSection.getAttribute('data-section-link');
                        config.navLinks.removeClass('active');
                        if ($(window).scrollTop() > 400) {
                            $(pageLink).addClass('active');
                        }
                    }
                },
                offset: "18%"
            });
            new Waypoint({
                element: currentSection,
                handler: function (direction) {
                    if (direction == 'up') {
                        var pageLink = currentSection.getAttribute('data-section-link');
                        config.navLinks.removeClass('active');
                        $(pageLink).addClass('active');
                    }
                },
                offset: "-40%"
            });
        });

    }
}

export default StickyHeader;