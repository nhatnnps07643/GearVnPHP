"use strict";

var CANHCAM_APP = { "ACTIVE_FIXED_HEADER": true, "HEADER_TRANPARENT": false, "ACTIVE_HEADER_POSITION": 1, "ACTIVE_PADDING_MAIN": true, "ACTIVE_VALIDATOR": true, "ACTIVE_SELECT": true, "ACTIVE_FIXED_FOOTER": true, "ACTIVE_LIST_TO_SELECT": true, "DISPLAY_FOOTER": 600, "ACTIVE_RESPONSIVE": true, "ACTIVE_BACKTOTOP": true, "DISPLAY_BACKTOTOP": 100, "CHANGE_GRID": 991, "CHANGE_GRID_SM": 767, "DEV_MODE": false, "DEV_MODE_GIRD_FULL": false };

function backToTop() {
    if ($('#back-to-top').length) {
        var backToTop = function backToTop() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > CANHCAM_APP.DISPLAY_BACKTOTOP) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
}

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_BACKTOTOP) {
        backToTop();
    }
});

function CanhCamResponsive() {
    // Set BG Mask
    $('[bg-mask]').each(function() {
        var bgimg = $(this).attr('bg-mask');
        $(this).css({
            "mask-image": "url(" + bgimg + ")",
            "mask-position": "center center",
            "mask-repeat": "no-repeat",
            "-webkit-mask-image": "url(" + bgimg + ")",
            "-webkit-mask-position": "center center",
            "-webkit-mask-repeat": "no-repeat"
        });
    });
    // Set BG Resposive
    $('[bg-img]').each(function() {
        var bgimg = $(this).attr('bg-img');
        var pos = $(this).attr('bg-pos');
        var size = $(this).attr('bg-size');
        if (pos && pos.length > 0) {
            $(this).css({
                "background-position": pos
            });
        } else {
            $(this).css({
                "background-position": "center center"
            });
        }
        if (size && size.length > 0) {
            $(this).css({
                "background-size": size
            });
        } else {
            $(this).css({
                "background-size": "cover"
            });
        }
        $(this).css({
            "background-image": "url(" + bgimg + ")"
        });
    });

    $('[bg-img-responsive]').each(function() {
        var bgimg = $(this).attr('bg-img-responsive');
        var bgimgsm = $(this).attr('bg-img-responsive-sm');
        var bgimgxs = $(this).attr('bg-img-responsive-xs');
        if ($(window).width() >= CANHCAM_APP.CHANGE_GRID) {
            $(this).css({
                "background-image": "url(" + bgimg + ")",
                "background-position": "center center",
                "background-size": "cover"
            });
        } else if ($(window).width() < CANHCAM_APP.CHANGE_GRID && $(window).width() > CANHCAM_APP.CHANGE_GRID_SM) {
            $(this).css({
                "background-image": "url(" + bgimgsm + ")",
                "background-position": "center center",
                "background-size": "cover"
            });
        } else {
            $(this).css({
                "background-image": "url(" + bgimgxs + ")",
                "background-position": "center center",
                "background-size": "cover"
            });
        }
    });

    $('[img-src-responsive]').each(function() {
        var bgimg2 = $(this).attr('img-src-responsive');
        var bgimg2sm = $(this).attr('img-src-responsive-sm');
        var bgimg2xs = $(this).attr('img-src-responsive-xs');
        if ($(window).width() >= CANHCAM_APP.CHANGE_GRID) {
            $(this).attr("src", "" + bgimg2 + "");
        } else if ($(window).width() < CANHCAM_APP.CHANGE_GRID && $(window).width() > CANHCAM_APP.CHANGE_GRID_SM) {
            $(this).attr("src", "" + bgimg2sm + "");
        } else {
            $(this).attr("src", "" + bgimg2xs + "");
        }
    });
};

$(function() {
    if (CANHCAM_APP.ACTIVE_RESPONSIVE) {
        CanhCamResponsive();
    }
});

