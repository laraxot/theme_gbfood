 $('[data-toggle="tooltip"]').tooltip();

 $(".bg-image").css("background",function(){
            var $w=$(this).width();
            var $h=$(this).height();
            var $w1=Math.ceil($w/240)*240;
            var $h1=Math.ceil($h/100)*100;
            //alert($w+'x'+$h+'  =  '+$w1+'x'+$h1);
            var $img_src=$(this).data("image-src");
            //var $img1_src=encodeURIComponent($img_src)
            var $img1_src=$img_src.split('/').join('|');
            var $conv_url=base_url+'/imgz/'+$w1+'x'+$h1+'/'+$img1_src;
            //alert($conv_url);
            //var a="url("+$conv_url+") no-repeat center center";
            var a="url("+$img_src+") no-repeat center center";
            return a
    });