<template>
	<!-- start 施工 -->
	<view>
		<u-swiper :list="bannerList" height="360"></u-swiper>
		<!-- start 施工内容 -->
		<view class="page-general-padding">
			<!-- start 优秀工长 -->
			<goodMaster></goodMaster>
			<!-- end 优秀工长 -->
			<!-- start 案例展示 -->
			<caseShow></caseShow>
			<!-- end 案例展示 -->	
		</view>
		<!-- end 施工内容 -->
	</view>
	<!-- end 施工 -->
</template>

<script>
	import goodMaster from './components/goodMaster.vue'
	import caseShow from './components/caseShow.vue'
	export default {
		components: {
			goodMaster,
			caseShow
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

</style>
