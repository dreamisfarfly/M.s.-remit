<script>
	export default {
		onLaunch: function() {
			console.log('App Launch')
		},
		onShow: function() {
			console.log('App Show')
		},
		onHide: function() {
			console.log('App Hide')
		}
	}
</script>

<style lang="scss">
	@import "/uview-ui/index.scss"
	@import "@/lib/css/common.css"
	/*每个页面公共css */
	page{
		background: #F9FAF9;
		font-family: PingFangSC-Medium, PingFang SC;
	}	
</style>
