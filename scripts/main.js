$(document).ready(function(){$("a.scrollTop").click(function(){var t=$(this).attr("href");return $("html, body").animate({scrollTop:$(t).offset().top},"slow"),!1}),$("form").on("keyup","input",function(t){$input=$(this).val(),"email"===$(this)[0].type?$('input[type="email"]').filter(function(){/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test($('input[type="email"]').val())?$(this).addClass("active"):$(this).removeClass("active")}):"tel"===$(this)[0].type?$input.length>9?$(this).addClass("active"):$(this).removeClass("active"):$input.length>3?$(this).addClass("active"):$(this).removeClass("active")})});