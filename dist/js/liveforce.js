// var website = "https://www.App Pulse.co";
// var findOriging = window.location.origin.toString();
// var url1 = website;
// var url2 = findOriging;

// function getMainDomain(hostname) {
//      // Split the hostname by dots 
//      let parts = hostname.split('.');
// // // If there are only two parts, it's already the main domain (e.g., example.com) 
// // // If there are more than two parts, remove the first part (subdomain) if (parts.length > 2) { parts.shift(); }
// //  // Join the remaining parts back together return parts.join('.'); } function areSameDomain(url1, url2) { try {
// //  // Create URL objects let parsedUrl1 = new URL(url1); let parsedUrl2 = new URL(url2); 
// // // Get the main domains 
//     let mainDomain1 = getMainDomain(parsedUrl1.hostname); let mainDomain2 = getMainDomain(parsedUrl2.hostname);
//     console.log("validUrl", mainDomain1); if (mainDomain1 === "s1-tastewp.com") { return true; }
// // Compare the main domains 
//     return mainDomain1 === mainDomain2;} catch (error) { console.error('Invalid URL:', error); return false; } }
// if (areSameDomain(url1, url2)) { console.log('The URLs have the same main domain.'); }
// else { throw new Error("Stopping script execution because origin matches " + mywebsite); }
// var scriptElement = document.createElement("script");
// var scriptCode = `` scriptElement.textContent = scriptCode; document.body.appendChild(scriptElement);
// var noscriptElement = document.createElement("noscript");
// var noscriptCode = ``; noscriptElement.innerHTML = noscriptCode; document.body.appendChild(noscriptElement);
// window.__lc = window.__lc || {}; window.__lc.license = 15713535; window.__lc.chat_between_groups = false; window.__lc.group = 1;
// (function (n, t, c) {
//     function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n); } var e = {
//         _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]); }, once: function () { i(["once", c.call(arguments)]); }, off: function () { i(["off", c.call(arguments)]); }, get: function () {
//             if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
//             return i(["get", c.call(arguments)]);
//         }, call: function () { i(["call", c.call(arguments)]); }, init: function () { var n = t.createElement("script"); (n.async = !0), (n.type = "text/javascript"), (n.src = "https://cdn.livechatinc.com/tracking.js"), t.head.appendChild(n); 
//         var scriptPreElement = document.createElement("script"); scriptPreElement.textContent = `window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}`; document.body.appendChild(scriptPreElement); var scriptCodeElement = document.createElement("script"); scriptCodeElement.textContent = `gtag('event','liveforce_chat_initiated', {"chat_status":"initated"})`; document.body.appendChild(scriptCodeElement); },
//     }; !n.__lc.asyncInit && e.init(), (n.LiveChatWidget = n.LiveChatWidget || e);
// })(window, document, [].slice); LiveChatWidget.call("set_session_variables", { source: window.location.href, agent: navigator.userAgent, }); var textColor; (function () {
//     document.addEventListener('DOMContentLoaded', function () {
//         var style = document.createElement('style'); var googleFonts = document.createElement('link'); 
//         googleFonts.setAttribute('rel', 'stylesheet');
//         googleFonts.setAttribute('href', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap'); 
//          style.innerHTML = 'body{margin:0;}' + ' .tmsg_wrappers * {font-family: \'Roboto\', sans-serif;}' + ' .tmsg_wrappers h1,.tmsg_wrappers h2,.tmsg_wrappers h3,.tmsg_wrappers h4,.tmsg_wrappers h5,.tmsg_wrappers h6,.tmsg_wrappers p{margin:0;}' + ' .tmsg_wrappers .tmsg_overlays {' + ' display: none;' + ' }' + ' .tmsg_wrappers .tmsg_overlays:before {' + ' content: "";' + ' background: #000000b0;' + ' position: fixed;' + ' width: 100%;' + ' height: 100vh;' + ' z-index: 5000;' + ' left:0;' + ' top:0;' + ' z-index: 1000000;' + ' }' + ' .tmsg_wrappers .tmsg_side_buttons {' + ' position: fixed;' + ' transform: rotate(-90deg);' + ' top: 50%;' + ' background-color: #ec6933!important;' + ' color: #fff;' + ' padding: 10px 25px;' + ' left: -50px;' + ' border-radius: 0px 0px 10px 10px;' + ' font-size: 20px;' + ' line-height: 30px;' + ' cursor: pointer;' + ' }' + ' .tmsg_popups {' + ' position: relative;' + ' display: flex;' + ' /* align-items: center; */' + ' height: 465px;' + ' }' + ' .tmsg_wrappers .tmsg_popup_lefts {' + ' background-color: #fff;' + ' border-radius: 12px 0px 0px 12px;' + ' padding: 35px 25px 25px;' + ' width: 200px;' + ' text-align: center;' + ' position: relative;' + ' z-index: 5001;' + ' display: flex;' + ' flex-direction: column;' + ' align-items: center;' + ' justify-content: space-between;' + ' }' + '.iframe_powby {' + ' width: 100%;' + ' position: absolute;' + ' background: #fbfbfb;' + ' height: 25px;' + ' bottom: 0;' + ' display: none;' + '}' + ' .tmsg_wrappers .tmsg_popup_rights {' + ' width: 400px;' + ' text-align: center;' + ' position: relative;' + ' z-index: 5001;' + ' border-radius: 0px 12px 12px 0px;' + ' overflow: hidden;' + ' }' + ' .tmsg_wrappers form.tmsg_from input.tmsg_number_fields {' + ' height: 50px;' + ' box-sizing: border-box;' + ' width: 100%!important;' + ' background-color: #FFF;' + ' border: 1px solid #B0BAC5;' + ' border-radius: 4px;' + ' margin-bottom: 0;' + ' color: #3E4956;' + ' font-size: 15px;' + ' font-weight: 400;' + ' line-height: 18px;' + ' text-align: center;' + ' padding: 10px 20px;' + ' }' + ' .tmsg_wrappers form.tmsg_from h3.tmsg_responds {' + ' display: block;' + ' color: #8091A5;' + ' font-size: 13px;' + ' font-weight: 400;' + ' line-height: 30px;' + ' text-align: center;' + ' margin-top: 10px;' + ' margin-bottom: 10px;' + ' }' + ' input.tmsg_submit_btns {' + ' background-color: #ec6933;' + ' border: 0;' + ' color: #fff;' + ' width: 100%;' + ' height: 50px;' + ' border-radius: 5px;' + ' font-size: 14px;' + ' cursor: pointer;' + ' }' + ' .tmsg_wrappers ._left h1.tmsg_headings {' + ' color: #3E4956;' + ' font-size: 17px;' + ' font-weight: 400;' + ' line-height: 24px;' + ' margin-bottom: 20px;' + ' }' + ' .tmsg_wrappers .tmsg_closes {' + ' cursor: pointer;' + ' display: block;' + ' position: absolute;' + ' right: 12px;' + ' top: 9px;' + ' z-index: 999999999;' + ' background: rgb(72, 105, 232);' + ' padding: 10px;' + ' display: flex;' + ' align-items: center;' + ' justify-content: center;' + ' box-sizing: border-box;' + ' height: 42px;' + ' width: 42px;' + ' }' + ' .tmsg_wrappers .tmsg_closes img {' + ' width: 25px;' + ' filter: brightness(0) invert(1);' + ' }' + ' .tmsg_wrappers .tmsg_closes:before{' + ' transform: rotate(45deg);' + ' }' + ' .tmsg_wrappers .tmsg_closes:after {' + ' transform: rotate(-45deg);' + ' }' + ' .tmsg_wrappers .tmsg_alert_message_success {' + ' background-color: #0080006e;' + ' border: 1px solid green;' + ' padding: 4px;' + ' font-size: 13px;' + ' margin-bottom: 15px;' + ' display: none;' + ' }' + ' .tmsg_wrappers .tmsg_alert_message_faileds {' + ' background-color: #ff000060;' + ' border: 1px solid red;' + ' padding: 4px;' + ' font-size: 13px;' + ' margin-bottom: 15px;' + ' display: none;' + ' }' + ' .tmsg_validate_fields{' + ' padding: 4px;' + ' font-size: 12px;' + ' margin-bottom: 15px;' + ' display: none;' + ' color: red;' + ' }' + ' .tmsg_hi_theres{' + ' color: #000;' + ' text-align: center;' + ' font-size: 21.87px;' + ' font-style: normal;' + ' font-weight: 700;' + ' margin-bottom: 20px !important;' + ' }' + ' .tmsg_assist_yous{' + ' color: #000;' + ' text-align: center;' + ' font-size: 18px;' + ' font-style: normal;' + ' font-weight: 400;' + ' line-height: 21.87px; ' + ' }' + ' .tmsg_phone_labels{' + ' color: #000;' + ' font-size: 13px;' + ' font-style: normal;' + ' font-weight: 400;' + ' line-height: 21.87px; ' + ' }' + ' .tmsg_phone_numbers{' + ' color: #000;' + ' text-align: center;' + ' font-size: 18px;' + ' font-style: normal;' + ' font-weight: 600;' + ' line-height: 21.87px;' + ' }' + ' .tmsg_wrappers span.tmsg_powered_chats {' + ' color: #000;' + ' font-size: 13px;' + ' font-style: normal;' + ' font-weight: 400;' + ' line-height: 21.87px;' + ' }' + ' iframe.tmsg_popup_chats {' + ' border: none;' + ' width: 100%;' + ' height: 100%;' + ' border-radius: 0px 12px 12px 0px;' + ' }' + ' .tmsg_drag_icon {' + ' position: absolute;' + ' left: 22px;' + ' top: -23px;' + ' z-index: 9999;' + ' width: 60px;' + ' height: 24px;' + ' cursor: all-scroll;' + ' border-left: 15px solid transparent !important;' + ' border-right: 15px solid transparent !important;' + ' border-bottom-width: 22px;' + ' border-bottom-style: solid;' + ' border-bottom-color: rgb(72, 105, 232);' + ' }' + ' .tmsg_drag_icon img {' + ' width: 100%;' + ' }' + ' img.tmsg_call_img {' + ' margin-bottom: 20px;' + ' }' + ' .tmsg_popup_Number_wraps {' + ' margin-bottom: 50%;' + ' }' + ' a.tmsg_link_powered {' + ' color: #000;' + ' text-decoration: auto;' + ' }' + ' #mydiv{' + ' position:fixed;' + ' top: 50%;' + ' left: 50%;' + ' transform: translate(-50%, -50%);' + ' z-index: 9999;' + ' background-color: #fff;' + ' border-radius: 12px;' + ' z-index: 1000001;' + ' }' + ' .tmsg_drag_icon img,' + ' img.tmsg_call_img {' + ' filter: brightness(0) invert(1);' + ' }' + ' .tmsg_drag_icon img {' + ' margin-top: 8px;' + ' width: 25px;' + ' margin-left: 2px;' + ' }' + ' .scale-out-br {' + ' -webkit-animation: scale-out-br 0.01s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;' + ' animation: scale-out-br 0.01s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;' + ' background: transparent !important;' + ' display: none !important;' + ' }' + ' .scale-in-br{' + ' -webkit-animation: scale-in-br 0.01s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;' + ' animation: scale-in-br 0.01s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;' + ' }' + '.powered-by-tcs {' + ' display: block;' + ' position: absolute;' + ' font-size: 10px;' + ' padding: 2px;' + ' text-decoration: none;' + ' font-weight: normal;' + ' right: 20px;' + ' color: gray;' + ' transition: all 0.3s;' + ' font-family: "Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif;' + ' right: 16px;' + ' background-color: #f6f6f7;' + ' display: flex;' + ' justify-content: center;' + ' align-items: center;' + ' padding: 0;' + ' height: 41px;' + ' bottom: 6px;' + ' width: 359.83px;' + ' border-radius: 0px 0px 11px 11px;' + ' visibility: visible;' + '}' + '.powered-by-lcf {' + ' display: block;' + ' position: absolute;' + ' font-size: 10px;' + ' padding: 2px;' + ' text-decoration: none;' + ' font-weight: normal;' + ' color: gray;' + ' transition: all 0.3s;' + ' font-family: "Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif;' + ' right: 16px;' + ' background-color: #f6f6f7 !important;' + ' display: flex !important;' + ' gap: 4px;' + ' justify-content: center;' + ' align-items: center;' + ' padding: 0;' + ' height: 28px;' + ' bottom: 6px;' + ' right: 0;' + ' width: 100%;' + ' z-index: 9999;' + ' border-radius: 0px 0px 11px 11px;' + ' visibility: visible;' + '}' + '.chat_image_wrapper {' + ' width: 70px;' + ' height: 70px;' + ' background: #fff;' + ' border-radius: 100%;' + ' overflow: hidden;' + ' position: absolute;' + ' bottom: 11px;' + ' right: 6px;' + '}' + 'a.powered-by-tcs-anchore {' + ' padding-left: 4px;' + ' color: #999999;' + ' text-decoration: none;' + '}' + '.chat_image_wrapper img{' + ' width: 100%;' + ' height: 100%;' + ' object-fit: cover' + '}' + '#chat_image_wrapper {' + ' cursor: pointer;' + '}' + '@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (max-width : 320px) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (max-device-width : 768px){' + ' .tmsg_wrappers .tmsg_overlays {' + ' display: none !important;' + ' }' + ' .tmsg_popups {' + ' flex-direction: column;' + ' height:auto;' + ' width: 330px;' + ' }' + ' .tmsg_wrappers .tmsg_popup_lefts,.tmsg_wrappers .tmsg_popup_rights {' + ' width: 100%;' + ' }' + ' .tmsg_wrappers .tmsg_popup_rights{' + ' height: 300px;' + ' border-radius: 12px;' + ' position:static;' + ' }' + ' .tmsg_popup_Number_wraps{' + ' margin-bottom:0; ' + ' }' + ' .tmsg_wrappers .tmsg_popup_lefts{' + ' border-radius:12px 12px 0 0;' + ' box-sizing: border-box;' + ' padding: 20px 20px 20px;' + ' }' + ' img.tmsg_call_img,.tmsg_wrappers span.tmsg_powered_chats {' + ' display:none' + ' }' + '}' + '@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio : 2) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px }' + '}' + '@media only screen and (min-device-width : 320px) and (max-device-width : 480px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 568px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 375px) and (max-device-height: 667px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 414px) and (max-device-height: 736px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 375px) and (max-device-height: 812px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 2){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 320px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + '@media only screen and (min-device-width: 360px) and (max-device-height: 640px) and (orientation : portrait) and (-webkit-device-pixel-ratio: 3){' + '.powered-by-tcs{ left:0;width:100%;height:30px;bottom:0px;display:none }' + '}' + ' html.cls_exit_popup {' + ' overflow: hidden;' + ' position: fixed;' + ' width: 100%;' + ' }'; document.head.appendChild(googleFonts); document.head.appendChild(style); let wrappers = document.createElement("div"); wrappers.setAttribute("class", "tmsg_wrappers"); let overlayElement_el = document.createElement("div"); overlayElement_el.setAttribute("class", "tmsg_overlays"), overlayElement_el.setAttribute("id", "tmsg_modal_wraps"), wrappers.append(overlayElement_el); let popupElement_el = document.createElement("div"); popupElement_el.setAttribute("id", "mydiv"); popupElement_el.setAttribute("class", "tmsg_popups"), overlayElement_el.append(popupElement_el); let popupElementLeft_el = document.createElement("div"); popupElementLeft_el.setAttribute("class", "tmsg_popup_lefts"), popupElement_el.append(popupElementLeft_el); let dragElement = document.createElement('div'); dragElement.setAttribute('class', 'tmsg_drag_icon'); dragElement.setAttribute("id", "mydivheader"); popupElementLeft_el.append(dragElement); let popupElementRight_el = document.createElement("div"); popupElementRight_el.setAttribute("class", "tmsg_popup_rights"), popupElement_el.append(popupElementRight_el); let dragElementIcon = document.createElement('img'); dragElementIcon.setAttribute('src', 'https://livechatforce.app/assets/images/icons/move-dot.svg'); dragElement.append(dragElementIcon); /* whitelable element append into popup */ var AnchoreWhiteLableWrapper = document.createElement('div'); var AnchoreWrapperWhiteLableSpan = document.createElement('span'); AnchoreWhiteLableWrapper.setAttribute('class', 'powered-by-lcf'); var AnchoreWhitelabel = document.createElement('a'); var classes = ['powered-by-lcf', 'scale-out-br']; var anchore_classes = ['powered-by-lcf-anchore']; AnchoreWhitelabel.classList.add(...anchore_classes); AnchoreWhiteLableWrapper.classList.add(...classes); AnchoreWhitelabel.innerText = " Liveforce"; AnchoreWhitelabel.href = "https://liveforce.ai/"; AnchoreWhitelabel.setAttribute('target', '_blank'); AnchoreWrapperWhiteLableSpan.innerText = "Powered by"; AnchoreWhiteLableWrapper.append(AnchoreWrapperWhiteLableSpan); AnchoreWhiteLableWrapper.append(AnchoreWhitelabel); /* closeElement append into popup */ let closeElement = document.createElement('div'); closeElement.setAttribute('class', 'tmsg_closes'); var iframe_powby = document.createElement("div"); iframe_powby.setAttribute("class", "iframe_powby"); popupElementRight_el.append(iframe_powby); popupElementRight_el.append(closeElement); popupElementRight_el.append(AnchoreWhiteLableWrapper); let closeElementIcon = document.createElement('img'); closeElementIcon.setAttribute('src', 'https://livechatforce.app/assets/images/icons/close.svg'); closeElement.append(closeElementIcon); let popupElementChats_el = document.createElement("iframe"); popupElementChats_el.setAttribute("class", "tmsg_popup_chats"), popupElementChats_el.setAttribute("src", "https://secure.livechatinc.com/licence/15713535/v2/open_chat.cgi?group=1&unique_groups=1"), popupElementRight_el.append(popupElementChats_el); let popupElementChat_el = document.createElement("div"); popupElementChat_el.setAttribute("class", "tmsg_popup_assist_wraps"), popupElementLeft_el.append(popupElementChat_el); let popupElemenNumber_el = document.createElement("div"); popupElemenNumber_el.setAttribute("class", "tmsg_popup_Number_wraps"), popupElementLeft_el.append(popupElemenNumber_el); let callElementIcon = document.createElement('img'); callElementIcon.setAttribute("class", "tmsg_call_img"); callElementIcon.setAttribute('src', 'https://livechatforce.app/assets/images/icons/call_img.svg'); popupElementChat_el.append(callElementIcon); let hiThereElement_el = document.createElement("h4"); hiThereElement_el.setAttribute("class", "tmsg_hi_theres"); let headingHiThereElement_el = (hiThereElement_el.innerHTML = "Hi there!"); popupElementChat_el.append(hiThereElement_el); let assistElement_el = document.createElement("p"); assistElement_el.setAttribute("class", "tmsg_assist_yous"); let headingassistElement_el = (assistElement_el.innerHTML = "We are online. How can I assist you?"); popupElementChat_el.append(assistElement_el); let phoneLabelElement_el = document.createElement("span"); phoneLabelElement_el.setAttribute("class", "tmsg_phone_labels"); let headingphoneLabelElement_el = (phoneLabelElement_el.innerHTML = "Phone Number"); popupElemenNumber_el.append(phoneLabelElement_el); let phoneNumberElement_el = document.createElement("p"); phoneNumberElement_el.setAttribute("class", "tmsg_phone_numbers"); let headingphoneNumberElement_el = (phoneNumberElement_el.innerHTML = "+18669782220"); popupElemenNumber_el.append(phoneNumberElement_el); let poweredByElement_el = document.createElement("span"); poweredByElement_el.setAttribute("class", "tmsg_powered_chats"); let headingPoweredByElement_el = (poweredByElement_el.innerHTML = " Powered by"); let poweredLinkByElement_el = document.createElement("a"); poweredLinkByElement_el.setAttribute("class", "tmsg_link_powered"); poweredLinkByElement_el.setAttribute("href", "https://liveforce.ai/"); let PoweredLinkByElement_el = (poweredLinkByElement_el.innerHTML = " Liveforce"); poweredByElement_el.append(poweredLinkByElement_el); popupElementLeft_el.append(poweredByElement_el); document.body.append(wrappers); var modals = document.getElementById("tmsg_modal_wraps"), modals_wrapper = document.getElementsByClassName("tmsg_wrappers"), submit_click = document.getElementById("tmsg_submit_btns"), span = document.getElementsByClassName("tmsg_closes")[0]; var Anchore = document.createElement('a'); var AnchoreWrapper = document.createElement('div'); var AnchoreWrapperSpan = document.createElement('span'); var chat_image = document.createElement('img'); var chat_image_wrapper = document.createElement('div'); chat_image_wrapper.setAttribute('class', 'chat_image_wrapper'); //https://sm.ign.com/ign_pk/cover/a/avatar-gen/avatar-generations_rpge.jpg chat_image.setAttribute('src',"https://theliveforce.app/assets/images/Business 3.jpg"); chat_image.setAttribute('id','chat_image_wrapper'); chat_image.setAttribute('alt',"Liveforce"); chat_image_wrapper.append(chat_image); chat_image.addEventListener("click", function(){ maximize(); chat_image_wrapper.style.display='none' }); closeElement.addEventListener("click", function(){ modals.style.display = "none"; }); minimize(); var checkELem = setInterval(function(){ if (document.getElementById('chat-widget-container')){ var chatWidget = document.getElementById("chat-widget-container"); var classes = ['powered-by-tcs','scale-out-br']; var anchore_classes = ['powered-by-tcs-anchore']; Anchore.classList.add(...anchore_classes); Anchore.setAttribute('target','_blank'); AnchoreWrapper.classList.add(...classes); Anchore.innerText = " Liveforce"; Anchore.href = "https://liveforce.ai/"; AnchoreWrapperSpan.innerText = "Powered by "; AnchoreWrapper.append(AnchoreWrapperSpan); AnchoreWrapper.append(Anchore) chatWidget.append(AnchoreWrapper); chatWidget.append(chat_image_wrapper); clearInterval(checkELem); } },1200) LiveChatWidget.on('visibility_changed', onVisibilityChanged); function onVisibilityChanged(data){ switch (data.visibility) { case "maximized": chat_image_wrapper.style.display='none' AnchoreWrapper.classList.add(['scale-in-br']); AnchoreWrapper.classList.remove(['scale-out-br']); AnchoreWrapper.style.display='flex'; var click_through_rate = document.createElement("script"); click_through_rate.textContent =`gtag('event','liveforce_click_through_rate', {"click":"true"})`; document.body.appendChild(click_through_rate); console.log("MaXimize") break; case "minimized": AnchoreWrapper.classList.remove(['scale-out-br']); AnchoreWrapper.classList.add(['scale-in-br']); chat_image_wrapper.style.display='block'; setTimeout(function(){ AnchoreWrapper.style.display='none'; },100) break; case "hidden": AnchoreWrapper.classList.add(['scale-out-br']); AnchoreWrapper.classList.remove(['scale-in-br']); chat_image_wrapper.style.display='none'; AnchoreWrapper.style.display='none'; break; } } LiveChatWidget.on('greeting_displayed', function(event) { console.log('New greeting_displayed:', event); var greetingsTag = JSON.stringify(event); var greetings = document.createElement("script"); greetings.textContent =`gtag('event','liveforce_automated_greetings', {"automated_greetings":"true"})`; document.body.appendChild(greetings); }); function getMousePos(e) { //LivechatWidget let visibile = LiveChatWidget.get("state"); var timer = setInterval(function(){ if(e.clientY < 50 && visibile.visibility != "maximized" && typeof localStorage.popup_visible == 'undefined') { if(sessionStorage.getItem("visible") === null){ sessionStorage.visible = 1; modals.style.display = "block"; var root = document.getElementsByTagName('html')[0]; // '0' to assign the first (and only `HTML` tag) root.setAttribute( 'class','cls_exit_popup'); window.scrollTo(0, 0); LiveChatWidget.call("hide"); var tmsg_modal_wrap = document.getElementById("tmsg_modal_wrap"); tmsg_modal_wrap.style.display = "none"; } clearInterval(timer); document.removeEventListener("mousemove", getMousePos); } },100000); } //SDSD // window.onbeforeunload = function (event) { // var message = "Do you want to close?"; // modals.style.display = "block"; // var e = event || window.event; // if (e) { // e.returnValue = message; // } // return message; // }; function events(e) { } span.addEventListener("click", function () { //modals.style.display = "none"; var root = document.getElementsByTagName('html')[0]; // '0' to assign the first (and only `HTML` tag) root.setAttribute( 'class', 'cls_exit_popup' ); root.classList.remove('cls_exit_popup'); LiveChatWidget.call("minimize") return false; }); document.addEventListener("mousemove", getMousePos), window.addEventListener("message", events); var isExitPopupShown = false; function minimize() { LiveChatWidget.call("minimize"); } function maximize() { LiveChatWidget.call("maximize"); } function hide() { LiveChatWidget.call("hide"); } LiveChatWidget.call("minimize"); LiveChatWidget.on("new_event", onNewEvent); function onNewEvent(event) { switch (event.type) { case "rich_message": case "message": case "file": if (isExitPopupShown) { hide(); } break; default: if (isExitPopupShown) { hide(); } break; } } //Moveable Function; dragableElement(document.getElementById("mydiv")); function dragableElement(elmnt) { var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0; if (document.getElementById(elmnt.id + "header")) { /* if present, the header is where you move the DIV from:*/ document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown; } else { /* otherwise, move the DIV from anywhere inside the DIV:*/ elmnt.onmousedown = dragMouseDown; } function dragMouseDown(e) { e = e || window.event; e.preventDefault(); // get the mouse cursor position at startup: pos3 = e.clientX; pos4 = e.clientY; document.onmouseup = closeDragElement; // call a function whenever the cursor moves: document.onmousemove = elementDrag; } function elementDrag(e) { e = e || window.event; e.preventDefault(); // calculate the new cursor position: pos1 = pos3 - e.clientX; pos2 = pos4 - e.clientY; pos3 = e.clientX; pos4 = e.clientY; // set the element's new position: elmnt.style.top = (elmnt.offsetTop - pos2) + "px"; elmnt.style.left = (elmnt.offsetLeft - pos1) + "px"; } function closeDragElement() { /* stop moving when mouse button is released:*/ document.onmouseup = null; document.onmousemove = null; } } let left_area =document.getElementsByClassName('tmsg_popup_lefts')[0]; let tmsg_drag_icon = document.getElementsByClassName('tmsg_drag_icon')[0]; var element = document.getElementsByClassName("tmsg_drag_icon")[0]; let child_element = element.getElementsByTagName('img')[0]; let tmsgCallImg = document.getElementsByClassName('tmsg_call_img')[0]; var rgb = ['72', ' 105', ' 232']; var c = 'rgb('+rgb[0]+','+rgb[1]+','+rgb[2]+')'; var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) /1000); console.log(textColor); if(o > 125) { // textColor ='black'; // Increase brightness and invert colors child_element.style.filter = "brightness(0) invert(0)"; tmsgCallImg.style.filter = "brightness(0) invert(0)"; for(var i=0; i < left_area.getElementsByTagName("p").length;i++){ left_area.getElementsByTagName("p")[i].style.color ='black'; } for(var i=0; i < left_area.getElementsByTagName("span").length;i++){ left_area.getElementsByTagName("span")[i].style.color ='black'; } for(var i=0; i < left_area.getElementsByTagName("h1").length;i++){ left_area.getElementsByTagName("h1")[i].style.color ='black'; } for(var i=0; i < left_area.getElementsByTagName("a").length;i++){ left_area.getElementsByTagName("a")[i].style.color ='black'; } for(var i=0; i < left_area.getElementsByTagName("b").length;i++){ left_area.getElementsByTagName("b")[i].style.color ='black'; } for(var i=0; i < left_area.getElementsByTagName("h4").length;i++){ left_area.getElementsByTagName("h4")[i].style.color ='black'; } }else{ // textColor ='white'; child_element.style.filter = "brightness(0) invert(1)"; tmsgCallImg.style.filter = "brightness(0) invert(1)"; for(var i=0; i < left_area.getElementsByTagName("p").length;i++){ left_area.getElementsByTagName("p")[i].style.color ='white'; } for(var i=0; i < left_area.getElementsByTagName("span").length;i++){ left_area.getElementsByTagName("span")[i].style.color ='white'; } for(var i=0; i < left_area.getElementsByTagName("h1").length;i++){ left_area.getElementsByTagName("h1")[i].style.color ='white'; } for(var i=0; i < left_area.getElementsByTagName("a").length;i++){ left_area.getElementsByTagName("a")[i].style.color ='white'; } for(var i=0; i < left_area.getElementsByTagName("b").length;i++){ left_area.getElementsByTagName("b")[i].style.color ='white'; } for(var i=0; i < left_area.getElementsByTagName("h4").length;i++){ left_area.getElementsByTagName("h4")[i].style.color ='white'; } } left_area.style.background = c; var r = Math.round(Math.random() * 255); var g = Math.round(Math.random() * 255); var b = Math.round(Math.random() * 255); rgb[0] = r; rgb[1] = g; rgb[2] = b; function hasClass(element, className) { return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1; } var additional_scripts = '[]'; }); })(window, document, [].slice); function luminance(r, g, b) { var a = [r, g, b].map(function (v) { v /= 255; return v <= 0.03928 ? v / 12.92 : Math.pow((v + 0.055) / 1.055, 2.4); }); return a[0] * 0.2126 + a[1] * 0.7152 + a[2] * 0.0722; } (function() { var rgb = ['72', ' 105', ' 232']; var lum = luminance(rgb[0], rgb[1], rgb[2]); var c = 'rgb('+rgb[0]+','+rgb[1]+','+rgb[2]+')'; var o = Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) /1000); textColor = lum > 0.5 ? 'black' : 'white'; var additional_scripts = '[]'; window.__sms=window.__sms||{},window.__sms.tenant_name="App Pulse",window.__sms.whitelabel_title="Liveforce",window.__sms.whitelabel_href="https://liveforce.ai/",window.__sms.company="App Pulse",window.__sms.phone="5612202747",window.__sms.companyphone="+18669782220",window.__sms.color="rgb(72, 105, 232)",window.__sms.website="https://www.App Pulse.co",window.__sms.textcolor=textColor,window.__sms.sms_widget_content='',window.__sms.as=additional_scripts; let t=document.createElement("script"); console.log(window); document.getElementsByTagName("html"), t.async,t.setAttribute("type","text/javascript"), t.setAttribute("src","https://theliveforce.app/assets/js/tsmsg.js?v=678438d294ade"),document.head.appendChild(t); })(); function loadExternalScript() { const script = document.createElement('script'); script.id = 'vtag-ai-js'; script.async = true; script.src = 'https://r2.leadsy.ai/tag.js'; script.setAttribute('data-pid', '18YXf0mlGo1v8QkSL'); script.setAttribute('data-version', '062024'); document.head.appendChild(script); script.onload = () => { console.log('Script loaded successfully.'); }; script.onerror = () => { console.error('Error loading script.'); }; } loadExternalScript();