(function($) {
    let toggle = document.getElementById("menu-toggle");
    let menu = document.getElementById("menu");
    let close = document.getElementById("menu-close");

    toggle.addEventListener("click", function(e) {
        if (menu.classList.contains("open")) {
            menu.classList.remove("open");
        } else {
            menu.classList.add("open");
        }
    });

    close.addEventListener("click", function(e) {
        menu.classList.remove("open");
    });

    // Close menu after click on smaller screens
    $(window).on("resize", function() {
        if ($(window).width() < 846) {
            $(".main-menu a").on("click", function() {
                menu.classList.remove("open");
            });
        }
    });

    $(".hover").mouseleave(function() {
        $(this).removeClass("hover");
    });

    $(".isotope-wrapper").each(function() {
        let $isotope = $(".isotope-box", this);
        let $filterCheckboxes = $('input[type="radio"]', this);

        let filter = function() {
            let type = $filterCheckboxes.filter(":checked").data("type") || "*";
            if (type !== "*") {
                type = '[data-type="' + type + '"]';
            }
            $isotope.isotope({ filter: type });
        };

        $isotope.isotope({
            itemSelector: ".isotope-item",
            layoutMode: "masonry"
        });

        $(this).on("change", filter);
        filter();
    });

    $(".skills-isotope-wrapper").each(function() {
        let $isotope = $(".isotope-box", this);
        let $filterCheckboxes = $('input[type="radio"]', this);

        let filter = function() {
            let type = $filterCheckboxes.filter(":checked").data("type") || "*";
            if (type !== "*") {
                type = '[data-type="' + type + '"]';
            }
            $isotope.isotope({ filter: type });
        };

        $isotope.isotope({
            itemSelector: ".skills-isotope-item",
            layoutMode: "masonry"
        });

        $(this).on("change", filter);
        filter();
    });

    /**
     * Contact form submit
     */
    $("#contact").on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            beforeSend: function () {
                $('#form-submit').attr('disabled', 'disabled');
                $(document).find('[role="alert"]').hide(function () {
                    $(this).text('');
                });
                $('#success').hide();
                $('#contact-loading').show();
            },
        }).done(function (response) {
            $('#form-submit').removeAttr("disabled");
            $('#contact-loading').hide();
            $('#success').show(function () {
                $(this).text(response.success);
            });
        }).fail(function (jqXHR, textStatus, errorThrown) {
            // console.log(jqXHR.responseText);
            // console.log(textStatus);
            // console.log(errorThrown);
            $('#form-submit').removeAttr("disabled");
            $('#contact-loading').hide();
            let errors = $.parseJSON(jqXHR.responseText);
            $.each(errors.errors, function (key, val) {
                $("#" + key + "_error").show(function() {
                    $(this).text(val[0]);
                });
            });
        })
    });
})(jQuery);