$(window).resize(function() {
    if (CANHCAM_APP.ACTIVE_RESPONSIVE) {
        CanhCamResponsive();
    }
});

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({
        trigger: 'focus'
    });
});
// Thêm [dropdown-type="hover"] vào thẻ a để bật tính năng hover open dropdown 
if ($(window).width() > CANHCAM_APP.CHANGE_GRID) {
    $('.dropdown').on('mouseenter mouseleave', function() {
        var ___d = $(this).find('[dropdown-type="hover"]').parents('.dropdown');
        if (___d && ___d.length > 0) {
            $(this).find('[dropdown-type="hover"]').removeAttr('data-toggle');
            setTimeout(function() {
                ___d[___d.is(':hover') ? 'addClass' : 'removeClass']('show');
                ___d.is(':hover') ? ___d.find('.dropdown-menu').show() : ___d.find('.dropdown-menu').hide();
            }, 10);
        }
    });
} else {
    $('.dropdown').each(function() {
        $(this).addClass('show');
        $(this).find('.dropdown-menu').show();
    });
}

$(document).ready(function() {
    checkDev();
});

$(window).resize(function() {
    checkDev();
});

function checkDev() {
    if ($('#devtools').length) {
        if ($(window).width() < 576) {
            $('.canhcam-develop #devtools .header-devtools h3').html('Dev - XS');
        } else if ($(window).width() >= 576 && $(window).width() < 768) {
            $('.canhcam-develop #devtools .header-devtools h3').html('Dev - SM');
        } else if ($(window).width() >= 768 && $(window).width() < 992) {
            $('.canhcam-develop #devtools .header-devtools h3').html('Dev - MD');
        } else if ($(window).width() >= 992 && $(window).width() < 1200) {
            $('.canhcam-develop #devtools .header-devtools h3').html('Dev - LG');
        } else {
            $('.canhcam-develop #devtools .header-devtools h3').html('Dev - XL');
        }
    }
}

(function($) {
    $.fn.drags = function(opt) {

        opt = $.extend({ handle: "", cursor: "move" }, opt);

        if (opt.handle === "") {
            var $el = this;
        } else {
            var $el = this.find(opt.handle);
        }

        return $el.find('.header-devtools').css('cursor', opt.cursor).on("mousedown", function(e) {
            // getSizeDevTo()
            if (opt.handle === "") {
                var $drag = $(this).parent().addClass('draggable');
            } else {
                var $drag = $(this).parent().addClass('active-handle').parent().addClass('draggable');
            }
            var z_idx = $drag.css('z-index'),
                drg_h = $drag.outerHeight(),
                drg_w = $drag.outerWidth(),
                pos_y = $drag.offset().top + drg_h - e.pageY,
                pos_x = $drag.offset().left + drg_w - e.pageX;
            $drag.css('z-index', 99999).parents().on("mousemove", function(e) {
                getSizeDevTo();
                $('.draggable').offset({
                    top: e.pageY + pos_y - drg_h,
                    left: e.pageX + pos_x - drg_w
                }).on("mouseup", function() {
                    // getSizeDevTo()
                    $(this).removeClass('draggable').css('z-index', z_idx);
                });
                $('#devtools .inline').offset({
                    top: e.pageY + pos_y - drg_h
                });
                $('#devtools .online').offset({
                    left: e.pageX + pos_x - drg_w
                });
            });
            e.preventDefault(); // disable selection
        }).on("mouseup", function() {
            // getSizeDevTo()
            if (opt.handle === "") {
                $(this).removeClass('draggable');
            } else {
                $(this).removeClass('active-handle').parent().removeClass('draggable');
            }
        });
    };
})(jQuery);

