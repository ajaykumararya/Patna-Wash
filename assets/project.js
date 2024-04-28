$(document).on('ready', function () {



  /*===================================*
	08. CONTACT FORM JS
	*===================================*/
    $(document).on("submit",".submit-enquiry-form", function (event) {
        event.preventDefault();
        var mydata = $(this).serialize();
        $.AryaAjax({
            url : 'website/contact-us-action',
            data : new FormData(this),
            success_message : 'Query Submitted Successfully..',
            page_reload : true
        })
      });
    

});