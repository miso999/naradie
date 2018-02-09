import $ from 'jquery';

class Modal {
    constructor() {
        this.openModalButton = $('.open-modal');
        this.closeButton = $('.modal__close');
        this.events();
    }

    events() {
        // clicking the open modal button
        this.openModalButton.click(this.openModal);

        // clicking the close modal button
        this.closeButton.click(this.closeModal);

        // pushes any key
        $(document).keyup(this.keyPressHandler.bind(this));
    }

    keyPressHandler(e) {
        if (e.keyCode == 27) {
            $('.modal').removeClass('modal--show');
        }
    }

    openModal() {
        var modal_id = $(this).attr('data-modal-id');
        $('#' + modal_id).addClass('modal--show');
        return false;
    }

    closeModal() {
        var modal = $(this).closest('.modal');
        modal.removeClass('modal--show');
    }
}

export default Modal;