if (CANHCAM_APP.DEV_MODE) {

    $('body').append('<div id="devtools"> <div class="online"></div><div class="inline"></div><div class="header-devtools"> <h3>Dev - XL</h3> </div><div class="body-devtools"> <button class="btn btn-block btn-secondary btn-sm" type="button">Toogle Grid</button> </div></div>');

    $('#devtools').drags();
    createDevTo();

    $(document).ready(function() {
        if ($('.canhcam-develop #devtools').length) {
            var devtls = $('.canhcam-develop #devtools').find('.body-devtools button');
            devtls.click(function() {
                if ($(this).attr('data-click-state') == 1) {
                    $(this).attr('data-click-state', 0);
                    $('body').toggleClass('active');
                    $('body').find('.devtool-gird').remove();
                } else {
                    $(this).attr('data-click-state', 1);
                    $('body').toggleClass('active');
                    if (CANHCAM_APP.DEV_MODE_GIRD_FULL) {
                        $('body').append('<div class="devtool-gird"><div class="container-fluid d-flex"><div class="row d-flex align-items-stretch bd-highlight"><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div></div></div></div>');
                    } else {
                        $('body').append('<div class="devtool-gird"><div class="container d-flex"><div class="row d-flex align-items-stretch bd-highlight"><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div><div class="col d-flex align-items-stretch"><div class="item"></div></div></div></div></div>');
                    }
                }
            });
        }
    });
}

function getSizeDevTo() {
    $('#devtools .body-devtools .size .width').html('W: ' + $(window).width() + '');
    $('#devtools .body-devtools .size .height').html('H: ' + $(window).height() + '');
    $('#devtools .body-devtools .size .top').html('T: ' + $('#devtools').offset().top + '');
    $('#devtools .body-devtools .size .left').html('L: ' + $('#devtools').offset().left + '');
}

$(window).resize(function() {
    if ($('#devtools').length) {
        getSizeDevTo();
    }
});

function createDevTo() {
    $('#devtools .body-devtools').append('<div class="size"><div class="width">W: ' + $(window).width() + '</div><div class="height">H: ' + $(window).height() + '</div><div class="top">T: ' + $('#devtools').offset().top + '</div><div class="left">L: ' + $('#devtools').offset().left + '</div></div>');
}

function countUpCanhCam() {

    $('[data-count]').each(function() {
        var elm = $(this).offset().top;
        var docH = $(window).height();
        var docS = $(window).scrollTop();
        var padingTop = 0;
        if ($(this).attr('data-top') && $(this).attr('data-top').length) {
            padingTop = parseInt($(this).attr('data-top'));
        }
        var result = elm + padingTop - (docH + docS);
        var run = false;

        if (result <= 0 && !run) {
            var $this = $(this),
                countTo = $this.attr('data-count'),
                durationTo = parseInt($this.attr('data-duration'));
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            }, {
                duration: durationTo,
                easing: 'linear',
                step: function step() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function complete() {
                    $this.text(this.countNum);
                    run = true;
                }
            });
        }
    });
}

$(document).ready(function() {
    countUpCanhCam();
});

$(window).scroll(function() {
    countUpCanhCam();
});

$(window).resize(function() {
    countUpCanhCam();
});

function CanhCamChangeDataHoverClick() {
    $('[data-change]').each(function() {
        var newSrc = $(this).attr('data-new');
        var oldSrc = $(this).attr('data-old');
        var typeChange = $(this).attr('data-change');
        if (typeChange && typeChange.length > 0) {
            if (typeChange === 'src') {
                $(this).hover(function() {
                    $(this).attr(typeChange, newSrc);
                }, function() {
                    $(this).attr(typeChange, oldSrc);
                });
            } else if (typeChange === 'background' || typeChange === 'background-image') {
                $(this).hover(function() {
                    $(this).css(typeChange, "url(" + newSrc + ")");
                }, function() {
                    $(this).css(typeChange, "url(" + oldSrc + ")");
                });
            } else if (typeChange === 'class') {
                $(this).hover(function() {
                    $(this).removeClass(oldSrc).addClass(newSrc);
                }, function() {
                    $(this).removeClass(newSrc).addClass(oldSrc);
                });
            }
        }
    });
};

$(function() {
    CanhCamChangeDataHoverClick();
});

function setFooter() {
    var bodyHeight = $("body").outerHeight(),
        headerHeight = $("header").outerHeight(),
        footerHeight = $("footer").outerHeight(),
        mainHeight = $("main").outerHeight(),
        curentHeight = mainHeight + headerHeight + footerHeight,
        curentfixedHeight = mainHeight + footerHeight,
        newHeight = bodyHeight - (headerHeight + footerHeight),
        newfixedHeight = bodyHeight - footerHeight;
    if ($(window).width() > CANHCAM_APP.DISPLAY_FOOTER) {
        if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
            $("main").css('min-height', newfixedHeight + 'px');
        } else {
            if (!CANHCAM_APP.ACTIVE_FIXED_HEADER) {
                $("main").css('min-height', newHeight + 'px');
            } else {
                $("main").css('min-height', newfixedHeight + 'px');
            }
        }
    } else {
        $("main").css('min-height', 'initial');
    }
}

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_FIXED_FOOTER) {
        setFooter();
    }
});

