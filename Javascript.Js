<label>
    Range
    <input id="picker" mbsc-input placeholder="Please select..." />
</label>
JS
var min = new Date();
var max = new Date(min.getFullYear(), min.getMonth() + 6, min.getDate());

mobiscroll.datepicker('#picker', {
    controls: ['calendar'],
    select: 'range',
    min: min,
    max: max
});

var now = new Date(); // Define 'now' with the current date

mobiscroll.datepicker('#start', {
    controls: ['calendar'],
    select: 'range',
    startInput: '#start',
    endInput: '#end',
    min: min, // Reuse the 'min' variable
    max: max // Reuse the 'max' variable
});

mobiscroll.datepicker('#start', {
    controls: ['calendar'],
    select: 'range',
    startInput: '#start',
    endInput: '#end',
    invalid: [
        {
            recurring: {
                repeat: 'weekly',
                weekDays: 'TU,TH'
            },
        },
        new Date(now.getFullYear(), now.getMonth(), 25)
    ],
    inRangeInvalid: true
});

document.querySelectorAll('.bus-type').forEach(function (elm) {
    elm.addEventListener('change', function (ev) {
        var oneWay = elm.value == 'oneway';
        mobiscroll.getInst('#end').setOptions({ disabled: elm.value == oneWay });

        if (oneWay) {
            // Assuming 'booking' should be defined somewhere before this code
            booking.setOptions({
                select: 'date'
            });
        } else {
            // Assuming 'booking' should be defined somewhere before this code
            booking.setOptions({
                select: 'range'
            });
        }
    });
});

var calendar = mobiscroll.datepicker('#picker', {
    controls: ['calendar'],
    select: 'range',
    buttons: ['set', 'cancel', {
        text: 'One way only',
        disabled: true,
        handler: function () {
            var start = calendar.getTempVal()[0];
            calendar.setVal([start, null]);
            calendar.close();
        }
    }],
    onTempChange: function (event, inst) {
        inst.setOptions({
            buttons: [
                'cancel',
                {
                    text: 'One way only',
                    disabled: !inst.getTempVal()[0],
                    handler: function () {
                        var start = calendar.getTempVal()[0];
                        calendar.setVal([start, null]);
                        calendar.close();
                    }
                },
                'set'
            ]
        });
    }
});

/*var calendar = mobiscroll.datepicker('#picker', {
    controls: ['calendar'],
    select: 'range',
    buttons: ['set', 'cancel', {
        text: 'One way only',
        disabled: true,
        handler: function () {
            var start = calendar.getTempVal()[0];
            calendar.setVal([start, null]);
            calendar.close();
        }
    },
    onTempChange: function (event, inst) {
        inst.setOptions({
            buttons: [
                'cancel',
                {
                    text: 'One way only',
                    disabled: !inst.getTempVal()[0],
                    handler: function () {
                        var start = calendar.getTempVal()[0];
                        calendar.setVal([start, null]);
                        calendar.close();
                    }
                },
                'set'
            ]
        });
    }
});

/*var min = new Date(),
    max = new Date(min.getFullYear(), min.getMonth() + 6, min.getDate());
                            
mobiscroll.datepicker('#picker', {
    controls: ['calendar'],
    select: 'range',
    min: min,
    max: max
});
var min = new Date(),
    max = new Date(min.getFullYear(), min.getMonth() + 6, min.getDate());
                            
mobiscroll.datepicker('#start', {
    controls: ['calendar'],
    select: 'range',
    startInput: '#start',
    endInput: '#end',
    min: now,
    max: max
});
mobiscroll.datepicker('#start', {
    controls: ['calendar'],
    select: 'range',
    startInput: '#start',
    endInput: '#end',
    invalid: [
        {
            recurring: {
                repeat: 'weekly',
                weekDays: 'TU,TH'
            },
        },
        new Date(now.getFullYear(), now.getMonth(), 25)
    ],
    inRangeInvalid: true
});
document.querySelectorAll('.bus-type').forEach(function (elm) {
    var oneWay = this.value == 'oneway';
    elm.addEventListener('change', function (ev) {
        mobiscroll.getInst(end).setOptions({ disabled: this.value == oneWay });

        if (oneWay) {
            booking.setOptions({
                select: 'date'
            });
        } else {
            booking.setOptions({
                select: 'range'
            });
        }
    });
});;
var calendar = mobiscroll.datepicker('#picker', {
    controls: ['calendar'],
    select: 'range',
    buttons: ['set', 'cancel', {
        text: 'One way only',
        disabled: true,
        handler: function () {
            var start = calendar.getTempVal()[0];

            calendar.setVal([start, null]);
            calendar.close();
        }
    }],
    onTempChange: function (event, inst) {
        inst.setOptions({
            buttons: [
                'cancel',
                {
                    text: 'One way only',
                    disabled: !inst.getTempVal()[0],
                    handler: function () {
                        var start = calendar.getTempVal()[0];

                        calendar.setVal([start, null]);
                        calendar.close();
                    }
                },
                'set'
            ]
        });
    }
});
/*$(document).ready(function(){
    $('#buspage').click(function(){
           var Tl = new TimelineMax()
           var nextbutton = $('.screen-home__bus-page')
           var screenBottom = $('.screen-bottom');
                   Tl
                       // .fromTo('.screen-home__bus-page', '0.3', {scale: 1, ease:Expo.easeInOut}, {scale: 1.2, ease: Expo.easeInOut }, '0.6')
                       // .to('.screen-home__bus-page', '0.3', {scale: 1, ease:Expo.easeInOut, onComplete: clkAnimComplete})
                       .to('.screen-home__inside-wave', '0.3', {width: 52, height: 52 })
                       .to('.screen-home__inside-wave', '0.3', {opacity: 0, onComplete: clkAnimComplete})
                       function clkAnimComplete() {
                           // .to('.screen-home__inside-wave', '0.3', {width: 100, height: 100 })
                           Tl.to('#formdetail', 0.1, {scale: 0.9, y: 5, opacity:0, ease: Power2.easeIn})
                           Tl.to('.screen-home__recent-search', 0.1, {scale: 0.9, y: 5, opacity:0, ease: Power2.easeIn}, '0')
                           Tl.to('.screen-bottom', 0.1, {opacity: 0}, '0')
                           Tl.to(nextbutton, 1, {rotation: 720, scale: 0.4, borderWidth: 0, ease: Expo.easeOut})
                           Tl.to('.screen-home__bus-arrow-wrap', 1, {scale: 0, opacity: 0, ease: Expo.easeOut}, '0')
                           Tl.to('.line', 0.6, {width: 0}, '0.6')
                           Tl.to('.screen-home__submit-wrap', 0.6, {width: 375, height: 90, x: -15, y: -409, ease: Expo.easeOut })
                           Tl.to(nextbutton, 0.6, {scale: 1, width: 375, height: 90, borderRadius: 0, ease: Expo.easeOut, onStart: visibleBox})
                           Tl.to(screenBottom, 0.1, {opacity: 1})
                           Tl.to('.screen-bus', 0, {opacity:1})
                           Tl.to('.screen-home', 0.6, {opacity: 0})
                           Tl.to('.screen-home', 0, {display: 'none'})
                           function visibleBox() {
                               Tl.staggerTo('.screen-bus__travels-col', 0.4, {opacity: 1, y: 0, ease: Expo.easeIn}, '0.1'); 
                               console.log('start');
                           } 
                       }
        });
     
   var TlWaveAnim = new TimelineMax({repeat: -1});
       TlWaveAnim
                 .to('.screen-home__inside-wave', 0.8, {width: '100%', height: '100%'});
   });*/