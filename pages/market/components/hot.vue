<template>
	<view class="hot">
		<cardHeader title="热门推荐"></cardHeader>
		<view class="recommend-menu">
			<image 
			class="big-img-view" 
			:src="t1"></image>
			<view class="thumbnail-view">
				<image 
				class="little-img" 
				:src="t2"></image>
				<image
				class="little-img mar-top" 
				:src="t2"></image>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		name: "hot",
		data() {
			return {
                t1: 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fpic53.nipic.com%2Ffile%2F20141112%2F19291311_223422348000_2.jpg&refer=http%3A%2F%2Fpic53.nipic.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639045089&t=0a90b75794739c5307233c2462b3ec59',
			    t2: 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fpic65.nipic.com%2Ffile%2F20150421%2F7487939_215847800000_2.jpg&refer=http%3A%2F%2Fpic65.nipic.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639045354&t=496926341cc294ddc832b70509ba913d',
			};
		},
		methods:{
			
		}
	}
</script>

<style scoped lang="less">
	.recommend-menu{
		height: 160rpx;
		display: inline-flex;
		.big-img-view{
			width: 374rpx;
			height: 320rpx;
			flex-shrink: 0;
			border-radius: 10rpx;
		}
		.thumbnail-view{
			margin-left: 20rpx;
			width: 296rpx;
			flex-flow: column;
			display: flex;
			.little-img{
				width: 100%;
				flex-shrink: 0;
				height: 150rpx;
				border-radius: 10rpx;
			}
		}
		.mar-top{
			margin-top:20rpx;
		}
	}
</style>
