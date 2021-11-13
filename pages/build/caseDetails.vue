<template>
	<!-- start 作品详情 -->
	<view class="u-p-t-20 page-general-padding">
		<view class="works-label">项目介绍：</view>
		<view class="works-label">项目名称：横长水平线+耸立廊柱，启迪端庄</view>
		<view class="works-label">项目地址：龙湖景程</view>
		<view class="works-label">建筑面积：实测118㎡</view>
		<view class="works-label">建筑类型：平层</view>
		<view class="works-label">设计风格：现代简约</view>
		<view class="works-label">设计单位：鬼斧设计机构</view>
		<view class="works-label">主创设计：下午的冰淇淋</view>
		<view class="works-label">效果制作：董文文</view>
		<view class="works-label">良工摄影：梁峰</view>
		<view class="works-label">主要设备：中央空调、净水</view>
		<view class="works-label">主要材料：有色墙漆、大理石，硬包，精钢收口线，低 压线灯，金逸陶瓷砖（岩板系列），浦镇定制，大然地</view>
	    <view class="works-label">竣工时间：2020年</view>
		<view class="works-label">设计关键词：社交空间、休闲冥想、独立与开放穿插、 智能家居、灰度空间</view>
	    <image class="show-pictures" src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
	</view>
	<!-- end 作品详情 -->
</template>

<script>
	export default {
		data() {
			return {
				id: null,
			}
		},
		onLoad(options) {
			if(options.id != null){
				this.id = id;
			}
			uni.setNavigationBarTitle({
				title: '横长水平线+耸立廊柱'
			})
		},
		methods: {
			
		}
	}
</script>

<style scoped lang="less">
	.works-label{
		font-size: 28rpx;
		font-weight: 400;
		color: #222222;
		line-height: 40rpx;
		margin-bottom: 30rpx;
	}
	
	.show-pictures{
		width: 100%;
	}
</style>
