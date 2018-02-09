import $ from 'jquery';

class TabSwitcher {
    constructor() {
        this.links = $('.tabswitcher__menu li a');
        this.tabs = $('.tabswitcher__tab');
        this.activeTabClass = 'tabswitcher__tab--active';
        this.activeLinkClass = 'active';
        this.linkDataAttribute = 'data-tab-name';
        this.events();
    }

    events() {
        $(this.links).on("click", e => {
            this.switchTab($(e.target));
        });
    }

    switchTab(e) {
        let id = $(e).attr(this.linkDataAttribute);
        this.links.removeClass(this.activeLinkClass);
        $(e).addClass(this.activeLinkClass);
        this.tabs.removeClass(this.activeTabClass);
        $('#'+id).addClass(this.activeTabClass);
    }
}

export default TabSwitcher;