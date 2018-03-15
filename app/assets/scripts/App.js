import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
import $ from 'jquery';
import StickyHeader from "./modules/StickyHeader";
import TabSwitcher from "./modules/TabSwticher";

var mobileMenu = new MobileMenu();
new RevealOnScroll($('.feature-item'),'80%');
new RevealOnScroll($('.service'),'70%');
var stickyHeader = new StickyHeader();
new TabSwitcher();

