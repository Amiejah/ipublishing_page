$(function(){$(".select-choice").on("click",function(e){var t=$(this),n=t.attr("href"),r=n.split("#"),i=$('input[name="option_choice"]'),s=$('form[name="send_mail"]');getb;$(i).val(r[1]);e.preventDefault()});$(".checkZipCode button").bind("click",function(){var e=!1,t=$('input[name="clone_mail"]').val(),n=$("input[name='sent_entry_ip']").val(),r=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;t==""?e=!0:r.test(t)||(e=!0);if(e==0){$(".alert-error").hide();var i="clone_mail="+t+"&sent_entry_ip="+n+'&action="sending_mail"';$.ajax({type:"POST",url:"success.php",data:i,success:function(){$("iframe").each(function(){$(this).attr("src",$(this).data("src"))})},error:function(){$("alert-error").show()}})}else $(".alert-error").fadeIn();return!1})});