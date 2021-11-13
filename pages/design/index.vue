<template>
	<!-- start 品装汇-设计 -->
	<view class="design-view">
		<u-swiper :list="bannerList" height="360"></u-swiper>
		<!-- start 设计内容 -->
		<view class="build-content content-top">
			<!-- start 优秀设计师 -->
			<excellentDesigner></excellentDesigner>
			<!-- end 优秀设计师 -->
			<!-- start 设计作品展示 -->
			<optionsClassify type="design"></optionsClassify>
			<!-- end 设计作品展示 -->
		</view>	
		<!-- end 设计内容 -->
	</view>
	<!-- end 品装汇-设计 -->
</template>

<script>
	import excellentDesigner from './components/excellentDesigner.vue'
	export default {
		components:{
			excellentDesigner
		},
		data() {
			return {
				bannerList: [{
						image: 'https://cdn.uviewui.com/uview/swiper/1.jpg',
						title: '昨夜星辰昨夜风，画楼西畔桂堂东'
					},
					{
						image: 'https://cdn.uviewui.com/uview/swiper/2.jpg',
						title: '身无彩凤双飞翼，心有灵犀一点通'
					},
					{
						image: 'https://cdn.uviewui.com/uview/swiper/3.jpg',
						title: '谁念西风独自凉，萧萧黄叶闭疏窗，沉思往事立残阳'
					}
				]
			}
		},
		methods: {
			
		}
	}
</script>

<style scoped lang="less">
	.content-top{
		margin-top: 8rpx;
	}
</style>
