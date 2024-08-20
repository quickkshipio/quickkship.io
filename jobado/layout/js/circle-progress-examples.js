$('.first.circle').circleProgress({
    value: 0.90
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
});
$('.second.circle').circleProgress({
    value: 0.90
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
});
$('.third.circle').circleProgress({
    value: 0.85
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(85 * progress) + '<i>%</i>');
});
$('.fourth.circle').circleProgress({
    value: 0.80
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
});
$('.fifth.circle').circleProgress({
    value: 0.80
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(80 * progress) + '<i>%</i>');
});
$('.sixth.circle').circleProgress({
    value: 0.90
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
});