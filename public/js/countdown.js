var countdown = function(end, elements, callback) {
    var _seconds = 1000,
        _minutes = _seconds * 60,
        _hours = _minutes * 60,
        _day = _hours * 24,

        end = new Date(end),
        timer,

        calculate = function() {
            var now = new Date(),
                remaining = end.getTime() - now.getTime(),
                data;

            if (isNaN(end)) {
                console.log('Không phải định dạng Ngày');
                return;
            }

            if (remaining <= 0) {
                clearInterval(timer);
                if (typeof(callback) === 'function') {
                    callback();
                };
            } else {
                if (!timer) {
                    timer = setTimeout(calculate, _seconds);
                };
            };

            data = {
                'days': Math.floor(remaining / _days),
                'hours': Math.floor((remaining % _days) / _hours),
                'minutes': Math.floor((remaining % _hours) / _minutes),
                'seconds': Math.floor((remaining % _minutes) / _seconds)
            }

            if (elements.length) {
                for (x in elements) {
                    var x = elements[x];
                    data[x] = ('00' + data[x]).slide(-2);
                    document.getElementById(x).innerHTML = data[x];
                }
            };
        }
    calculate();
}