$(window).resize(function() {
    if (CANHCAM_APP.ACTIVE_FIXED_FOOTER) {
        setFooter();
    }
});

function setHeader(elm) {
    if (elm >= CANHCAM_APP.ACTIVE_HEADER_POSITION) {
        $("header").addClass('active');
    } else {
        $("header").removeClass('active');
    }
}

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_FIXED_HEADER) {
        $("header").addClass('fixedheader');
        if ($(window).scrollTop() >= CANHCAM_APP.ACTIVE_HEADER_POSITION) {
            setHeader($(window).scrollTop());
        }
    } else {
        if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
            $("header").addClass('fixedheader');
        } else {
            $("header").removeClass('fixedheader');
        }
    }
    if ($("header").hasClass("fixedheader")) {
        $("main").addClass('main-fixedheader');
    }
});

// Fixed Header
$(window).scroll(function() {
    setHeader($(document).scrollTop());
});
// Fixed Header
$(window).resize(function() {
    if (!CANHCAM_APP.ACTIVE_FIXED_HEADER) {
        if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
            $("header").addClass('fixedheader');
        } else {
            $("header").removeClass('fixedheader');
        }
    }
});

function setMain() {
    var headerHeight = $("header").outerHeight();
    if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
        $("main").css('padding-top', headerHeight + 'px');
    } else {
        if (!CANHCAM_APP.ACTIVE_PADDING_MAIN) {
            $("main").css('padding-top', '0px');
        } else {
            if (!CANHCAM_APP.ACTIVE_FIXED_HEADER) {
                $("main").css('padding-top', 'initial');
            } else {
                $("main").css('padding-top', headerHeight + 'px');
            }
        }
    }
}

$(document).ready(function() {
    setMain();
});

$(window).resize(function() {
    setMain();
});

function setHeaderTranparent(elm) {
    if (elm >= CANHCAM_APP.ACTIVE_HEADER_POSITION) {
        $("header").removeClass('has-tranparent');
    } else {
        $("header").addClass('has-tranparent');
    }
}

$(document).ready(function() {
    if (CANHCAM_APP.HEADER_TRANPARENT) {
        $("header").addClass('has-tranparent');
        if ($(window).scrollTop() >= CANHCAM_APP.ACTIVE_HEADER_POSITION) {
            setHeaderTranparent($(window).scrollTop());
        }
    }
});

// Tranparent Header
$(window).scroll(function() {
    if (CANHCAM_APP.HEADER_TRANPARENT) {
        setHeaderTranparent($(document).scrollTop());
    }
});

function canhcamID(e) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    for (var i = 0; i < e; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
}

function b64EncodeUnicode(str) {
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g, function toSolidBytes(match, p1) {
        return String.fromCharCode('0x' + p1);
    }));
}

function b64DecodeUnicode(str) {
    return decodeURIComponent(atob(str).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}

// Copyright 2014-2017 The Bootstrap Authors
// Copyright 2014-2017 Twitter, Inc.
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
    document.head.appendChild(msViewportStyle);
}

$(function() {
    var nua = navigator.userAgent;
    var isAndroid = nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1;
    if (isAndroid) {
        $('select.form-control').removeClass('form-control').css('width', '100%');
    }
});

function listToSelect() {
    $('[data-select]').each(function() {
        var list = $(this),
            select = $(document.createElement('select')).insertBefore($(this).hide());
        select.addClass('custom-select').attr('data-select-show', '');
        $('>li a', this).each(function() {
            var option = $(document.createElement('option')).appendTo(select).val(this.href).html($(this).html());
        });
        list.hide().removeAttr('data-select').attr('data-select-changed', '');
        select.on('change', function() {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });
    });
}

