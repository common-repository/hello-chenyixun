<?php
/**
 * @package Hello_ChenYixun
 * @version 1.0.1
 */
/*
Plugin Name: 你好陈奕迅
Plugin URI: http://xiaohudie.net/project.html
Description: 纯属娱乐。启用后，在后台正上方随机显示一句陈奕迅的歌词。
Author: 小蝴蝶
Version: 1.0.1
Author URI: http://xiaohudie.net/
*/

function hello_ChenYixun_get_lyric() {
$lyrics = "你好, 陈奕迅
谁能凭爱意要富士山私有
但我拖着躯壳,发现沿途寻找的快乐,仍系于你肩膊 
我说了所有的谎,你全都相信。简单的我爱你,你却老不信。
得不到的永远在骚动，被偏爱的都有恃无恐
我也曾像这样,青春大概相似
借了东西为什么不还
吃好些我想应该会好一点,睡好些我想应该会好一点
若无其事   原来是最狠的报复 
何不把悲哀感觉,假设是来自你虚构
如何想你想到六点,如何爱你爱到终点 
遇到你,竟花光所有运气
即使再见面 成熟地表演,不如不见
有一种预感 爱就要离岸
一个人失眠,全世界失眠
天佑我的爱人
原来这里没有你
残忍的是人会成长
来年陌生的 是昨日最亲的某某
我终于相信有些人我永远不必等
除非你是我,才可与我常在
寻得到尘封小店 回不到相恋那天
愿意 在角落唱沙哑的歌 再大声也都是给你
用了很久很久等一个自己给的浮夸 
爱若难以放进手里, 何不把这双手放进心里
爱爱爱爱到要吐
对你还有无可救药的期盼
我该走了,你的手呢
我干杯,你随意";


	$lyrics = explode( "\n", $lyrics );
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}
function hello_ChenYixun() {
	$chosen = hello_ChenYixun_get_lyric();
	echo "<p id='ChenYixun'>$chosen</p>";
}
add_action( 'admin_notices', 'hello_ChenYixun' );

// css
function ChenYixun_css() {
	echo "
	<style type='text/css'>
	#ChenYixun {
		text-align: center;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'ChenYixun_css' );

?>
