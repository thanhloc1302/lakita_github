<script type="text/javascript" src="https://bitmovin-a.akamaihd.net/bitmovin-player/stable/7.5/bitmovinplayer.js"></script>
<div class="row gr1-row-1">
    <div class="st-pusher" id="content">
        <div class="st-content">
            <div class="st-content-inner padding-none">
                <div class="container-fluid videolayout">
                    <input type="hidden" id="lakitaid" value="<?php echo md5(time()) . '$&((_GNSDADFHGD@!$^&%#' . time() . ')*&^%$@' . time() . '#' . $curr_learn[0]['id'] . '#' . time() . '_+1357$*^())!%*$$&' . md5('lakita.vn') . '+135+1357$*^())!%*$$7$*^())!%*$$+1+1357$*^())!%*$$357$*^())!%*$$'; ?>" />
                    <div id="player" class="js-video widescreen">
                        <button class="js-video-btn btn btn-success">Đóng</button>
<!--                              <script type="text/javascript" src="<?php echo 'https://lakita.vn/'; ?>plugin/jwplayer/jwplayer.js?VER=20.01.2018"></script>
                           <script type="text/javascript">jwplayer.key = "N8zhkmYvvRwOhz4aTGkySoEri4x+9pQwR7GHIQ==";</script>-->
<!--                        <script type="text/javascript" src="https://content.jwplatform.com/libraries/BhGRfCt5.js"></script>-->
                        <input type="hidden" id="auto_next" value="1" />
                        <input type="hidden" id="curr_learn_id" value="<?php echo $curr_id; ?>" />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    

            var conf = {
                key: "62b92d64-43d0-46b3-990f-817b65d2c781",
                source: {
                    hls: 'https://edmcdn02.r.worldssl.net/kelley-565d7e38d8b731267c000035/20160827-vunb02/vunb02bai-06mp4kelley-565d7e38d8b731267c000035/20160827-vunb02/vunb02bai-06mp4_1080_.m3u8?t=1490183145'
                },
                playback: {
                    autoplay: true
                },
                events: {
                    onPlaybackFinished: function(){
                        playNextVideo();
                    }
                }
            };
            var player = bitmovin.player("player");
            player.setup(conf).then(function (value) {
                console.log("Successfully created bitmovin player instance");
            }, function (reason) {
                console.log("Error while creating bitmovin player instance");
            });
    
</script>