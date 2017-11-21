$(document).ready(function(){

  var saveStorage = function(key,val){
    localStorage.setItem(key, JSON.stringify(val));
  };

  var getStorage = function(key){
    var obj = localStorage.getItem(key);
    return JSON.parse(obj);
  };

  var add = function(){
    var ttl = $(".tweetForm #title").val();
        bdy = $(".tweetForm #body").val();
    addtweet(ttl,bdy);
    savetweet(ttl,bdy);
  };

  var addtweet = function(ttl,bdy){
        var template =
                    '<input type="text" id="title" class="form-control" readonly="readonly" value="%s"/>' +
          '<textarea class="form-control" rows="3" id="body" readonly="readonly">%s</textarea>';
                    template = template.replace('%s',ttl).replace('%s',bdy);


    $("#tweetArea").append(template);

    $(".tweetForm #title").val('');
    $(".tweetForm #body").val('');
  }

  tweetArr = [];
  var storageKey = 'tweetObj';

  var savetweet = function(ttl,bdy){
    var tweetObj = {
      ttl : ttl,
      bdy : bdy
    };
    tweetArr.push(tweetObj);
    saveStorage(storageKey,tweetArr);
  }

  var resettweet = function(){
    $("#tweetArea").children().remove();
    window.localStorage.clear();
  }

  var readtweet = function(){
    var tweetObjs = getStorage(storageKey);
    if (tweetObjs == null) return;
    for (var i = 0; i < tweetObjs.length; i ++) {
      var tweetObj = tweetObjs[i];
      var ttl = tweetObj.ttl;
      var bdy = tweetObj.bdy;
      var tweetObj = {
        ttl : ttl,
        bdy : bdy
      };
    tweetArr.push(tweetObj);
    saveStorage(storageKey,tweetArr);
      addtweet(ttl,bdy);
    }
  };

  //ページ読込み時にメモ復帰
  readtweet();

  //イベントハンドル
  $("#btnTweet").on('click',function(){
    add();
  });
  $("#btnReset").on('click',function(){
    resettweet();
  });

});
