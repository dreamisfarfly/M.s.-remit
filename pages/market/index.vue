<template>
	<!-- start 商城 -->
	<view class="market">
		<u-swiper :list="bannerList" height="360"></u-swiper>
		<!-- start 商城内容 -->
		<view class="build-content">
			<!-- start 热门推荐 -->
			<hot></hot>
			<!-- end 热门推荐 -->
			<!-- start 近期团购 -->
			<recentDeals></recentDeals>
			<!-- end 近期团购 -->
			<optionsClassify type="goods"></optionsClassify>
		</view>
		<!-- end 商城内容 -->
	</view>
	<!-- end 商城 -->
</template>

<script>
	import hot from './components/hot.vue'
	import recentDeals from './components/recentDeals.vue'
	import groupPurchaseCard from './components/groupPurchaseCard.vue'
	export default {
		components: {
			hot,
			recentDeals,
			groupPurchaseCard
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
				],
			}
		},
		methods: {
		
		}
	}
</script>

<style scoped lang="less">
	
</style>
