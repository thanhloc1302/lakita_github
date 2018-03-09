$(function () {
    var video_id = $("#lakitaid").val();
    $.ajax({
        type: "POST",
        url: 'player/PlayDemo',
        data: {
            video_id: video_id
        },
        success: function (response)
        {
            jwplayer('mediaspace').setup({
                file: response,
                autostart: 'true',
                width: "100%",
                aspectratio: "16:9",
                stretching: 'fill',
                dash: true,
                image: "https://lakita.vn/styles/images/play.jpg",
            });
        }
    });
});
