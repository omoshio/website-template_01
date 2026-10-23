let slideWrapper = jQuery(".js-video-slider"),
    iframes = slideWrapper.find('.embed-player'),
    lazyImages = slideWrapper.find('.slide-image'),
    lazyCounter = 0;

// 再生／一時停止の指示をAPI経由でPOSTする関数（#Youtube埋め込み時のみ必要）
function postMessageToPlayer(player, command){
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// Currentのスライドのみ再生する関数
function playPauseVideo(slick, control){
  let currentSlide, slideType, startTime, player, video;

  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

     if (slideType === "youtube") {
       switch (control) {
        case "play":
            postMessageToPlayer(player, {
            "event": "command",
            "func": "mute"
            });
            postMessageToPlayer(player, {
            "event": "command",
            "func": "playVideo"
            });
            break;
        case "pause":
            postMessageToPlayer(player, {
            "event": "command",
            "func": "pauseVideo"
            });
            break;
        }
        } else if (slideType === "video") {
            video = currentSlide.children("video").get(0);
            if (video != null) {
            if (control === "play"){
            video.play();
            } else {
            video.pause();
            video.currentTime = 0;
            video.load();
            }
        }
    }
}

// スライダーの準備ができたら関数を実行する
jQuery(function() {
  // Initialize
  slideWrapper.on("init", function(slick){
    slick = jQuery(slick.currentTarget);
    setTimeout(function(){
      playPauseVideo(slick,"play");
    }, 1000);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = jQuery(slick.$slider);
    playPauseVideo(slick,"pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = jQuery(slick.$slider);
    playPauseVideo(slick,"play");
  });
  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
    lazyCounter++;
    if (lazyCounter === lazyImages.length){
      lazyImages.addClass('show');
    }
  });

  //slick
  slideWrapper.slick({
    autoplay:true,
    autoplaySpeed:4000,
    lazyLoad:"progressive",
    speed:600,
    arrows:false,
    dots:true,
    centerMode: true,
    centerPadding: '10%',
    isfinite: true, 
    cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
  });
});

jQuery(function(){
    // playボタンを押した時
    var play = document.getElementById('play');
    play.addEventListener('click', function () {
        video.play();
    });
    
    // stopボタンを押した時
    var stop = document.getElementById('stop');
    stop.addEventListener('click', function () {
        video.pause();
        video.currentTime = 0;
    });
});