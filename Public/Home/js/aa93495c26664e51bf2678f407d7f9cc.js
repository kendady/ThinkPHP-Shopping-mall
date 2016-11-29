
if (! ($.browser.msie && parseInt($.browser.version) <= 6) )  {
          $.ajax({
                url: '//static.360buyimg.com/yiqiguang/dist/v20150901-1/ued.guang.init-min.js',
                dataType: 'script', 
                scriptCharset: 'utf-8'
          });
}
window.GUANG_VERSION = 'v20150901-1';
window.GUANG_AUTO_START = window.GUANG_AUTO_START ? window.GUANG_AUTO_START : true;
window.GUANG_EXCLUDE_CATEGORY_ID = [];

 