function selectChangeToList() {
    if (CANHCAM_APP.ACTIVE_LIST_TO_SELECT) {
        if ($(window).width() > CANHCAM_APP.CHANGE_GRID_SM) {
            $('[data-select-changed]').each(function() {
                $(this).show().removeAttr('data-select-changed').attr('data-select', '');
            });
            $('[data-select-show]').remove();
        } else {
            listToSelect();
        }
    }
}

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_LIST_TO_SELECT) {
        if ($(window).width() <= CANHCAM_APP.CHANGE_GRID_SM) {
            listToSelect();
        }
    }
});

$(window).resize(function() {
    if (CANHCAM_APP.ACTIVE_LIST_TO_SELECT) {
        selectChangeToList();
    }
});
document.onkeyup = function(a) {
    if ((a = a || window.event).altKey && a.ctrlKey && a.shiftKey && 13 == a.which) return $("body"), alert(b64DecodeUnicode("QkFPIE5HVVlFTiAtIDA5Njk2ODk4OTMKRW1haWw6IGJhb25ndXllbnlhbUBnbWFpbC5jb20KV2ViOiBiYW9uZ3V5ZW55YW0uZ2l0aHViLmlv")), !1;
};

// Ripple
function ccCreateRipple() {
    $('[ripple]').on('click', function(e) {
        var rippleDiv = $('<div class="ripple" />'),
            rippleOffset = $(this).offset(),
            rippleY = e.pageY - rippleOffset.top,
            rippleX = e.pageX - rippleOffset.left,
            ripple = $('.ripple');

        rippleDiv.css({
            top: rippleY - ripple.height() / 2,
            left: rippleX - ripple.width() / 2,
            background: $(this).attr("ripple-color")
        }).appendTo($(this));
        window.setTimeout(function() {
            rippleDiv.remove();
        }, 1500);
    });
}

$(document).ready(function() {
    ccCreateRipple();
});

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_SELECT) {
        $(".select2").select2({
            placeholder: "Chọn một"
        });

        $('.select2').on("select2:select", function(e) {
            var valSelect = $(e.currentTarget).val();
        });
        $('.select2').on("select2:unselect", function(e) {
            var valUnselect = $(e.currentTarget).val();
        });
    }
});

function selectResset(e) {
    $(e).val(null).trigger("change", 0);
}

function canhCamStickyComtent() {

    $('[data-fix]').each(function() {
        $(this).css({
            "z-index": '500'
        });
        if ($(this).attr('data-top') && $(this).attr('data-top').length) {
            $(this).css({
                "top": $(this).attr('data-top')
            });
        }
        if ($(this).attr('data-left') && $(this).attr('data-left').length) {
            $(this).css({
                "left": $(this).attr('data-left')
            });
        }
        if ($(this).attr('data-bottom') && $(this).attr('data-bottom').length) {
            $(this).css({
                "bottom": $(this).attr('data-bottom')
            });
        }
        if ($(this).attr('data-right') && $(this).attr('data-right').length) {
            $(this).css({
                "right": $(this).attr('data-right')
            });
        }

        var toFix = 0;
        var typeFix = 'fixed';
        var changeFix = 'static';

        if ($(this).attr('data-fix') && $(this).attr('data-fix').length) {
            toFix = parseInt($(this).attr('data-fix'));
        }
        if ($(this).attr('data-fix-type') && $(this).attr('data-fix-type').length) {
            typeFix = $(this).attr('data-fix-type');
        }
        if ($(this).attr('data-fix-change') && $(this).attr('data-fix-change').length) {
            changeFix = $(this).attr('data-fix-change');
        }

        $(this).css({
            "position": typeFix
        });

        var scrollTop = $(window).scrollTop();
        var elementOffset = $(this).offset().top;
        var currentElementOffset = elementOffset - scrollTop;
        if (currentElementOffset <= toFix) {
            $(this).css({
                "position": changeFix,
                "top": toFix + 'px'
            });
        }
    });
}

$(document).ready(function() {
    canhCamStickyComtent();
});

$(window).scroll(function() {
    canhCamStickyComtent();
});

$(window).resize(function() {
    canhCamStickyComtent();
});

