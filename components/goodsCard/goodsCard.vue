<template>
	<!-- start 商品卡片 -->
	<view class="goods-card" @tap="util.jump('/pages/market/commodityDetails')">
		<image class="goods-card-img" :src="img"></image>
		<view class="goods-card-content">
			<view class="goods-title">
				大雁展翅般优美的曲线 给客厅一抹动人的微笑
			</view>
			<view class="goods-price">¥299.00/片</view>
		</view>
	</view>
	<!-- end 商品卡片 -->
</template>

<script>
	export default {
		name:"goodsCard",
		data() {
			return {
				img: 'https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg17.3lian.com%2Fd%2Ffile%2F201701%2F09%2Fd98ad358f746d8936c7e24dad895f52b.jpg&refer=http%3A%2F%2Fimg17.3lian.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639117795&t=ecdb715b00c69743058a365e57947124'
			};
		}
	}
</script>

<style scoped lang="less">
	.goods-card{
		font-family: PingFangSC-Medium, PingFang SC;
		width: 334rpx;
		margin-bottom: 20rpx;
		.goods-card-img{
			width: 100%;
			height: 250rpx;
			border-radius: 10rpx 10rpx 0 0;
		}
		.goods-card-content{
			padding: 0 16rpx;
			background-color: #FFFFFF;
			border-radius: 0 0 10rpx 10rpx;
			line-height: 40rpx;
			.goods-title{
				margin-top: 20rpx;
				font-size: 28rpx;
				font-weight: 550;
				color: #1A1A1A;			
			}
			.goods-price{
				padding: 16rpx 0 28rpx 0;
				font-size: 28rpx;
				font-weight: 500;
				color: #ED3632;
			}
		}
	}
</style>
