
/* 開始時間が変更されたら */
function autoPlus(s) {
	document.iptfrm.time_end.selectedIndex = s.selectedIndex;
}
/* キー無しの削除確認 */
function dltChk() {
	var flag = confirm ( "削除します。よろしいですか？");
	return flag; /* flag が TRUEなら送信、FALSEなら送信しない */
}

$(function(){
    $('.dropdown li').hover(function(){
        $("ul:not(:animated)", this).slideDown();
    }, function(){
        $("ul.dropdown-menu",this).slideUp();
    });
});