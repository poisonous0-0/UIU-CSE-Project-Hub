function startTimer() {
    var durationInput = document.getElementById('duration');
    var timerDisplay = document.getElementById('timer');

    var duration = parseInt(durationInput.value);

    if (isNaN(duration) || duration <= 0) {
        alert('Please enter a valid positive number for the duration.');
        return;
    }

    var timer = duration;
    var hours, minutes, seconds;

    var intervalId = setInterval(function () {
        hours = Math.floor(timer / 3600);
        minutes = Math.floor((timer % 3600) / 60);
        seconds = timer % 60;

        hours = (hours < 10) ? '0' + hours : hours;
        minutes = (minutes < 10) ? '0' + minutes : minutes;
        seconds = (seconds < 10) ? '0' + seconds : seconds;

        timerDisplay.innerHTML = hours + ':' + minutes + ':' + seconds;

        if (--timer < 0) {
            clearInterval(intervalId);
            timerDisplay.innerHTML = "00:00:00";
            alert("Timer Completed!");
        }
    }, 1000);
}
