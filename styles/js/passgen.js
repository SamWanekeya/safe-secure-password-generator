jQuery(function(){
	
	jQuery('body').on('mouseup', '.password-input, .password-textarea', function(){
		jQuery(this).select();
	});

	
	jQuery('#pgen_pwd_specialcharacters').click(function(){
		
		if(jQuery(this).is(':checked'))
		{
			if(!jQuery('#pgen-specialcharacterslist-container').is(':visible'))
			{
				jQuery('#pgen-specialcharacterslist-container').slideDown('fast');
			}
			
			if(jQuery('#pgen-specialcharacterslist-container').is(':visible'))
			{
				jQuery('#pgen_checkallspecialcharacters').hide();
				
				jQuery('#pgen_uncheckallspecialcharacters').show();
			}
			
			jQuery('.pgen-specialcharacter-container').find('label').addClass('pgen-specialcharacter-selected');
			
			jQuery('.pgen-checkbox-specialcharacter').each(function(){jQuery(this).prop('checked', true)});
		}
		
		if(!jQuery(this).is(':checked'))
		{
			jQuery('#pgen-specialcharacterslist-container').slideUp('fast');
			
			jQuery('.pgen-checkbox-specialcharacter').prop('checked', false);
			
			jQuery('.pgen-specialcharacter-container').find('label').removeClass('pgen-specialcharacter-selected');
			
			jQuery('.pgen-checkbox-specialcharacter').each(function(){jQuery(this).prop('checked', false)});
		}
		
	});
	
	
	jQuery('#pgen_uncheckallspecialcharacters').click(function(){
															   
		jQuery(this).hide();
		
		jQuery('#pgen_checkallspecialcharacters').show();
	
		jQuery('.pgen-checkbox-specialcharacter, #pgen_pwd_specialcharacters').prop('checked', false);
	
		jQuery('label[for="pgen_pwd_specialcharacters"]').find('.pgen-label-title').removeClass('pgen-label-selected');
		
		jQuery('.pgen-specialcharacter-container').find('label').removeClass('pgen-specialcharacter-selected');
		
	});
	
	
	jQuery('#pgen_checkallspecialcharacters').click(function(){
															 
		jQuery(this).hide();
		
		jQuery('#pgen_uncheckallspecialcharacters').show();
															 
		jQuery('.pgen-checkbox-specialcharacter, #pgen_pwd_specialcharacters').prop('checked', 'checked');

		jQuery('label[for="pgen_pwd_specialcharacters"]').find('.pgen-label-title').addClass('pgen-label-selected');
		
		jQuery('.pgen-specialcharacter-container').find('label').addClass('pgen-specialcharacter-selected');
		
	});
	
	
	jQuery('.pgen-checkbox-specialcharacter').click(function(){
	
		if(jQuery(this).is(':checked')){
			jQuery('#pgen_pwd_specialcharacters').prop('checked', 'checked');
		}
		
		if(!jQuery('.pgen-checkbox-specialcharacter:checked').length){
			
			jQuery('#pgen_pwd_specialcharacters').prop('checked', false);
			
			jQuery('#pgen_uncheckallspecialcharacters').hide();
			
			jQuery('#pgen_checkallspecialcharacters').show();

			jQuery('label[for="pgen_pwd_specialcharacters"]').find('.pgen-label-title').removeClass('pgen-label-selected');
		}
		
	});

	
	jQuery('input[name="pgen_pwd_options[]"]').click(function(){
	
		var pgen_option_label = jQuery(this).closest('.pgen-password-option').find('.pgen-label-title');
		
		if(jQuery(this).is(':checked')){
			
			pgen_option_label.addClass('pgen-label-selected');
			
		} else{
			
			pgen_option_label.removeClass('pgen-label-selected');
		}

	});
	
	
	jQuery('input[name="pgen_specialcharacter[]"]').click(function(){
		
		var pgen_option_label = jQuery('label[for="pgen_pwd_specialcharacters"]').find('.pgen-label-title');
		
		var pgen_optionspecialcharacter_label = jQuery(this).closest('.pgen-specialcharacter-container').find('label');
		
		if(jQuery(this).is(':checked')){
			
			pgen_optionspecialcharacter_label.addClass('pgen-specialcharacter-selected');
			
			pgen_option_label.addClass('pgen-label-selected');
			
		} else{
			
			pgen_optionspecialcharacter_label.removeClass('pgen-specialcharacter-selected');
			
		}
	});
	
	jQuery('#pgen_generator_btn').click(function(e){
			
		e.preventDefault();
			
		var pgen_loading = jQuery('.pgen-loading');
			
		jQuery('.pgen-password-list').slideUp(100, function(){
				
			jQuery('.pgen-error').hide().empty();
				
			pgen_loading.show();
				
				
			// options checked
			var pgen_pwd_options_checked_post = Array();
				
			var pgen_pwd_options_checked_collection = jQuery('input[name="pgen_pwd_options[]"]:checked'); 
			
			pgen_pwd_options_checked_collection.each(function(){
				pgen_pwd_options_checked_post.push(jQuery(this).val());
			});
			
				
			// special characters checked
			var pgen_specialcharacters_cheked_post = Array();
			
			var pgen_specialcharacters_checked_collection = jQuery('input[name="pgen_specialcharacter[]"]:checked'); 
			
			pgen_specialcharacters_checked_collection.each(function(){
				pgen_specialcharacters_cheked_post.push(jQuery(this).val());
			});
				
				
			jQuery.post('controllers/password.php',
							{ 
							'pwd_options[]':pgen_pwd_options_checked_post
							,'pgen_specialcharacter[]':pgen_specialcharacters_cheked_post
							,'length':jQuery('#pgen_passwordlength').val()
							,'nbpwd':jQuery('#pgen_nbpwd').val()
							},
							function(pgen_data)
							{
								pgen_loading.hide();
								
								pgen_data = jQuery.trim(pgen_data);
								
								//	console.log(pgen_data);
								
								pgen_response = jQuery.parseJSON(pgen_data);
									jQuery('.pgen-password-list').empty();
								
								if(pgen_response['error'])
								{
									jQuery('.pgen-error').fadeIn('fast').append(pgen_response['error']);
									
								} else{
									
									jQuery.each(pgen_response['passwords_input'], function(index, value){
										jQuery('.pgen-password-list').append(value);
									});
									
									if(pgen_response['passwords_input'].length > 1)
									{
										jQuery('.pgen-password-list').append(pgen_response['passwords_textarea']);
									}
														
								}
								
								jQuery('.pgen-password-list').slideDown(200);
						}
				);  //jQuery.post
				
		}); // slideUp
			
		return false;
	}); // click btn

}); // jQuery

