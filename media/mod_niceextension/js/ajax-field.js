document.addEventListener("DOMContentLoaded", () =>{
    console.log("Field JS Loaded");

    const $btn = document.getElementById("ajax-btn");
    if(!$btn) {
        console.log( "No button found")
        return;
    }

    $btn.addEventListener("click", (e) => {
        e.preventDefault();
        const data = {
            "msg": "Hello to Backend"
        }
        const json = JSON.stringify(data);
        Joomla.request({
            url: '/index.php?option=com_ajax&module=niceextension&method=responseToCall&data='+json+'&format=json',
            method: 'GET',
            onSuccess(data) {
                const response = JSON.parse(data);
                if (response.success) {
                    console.log(response)
                } else {
                    console.log(response)
                }
            },
            onError(xhr) {
                Joomla.renderMessages(Joomla.ajaxErrorsMessages(xhr));
                const response = JSON.parse(xhr.response);
                Joomla.renderMessages({ 'error': [response.message] }, undefined, true);
            }
        })
    })
})