$(document).ready(function() {
    if (CANHCAM_APP.ACTIVE_VALIDATOR) {
        $('[data-toggle="validator"]').validator({
            feedback: {
                success: 'fa fa-check',
                error: 'fa fa-close'
            }
        }).on('submit', function(e) {
            if (e.isDefaultPrevented()) {
                $('[data-toggle="validator"]').find('select').parent('.form-group').addClass('has-danger');
            }
        });
        if ($('[data-toggle="validator"]').find('select').hasClass('has-success')) {
            this.removeClass('has-danger');
        }
    }
});

function CCHeader2() {
    $('.canhcam-header-2 .navbar-toggler').on("click", function() {
        $('.canhcam-header-2').toggleClass('expand');
    });
    $('.canhcam-header-2 .search button').on("click", function() {
        if ($('.canhcam-header-2 .search button').attr('type') === 'button') {
            $(this).toggleClass('searchbtn');
            $('.canhcam-header-2 .search').toggleClass('active');
            setTimeout(function() {
                if ($('.canhcam-header-2 .search').hasClass('active')) {
                    $('.canhcam-header-2 .search button').attr('type', 'submit');
                }
            }, 200);
        }
    });
    if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
        $('.canhcam-header-2 .search button').attr('type', 'submit');
    } else {
        $('.canhcam-header-2 .search button').attr('type', 'button');
    }
};

$(function() {
    CCHeader2();
});

$(window).resize(function() {
    $('.canhcam-header-2').removeClass('expand');
    if ($(window).width() <= CANHCAM_APP.CHANGE_GRID) {
        $('.canhcam-header-2 .search button').attr('type', 'submit');
    } else {
        $('.canhcam-header-2 .search button').attr('type', 'button');
    }
});
$(window).ready(function() {
    var menusub = $('.canhcam-header-2 .user .dropdown-menu');
    menusub.hide();
    $('.canhcam-header-2 .user .nav-link').on('click', function() {
        if (menusub.hasClass('activeDrop')) {
            menusub.hide(200);
            menusub.removeClass('activeDrop');
        } else {
            menusub.show(200);
            menusub.addClass('activeDrop');
        }
        $('.canhcam-header-2 .dropdown .nav-link').on('focusout', function() {
            menusub.hide(200);
            menusub.removeClass('activeDrop');
        });
    });
});
$(window).scroll(function() {
    var toTop = $(window).scrollTop();
    if (toTop > 50) {
        $('.canhcam-header-2 .navbar-brand img').css({
            'max-width': '8rem'
        });
        $('.canhcam-header-2').addClass('shadow color');
        $('.canhcam-header-2 .navbar').addClass('pt-0 pb-0');
    } else {
        $('.canhcam-header-2 .navbar-brand img').css({
            'max-width': '13rem'
        });
        $('.canhcam-header-2').removeClass('shadow color');
        $('.canhcam-header-2 .navbar').removeClass('pt-0 pb-0');
    }
});
$('.content-c1 .owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    // nav: false,
    responsive: {
        0: {
            // nav: false,
            items: 1
        },
        600: {
            // nav: false,
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
$('.content-c2 .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        700: {
            items: 2,
            nav: false
        },
        1000: {
            items: 4,
            nav: true,
            loop: false
        }
    }
});
$(window).resize(function() {
    setHeight();
});
$(window).ready(function() {
    setHeight();
});
var setHeight = function setHeight() {
    $('.content-c1 .nav-category').css({
        'height': $('.content-c1 .list-item').height()
    });
};

function CCFooter1() {};

$(function() {
    CCFooter1();
});

$(window).resize(function() {});

$(document).ready(function() {
    $('.detail .slider-for').owlCarousel({
        items: 1,
        loop: true,
        center: true,
        padding: 10,
        margin: 20,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        callbacks: true,
        URLhashListener: true,
        startPosition: 'URLHash'
    });
    $('.detail .slider-nav').owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        items: 3,
        loop: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        nav: true,
        dots: false,
        autoplay: false,
        autoplayHoverPause: false,
        callbacks: true,
        responsive: {
            480: {
                items: 3,
                center: true
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1140: {
                items: 5
            }
        }
    });
});
//# sourceMappingURL=app.js.map