function copyToClipboard(t) {
    t.preventDefault(), selectText("output");
    try {
        var e = document.execCommand("copy"),
            s = e ? "successful" : "unsuccessful";
        console.log("Copying text command was " + s)
    } catch (t) {
        console.log("Oops, unable to copy")
    }
    setTimeout(function() {
        $("#output-html").focus().select()
    }, 10)
}

function selectText(t) {
    var e, s, o = document,
        i = o.getElementById(t);
    o.body.createTextRange ? (e = document.body.createTextRange(), e.moveToElementText(i), e.select()) : window.getSelection && (s = window.getSelection(), e = document.createRange(), e.selectNodeContents(i), s.removeAllRanges(), s.addRange(e))
}
var util = {
    timer: 0,
    worker: 0,
    workerAvailable: !1,
    docStyle: document.documentElement.style,
    cssVars: !0,
    scrollOptions: {
        b: !1,
        sTop: 0,
        sBottom: 0,
        eTop: 0,
        eBottom: 0,
        scale: .75,
        height: {
            orig: 278,
            calc: 0
        }
    },
    scrollCheck: function() {
        util.scrollOptions.sTop = $(window).scrollTop(), util.scrollOptions.sBottom = util.scrollOptions.sTop + $(window).height(), $(".appear:not(.transition)").each(function() {
            util.scrollOptions.eTop = $(this).offset().top, util.scrollOptions.eBottom = util.scrollOptions.eTop + $(this).height() / 2, util.scrollOptions.sTop < util.scrollOptions.eTop && util.scrollOptions.sBottom > util.scrollOptions.eBottom && ($(this).addClass("transition"), $(this).hasClass("tw") && setTimeout(util.terminalType, 500))
        }), util.cssVars && (util.scrollOptions.sTop <= 200 ? (util.scrollOptions.scale = 1 - util.scrollOptions.sTop / 8 / 100, util.scrollOptions.height.calc = util.scrollOptions.height.orig - util.scrollOptions.sTop / 2, util.docStyle.setProperty("--title-scale", "scale(" + util.scrollOptions.scale + ")"), util.docStyle.setProperty("--title-height", util.scrollOptions.height.calc + "px"), util.scrollOptions.b = !1) : util.scrollOptions.sTop > 200 && util.scrollOptions.b === !1 && (util.docStyle.setProperty("--title-scale", "scale(0.75)"), util.docStyle.setProperty("--title-height", util.scrollOptions.height.orig - 100 + "px"), util.scrollOptions.b = !0))
    },
    hasScrollbar: function(t) {
        return t[0].scrollHeight > Math.round(t.height())
    },
    changeType: function() {
        $(".button-list .active").removeClass("active"), $(this).addClass("active"), $(this).blur()
    },
    changeUnit: function() {
        var t = parseInt($(".generate .text-input").val());
        t > 9 && t < 100 ? $(".generate .text-input").removeClass("three-digits").addClass("two-digits") : t > 99 ? $(".generate .text-input").removeClass("two-digits").addClass("three-digits") : $(".generate .text-input").removeClass("two-digits three-digits"), clearTimeout(util.timer), util.timer = setTimeout(util.generate, 200)
    },
    handleSubmit: function(t) {
        t.preventDefault(), util.generate()
    },
    generate: function() {
        var t = "none" === $(".generate .col1").css("float"),
            e = parseInt($(".generate .text-input").val()),
            s = parseInt($(".generate button.active").val()),
            o = "";
        if (e < 1) return !1;
        if ($(".output-container").addClass("fade"), t && window.scrollTo(0, $(".generate .col2").offset().top - 50), util.workerAvailable) switch (s) {
            case 1:
                e > 1e3 && (e = 1e3), util.worker.postMessage({
                    cmd: "paragraphs",
                    count: e,
                    tags: "p",
                    swl: !0
                });
                break;
            case 2:
                e > 5e3 && (e = 5e3), util.worker.postMessage({
                    cmd: "words",
                    count: e,
                    swl: !0
                });
                break;
            case 3:
                e > 1e4 && (e = 1e4), util.worker.postMessage({
                    cmd: "bytes",
                    count: e,
                    swl: !0
                });
                break;
            case 4:
                e > 2e3 && (e = 2e3), util.worker.postMessage({
                    cmd: "lists",
                    count: e,
                    tags: "li",
                    swl: !0
                })
        } else {
            switch (s) {
                case 1:
                    e > 1e3 && (e = 1e3), o = getlorem.paragraphs(e, "p", !0);
                    break;
                case 2:
                    e > 5e3 && (e = 5e3), o = getlorem.words(e, !1, !0), o = "<p>" + o + "</p>";
                    break;
                case 3:
                    e > 1e4 && (e = 1e4), o = getlorem.bytes(e, !1, !0), o = "<p>" + o + "</p>";
                    break;
                case 4:
                    e > 2e3 && (e = 2e3), o = getlorem.lists(e, "li", !0), o = "<ul>" + o + "</ul>"
            }
            util.printOutput(o)
        }
    },
    printOutput: function(t) {
        setTimeout(function() {
            $("#output-html").val(t), $(".toggle-output .html").hasClass("active") ? util.insertHTML(t) : $("#output").html(t), util.hasScrollbar($("#output")) ? $(".output-container").addClass("scrollbars") : $(".output-container").removeClass("scrollbars"), $(".output-container").removeClass("fade down")
        }, 200)
    },
    toggleOutput: function(t) {
        function e(t) {
            $(".toggle-output a").removeClass("active"), t.addClass("active")
        }
        t.preventDefault();
        var s = $("#output-html").val();
        $(this).hasClass("rt") && !$(this).hasClass("active") ? (e($(this)), $("#output").html(s)) : $(this).hasClass("html") && !$(this).hasClass("active") && (e($(this)), util.insertHTML(s))
    },
    insertHTML: function(t) {
        $("#output").html("<p></p>"), $("#output p").text(t)
    },
    popup: function(t) {
        t.preventDefault();
        var e = $(this).prop("href"),
            s = $(this).prop("id"),
            o = 840,
            i = 480,
            l = (window.innerWidth - o) / 2,
            a = (window.innerHeight - i) / 2,
            n = "status=1,width=" + o + ",height=" + i + ",top=" + a + ",left=" + l;
        window.open(e, s, n)
    },

};
$(function() {
    if ($("main").addClass("transition"), util.scrollOptions.height.orig = parseInt($(".title").css("min-height")), $("html").hasClass("no-vars") && (util.cssVars = !1), window.Worker && (util.workerAvailable = !0), util.scrollCheck(), $(window).on("scroll", util.scrollCheck), $(".copy").on("click", copyToClipboard), $(".generate").on("submit", util.handleSubmit), $(".generate button").on("click", util.changeType), $(".generate input").on("input", util.changeUnit), $(".toggle-output a").on("click", util.toggleOutput), $(".share").on("click", util.popup), util.workerAvailable) {
        util.worker = new Worker("");
        var t = 0,
            e = "",
            s = "";
        util.worker.addEventListener("message", function(o) {
            if (t < 2) s += "<p>" + o.data.output + "</p>", t++, t > 1 && $("#output").text().length < 1 && ($(".output-container").addClass("fade"), util.printOutput(s));
            else {
                switch (s = o.data.output, e = o.data.cmd) {
                    case "lists":
                        s = "<ul>" + s + "</ul>";
                        break;
                    case "words":
                    case "bytes":
                        s = "<p>" + s + "</p>"
                }
                util.printOutput(s)
            }
        }, !1), util.worker.postMessage({
            cmd: "sentences",
            count: 3,
            tags: !1,
            swl: !0
        }), util.worker.postMessage({
            cmd: "sentences",
            count: 3
        })
    } else {
        var o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, r = !1, o.src = "", o.onload = o.onreadystatechange = function() {
            if (!(r || this.readyState && "complete" != this.readyState)) {
                r = !0;
                var t = "<p>" + getlorem.sentences(3, !1, !0) + "</p>";
                t += "<p>" + getlorem.sentences(3) + "</p>", util.printOutput(t)
            }
        };
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i)
    }
}), window.onload = function() {
    var t = [];
    $(".lazy").each(function(e) {
        var s = $(this).data("src");
        t[e] = {
            img: new Image,
            elem: $(this)
        }, t[e].img.alt = e, t[e].img.src = s, t[e].img.onload = function() {
            t[this.alt].elem.prop("src", this.src)
        }
    })
};
