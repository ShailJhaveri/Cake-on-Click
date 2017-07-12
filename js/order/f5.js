$(document).ready(function() {
    function e() {
        var e = s() + i() + r() + t();
        return e
    }
    var s = function() {
            var e = $('#j-forms .cake-size input[type="radio"]'),
                s = 0;
            return e.each(function() {
                this.checked && $.each(this.attributes, function() {
                    "data-price" === this.name && (s += parseFloat(this.value))
                })
            }), s = Math.round(100 * s) / 100
        },
        i = function() {
            var e = $("#j-forms .filling option:selected"),
                s = 0;
            return e.each(function() {
                $.each(this.attributes, function() {
                    "data-price" === this.name && (s += parseFloat(this.value))
                })
            }), s = Math.round(100 * s) / 100
        },
        r = function() {
            var e = $('#j-forms .lovely-things input[type="checkbox"]'),
                s = 0;
            return e.each(function() {
                this.checked && $.each(this.attributes, function() {
                    "data-price" === this.name && (s += parseFloat(this.value))
                })
            }), s = Math.round(100 * s) / 100
        },
        t = function() {
            var e = 0;
            return e = $("#j-forms .delivery option:selected").attr("data-price"), e = parseFloat(e), e = Math.round(100 * e) / 100
        };
    $(".cake-size, .filling, .lovely-things, .delivery").change(function() {
        $("#total-cake-price").removeClass("hidden"), $("#total-cake-price span").html("Rs" + e())
    }), $("#show-inscription").change(function() {
        $("#show-inscription").is(":checked") ? $("#inscription").removeClass("hidden") : ($("#inscription").addClass("hidden"), $('#inscription input[type="text"]').val(""))
    }), $("#delivery").change(function() {
        var e = "";
        $("#delivery option:selected").each(function() {
            e = $(this).val()
        }), "Delivery-5$" == e ? $("#delivery-address").hasClass("hidden") && $("#delivery-address").removeClass("hidden") : ($("#delivery-address").hasClass("hidden") || $("#delivery-address").addClass("hidden"), $('#delivery-address input[type="text"]').val(""))
    }), $("#phone").mask("(999) 999-9999", {
        placeholder: "x"
    }), $("#j-forms").validate({
        errorClass: "error-view",
        validClass: "success-view",
        errorElement: "span",
        onkeyup: !1,
        onclick: !1,
        ignore: "",
        rules: {
            cake_size: {
                required: !0
            },
            "filling[]": {
                required: !0
            },
            inscription: {
                required: "#show-inscription:checked"
            },
            name: {
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
			phone: {
				required: !0
			},
            address: {
                required: '#delivery option[value="Delivery-5$"]:selected'
            }
        },
        messages: {
            cake_size: {
                required: "Please select a cake size"
            },
            "filling[]": {
                required: "Please select a filling"
            },
            inscription: {
                required: "Please enter your inscription"
            },
            name: {
                required: "Please enter your name"
            },
            email: {
                required: "Please enter your email",
                email: "Incorrect email format"
            },
			phone: {
				required: "Please enter phone number"
			},
            address: {
                required: "Please enter your address"
            }
        },
        highlight: function(e, s, i) {
            $(e).closest(".input").removeClass(i).addClass(s), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(i).addClass(s)
        },
        unhighlight: function(e, s, i) {
            $(e).closest(".input").removeClass(s).addClass(i), ($(e).is(":checkbox") || $(e).is(":radio")) && $(e).closest(".check").removeClass(s).addClass(i)
        },
        errorPlacement: function(e, s) {
            $(s).is(":checkbox") || $(s).is(":radio") ? $(s).closest(".check").append(e) : $(s).closest(".unit").append(e)
        },
        submitHandler: function() {
            $("#j-forms").ajaxSubmit({
                
                error: function(e) {
                    $("thankyou").php("An error occured: " + e.status + " - " + e.statusText)
                },
                beforeSubmit: function() {
                    $( "#j-forms" ).submit();
       $('#j-forms button[type="submit"]').attr("disabled", !0).addClass("processing")
                },
                success: function() {
                            
					$('#j-forms button[type="submit"]').attr("disabled", !1).removeClass("processing"), $("#j-forms .success-message").length && ($("#j-forms .input").removeClass("success-view error-view"), $("#j-forms .check").removeClass("success-view error-view"), $("#inscription").hasClass("hidden") || $("#inscription").addClass("hidden"), $("#j-forms").resetForm(), $("#total-cake-price").addClass("hidden"), $('#j-forms button[type="submit"]').attr("disabled", !0), setTimeout(function() {
                        $("#j-forms #response").removeClass("success-message").html(), $('#j-forms button[type="submit"]').attr("disabled", !1)
                       
					}, 5e3))
					
                }
            })
        }
    })
});