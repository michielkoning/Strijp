function validateEmail(a){var e=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;return a.match(e)}function validateInput(a){var e=!0;return a.removeClass("error"),"email"===a.attr("type")&&(e=validateEmail(a.val())),""===a.val()&&(e=!1),e||a.addClass("error"),e}var $window=$(window),$document=$(document);$document.ready(function(){$(".btn-share").click(function(a){a.preventDefault();var e=$(this),t=e.attr("href");window.open(t,"Delen","height=300, width=500")})}),$document.ready(function(){$("form").attr("novalidate",!0),$("form").submit(function(a){a.preventDefault();var e=!1,t=$(this),n=t.find(".form-message");n.removeClass("active"),t.find("input[required], textarea[required]").each(function(){validateInput($(this))||(e=!0)});var r=t.serializeArray();r.push({name:"ajax",value:!0}),r=$.param(r),e?n.addClass("active"):$.ajax({type:"POST",url:ajaxurl,data:r}).done(function(a){t.html(a)})}),$("input[required], textarea[required]").blur(function(){validateInput($(this))})}),$(document).ready(function(){$(".btn-toggle-menu").click(function(a){a.preventDefault();var e=$(this),t=$("nav");e.hasClass("active")?(e.removeClass("active"),t.slideUp()):(e.addClass("active"),t.slideDown())})});