/**
 * 公共js
 */

//跳转页面
function jump(url) {
	uni.navigateTo({
	    url: url
	})
}

//跳转tabber页面
function jumpTab(url) {
	uni.switchTab({
	    url: url
	});
}

export default {
	jump,
	jumpTab
}