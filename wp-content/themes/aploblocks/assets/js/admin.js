var _wp = wp,
apiFetch = _wp.apiFetch;

document.addEventListener("DOMContentLoaded", () => {
    !(function () {
        const {pluginStatus,activating,installing,respOk,respFail,respButtonOk,respButtonFail,nonce,ajaxUrl} = aploblocks;
        const aploblockAdminNotice =    document.querySelector(".aploblocks-admin-notice")                          
        const aplodismiss = document.querySelector(".aploblocks-admin-notice .notice-dismiss");
        const noticeButton = document.querySelector(".aploblocks-admin-notice #aploblocks-action-plugin");
        const noticeButtonText = noticeButton.querySelector(".text");
        const response = document.querySelector(".aploblocks-admin-notice .aploblocks-notice-response");
  
        noticeButton.addEventListener("click", async () => {

        // activate plugin
        if (pluginStatus === "1") {

            noticeButtonText.textContent = activating;
            noticeButton.classList.add("disabled")

            apiFetch({
                path: '/wp/v2/plugins/aploblocks/aploblocks',
                method: 'POST',
                data: {
                    slug:"aploblocks",
                    status:"active"
            }
            }).then(function (res) {
                noticeButtonText.textContent = respButtonOk;
                response.textContent = respOk;
            })["catch"](function (res) {
                noticeButtonText.textContent = respButtonFail;
                response.textContent = respFail;
            });
            return;
        }

        // install plugin 
        if (pluginStatus === "2") {

            noticeButtonText.textContent = installing;
            noticeButton.classList.add("disabled")

            apiFetch({
                path: '/wp/v2/plugins',
                method: 'POST',
                data: {
                    "slug":"aploblocks",
                    "status": "active"
            }
            }).then(function (res) {
                noticeButtonText.textContent = respButtonOk;
                response.textContent = respOk;

            })["catch"](function (res) {
                noticeButtonText.textContent = respButtonFail;
                response.textContent = respFail;
            });
        }
    }); 

        // this is for the dismiss
    aplodismiss.addEventListener("click", function () {
        apiFetch({
            url: ajaxUrl + `?action=aploblocks_hide_theme_welcome_notice&nonce=${nonce}`,
            nonce: nonce,
            method: 'POST'
          }).then(function (res) {
            aploblockAdminNotice.remove();

          })["catch"](function (res) {
            console.log("Aploblocks: Error dismissing notice");
            console.log(res);
            aploblockAdminNotice.remove();
          });
    });
    })();
});