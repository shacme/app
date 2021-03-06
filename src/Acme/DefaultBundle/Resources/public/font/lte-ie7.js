/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'rabs\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#xe000;',
			'icon-books' : '&#xe00b;',
			'icon-move' : '&#xf047;',
			'icon-shopping-cart' : '&#xf07a;',
			'icon-folder-close' : '&#xf07b;',
			'icon-folder-open' : '&#xf07c;',
			'icon-twitter' : '&#xf099;',
			'icon-facebook' : '&#xf09a;',
			'icon-credit' : '&#xf09d;',
			'icon-rss' : '&#xf09e;',
			'icon-group' : '&#xf0c0;',
			'icon-tasks' : '&#xf0ae;',
			'icon-wrench' : '&#xf0ad;',
			'icon-globe' : '&#xf0ac;',
			'icon-link' : '&#xf0c1;',
			'icon-magic' : '&#xf0d0;',
			'icon-envelope-alt' : '&#xf0e0;',
			'icon-sitemap' : '&#xf0e8;',
			'icon-lightbulb' : '&#xf0eb;',
			'icon-smile' : '&#xf118;',
			'icon-frown' : '&#xf119;',
			'icon-keyboard' : '&#xf11c;',
			'icon-code' : '&#xf121;',
			'icon-terminal' : '&#xf120;',
			'icon-unlink' : '&#xf127;',
			'icon-question' : '&#xf128;',
			'icon-info' : '&#xf129;',
			'icon-exclamation' : '&#xf12a;',
			'icon-puzzle' : '&#xf12e;',
			'icon-html5' : '&#xf13b;',
			'icon-css3' : '&#xf13c;',
			'icon-rupee' : '&#xf156;',
			'icon-youtube' : '&#xf167;',
			'icon-dropbox' : '&#xf16b;',
			'icon-dribbble' : '&#xf17d;',
			'icon-skype' : '&#xf17e;',
			'icon-plus' : '&#xf067;',
			'icon-minus' : '&#xf068;',
			'icon-chevron-up' : '&#xf077;',
			'icon-chevron-down' : '&#xf078;',
			'icon-ban-circle' : '&#xf05e;',
			'icon-pinterest' : '&#xf0d2;',
			'icon-github-alt' : '&#xf113;',
			'icon-bullhorn' : '&#xf0a1;',
			'icon-dollar' : '&#xf155;',
			'icon-play' : '&#xe02a;',
			'icon-google' : '&#xe02b;',
			'icon-checkbox-checked' : '&#xe02e;',
			'icon-checkbox-unchecked' : '&#xe02f;',
			'icon-checkbox-partial' : '&#xe030;',
			'icon-radio-checked' : '&#xe031;',
			'icon-radio-unchecked' : '&#xe032;',
			'icon-info-2' : '&#xe033;',
			'icon-notification' : '&#xe034;',
			'icon-question-2' : '&#xe035;',
			'icon-warning' : '&#xe036;',
			'icon-spinner' : '&#xe038;',
			'icon-reorder' : '&#xf0c9;',
			'icon-chat' : '&#xe03a;',
			'icon-info-3' : '&#xe03b;',
			'icon-photoshop' : '&#xe03c;',
			'icon-illustrator' : '&#xe03d;',
			'icon-cloud' : '&#xf0c2;',
			'icon-angle-left' : '&#xf104;',
			'icon-angle-right' : '&#xf105;',
			'icon-money' : '&#xf0d6;',
			'icon-bug' : '&#xe025;',
			'icon-book' : '&#xe00a;',
			'icon-calendar' : '&#xe037;',
			'icon-ruler' : '&#xe001;',
			'icon-clipboard' : '&#xe197;',
			'icon-usb' : '&#xe196;',
			'icon-zip' : '&#xe18e;',
			'icon-zip-2' : '&#xe18d;',
			'icon-eyedropper' : '&#xe187;',
			'icon-alert' : '&#xe184;',
			'icon-minus-2' : '&#xe183;',
			'icon-add' : '&#xe182;',
			'icon-error' : '&#xe181;',
			'icon-checked' : '&#xe180;',
			'icon-printer' : '&#xe17f;',
			'icon-ticket' : '&#xe177;',
			'icon-pop-in' : '&#xe171;',
			'icon-pop-out' : '&#xe170;',
			'icon-expand' : '&#xe16e;',
			'icon-paper-plane' : '&#xe168;',
			'icon-info-4' : '&#xe159;',
			'icon-info-5' : '&#xe158;',
			'icon-heart' : '&#xe157;',
			'icon-female' : '&#xe155;',
			'icon-male' : '&#xe154;',
			'icon-envelope' : '&#xe14f;',
			'icon-profile' : '&#xe13a;',
			'icon-edit' : '&#xe136;',
			'icon-pin' : '&#xe134;',
			'icon-pin-2' : '&#xe133;',
			'icon-pen' : '&#xe132;',
			'icon-attachment' : '&#xe12e;',
			'icon-stats' : '&#xe12d;',
			'icon-stats-2' : '&#xe12c;',
			'icon-download' : '&#xe127;',
			'icon-resize' : '&#xe126;',
			'icon-equalizer' : '&#xe121;',
			'icon-chat-2' : '&#xe11d;',
			'icon-chat-3' : '&#xe11c;',
			'icon-comments' : '&#xe11b;',
			'icon-chat-4' : '&#xe11a;',
			'icon-hammer' : '&#xe117;',
			'icon-paint' : '&#xe116;',
			'icon-screwdriver' : '&#xe115;',
			'icon-tools' : '&#xe114;',
			'icon-layout' : '&#xe113;',
			'icon-layout-2' : '&#xe112;',
			'icon-layout-3' : '&#xe111;',
			'icon-layout-4' : '&#xe110;',
			'icon-layout-5' : '&#xe10f;',
			'icon-layout-6' : '&#xe10e;',
			'icon-layout-7' : '&#xe10d;',
			'icon-layout-8' : '&#xe10c;',
			'icon-layout-9' : '&#xe10b;',
			'icon-layout-10' : '&#xe10a;',
			'icon-layout-11' : '&#xe109;',
			'icon-layout-12' : '&#xe108;',
			'icon-layout-13' : '&#xe107;',
			'icon-layout-14' : '&#xe106;',
			'icon-grid' : '&#xe101;',
			'icon-grid-2' : '&#xe100;',
			'icon-box' : '&#xe0fc;',
			'icon-box-2' : '&#xe0fb;',
			'icon-cube' : '&#xe0fa;',
			'icon-lamp' : '&#xe0f7;',
			'icon-archive' : '&#xe002;',
			'icon-street-light' : '&#xe003;',
			'icon-stack' : '&#xe004;',
			'icon-stack-2' : '&#xe005;',
			'icon-stack-3' : '&#xe006;',
			'icon-zoom-out' : '&#xe007;',
			'icon-zoom-in' : '&#xe008;',
			'icon-magnifier' : '&#xe009;',
			'icon-unlocked' : '&#xe00c;',
			'icon-locked' : '&#xe00d;',
			'icon-cord' : '&#xe00e;',
			'icon-key' : '&#xe00f;',
			'icon-medal' : '&#xe011;',
			'icon-medal-2' : '&#xe012;',
			'icon-mute' : '&#xe013;',
			'icon-sad' : '&#xe014;',
			'icon-smiley' : '&#xe015;',
			'icon-mouse' : '&#xe016;',
			'icon-tie' : '&#xe019;',
			'icon-graduate' : '&#xe01a;',
			'icon-trashcan' : '&#xe01b;',
			'icon-download-2' : '&#xe01f;',
			'icon-chart' : '&#xe020;',
			'icon-chart-2' : '&#xe021;',
			'icon-upload' : '&#xe022;',
			'icon-cloud-2' : '&#xe023;',
			'icon-cancel' : '&#xe024;',
			'icon-checkmark' : '&#xe026;',
			'icon-wallet' : '&#xe027;',
			'icon-headphones' : '&#xe028;',
			'icon-time' : '&#xe029;',
			'icon-pictures' : '&#xe02c;',
			'icon-pictures-2' : '&#xe02d;',
			'icon-picture' : '&#xe039;',
			'icon-suitcase' : '&#xe03e;',
			'icon-notice' : '&#xe040;',
			'icon-notice-2' : '&#xe041;',
			'icon-minus-3' : '&#xe042;',
			'icon-minus-4' : '&#xe043;',
			'icon-plus-2' : '&#xe044;',
			'icon-plus-3' : '&#xe045;',
			'icon-cancel-2' : '&#xe046;',
			'icon-cancel-3' : '&#xe047;',
			'icon-checkmark-2' : '&#xe048;',
			'icon-checkmark-3' : '&#xe049;',
			'icon-coffee' : '&#xe04a;',
			'icon-tv' : '&#xe066;',
			'icon-ipod' : '&#xe065;',
			'icon-monitor' : '&#xe064;',
			'icon-window' : '&#xe063;',
			'icon-tablet' : '&#xe04b;',
			'icon-phone' : '&#xe04c;',
			'icon-file' : '&#xe05e;',
			'icon-file-2' : '&#xe05d;',
			'icon-calendar-2' : '&#xe05c;',
			'icon-calendar-3' : '&#xe05b;',
			'icon-calendar-4' : '&#xe05a;',
			'icon-cabinet' : '&#xe059;',
			'icon-cabinet-2' : '&#xe04d;',
			'icon-link-2' : '&#xe04e;',
			'icon-tag' : '&#xe054;',
			'icon-quote' : '&#xe053;',
			'icon-quote-2' : '&#xe052;',
			'icon-number' : '&#xe051;',
			'icon-number-2' : '&#xe050;',
			'icon-number-3' : '&#xe04f;',
			'icon-number-4' : '&#xe055;',
			'icon-number-5' : '&#xe056;',
			'icon-number-6' : '&#xe057;',
			'icon-number-7' : '&#xe058;',
			'icon-number-8' : '&#xe05f;',
			'icon-number-9' : '&#xe060;',
			'icon-number-10' : '&#xe061;',
			'icon-number-11' : '&#xe062;',
			'icon-number-12' : '&#xe067;',
			'icon-number-13' : '&#xe068;',
			'icon-number-14' : '&#xe069;',
			'icon-number-15' : '&#xe06a;',
			'icon-number-16' : '&#xe06b;',
			'icon-number-17' : '&#xe06c;',
			'icon-number-18' : '&#xe06d;',
			'icon-number-19' : '&#xe06e;',
			'icon-number-20' : '&#xe06f;',
			'icon-user' : '&#xe070;',
			'icon-file-3' : '&#xe071;',
			'icon-files' : '&#xe072;',
			'icon-camera' : '&#xe073;',
			'icon-camera-2' : '&#xe074;',
			'icon-radio' : '&#xe03f;',
			'icon-open' : '&#xe01d;',
			'icon-sale' : '&#xe01c;',
			'icon-rotate' : '&#xe010;',
			'icon-rotate-2' : '&#xe017;',
			'icon-reply' : '&#xe018;',
			'icon-forward' : '&#xe01e;',
			'icon-envelope-2' : '&#xe075;',
			'icon-profile-2' : '&#xe076;',
			'icon-book-2' : '&#xe16a;',
			'icon-badge' : '&#xe077;',
			'icon-stop' : '&#xe078;',
			'icon-blocked' : '&#xe079;',
			'icon-heart-2' : '&#xe07a;',
			'icon-heart-3' : '&#xe07b;',
			'icon-star' : '&#xf005;',
			'icon-star-empty' : '&#xf006;',
			'icon-user-2' : '&#xf007;',
			'icon-switch' : '&#xe07c;',
			'icon-cog' : '&#xe07d;',
			'icon-eye' : '&#xe07e;',
			'icon-vote' : '&#xe07f;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};